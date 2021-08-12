<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
CModule::IncludeModule('iblock');

$el = new CIBlockElement; // создаём свой класс
$iblock_id = 74; // ID инфоблока в который добавляем новый элемент

// Массив для свойств, полученных из формы запроса
$PROP = array();

// Имена свойств в массиве $PROP должны соответствовать
// свойствам инфоблока в который будет добавлен новый элемент
$PROP['REQUEST_PHONE'] = htmlspecialchars(strip_tags(trim($_POST['phone'])));
$PROP['REQUEST_EMAIL'] = htmlspecialchars(strip_tags(trim($_POST['mail'])));
$PROP['REQUEST_MESSAGE'] = htmlspecialchars(strip_tags(trim($_POST['message'])));
$PROP['REQUEST_PDF'] = htmlspecialchars(strip_tags(trim($_POST['pdf'])));
$PROP['REQUEST_XLS'] = htmlspecialchars(strip_tags(trim($_POST['xls'])));
$PROP['REQUEST_TXT'] = htmlspecialchars(strip_tags(trim($_POST['txt'])));


if (get_magic_quotes_gpc()) {
    $PROP['REQUEST_PHONE'] = stripcslashes($PROP['REQUEST_PHONE']);
    $PROP['REQUEST_EMAIL'] = stripcslashes($PROP['REQUEST_EMAIL']);
    $PROP['REQUEST_MESSAGE'] = stripcslashes($PROP['REQUEST_MESSAGE']);
    $PROP['REQUEST_PDF'] = stripcslashes($PROP['REQUEST_PDF']);
    $PROP['REQUEST_XLS'] = stripcslashes($PROP['REQUEST_XLS']);
    $PROP['REQUEST_TXT'] = stripcslashes($PROP['REQUEST_TXT']);
}

$REQUEST_USER_NAME = strip_tags($_REQUEST['name']) == ''
    ? 'Не указано'
    : strip_tags($_REQUEST['name']);

$PROP['REQUEST_MESSAGE'] = $PROP['REQUEST_MESSAGE'] == ''
    ? 'Отсутствует'
    : $PROP['REQUEST_MESSAGE'];

$PROP['REQUEST_EMAIL'] = $PROP['REQUEST_EMAIL'] == ''
    ? 'Не указан'
    : $PROP['REQUEST_EMAIL'];

// Основные поля добавлямого в инфоблок элемента
$fields = array(
    "DATE_CREATE" => date("d.m.Y H:i:s"), // Передаем дату создания
    "CREATED_BY" => $GLOBALS['USER']->GetID(), // Передаем ID пользователя добавившего сообщение
    "IBLOCK_SECTION_ID" => false, // ID разделов. В нашем случае false, т.к. нет подразделов
    "IBLOCK_ID" => $iblock_id, // ID информационного блока он 12-ый в нашем случае
    "PROPERTY_VALUES" => $PROP, // Передаем массив значении для свойств
    "NAME" => $REQUEST_USER_NAME, // Не может быть пустой строкой
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
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>