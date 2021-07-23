<?
    if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
    use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
        <?
            Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
            Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
            Asset::getInstance()->addString('<meta name="robots" content="index, follow">');

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

            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/vendors.ebfda6c2683786f73de1.css");
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.ebfda6c2683786f73de1.css");

            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/vendors.ebfda6c2683786f73de1.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.ebfda6c2683786f73de1.js");
        ?>

        <!-- Добавить только для страницы О компании-->
        <!-- <script src="https://api-maps.yandex.ru/2.1/?apikey=4c74d479-972b-4c76-81e7-b1bc63268173&amp;lang=ru_RU"></script>-->
	</head>
    <body class="<?
        if ($APPLICATION->GetCurPage() == '/') echo 'page-index';
    ?>">
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
            <div class="ldBar label-center" id="loading" data-preset="circle" data-duration="2"></div>
        </div>






        <!-- Добавлять мадальные сообщения только на страницах с соответствующими формами

        <div class="modal" id="orderModal" data-source-reset="#orderForm">
            <div class="modal__dialog">
                <div class="modal__content">
                    <div class="modal__header">
                        <div class="modal__title">Заявка отправлена</div>
                        <div class="modal__subtitle">Перезвоним вам в ближайшее время</div>
                    </div>
                    <div class="modal__body">
                        <img class="modal-img" src="/img/icon-modal-phone.svg" alt="">
                    </div>
                    <div class="modal__footer">
                        <button class="btn btn_primary not-focused modal__close">
                            Закрыть окно
                        </button>
                    </div>
                </div>
            </div>
        </div>
-->
        <!-- Дабавить только на странице вывода результатов калькулятора или перенести на страницу с выводом результатов калькулятора
        <div class="modal" id="calcModal" data-source-reset="">
            <div class="modal__dialog">
                <div class="modal__content">
                    <div class="modal__header">
                        <div class="modal__title">Заявка отправлена</div>
                        <div class="modal__subtitle">Перезвоним вам в ближайшее время</div>
                    </div>
                    <div class="modal__body">
                        <img class="modal-img" src="/img/icon-modal-phone.svg" alt="">
                    </div>
                    <div class="modal__footer">
                        <button class="btn btn_primary not-focused modal__close">
                            Закрыть окно
                        </button>
                    </div>
                </div>
            </div>
        </div>

-->

        <!-- Добавлять только на странице где нужен вывод галерени
        <div class="gallery-modal" id="galleryPicModal">
            <div class="gallery-modal__picture-container">
                <img class="gallery-modal__picture" id="galleryPic" src="" alt="">
                <div class="gallery-modal__close-bnt" id="galleryBtnClose">
                    <svg width="102" height="122" viewBox="0 0 102 122" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 51L51 57M51 57L57 63M51 57L57 51M51 57L45 63" stroke="#80758F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.25" y="-7.75" width="101.5" height="129.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                </div>
            </div>
        </div>
-->
























        <?
            if ($APPLICATION->GetCurPage() == '/') {
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/callback-modal.php"
                    )
                );
            }
        ?>
        <?
            if ($APPLICATION->GetCurPage() == '/') {
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/quiz.php"
                    )
                );
            }
        ?>
        <header class="header" id="header">
            <a class="header__logo" href="/">
                <img class="logo-mob" src="/img/mob-logo.svg" alt="">
                <img class="logo-desc" src="/img/logo.svg" alt="">
            </a>
            <?/*$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main_menu",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "submain",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "main",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "main_menu"
                ),
                false
            );*/?>
            <div class="header__action-group">
                <div class="header__btns-group">
                    <div class="btn btn_ghost">
                        <div class="icon-pic">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 3.1H5.2M3.1 5.2V1M10.8 3.1H15M11.5 15H15M11.5 11.5H15M1 11.5L4.5 15M1 15L4.5 11.5" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div class="arr">
                            Калькулятор
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 12L10 8L6 4" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                    </div>
                    <div class="btn btn_calltoaction">
                        Оформить заявку
                    </div>
                </div>
                <div class="nav-toggler" id="navToggler">
                    <span class="top-line">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 2" style="enable-background:new 0 0 16 2" xml:space="preserve"><g><path d="M15.3,2H0.6C0.3,2,0,1.5,0,0.9S0.3,0,0.6,0h14.6C15.6,0,16,0.4,16,1.1S15.6,2,15.3,2z"/></g></svg>
                    </span>
                    <span class="middle-line">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 2" style="enable-background:new 0 0 16 2" xml:space="preserve"><g><path d="M15.3,2H0.6C0.3,2,0,1.5,0,0.9S0.3,0,0.6,0h14.6C15.6,0,16,0.4,16,1.1S15.6,2,15.3,2z"/></g></svg>
                    </span>
                    <span class="bottom-line">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 2" style="enable-background:new 0 0 16 2" xml:space="preserve"><g><path d="M15.3,2H0.6C0.3,2,0,1.5,0,0.9S0.3,0,0.6,0h14.6C15.6,0,16,0.4,16,1.1S15.6,2,15.3,2z"/></g></svg>
                    </span>
                </div>
            </div>
            <span id="navLine"></span>
        </header>
        <main class="main">