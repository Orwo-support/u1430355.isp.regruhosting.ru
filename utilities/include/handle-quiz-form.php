<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
CModule::IncludeModule('iblock');

if (isset($_POST['score']) and $_POST['score'] != '') {
    $el = new CIBlockElement; // создаём свой класс
    $iblock_id = 13; // ID инфоблока в который добавляем новый элемент

// Массив для свойств, полученных из формы запроса
    $PROP = array();

// Имена свойств в массиве $PROP должны соответствовать
// свойствам инфоблока в который будет добавлен новый элемент
    $PROP['QUIZ_LOCATION'] = htmlspecialchars(strip_tags(trim($_POST['location'])));
    $PROP['QUIZ_DISTANCE'] = htmlspecialchars(strip_tags(trim($_POST['distance'])));
    $PROP['QUIZ_WIDTH'] = htmlspecialchars(strip_tags(trim($_POST['width'])));
    $PROP['QUIZ_HEIGHT'] = htmlspecialchars(strip_tags(trim($_POST['height'])));
    $PROP['QUIZ_CONTRACT'] = htmlspecialchars(strip_tags(trim($_POST['contract'])));
    $PROP['QUIZ_USER_PHONE'] = htmlspecialchars(strip_tags(trim($_POST['phone'])));
    $PROP['QUIZ_USER_MESSAGE'] = htmlspecialchars(strip_tags(trim($_POST['message'])));
    $PROP['QUIZ_USER_IP'] = htmlspecialchars(strip_tags(trim($_POST['ip'])));
    $PROP['QUIZ_RECAPTCHA_SCORE'] = htmlspecialchars(strip_tags(trim($_POST['score'])));

    if (get_magic_quotes_gpc()) {
        $PROP['QUIZ_LOCATION'] = stripcslashes($PROP['QUIZ_LOCATION']);
        $PROP['QUIZ_DISTANCE'] = stripcslashes($PROP['QUIZ_DISTANCE']);
        $PROP['QUIZ_WIDTH'] = stripcslashes($PROP['QUIZ_WIDTH']);
        $PROP['QUIZ_HEIGHT'] = stripcslashes($PROP['QUIZ_HEIGHT']);
        $PROP['QUIZ_CONTRACT'] = stripcslashes($PROP['QUIZ_CONTRACT']);
        $PROP['QUIZ_USER_PHONE'] = stripcslashes($PROP['QUIZ_USER_PHONE']);
        $PROP['QUIZ_USER_MESSAGE'] = stripcslashes($PROP['QUIZ_USER_MESSAGE']);
        $PROP['QUIZ_USER_IP'] = stripcslashes($PROP['QUIZ_USER_IP']);
        $PROP['QUIZ_RECAPTCHA_SCORE'] = stripcslashes($PROP['QUIZ_RECAPTCHA_SCORE']);
    }

    $QUIZ_USER_NAME = strip_tags($_REQUEST['name']) == ''
        ? 'Не указано'
        : strip_tags($_REQUEST['name']);

    $PROP['QUIZ_USER_MESSAGE'] = $PROP['QUIZ_USER_MESSAGE'] == ''
        ? 'Отсутствует'
        : $PROP['QUIZ_USER_MESSAGE'];

    $PROP['QUIZ_LOCATION'] = $PROP['QUIZ_LOCATION'] == 'inside'
        ? 'В помещении'
        : 'На улице';

    $PROP['QUIZ_CONTRACT'] = $PROP['QUIZ_CONTRACT'] == 'buy'
        ? 'Покупка'
        : 'Аренда';

// Основные поля добавлямого в инфоблок элемента
    $fields = array(
        "DATE_CREATE" => date("d.m.Y H:i:s"), // Передаем дату создания
        "CREATED_BY" => $GLOBALS['USER']->GetID(), // Передаем ID пользователя добавившего сообщение
        "IBLOCK_SECTION_ID" => false, // ID разделов. В нашем случае false, т.к. нет подразделов
        "IBLOCK_ID" => $iblock_id, // ID информационного блока он 13-ый в нашем случае
        "PROPERTY_VALUES" => $PROP, // Передаем массив значении для свойств
        "NAME" => $QUIZ_USER_NAME, // Не может быть пустой строкой
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