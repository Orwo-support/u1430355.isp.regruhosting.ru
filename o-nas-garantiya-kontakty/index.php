<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас, Гарантия, Контакты");
?>
<div class="place-target-container">
    <span id="o-kompanii" class="place-target-anchor"></span>
</div>
<section class="section section__about-banner">
    <div class="container-endless about-banner">
        <div class="endless">
            <div class="about-banner__pic animation-element">
                <img class="pic" src="/img/about-banner.svg" alt="О нас, Гарантия, Контакты">
            </div>
            <div class="about-banner__content">
                <h1 class="h1 section__title about-banner__title animation-element">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/about-title.php"
                        )
                    );?>
                </h1>
                <div class="about-banner__description">
                    <div class="about-banner__subtitle animation-element">Кто мы</div>
                    <div class="about-banner__text animation-element">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/about-subtitle.php"
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section__about-offer">
    <div class="about-offer">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <span class="title">Что предлагаем</span>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless">
                <div class="about-offer__list swiper-container" id="aboutOfferListSlider">
                    <div class="about-offer__list-wrap swiper-wrapper">
                        <div class="about-offer__slide swiper-slide">
                            <div class="about-offer__card animation-element">
                                <div class="about-offer__title">
                                    <span class="about-offer__icon">
                                         <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 48 48" width="48" height="48" xml:space="preserve"><g><g><path d="M23.3,44.5c-0.3,0-0.6,0-0.9-0.1c-0.3-0.1-0.5-0.2-0.7-0.4c-0.2-0.2-0.4-0.4-0.5-0.6C21,43.1,21,42.8,21,42.5 v-15c0,0,0,0,0,0l-6-2.3c-2.4-0.9-3.6-1.4-4.3-2.4S10,20.5,10,18v-7.9c0-2.6,0-3.9,1-4.6c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1L14.4,4 c0.7-0.3,1.1-0.5,1.6-0.5c0.4,0,0.9,0.1,1.6,0.4L33,9.8c2.4,0.9,3.6,1.4,4.3,2.4c0.7,1.1,0.7,2.3,0.7,4.9v9.4c0,1,0,1.6-0.3,2.1 c-0.3,0.5-0.8,0.8-1.7,1.4l-2.2,1.4c0,0,0,0-0.1,0c-0.1,0-0.1,0.1-0.2,0.1l0,0c0,0-0.1,0-0.1,0.1c-0.9,0.4-2.1-0.1-4.3-0.9 l-3.5-1.3v13.2c0,0.3-0.1,0.5-0.2,0.8c-0.1,0.2-0.3,0.5-0.5,0.6c-0.2,0.2-0.5,0.3-0.7,0.4C23.9,44.5,23.6,44.5,23.3,44.5z M22,28 v14.6c0,0.1,0,0.2,0.1,0.3c0.1,0.1,0.1,0.2,0.3,0.3c0.1,0.1,0.3,0.2,0.4,0.2c0.3,0.1,0.7,0.1,1.1,0c0.2-0.1,0.3-0.1,0.4-0.2 c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.1-0.2,0.1-0.3V29L22,28z M12.1,6.2c-0.2,0-0.4,0-0.6,0.1C11,6.7,11,7.9,11,10.1V18 c0,2.3,0,3.5,0.6,4.3c0.6,0.8,1.6,1.2,3.8,2.1l14.1,5.4c1.9,0.7,3,1.2,3.6,0.9l0.2-0.1c0.5-0.4,0.5-1.6,0.5-3.7v-7.9 c0-2.3,0-3.5-0.6-4.3c-0.6-0.8-1.6-1.2-3.8-2.1L15.3,7.1C13.8,6.6,12.8,6.2,12.1,6.2z M13.6,5.4c0.6,0.2,1.3,0.4,2.1,0.8l14.1,5.4 c2.4,0.9,3.6,1.4,4.3,2.4c0.7,1.1,0.7,2.3,0.7,4.9v7.9c0,1.2,0,2.1-0.1,2.8l0.8-0.5c0.8-0.5,1.2-0.7,1.3-1 c0.2-0.3,0.2-0.7,0.2-1.7v-9.4c0-2.3,0-3.5-0.6-4.3c-0.6-0.8-1.6-1.2-3.8-2.1L17.2,4.9c-0.6-0.2-1-0.4-1.2-0.4 c-0.3,0-0.5,0.1-1.2,0.4L13.6,5.4z M43.5,28.5c-0.1,0-0.3,0-0.4-0.1l-2-2c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0l2,2 c0.2,0.2,0.2,0.5,0,0.7C43.8,28.5,43.6,28.5,43.5,28.5z M41.5,21.5c-0.1,0-0.3,0-0.4-0.1c-0.2-0.2-0.2-0.5,0-0.7l2-2 c0.2-0.2,0.5-0.2,0.7,0s0.2,0.5,0,0.7l-2,2C41.8,21.5,41.6,21.5,41.5,21.5z M4.5,18.5c-0.1,0-0.3,0-0.4-0.1 c-0.2-0.2-0.2-0.5,0-0.7l2-2c0.2-0.2,0.5-0.2,0.7,0s0.2,0.5,0,0.7l-2,2C4.8,18.5,4.6,18.5,4.5,18.5z M6.5,11.5 c-0.1,0-0.3,0-0.4-0.1l-2-2C4,9.2,4,8.8,4.1,8.6s0.5-0.2,0.7,0l2,2c0.2,0.2,0.2,0.5,0,0.7C6.8,11.5,6.6,11.5,6.5,11.5z"/></g></g></svg>
                                    </span>
                                    <span class="about-offer__caption">
                                        LED оборудование
                                    </span>
                                </div>
                                <?$APPLICATION->IncludeComponent("bitrix:menu", "offers", Array(
                                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                            0 => "",
                                        ),
                                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                        "ROOT_MENU_TYPE" => "offerledequipment",	// Тип меню для первого уровня
                                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                    ),
                                    false
                                );?>
                            </div>
                        </div>
                        <div class="about-offer__slide swiper-slide">
                            <div class="about-offer__card animation-element">
                                <div class="about-offer__title">
                                    <span class="about-offer__icon">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 48 48" width="48" height="48" xml:space="preserve">
<g>
<g>
<path d="M24.5,40.5c-0.7,0-1.5-0.3-2.7-0.8l-10.5-4c-1.8-0.7-2.7-1-3.2-1.8c-0.6-0.8-0.6-1.8-0.6-3.6v-12
    c0-1.9,0-2.9,0.8-3.5c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1l5.7-2.7c0.1-0.1,0.1-0.1,0.2-0.1l8.6-4.1c0.4-0.2,0.6-0.2,1-0.2
    c0.5,0,0.7,0.1,1.1,0.2l11.6,4.3c1.8,0.7,2.7,1,3.3,1.8c0.6,0.8,0.6,1.8,0.6,3.6v13.1c0,0.8,0,1.2-0.2,1.6
    c-0.2,0.4-0.6,0.6-1.3,1.1l-13.8,7c0,0-0.1,0-0.1,0C24.9,40.5,24.7,40.5,24.5,40.5z M9.2,15.5c-0.1,0-0.3,0-0.4,0.1
    c-0.4,0.3-0.4,1.1-0.4,2.6v12c0,1.7,0,2.5,0.4,3.1c0.4,0.6,1.2,0.9,2.8,1.5l10.5,4c1.4,0.5,2.3,0.9,2.7,0.6
    c0.4-0.3,0.4-1.1,0.4-2.6V31c0-7.9-0.3-9.1-0.4-9.3c-0.4-0.5-1.2-0.8-2.8-1.4l-10.5-4C10.4,15.8,9.7,15.5,9.2,15.5z M10.5,14.8
    c0.4,0.1,0.8,0.3,1.3,0.5l10.5,4c1.8,0.7,2.7,1,3.2,1.8c0.2,0.3,0.6,0.8,0.6,9.9v5.8c0,0.8,0,1.5-0.1,2l12.3-6.3
    c0.6-0.3,0.8-0.5,0.9-0.7c0.1-0.2,0.1-0.5,0.1-1.1V17.5c0-1.7,0-2.5-0.4-3.1c-0.4-0.6-1.2-0.9-2.8-1.5L24.9,8.7
    c-0.5-0.2-0.5-0.2-0.9-0.2c-0.3,0-0.3,0-0.7,0.2l-0.2,0.1L20.5,10l10.7,4c1.8,0.7,2.7,1,3.3,1.8c0.6,0.8,0.6,1.8,0.6,3.6v11.3
    c0,0.3-0.1,0.5-0.4,0.6c-0.2,0.1-0.5,0.1-0.7-0.1l-1.2-1l-1.4,2.3c-0.2,0.3-0.4,0.4-0.7,0.3c-0.3-0.1-0.5-0.3-0.5-0.6v-10
    c0-1.7,0-2.5-0.4-3.1c-0.4-0.6-1.2-0.9-2.8-1.5l-12.5-4.8L10.5,14.8z M15.7,12.3l11.6,4.5c1.8,0.7,2.7,1,3.2,1.8
    c0.6,0.8,0.6,1.8,0.6,3.6v8.8l1-1.6c0.1-0.2,0.3-0.3,0.4-0.3c0.2,0,0.4,0,0.5,0.1l0.9,0.8V19.5c0-1.7,0-2.5-0.4-3.1
    c-0.4-0.6-1.2-0.9-2.8-1.5l-11.5-4.3c0,0-0.1,0-0.1,0L15.7,12.3z M34.6,30.5L34.6,30.5C34.6,30.5,34.6,30.5,34.6,30.5z M32.5,30.1
    C32.5,30.1,32.5,30.1,32.5,30.1L32.5,30.1z M33,30L33,30C33,30,33,30,33,30z"/>
</g>
</g>
</svg>
                                    </span>
                                    <span class="about-offer__caption">
                                        Готовые решения
                                    </span>
                                </div>
                                <?$APPLICATION->IncludeComponent("bitrix:menu", "offers", Array(
                                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                    "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                        0 => "",
                                    ),
                                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                    "ROOT_MENU_TYPE" => "offerreadymadesolutions",	// Тип меню для первого уровня
                                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                ),
                                    false
                                );?>
                            </div>
                        </div>
                        <div class="about-offer__slide swiper-slide">
                            <div class="about-offer__card animation-element">
                                <div class="about-offer__title">
                                    <span class="about-offer__icon">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 48 48" width="48" height="48" xml:space="preserve"><g><g><path d="M28.8,38.5c-0.2,0-0.4,0-0.6-0.1L24.6,37c-0.2-0.1-0.3-0.2-0.3-0.4c0-0.2,0.1-0.4,0.3-0.5l17.1-8.5 c0.1,0,0.2-0.1,0.2-0.1c0.1,0,0.1,0,0.2,0l4.1,1.5c0.2,0.1,0.3,0.2,0.3,0.4c0,0.2-0.1,0.4-0.3,0.5l-16.6,8.3 C29.4,38.4,29.1,38.5,28.8,38.5z M26,36.5l2.6,1c0.2,0.1,0.4,0.1,0.6,0l15.6-7.8l-2.9-1.1l-0.7,0.4l0.6,0.2 c0.3,0.1,0.4,0.4,0.3,0.6s-0.4,0.4-0.6,0.3l-1-0.4c-0.1,0-0.2-0.1-0.3-0.3L38,30.5l0.5,0.2c0.3,0.1,0.4,0.4,0.3,0.6 c-0.1,0.3-0.4,0.4-0.6,0.3l-1-0.4c-0.1,0-0.2-0.1-0.3-0.2l-2.1,1l0.5,0.2c0.3,0.1,0.4,0.4,0.3,0.6c-0.1,0.3-0.4,0.4-0.6,0.3 l-1-0.4c-0.1,0-0.2-0.1-0.2-0.2l-2.1,1l0.4,0.1c0.3,0.1,0.4,0.4,0.3,0.6s-0.4,0.4-0.6,0.3l-1-0.4c-0.1,0-0.1-0.1-0.2-0.1l-2,1 l0.3,0.1c0.3,0.1,0.4,0.4,0.3,0.6c-0.1,0.3-0.4,0.4-0.6,0.3l-1-0.4c0,0-0.1,0-0.1-0.1L26,36.5z M21.7,34.1c-0.8,0-1.7-0.4-3.2-0.9 L6,28.5c-2.1-0.8-3.2-1.2-3.8-2.1l-0.1-0.1c-0.6-0.8-0.6-0.9-0.6-2.9v-1.2c0-2.2,0-3.4,0.9-4c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1 l17.3-8.2c0.5-0.2,0.6-0.3,1.2-0.3c0.6,0,0.8,0.1,1.3,0.3l13.8,5.1c2.1,0.8,3.2,1.2,3.8,2.1c0,0,0,0,0,0c0.7,0.9,0.7,2,0.7,4.2 v1.3c0,0.9,0,1.4-0.3,1.9c-0.3,0.5-0.7,0.7-1.5,1.2L22.5,34c0,0-0.1,0-0.1,0C22.2,34.1,22,34.1,21.7,34.1z M3.5,18.8 c-0.2,0-0.4,0-0.5,0.1c-0.5,0.3-0.5,1.2-0.5,3.2v1.2c0,1.8,0,1.8,0.4,2.4L3,25.8c0.5,0.7,1.4,1,3.4,1.8l12.6,4.7 c1.8,0.7,2.8,1,3.3,0.7c0.5-0.3,0.5-1.2,0.5-3.1c0-1.9,0-3.1-0.5-3.8c0,0,0,0,0,0c-0.5-0.7-1.5-1-3.4-1.8L6.3,19.7 C4.9,19.2,4,18.8,3.5,18.8z M23.7,30c0,0.9,0,1.7-0.1,2.3l14.9-7.5c0.7-0.4,1-0.6,1.1-0.8c0.1-0.2,0.1-0.6,0.1-1.4v-1.3 c0-1.7,0-2.6-0.3-3.3L23.3,26c0.4,0.9,0.4,2,0.4,3.8c0,0,0,0,0,0V30C23.7,30,23.7,30,23.7,30z M4.8,18.1c0.5,0.2,1.1,0.4,1.8,0.6 l12.6,4.7c1.8,0.7,2.9,1.1,3.6,1.8l16.1-8c-0.6-0.4-1.5-0.8-3-1.3l-13.8-5.1c-0.5-0.2-0.6-0.2-1-0.2c-0.4,0-0.4,0-0.8,0.2 l-0.2,0.1L4.8,18.1z"/></g></g></svg>
                                    </span>
                                    <span class="about-offer__caption">
                                        Услуги
                                    </span>
                                </div>
                                <?$APPLICATION->IncludeComponent("bitrix:menu", "offers", Array(
                                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                    "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                        0 => "",
                                    ),
                                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                    "ROOT_MENU_TYPE" => "offerservices",	// Тип меню для первого уровня
                                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                ),
                                    false
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "we-work-with", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "PREVIEW_TEXT",
			1 => "DETAIL_TEXT",
			2 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "54",	// Код информационного блока
		"IBLOCK_TYPE" => "we_work_with",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "10",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "PROPERTY_1",
			1 => "PROPERTY_2",
			2 => "PROPERTY_3",
			3 => "PROPERTY_4",
			4 => "PROPERTY_5",
			5 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "list-with-action", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
    "DISPLAY_NAME" => "Y",	// Выводить название элемента
    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "FIELD_CODE" => array(	// Поля
        0 => "PREVIEW_TEXT",
        1 => "DETAIL_TEXT",
        2 => "",
    ),
    "FILTER_NAME" => "",	// Фильтр
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
    "IBLOCK_ID" => "7",	// Код информационного блока
    "IBLOCK_TYPE" => "lists",	// Тип информационного блока (используется только для проверки)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    "NEWS_COUNT" => "10",	// Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    "PAGER_TITLE" => "Новости",	// Название категорий
    "PARENT_SECTION" => "",	// ID раздела
    "PARENT_SECTION_CODE" => "",	// Код раздела
    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
    "PROPERTY_CODE" => array(	// Свойства
        0 => "",
        1 => "",
    ),
    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
    "SET_STATUS_404" => "N",	// Устанавливать статус 404
    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
    "SHOW_404" => "N",	// Показ специальной страницы
    "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
    "SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
    "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
    "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
),
    false
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "our-clients",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "DETAIL_PICTURE",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "9",
        "IBLOCK_TYPE" => "clients",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "30",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "CLIENT_LINK_URL",
            1 => "CLIENT_LOGO_SVG_CODE",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "DESC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "our-clients"
    ),
    false
);?>
<?include_once($_SERVER["DOCUMENT_ROOT"]."/comps/callback-form.php");?>
<section class="section section_warranty">
    <div class="warranty">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                Гарантийное обслуживание
            </h2>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "warranty-service", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                "DISPLAY_DATE" => "N",	// Выводить дату элемента
                "DISPLAY_NAME" => "N",	// Выводить название элемента
                "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",	// Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "55",	// Код информационного блока
                "IBLOCK_TYPE" => "warranty_service",	// Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "20",	// Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PARENT_SECTION" => "",	// ID раздела
                "PARENT_SECTION_CODE" => "",	// Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                "SHOW_404" => "N",	// Показ специальной страницы
                "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                "SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
                "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
            ),
            false
        );?>
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "warranty-memo", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                "DISPLAY_DATE" => "N",	// Выводить дату элемента
                "DISPLAY_NAME" => "N",	// Выводить название элемента
                "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",	// Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "56",	// Код информационного блока
                "IBLOCK_TYPE" => "warranty_memo",	// Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "10",	// Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PARENT_SECTION" => "",	// ID раздела
                "PARENT_SECTION_CODE" => "",	// Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                "SHOW_404" => "N",	// Показ специальной страницы
                "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                "SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
                "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
            ),
            false
        );?>
    </div>
</section>
<div class="place-target-container">
    <span id="sertifikaty" class="place-target-anchor"></span>
</div>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "certificates", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "57",	// Код информационного блока
		"IBLOCK_TYPE" => "Certificates",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "50",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>
<section class="section section_payment-ways">
    <div class="payment-ways">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <span class="title">Оплата</span>
                <span class="section__link animation-element">
                    <a class="revers" href="">Подробнее о способах оплаты и доставки</a>
                    <span class="icon">
                        <svg width="12"
                             height="17"
                             viewBox="0 0 12 17"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.9">
                            <path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289"
                                  stroke="#AB78FF"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </span>
                </span>
            </h2>
            <div class="payment-ways__methods">
                <div class="payment-ways__methods-item animation-element">
                    <span class="icon icon_card">
                        <svg width="110" height="150" viewBox="0 0 110 150" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_ddddd)"><path d="M32.1818 59.9778L34.442 59.1194C35.3458 58.7243 35.7977 58.5268 36.2774 58.5161C36.7572 58.5053 37.2173 58.6825 38.1376 59.0367L58.7152 66.9566C61.7564 68.1271 63.277 68.7123 64.1385 69.9718C65 71.2314 65 72.8692 65 76.145V86.1007C65 87.4331 65 88.0994 64.6937 88.6556C64.3873 89.2117 63.8258 89.565 62.7028 90.2714L61.4342 91.3354M31 65.6806V73.661C31 76.9308 31 78.5658 31.859 79.8241C32.7181 81.0824 34.2349 81.6693 37.2685 82.8431L56.137 90.1439C59.1525 91.3108 60.6603 91.8942 61.721 91.1613C62.7817 90.4284 62.7817 88.8032 62.7817 85.5529V74.8769C62.7817 74.3026 62.7817 72.6677 61.9227 71.4094C61.0636 70.1511 59.5468 69.5642 56.5131 68.3903L37.6447 61.0895C34.6292 59.9227 33.1214 59.3393 32.0607 60.0722C31 60.805 31 62.4302 31 65.6806Z" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/></g><path d="M31.0122 67.779V64.7133L62.7653 77.1085V80.1742L31.0122 67.779Z" fill="#F6F0FF" stroke="#F6F0FF"/><defs><filter id="filter0_ddddd" x="-13.5" y="0.015625" width="123" height="149.97" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="6" dy="6"/><feGaussianBlur stdDeviation="15"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-6" dy="-6"/><feGaussianBlur stdDeviation="15"/><feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="14" dy="28"/><feGaussianBlur stdDeviation="15"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/><feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-14" dy="-28"/><feGaussianBlur stdDeviation="15"/><feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/><feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="8"/><feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/><feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/></filter></defs></svg>
                    </span>
                    <span class="text">Банковской картой</span>
                </div>
                <div class="payment-ways__methods-item animation-element">
                    <span class="icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 30.1458V6.80246C15 4.1755 15 2.86202 15.8631 2.26617C16.7262 1.67032 17.9558 2.13495 20.415 3.06422L31.8299 7.37771C34.3312 8.32287 35.5818 8.79545 36.2909 9.82091C37 10.8464 37 12.1823 37 14.8542V38.1975C37 40.8245 37 42.138 36.1369 42.7338C35.2738 43.3297 34.0442 42.865 31.585 41.9358L20.1701 37.6223C17.6688 36.6771 16.4182 36.2046 15.7091 35.1791C15 34.1536 15 32.8177 15 30.1458Z" fill="#0B0D19"/><path d="M20.1701 37.6223L19.9933 38.09L20.1701 37.6223ZM31.585 41.9358L31.4083 42.4035L31.585 41.9358ZM31.8299 7.37771L31.6532 7.84543L31.8299 7.37771ZM20.415 3.06422L20.5917 2.5965L20.415 3.06422ZM36.2909 9.82091L35.8796 10.1053V10.1053L36.2909 9.82091ZM36.1369 42.7338L36.4209 43.1453H36.4209L36.1369 42.7338ZM14.5 6.80246V30.1458H15.5V6.80246H14.5ZM19.9933 38.09L31.4083 42.4035L31.7618 41.4681L20.3468 37.1546L19.9933 38.09ZM37.5 38.1975V14.8542H36.5V38.1975H37.5ZM32.0067 6.90999L20.5917 2.5965L20.2382 3.53194L31.6532 7.84543L32.0067 6.90999ZM37.5 14.8542C37.5 13.5294 37.5007 12.495 37.4083 11.6648C37.3145 10.8222 37.1207 10.1418 36.7021 9.53652L35.8796 10.1053C36.1702 10.5255 36.331 11.0258 36.4144 11.7755C36.4993 12.5376 36.5 13.5071 36.5 14.8542H37.5ZM31.6532 7.84543C32.9143 8.32196 33.8216 8.6656 34.5051 9.01452C35.1775 9.35777 35.5891 9.68509 35.8796 10.1053L36.7021 9.53652C36.2836 8.93126 35.7153 8.50957 34.9598 8.12387C34.2154 7.74386 33.2469 7.37862 32.0067 6.90999L31.6532 7.84543ZM31.4083 42.4035C32.6226 42.8624 33.5856 43.2277 34.3528 43.3952C35.1305 43.5651 35.822 43.5588 36.4209 43.1453L35.8528 42.3224C35.5887 42.5047 35.2338 42.5641 34.5662 42.4182C33.888 42.2701 33.0066 41.9385 31.7618 41.4681L31.4083 42.4035ZM36.5 38.1975C36.5 39.5274 36.4987 40.4683 36.3975 41.1544C36.2978 41.8297 36.1168 42.1401 35.8528 42.3224L36.4209 43.1453C37.0201 42.7317 37.2706 42.0875 37.3868 41.3003C37.5013 40.524 37.5 39.4947 37.5 38.1975H36.5ZM14.5 30.1458C14.5 31.4706 14.4993 32.505 14.5917 33.3352C14.6855 34.1778 14.8793 34.8582 15.2979 35.4635L16.1204 34.8947C15.8298 34.4746 15.669 33.9742 15.5856 33.2245C15.5007 32.4624 15.5 31.4929 15.5 30.1458H14.5ZM20.3468 37.1546C19.0857 36.678 18.1784 36.3344 17.4949 35.9855C16.8225 35.6422 16.4109 35.3149 16.1204 34.8947L15.2979 35.4635C15.7164 36.0687 16.2847 36.4904 17.0402 36.8761C17.7846 37.2561 18.7531 37.6214 19.9933 38.09L20.3468 37.1546ZM15.5 6.80246C15.5 5.47262 15.5013 4.53172 15.6025 3.84563C15.7022 3.17031 15.8832 2.8599 16.1472 2.67764L15.5791 1.8547C14.9799 2.26829 14.7294 2.91255 14.6132 3.69967C14.4987 4.47602 14.5 5.50534 14.5 6.80246H15.5ZM20.5917 2.5965C19.3774 2.13764 18.4144 1.77235 17.6472 1.60479C16.8695 1.43494 16.178 1.44119 15.5791 1.8547L16.1472 2.67764C16.4113 2.4953 16.7662 2.43594 17.4338 2.58176C18.112 2.72988 18.9934 3.06153 20.2382 3.53194L20.5917 2.5965Z" fill="#F6F0FF"/><path d="M11 32.1458V8.80246C11 6.1755 11 4.86202 11.8631 4.26617C12.7262 3.67032 13.9558 4.13495 16.415 5.06422L27.8299 9.37771C30.3312 10.3229 31.5818 10.7955 32.2909 11.8209C33 12.8464 33 14.1823 33 16.8542V40.1975C33 42.8245 33 44.138 32.1369 44.7338C31.2738 45.3297 30.0442 44.865 27.585 43.9358L16.1701 39.6223C13.6688 38.6771 12.4182 38.2046 11.7091 37.1791C11 36.1536 11 34.8177 11 32.1458Z" fill="#0B0D19"/><path d="M16.1701 39.6223L15.9933 40.09L16.1701 39.6223ZM27.585 43.9358L27.4083 44.4035L27.585 43.9358ZM27.8299 9.37771L27.6532 9.84543L27.8299 9.37771ZM16.415 5.06422L16.5917 4.5965L16.415 5.06422ZM32.2909 11.8209L31.8796 12.1053V12.1053L32.2909 11.8209ZM32.1369 44.7338L32.4209 45.1453H32.4209L32.1369 44.7338ZM29.8233 16.5259C30.0816 16.6236 30.3701 16.4933 30.4677 16.235C30.5653 15.9767 30.4351 15.6881 30.1767 15.5905L29.8233 16.5259ZM14.1767 9.54443C13.9184 9.44682 13.6299 9.57709 13.5323 9.83541C13.4347 10.0937 13.5649 10.3823 13.8233 10.4799L14.1767 9.54443ZM29.8233 20.5226C30.0816 20.6202 30.3701 20.4899 30.4677 20.2316C30.5653 19.9733 30.4351 19.6848 30.1767 19.5872L29.8233 20.5226ZM14.1767 13.5411C13.9184 13.4435 13.6299 13.5737 13.5323 13.8321C13.4347 14.0904 13.5649 14.3789 13.8233 14.4765L14.1767 13.5411ZM29.8233 24.5192C30.0816 24.6169 30.3701 24.4866 30.4677 24.2283C30.5653 23.9699 30.4351 23.6814 30.1767 23.5838L29.8233 24.5192ZM14.1767 17.5377C13.9184 17.4401 13.6299 17.5704 13.5323 17.8287C13.4347 18.087 13.5649 18.3756 13.8233 18.4732L14.1767 17.5377ZM23.8233 26.2486C24.0816 26.3462 24.3701 26.216 24.4677 25.9576C24.5653 25.6993 24.4351 25.4108 24.1767 25.3132L23.8233 26.2486ZM14.1767 21.5344C13.9184 21.4368 13.6299 21.567 13.5323 21.8254C13.4347 22.0837 13.5649 22.3722 13.8233 22.4698L14.1767 21.5344ZM10.5 8.80246V32.1458H11.5V8.80246H10.5ZM15.9933 40.09L27.4083 44.4035L27.7618 43.4681L16.3468 39.1546L15.9933 40.09ZM33.5 40.1975V16.8542H32.5V40.1975H33.5ZM28.0067 8.90999L16.5917 4.5965L16.2382 5.53194L27.6532 9.84543L28.0067 8.90999ZM33.5 16.8542C33.5 15.5294 33.5007 14.495 33.4083 13.6648C33.3145 12.8222 33.1207 12.1418 32.7021 11.5365L31.8796 12.1053C32.1702 12.5255 32.331 13.0258 32.4144 13.7755C32.4993 14.5376 32.5 15.5071 32.5 16.8542H33.5ZM27.6532 9.84543C28.9143 10.322 29.8216 10.6656 30.5051 11.0145C31.1775 11.3578 31.5891 11.6851 31.8796 12.1053L32.7021 11.5365C32.2836 10.9313 31.7153 10.5096 30.9598 10.1239C30.2154 9.74386 29.2469 9.37862 28.0067 8.90999L27.6532 9.84543ZM27.4083 44.4035C28.6226 44.8624 29.5856 45.2277 30.3528 45.3952C31.1305 45.5651 31.822 45.5588 32.4209 45.1453L31.8528 44.3224C31.5887 44.5047 31.2338 44.5641 30.5662 44.4182C29.888 44.2701 29.0066 43.9385 27.7618 43.4681L27.4083 44.4035ZM32.5 40.1975C32.5 41.5274 32.4987 42.4683 32.3975 43.1544C32.2978 43.8297 32.1168 44.1401 31.8528 44.3224L32.4209 45.1453C33.0201 44.7317 33.2706 44.0875 33.3868 43.3003C33.5013 42.524 33.5 41.4947 33.5 40.1975H32.5ZM10.5 32.1458C10.5 33.4706 10.4993 34.505 10.5917 35.3352C10.6855 36.1778 10.8793 36.8582 11.2979 37.4635L12.1204 36.8947C11.8298 36.4746 11.669 35.9742 11.5856 35.2245C11.5007 34.4624 11.5 33.4929 11.5 32.1458H10.5ZM16.3468 39.1546C15.0857 38.678 14.1784 38.3344 13.4949 37.9855C12.8225 37.6422 12.4109 37.3149 12.1204 36.8947L11.2979 37.4635C11.7164 38.0687 12.2847 38.4904 13.0402 38.8761C13.7846 39.2561 14.7531 39.6214 15.9933 40.09L16.3468 39.1546ZM11.5 8.80246C11.5 7.47262 11.5013 6.53172 11.6025 5.84563C11.7022 5.17031 11.8832 4.8599 12.1472 4.67764L11.5791 3.8547C10.9799 4.26829 10.7294 4.91255 10.6132 5.69967C10.4987 6.47602 10.5 7.50534 10.5 8.80246H11.5ZM16.5917 4.5965C15.3774 4.13764 14.4144 3.77235 13.6472 3.60479C12.8695 3.43494 12.178 3.44119 11.5791 3.8547L12.1472 4.67764C12.4113 4.4953 12.7662 4.43594 13.4338 4.58176C14.112 4.72988 14.9934 5.06153 16.2382 5.53194L16.5917 4.5965ZM30.1767 15.5905L14.1767 9.54443L13.8233 10.4799L29.8233 16.5259L30.1767 15.5905ZM30.1767 19.5872L14.1767 13.5411L13.8233 14.4765L29.8233 20.5226L30.1767 19.5872ZM30.1767 23.5838L14.1767 17.5377L13.8233 18.4732L29.8233 24.5192L30.1767 23.5838ZM24.1767 25.3132L14.1767 21.5344L13.8233 22.4698L23.8233 26.2486L24.1767 25.3132Z" fill="#F6F0FF"/></svg>
                    </span>
                    <span class="text">По реквизитам</span>
                </div>
                <div class="payment-ways__methods-item animation-element">
                    <span class="icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 19.9794V10.8093C7 8.17205 7 6.85344 7.86578 6.25731C8.73155 5.66119 9.9634 6.13163 12.4271 7.07251L39.8542 17.5469C42.3442 18.4979 43.5892 18.9733 44.2947 19.9979C45.0001 21.0224 45.0001 22.3551 45.0001 25.0205V34.1906C45.0001 36.8279 45.0001 38.1465 44.1343 38.7426C43.2686 39.3387 42.0367 38.8683 39.5731 37.9274L39.573 37.9274L12.1459 27.453C9.65587 26.502 8.41087 26.0266 7.70544 25.002C7 23.9775 7 22.6448 7 19.9794Z" fill="#0B0D19" stroke="#F6F0FF"/><path d="M3 21.9794V12.8092C3 10.172 3 8.85341 3.86578 8.25728C4.73155 7.66116 5.9634 8.1316 8.42708 9.07248L35.8542 19.5469C38.3442 20.4978 39.5892 20.9733 40.2947 21.9978C41.0001 23.0224 41.0001 24.3551 41.0001 27.0205V36.1906C41.0001 38.8278 41.0001 40.1464 40.1343 40.7426C39.2686 41.3387 38.0367 40.8683 35.5731 39.9274L35.573 39.9274L8.14585 29.4529C5.65587 28.502 4.41087 28.0265 3.70544 27.002C3 25.9775 3 24.6448 3 21.9794Z" fill="#0B0D19" stroke="#F6F0FF"/><path d="M22.155 28.9478C22.5125 29.1141 22.8628 29.2179 23.1858 29.2533C23.5087 29.2886 23.7981 29.2549 24.0374 29.154C24.2767 29.053 24.4612 28.8869 24.5803 28.665C24.6995 28.4431 24.754 28.2194 24.7318 27.8608C24.5342 24.6671 19.1934 23.8154 18.9958 20.6217C18.9766 20.3126 19.0281 20.0394 19.1473 19.8175C19.2664 19.5956 19.4509 19.4295 19.6902 19.3285C19.9295 19.2276 20.2188 19.1938 20.5418 19.2292C20.8648 19.2646 21.2151 19.3684 21.5726 19.5347M22.155 28.9478C21.7975 28.7815 21.4397 28.556 21.1021 28.2841C20.7645 28.0122 20.4537 27.6993 20.1873 27.3632C19.921 27.027 19.7044 26.6743 19.5499 26.3252C19.3955 25.976 19.3061 25.6373 19.287 25.3282M22.155 28.9478L22.2278 30.1245M24.4406 23.1542C24.4406 23.1542 24.3321 22.5064 24.1776 22.1573C24.0232 21.8081 23.8066 21.4554 23.5403 21.1193C23.2739 20.7832 22.9631 20.4703 22.6255 20.1984C22.2879 19.9265 21.9301 19.701 21.5726 19.5347M21.5726 19.5347L21.4998 18.358" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="text">Наличными</span>
                </div>
            </div>
            <div class="payment-ways__mark animation-element">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/payment-subtitle.php"
                    )
                );?>
            </div>
            <div class="payment-ways__requisites">
                <?include_once($_SERVER["DOCUMENT_ROOT"]."/comps/payment-details.php");?>
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "requisites", Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                        "AJAX_MODE" => "N",	// Включить режим AJAX
                        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                        "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                        "DISPLAY_DATE" => "N",	// Выводить дату элемента
                        "DISPLAY_NAME" => "Y",	// Выводить название элемента
                        "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                        "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                        "FIELD_CODE" => array(	// Поля
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",	// Фильтр
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                        "IBLOCK_ID" => "58",	// Код информационного блока
                        "IBLOCK_TYPE" => "requisites",	// Тип информационного блока (используется только для проверки)
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                        "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                        "NEWS_COUNT" => "30",	// Количество новостей на странице
                        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                        "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                        "PAGER_TITLE" => "Новости",	// Название категорий
                        "PARENT_SECTION" => "",	// ID раздела
                        "PARENT_SECTION_CODE" => "",	// Код раздела
                        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                        "PROPERTY_CODE" => array(	// Свойства
                            0 => "",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                        "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                        "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                        "SET_STATUS_404" => "N",	// Устанавливать статус 404
                        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                        "SHOW_404" => "N",	// Показ специальной страницы
                        "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "TIMESTAMP_X",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
                        "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                    ),
                    false
                );?>
            </div>
        </div>
    </div>
</section>
<div class="place-target-container">
    <span id="kontakty" class="place-target-anchor"></span>
</div>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "contacts", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "59",	// Код информационного блока
		"IBLOCK_TYPE" => "contacts",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "10",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "CONTACTS_TYPE",
			1 => "CONTACTS_ICON_CODE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "TIMESTAMP_X",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>
<?include_once($_SERVER["DOCUMENT_ROOT"]."/comps/order-form.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>