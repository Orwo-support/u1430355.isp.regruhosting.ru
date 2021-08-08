<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результаты расчётов калькулятора");
?>
<?


debug(json_decode($_POST['calc-results']));


?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>