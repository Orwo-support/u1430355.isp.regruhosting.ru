<?php
if ($_POST) {
    function getCaptcha($TOKEN) {
        $SECRET_KEY = '6LdJnQ8cAAAAAFjCFTUfyLrdRl_2H_u7AjgL0KZ9';
        return file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$SECRET_KEY}&response={$TOKEN}");
    }

    $RESPONSE = json_decode(getCaptcha($_POST['token']));

    $JSON__DATA = defined('JSON_UNESCAPED_UNICODE')
        ? json_encode($RESPONSE, JSON_UNESCAPED_UNICODE)
        : json_encode($RESPONSE);
    echo $JSON__DATA;
}