<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
CModule::IncludeModule('iblock');

$el = new CIBlockElement; // создаём свой класс
$iblock_id = 12; // ID инфоблока в который добавляем новый элемент

// Массив для свойств, полученных из формы запроса
$PROP = array();

// Имена свойств в массиве $PROP должны соответствовать
// свойствам инфоблока в который будет добавлен новый элемент
$PROP['CALLBACK_PHONE'] = htmlspecialchars(strip_tags(trim($_POST['phone'])));
$PROP['CALLBACK_FROM'] = htmlspecialchars(strip_tags(trim($_POST['from'])));

if (get_magic_quotes_gpc()) {
    $PROP['CALLBACK_PHONE'] = stripcslashes($PROP['CALLBACK_PHONE']);
    $PROP['CALLBACK_FROM'] = stripcslashes($PROP['CALLBACK_FROM']);
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
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>