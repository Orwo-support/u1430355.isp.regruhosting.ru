<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?php




    $captcha = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);

    if(!$captcha){
        echo 'Please check the the captcha form.';
        exit;
    }

    $secretKey = "6Les2AocAAAAAEflLEGWkgIlE-NSwXeq2gKyFLsE";
    $ip = $_SERVER['REMOTE_ADDR'];

    // post request to server
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array('secret' => $secretKey, 'response' => $captcha);

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    $responseKeys = json_decode($response,true);

    header('Content-type: application/json');


    $JSON__DATA = defined('JSON_UNESCAPED_UNICODE')
        ? json_encode($responseKeys, JSON_UNESCAPED_UNICODE)
        : json_encode($responseKeys);
    echo $JSON__DATA;

?>
























<?php



//    if ($_POST) {
//        function getCaptcha($token) {
//            $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".reCAPTCHA_SECRET_KEY."&response={$token}");
//            return json_decode($Response);
//        }
//
//        $reCaptchaResponse = getCaptcha($_POST['token']);
//
//        $JSON__DATA = defined('JSON_UNESCAPED_UNICODE')
//            ? json_encode($reCaptchaResponse, JSON_UNESCAPED_UNICODE)
//            : json_encode($reCaptchaResponse);
//        echo $JSON__DATA;
//    }
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>