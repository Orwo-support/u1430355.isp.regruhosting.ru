<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
CModule::IncludeModule('iblock');

if (isset($_POST['score']) and $_POST['score'] != '') {
    $el = new CIBlockElement; // создаём свой класс
    $iblock_id = 12; // ID инфоблока в который добавляем новый элемент

// Массив для свойств, полученных из формы запроса
    $PROP = array();

// Имена свойств в массиве $PROP должны соответствовать
// свойствам инфоблока в который будет добавлен новый элемент
    $PROP['CALLBACK_PHONE'] = htmlspecialchars(strip_tags(trim($_POST['phone'])));
    $PROP['CALLBACK_PAGE'] = htmlspecialchars(strip_tags(trim($_POST['page'])));
    $PROP['CALLBACK_PAGE_LINK'] = htmlspecialchars(strip_tags(trim($_POST['link'])));
    $PROP['CALLBACK_USER_IP'] = htmlspecialchars(strip_tags(trim($_POST['ip'])));
    $PROP['CALLBACK_RECAPTCHA_SCORE'] = htmlspecialchars(strip_tags(trim($_POST['score'])));

    if (get_magic_quotes_gpc()) {
        $PROP['CALLBACK_PHONE'] = stripcslashes($PROP['CALLBACK_PHONE']);
        $PROP['CALLBACK_PAGE'] = stripcslashes($PROP['CALLBACK_PAGE']);
        $PROP['CALLBACK_PAGE_LINK'] = stripcslashes($PROP['CALLBACK_PAGE_LINK']);
        $PROP['CALLBACK_USER_IP'] = stripcslashes($PROP['CALLBACK_USER_IP']);
        $PROP['CALLBACK_RECAPTCHA_SCORE'] = stripcslashes($PROP['CALLBACK_RECAPTCHA_SCORE']);
    }

// Основные поля добавлямого в инфоблок элемента
    $fields = array(
        "DATE_CREATE" => date("d.m.Y H:i:s"), // Передаем дату создания
        "CREATED_BY" => $GLOBALS['USER']->GetID(), // Передаем ID пользователя добавившего сообщение
        "IBLOCK_SECTION_ID" => false, // ID разделов. В нашем случае false, т.к. нет подразделов
        "IBLOCK_ID" => $iblock_id, // ID информационного блока он 12-ый в нашем случае
        "PROPERTY_VALUES" => $PROP, // Передаем массив значении для свойств
        "NAME" => "Ekranika", // Не может быть пустой строкой
        "ACTIVE" => "Y", // поумолчанию делаем активным или ставим N для отключении поумолчанию
        "PREVIEW_TEXT" => "", // текс для анонса
        "PREVIEW_PICTURE" => "", // изображение для анонса
        "DETAIL_TEXT"    => "", // текст для детальной страницы
        "DETAIL_PICTURE" => "" // изображение для детальной страницы
    );

    $arResponse['DATA'] = $_POST;

    if ($ID = $el->Add($fields)) {
        $arResponse['IS_ERRORS'] = false;
        $arResponse['ELEMENT_ID'] = $ID;
    } else {
        $arResponse['IS_ERRORS'] = true;
    }

    $JSON__DATA = defined('JSON_UNESCAPED_UNICODE')
        ? json_encode($arResponse, JSON_UNESCAPED_UNICODE)
        : json_encode($arResponse);
    echo $JSON__DATA;
}?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>