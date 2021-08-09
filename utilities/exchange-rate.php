<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

  define("VALUT_USD_ID", "R01235");
  $ARR_CURRENT_EXCHANGE_RATE = Array();

  function filterValutes ($arrSingleValut) {
    return $arrSingleValut["@attributes"]["ID"] == VALUT_USD_ID;
  }


  // Получаем последний курс доллара из БД
  if (CModule::IncludeModule("iblock")) {
    
    $exchangeRates = CIBlockElement::GetList(
        Array("ID" => "DESC"),
        array('IBLOCK_ID' => 72, 'ACTIVE' => 'Y'),
        false,
        array('nTopCount' => 1),
        array('ID', 'IBLOCK_ID', 'DATE_CREATE', 'PROPERTY_*')
    );

    while ($ob = $exchangeRates->GetNextElement()) {
        $arFields = $ob->GetFields();
        //debug($arFields);
        $arProps = $ob->GetProperties();
        //debug($arProps);

        $ARR_CURRENT_EXCHANGE_RATE = [
          'dbEntryId' => $arFields['ID'],
          'dateEntryCreate' => $arFields['DATE_CREATE'],
          'market' => $arProps['MARKET']['VALUE'],
          'dateUpdate' => $arProps['DATE_UPDATE']['VALUE'],
          'valuteId' => $arProps['VALUTE_ID']['VALUE'],
          'numCode' => $arProps['NUM_CODE']['VALUE'],
          'charCode' => $arProps['CHAR_CODE']['VALUE'],
          'nominal' => $arProps['NOMINAL']['VALUE'],
          'name' => $arProps['NAME']['VALUE'],
          'value' => $arProps['VALUE']['VALUE'],
          'JsonXmlRequest' => $arProps['JSON_XML_REQUEST']['VALUE'],
        ];
    }
  }


  // Если пришла переменна $_GET['get'] значит нужно просто отдать тукущий курс
  if (isset($_GET['get']) and $_GET['get'] == 'true') {
      
    $JsonUsdExchangeRate = defined('JSON_UNESCAPED_UNICODE')
    ? json_encode($ARR_CURRENT_EXCHANGE_RATE, JSON_UNESCAPED_UNICODE)
    : json_encode($ARR_CURRENT_EXCHANGE_RATE);
    
    echo $JsonUsdExchangeRate;
    
  } else {
    
    // Что бы не делать лишних запросов к серверу ЦБР, 
    // заправшиваем даанные только с 7.00 утра до 19.00 вечера по МСК
    if (intval(date('H')) >= 7 and intval(date('H')) <= 19) {
      
      // Дата последнего обновления курса в БД
      $dateDBUpdate = date('d.m.Y', strtotime($ARR_CURRENT_EXCHANGE_RATE['dateEntryCreate']));
      
      // Текущая дата
      $currentDate = date('d.m.Y');

      // Если дата обновления курса в БД не равна текущей 
      // дате (т.е. сегодня курс ещё не обновляли),
      // делаем запрос курса на сайт ЦБР
      if (strtotime($dateDBUpdate) != strtotime($currentDate))  {
        
        $file       = file_get_contents("https://www.cbr.ru/scripts/XML_daily.asp");
        $xml        = simplexml_load_string($file);
        $arr        = json_decode(json_encode($xml), true);
        $arrUsd     = array_values(array_filter($arr["Valute"], "filterValutes"))["0"];

        $market     = $arr["@attributes"]["name"];
        $dateUpdate = $arr["@attributes"]["Date"];

        $valuteId   = $arrUsd["@attributes"]["ID"];
        $numCode    = $arrUsd["NumCode"];
        $charCode   = $arrUsd["CharCode"];
        $nominal    = $arrUsd["Nominal"];
        $name       = $arrUsd["Name"];
        $value      = $arrUsd["Value"];
        
        //print '<pre>';
        //print 'Рынок: ' . $market . '<br>';
        //print 'Дата обновления курса: ' . $dateUpdate . '<br>';
        //print 'Идентификатор валюты: ' . $valuteId . '<br>';
        //print 'Цифровой код валюты: ' . $numCode . '<br>';
        //print 'Символьный код валюты: ' . $charCode . '<br>';
        //print 'Номинал: ' . $nominal . '<br>';
        //print 'Наименование: ' . $name . '<br>';
        //print 'Значение: ' . $value . '<br>';
        //print 'JSON XML ответа ЦБР: ' . $JsonXmlRequest;
        
          
        // Если дата обновления курса из запроса к ЦБР
        // равна текущей (т.е. это курс за сегодня)
        // добавляем новый курс в БД
        if (strtotime($dateUpdate) == strtotime($currentDate)) {
          
          CModule::IncludeModule('iblock');
          
          $el = new CIBlockElement; // создаём свой класс
          $iblock_id = 72; // ID инфоблока в который добавляем новый элемент
          
          
          // Имена свойств в массиве $PROPS должны соответствовать
          // свойствами инфоблока в который будет добавлен новый элемент
          $PROPS['MARKET'] = $market;
          $PROPS['DATE_UPDATE'] = $dateUpdate;
          $PROPS['VALUTE_ID'] = $valuteId;
          $PROPS['NUM_CODE'] = $numCode;
          $PROPS['CHAR_CODE'] = $charCode;
          $PROPS['NOMINAL'] = $nominal;
          $PROPS['NAME'] = $name;
          $PROPS['VALUE'] = $value;
          $PROPS['JSON_XML_REQUEST'] = defined('JSON_UNESCAPED_UNICODE')
            ? json_encode($arr, JSON_UNESCAPED_UNICODE)
            : json_encode($arr);     

          
          // Основные поля добавлямого в инфоблок элемента
          $fields = array(
              "DATE_CREATE" => date("d.m.Y H:i:s"), // Передаем дату создания
              "CREATED_BY" => $GLOBALS['USER']->GetID(), // Передаем ID пользователя добавившего сообщение
              "IBLOCK_SECTION_ID" => false, // ID разделов. В нашем случае false, т.к. нет подразделов
              "IBLOCK_ID" => $iblock_id, // ID информационного блока он 72-ый в нашем случае
              "PROPERTY_VALUES" => $PROPS, // Передаем массив значении для свойств
              "NAME" => "Ekranika", // Не может быть пустой строкой
              "ACTIVE" => "Y", // поумолчанию делаем активным или ставим N для отключении поумолчанию
              "PREVIEW_TEXT" => "", // текс для анонса
              "PREVIEW_PICTURE" => "", // изображение для анонса
              "DETAIL_TEXT"    => "", // текст для детальной страницы
              "DETAIL_PICTURE" => "" // изображение для детальной страницы
          );
          
          
          if ($ID = $el->Add($fields)) {
              // echo $ID;
          } else {
              // В случае ошибки добавления нового курса доллара в БД, 
              // можно отправлять письмо на почту модератеру.
          }
        }
      }
    }
  }