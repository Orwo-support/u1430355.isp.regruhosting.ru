<?
    if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
    use Bitrix\Main\Page\Asset;
?><!DOCTYPE html>
<html lang="ru">
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
        <?
            Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
            Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');

            if ($APPLICATION->GetCurPage() == '/rezultaty-raschyetov-kalkulyatora/') {
                Asset::getInstance()->addString('<meta name="robots" content="noindex">');
            } else  {
                Asset::getInstance()->addString('<meta name="robots" content="index, follow">');
            }

            Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">');
            Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">');
            Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">');
            Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">');
            Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">');
            Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">');
            Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">');
            Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">');
            Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">');
            Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">');
            Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">');
            Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">');
            Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">');
            Asset::getInstance()->addString('<link rel="manifest" href="/favicon/manifest.json">');
            Asset::getInstance()->addString('<meta name="msapplication-TileColor" content="#ffffff">');
            Asset::getInstance()->addString('<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">');
            Asset::getInstance()->addString('<meta name="theme-color" content="#ffffff">');
            
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/vendors.faf44350663d518db2e2.css");
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.faf44350663d518db2e2.css");

            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/vendors.a7b51145f5956d87fc4d.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.a7b51145f5956d87fc4d.js");

            // Connecting API Yandex Paps for about page
            if ($APPLICATION->GetCurPage() == '/o-nas-garantiya-kontakty/') {
                Asset::getInstance()->addJs('https://api-maps.yandex.ru/2.1/?apikey=4c74d479-972b-4c76-81e7-b1bc63268173&amp;lang=ru_RU');
            }

            // Connecting API google reCaptcha v3
            Asset::getInstance()->addJs('https://www.google.com/recaptcha/api.js?render=6LdiYokcAAAAAOcpNk3xoD062wXPBX_5i8Y0dNJx');
        ?>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

           ym(62189050, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
           });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/62189050" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <meta name="yandex-verification" content="e0346ddf7ad4cd31" />
	</head>
    <body class="<?
        switch ($APPLICATION->GetCurPage()) {
            case '/': echo 'page-index'; break;
            case '/politika-konfidentsialnosti/': echo 'page-privacy-policy'; break;
            case '/dostavka-i-oplata/': echo 'page-payment-delivery'; break;
            case '/arenda-svetodiodnykh-ekranov/': echo 'page-rent'; break;
            case '/proektirovanie-svetodiodnykh-ekranov/': echo 'page-projection'; break;
            case '/montazh-svetodiodnykh-ekranov/': echo 'page-installation'; break;
            case '/svetodiodnyy-ekran/': echo 'page-led-screen'; break;
            case '/begushchaya-stroka/': echo 'page-ticker'; break;
            case '/elektronnoe-tablo/': echo 'page-scoreboard'; break;
            case '/mediabort/': echo 'page-mediabort'; break;
            case '/svetodiodnyy-shar/': echo 'page-led-ball'; break;
            case '/videokub/': echo 'page-videocube'; break;
            case '/reklamnyy-videobanner/': echo 'page-videobanner'; break;
            case '/mediafasad/': echo 'page-media-facade'; break;
            case '/ekrany-dlya-tts-i-bts/': echo 'page-store-screen'; break;
            case '/ekrany-dlya-sportivnykh-meropriyatiy/': echo 'page-sport-screen'; break;
            case '/ekrany-dlya-konferentsiy/': echo 'page-conf-screen'; break;
            case '/reklamnye-ulichnye-ekrany/': echo 'page-street-screen'; break;
            case '/o-nas-garantiya-kontakty/': echo 'page-about'; break;
            case '/baza-znaniy/': echo 'page-knowledge-base'; break;
            case '/kalkulyator/': echo 'page-calc'; break;
            case '/rezultaty-raschyetov-kalkulyatora/': echo 'page-calc-results'; break;
        }

        if(preg_match('/nashi-raboty/', $_SERVER["REQUEST_URI"])) {
            $CLEAN_OUR_WORKS_URL = explode('?', $_SERVER["REQUEST_URI"])[0];
            if ($CLEAN_OUR_WORKS_URL === '/nashi-raboty/') echo 'page-our-works';
            else echo 'page-single-work';
        }

        if(preg_match('/stati/', $_SERVER["REQUEST_URI"])
            || preg_match('/novosti/', $_SERVER["REQUEST_URI"])) {
            echo 'page-single-article-news';
        }?>">
        <div id="panel">
            <?$APPLICATION->ShowPanel();?>
        </div>
        <div class="loader" id="spinner">
            <div class="spinner">
                <div>
                    <div><div><div></div></div></div>
                    <div><div><div></div></div></div>
                </div>
            </div>
        </div>
        <div class="cursor" id="cursor"></div>
        <div class="loading-container">
            <div class="ldBar label-center"
                 id="loading"
                 data-preset="circle"
                 data-duration="2"></div>
        </div>
        <?if ($APPLICATION->GetCurPage() == '/rezultaty-raschyetov-kalkulyatora/') {
            include_once($_SERVER["DOCUMENT_ROOT"]."/comps/calc-results-modal.php");
        }?>
        <?if ($APPLICATION->GetCurPage() == '/arenda-svetodiodnykh-ekranov/'
                || $APPLICATION->GetCurPage() == '/proektirovanie-svetodiodnykh-ekranov/'
                || $APPLICATION->GetCurPage() == '/montazh-svetodiodnykh-ekranov/'
                || $APPLICATION->GetCurPage() == '/o-nas-garantiya-kontakty/') {
            include_once($_SERVER["DOCUMENT_ROOT"]."/comps/gallery-modal.php");
        }?>
        <?if ($APPLICATION->GetCurPage() == '/dostavka-i-oplata/'
                || $APPLICATION->GetCurPage() == '/arenda-svetodiodnykh-ekranov/'
                || $APPLICATION->GetCurPage() == '/proektirovanie-svetodiodnykh-ekranov/'
                || $APPLICATION->GetCurPage() == '/montazh-svetodiodnykh-ekranov/'
                || $APPLICATION->GetCurPage() == '/svetodiodnyy-ekran/'
                || $APPLICATION->GetCurPage() == '/elektronnoe-tablo/'
                || $APPLICATION->GetCurPage() == '/mediabort/'
                || $APPLICATION->GetCurPage() == '/svetodiodnyy-shar/'
                || $APPLICATION->GetCurPage() == '/videokub/'
                || $APPLICATION->GetCurPage() == '/mediafasad/'
                || $APPLICATION->GetCurPage() == '/ekrany-dlya-sportivnykh-meropriyatiy/'
                || $APPLICATION->GetCurPage() == '/ekrany-dlya-tts-i-bts/'
                || $APPLICATION->GetCurPage() == '/reklamnyy-videobanner/'
                || $APPLICATION->GetCurPage() == '/begushchaya-stroka/'
                || $APPLICATION->GetCurPage() == '/ekrany-dlya-konferentsiy/'
                || $APPLICATION->GetCurPage() == '/reklamnye-ulichnye-ekrany/'
                || $APPLICATION->GetCurPage() == '/o-nas-garantiya-kontakty/'
                || preg_match('/nashi-raboty/', $_SERVER["REQUEST_URI"])) {
            include_once($_SERVER["DOCUMENT_ROOT"]."/comps/order-modal.php");
        }?>
        <?if ($APPLICATION->GetCurPage() == '/'
                || $APPLICATION->GetCurPage() == '/o-nas-garantiya-kontakty/') {
            include_once($_SERVER["DOCUMENT_ROOT"]."/comps/callback-modal.php");
        }?>
        <?if ($APPLICATION->GetCurPage() == '/'
                || preg_match('/nashi-raboty/', $_SERVER["REQUEST_URI"])) {
            include_once($_SERVER["DOCUMENT_ROOT"]."/comps/video-modal.php");
        }?>
        <?if ($APPLICATION->GetCurPage() == '/') {
            include_once($_SERVER["DOCUMENT_ROOT"]."/comps/quiz.php");
        }?>
        <?include_once($_SERVER["DOCUMENT_ROOT"]."/comps/set-order-form-modal.php");?>
        <header class="header" id="header">
            <a class="header__logo" href="/">
                <img class="logo-mob pic" src="/img/mob-logo.svg" alt="">
                <img class="logo-desc pic" src="/img/logo.svg" alt="">
            </a>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main",
                Array(
                    "ALLOW_MULTI_SELECT" => "N", // ?????????????????? ?????????????????? ???????????????? ?????????????? ????????????????????????
                    "CHILD_MENU_TYPE" => "left", // ?????? ???????? ?????? ?????????????????? ??????????????
                    "DELAY" => "N",	// ?????????????????????? ???????????????????? ?????????????? ????????
                    "MAX_LEVEL" => "1",	// ?????????????? ?????????????????????? ????????
                    "MENU_CACHE_GET_VARS" => array(	// ???????????????? ???????????????????? ??????????????
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600", // ?????????? ?????????????????????? (??????.)
                    "MENU_CACHE_TYPE" => "N", // ?????? ??????????????????????
                    "MENU_CACHE_USE_GROUPS" => "Y",	// ?????????????????? ?????????? ??????????????
                    "ROOT_MENU_TYPE" => "main",	// ?????? ???????? ?????? ?????????????? ????????????
                    "USE_EXT" => "N", // ???????????????????? ?????????? ?? ?????????????? ???????? .??????_????????.menu_ext.php
                ),
                false
            );?>
            <div class="header__action-group">
                <div class="header__btns-group">
                    <div class="btn btn_ghost">
                        <div class="icon-pic">
                            <svg width="16"
                                 height="16"
                                 viewBox="0 0 16 16"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 3.1H5.2M3.1 5.2V1M10.8 3.1H15M11.5 15H15M11.5 11.5H15M1 11.5L4.5 15M1 15L4.5 11.5"
                                      stroke="#AB78FF"
                                      stroke-width="1.5"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <a href="/kalkulyator/" class="arr">
                            ??????????????????????
                            <svg width="16"
                                 height="16"
                                 viewBox="0 0 16 16"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12L10 8L6 4"
                                      stroke="#AB78FF"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="btn btn_calltoaction show-set-order-form">
                        ???????????????? ????????????
                    </div>
                </div>
                <div class="nav-toggler" id="navToggler"><?
                    for ($i = 0; $i < 3; $i++) { ?><?
                        if ($i == 0) $navToggleClass = 'top-line';
                        if ($i == 1) $navToggleClass = 'middle-line';
                        if ($i == 2) $navToggleClass = 'bottom-line';
                    ?><span class="<?=$navToggleClass;?>">
                        <svg id="Layer_1"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 16 2"
                             style="enable-background:new 0 0 16 2"
                             xml:space="preserve">
                            <g>
                                <path d="M15.3,2H0.6C0.3,2,0,1.5,0,0.9S0.3,0,0.6,0h14.6C15.6,0,16,0.4,16,1.1S15.6,2,15.3,2z"/>
                            </g>
                        </svg>
                    </span><?}?>
                </div>
            </div>
            <span id="navLine"></span>
        </header>
        <main class="main">