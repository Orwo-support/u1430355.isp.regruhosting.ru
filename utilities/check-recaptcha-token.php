<?php
if ($_POST) {
  
    require($_SERVER['DOCUMENT_ROOT'].'/comps/key.php');
    
    function getCaptcha($TOKEN) {
        return file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_RECAPTCH_KEY."&response={$TOKEN}");
    }

    $RESPONSE = json_decode(getCaptcha($_POST['token']));

    $JSON__DATA = defined('JSON_UNESCAPED_UNICODE')
        ? json_encode($RESPONSE, JSON_UNESCAPED_UNICODE)
        : json_encode($RESPONSE);
    echo $JSON__DATA;
}