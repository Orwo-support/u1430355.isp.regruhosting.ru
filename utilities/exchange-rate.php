<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

  define("VALUT_USD_ID", "R01235");
  define("IS_DEBUG", false);
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
    
    if (IS_DEBUG) {
      echo 'Текущий курс USD в БД:';
      debug($ARR_CURRENT_EXCHANGE_RATE);
    }
    
    // Что бы не делать лишних запросов к серверу ЦБР, 
    // заправшиваем даанные только с 7.00 утра до 19.00 вечера по МСК
    if (intval(date('H')) >= 7 and intval(date('H')) <= 19) {
      
      if (IS_DEBUG) {
        echo '<br>';
        echo 'Делаем запросы данных между 7.00 утра и 19.00 вечера.';
        echo '<br>';
        echo 'Текущее время: '. date('d.m.Y - h:i:s');
        echo '<br>';
        echo 'Определяем есть ли обновлённый курс и если есть, то обновляем ...';
      }
      
      // Дата последнего обновления курса в БД
      $dateDBUpdate = date('d.m.Y', strtotime($ARR_CURRENT_EXCHANGE_RATE['dateEntryCreate']));
      // Текущая дата
      $currentDate = date('d.m.Y');
      // Текущая дата плюс один день
      $currentDatePusOneDay = date('d.m.Y', strtotime($currentDate . '+ 1 days'));
      
      if (IS_DEBUG) {
        echo '<br><br>';
        echo 'Дата последнего обновления курса в БД: ' . $dateDBUpdate;
        echo '<br>';
        echo 'Текущая дата: ' . $currentDate;
        echo '<br>';
        echo 'Текущая дата плюс один день: ' . $currentDatePusOneDay;
      }
      
      /*
       * Если дата обновления курса в БД не равна текущей 
       * дате (т.е. сегодня курс ещё не обновляли),
       * делаем запрос курса на сайт ЦБР
       *
       */
      if (strtotime($dateDBUpdate) != strtotime($currentDate))  {
        
        if (IS_DEBUG) {
          echo '<br><br>';
          echo 'Текущая дата и дата когда был добавлен последний (актуальный) курс в БД не равны.';
          echo '<br>';
          echo 'Выполняем запрос данных на сервер ЦБР ...';
        } 

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
        
        if (IS_DEBUG) {
          echo '<br><br>';
          echo 'Данные полченные с сервера ЦБР:';
          echo '<pre>';
          echo 'Рынок: ' . $market . '<br>';
          echo 'Дата обновления курса: ' . $dateUpdate . '<br>';
          echo 'Идентификатор валюты: ' . $valuteId . '<br>';
          echo 'Цифровой код валюты: ' . $numCode . '<br>';
          echo 'Символьный код валюты: ' . $charCode . '<br>';
          echo 'Номинал: ' . $nominal . '<br>';
          echo 'Наименование: ' . $name . '<br>';
          echo 'Значение: ' . $value . '<br>';
          echo 'JSON XML ответа ЦБР: ' . $JsonXmlRequest;
          echo '</pre>';
        }    
        
        
        /*
         * Если дата обновления курса из запроса к ЦБР
         * равна текущей + 1 день (т.е. это курс за сегодня и на завтрашний день),
         * добавляем новый курс в БД
         * 
         * !Курс публикуется на слудующую дата и в ответе сервера 
         * ЦБР всегда стоит дата публикации курса + 1 день.
         * 
         */
        if (strtotime($dateUpdate) == strtotime($currentDatePusOneDay)) {
          
          if (IS_DEBUG) {
            echo '<br>';
            echo 'Так как дата курса, полученного с сайта ЦБР, РАВНА текущей + 1 день, т.е. появился новый/актуальный курс, добавляем его в БД';
            echo '<br>';
            echo 'Добавление нового курса USD в БД ...';
          }
          
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
            if (IS_DEBUG) {
              echo '<br><br>';
              echo 'Новый курс был удачно добавлен в БД';
              echo '<br>';
              echo 'ИД курса USD, добавленного в БД: ' . $ID;
            }
          } else {
            if (IS_DEBUG) {
              echo '<br>';
              echo 'Ошибка обновлённого курса USD в БД.';
              
              $to = 'anar.n.agaev@gmail.com';
              $subject = 'Error of adding current USD exchange rate to DB';
              $message = 'Error of adding current USD exchange rate to DB on ekranika.ru web site!';
              $headers = 'From: ekrfnika@ekranika' . "\r\n" . 'Reply-To: info@ekranika' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

              mail($to, $subject, $message, $headers);
            }
          }
        } else {
            if (IS_DEBUG) {
              echo '<br>';
              echo 'Так как дата курса, полученного с сайта ЦБР, НЕ РАВНА текущей + 1 день, т.е. полученный курс USD за вчера/не актуальный';
              echo '<br>';
              echo 'НЕ ДОБАВЛЯЕМ полученный курс USD в БД';
            }
        }
      } else {
        if (IS_DEBUG) {
          echo '<br><br>';
          echo 'Текущая дата и дата когда был добавлен последний (актуальный) курс в БД равны, т.е. в БД хранится актуальный курс USD.';
          echo '<br>';
          echo 'НЕ ЗАПРАШИВАЕМ данных с сервера ЦБР!';
        }
      }
    }
  }