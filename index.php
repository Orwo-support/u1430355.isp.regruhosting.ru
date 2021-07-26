<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider-index", 
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
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "sliders",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
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
			0 => "SLIDER_TITLE",
			1 => "SLIDER_SUBTITLE",
			2 => "PICTURE_CUSTOM_CLASSES",
			3 => "CUSTOM_SLIDER_CODE",
			4 => "",
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
		"COMPONENT_TEMPLATE" => "slider-index"
	),
	false
);?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "our-offers", Array(
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
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "6",	// Код информационного блока
		"IBLOCK_TYPE" => "offer",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
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
		"SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "partners-choice", Array(
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






<section class="section section_projects">
    <div class="projects">
        <div class="container">
            <h2 class="section__title animation-element">
                <span class="title">Реализованные проекты</span>
                <span class="section__link animation-element">
                <a class="revers" href="">
                    Смотреть портфолио
                    <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                </a>
            </span>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless projects__list swiper-container" id="projectsSlider">
                <div class="projects__list__wrap swiper-wrapper">
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card animation-element" href="">
                            <div class="projects__place">г. Москва<br>Конференц-зал</div>
                            <div class="projects__params">
                                <div class="screen">Экран 13,11 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 2,5 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card animation-element" href="">
                            <div class="projects__place">Экспоцентр Москва</div>
                            <div class="projects__params">
                                <div class="screen">Экран Absen 48 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 3,9 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card animation-element" href="">
                            <div class="projects__place">Ассоциация банков<br>России</div>
                            <div class="projects__params">
                                <div class="screen">Экран Absen 18 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 3,9 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card" href="">
                            <div class="projects__place">г. Москва<br>Конференц-зал</div>
                            <div class="projects__params">
                                <div class="screen">Экран 13,11 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 2,5 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card" href="">
                            <div class="projects__place">Экспоцентр Москва</div>
                            <div class="projects__params">
                                <div class="screen">Экран Absen 48 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 3,9 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card" href="">
                            <div class="projects__place">Ассоциация банков<br>России</div>
                            <div class="projects__params">
                                <div class="screen">Экран Absen 18 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 3,9 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev" id="btnProjectsPrev">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next" id="btnProjectsNext">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
    </div>
</section>



<?$APPLICATION->IncludeComponent("bitrix:news.list", "work-on-the-order", Array(
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
		"IBLOCK_ID" => "8",	// Код информационного блока
		"IBLOCK_TYPE" => "work_stages",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "7",	// Количество новостей на странице
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
			0 => "WORK_DAYS",
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



<section class="section section_feedback">
    <div class="feedback__background"></div>
    <div class="feedback">
        <div class="container">
            <h2 class="section__title animation-element">О нас говорят</h2>
        </div>
        <div class="container-endless">
            <div class="endless feedback__list swiper-container" id="feedbackList">
                <div class="feedback__list__wrap swiper-wrapper">
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card animation-element">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>всеволодов</span>
                                <span>всеволод</span>
                                <span>всеволодович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения АО “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card animation-element">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>иванов</span>
                                <span>иван</span>
                                <span>иванович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения
                                АО “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card animation-element">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>всеволодов</span>
                                <span>всеволод</span>
                                <span>всеволодович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения
                                АО “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>иванов</span>
                                <span>иван</span>
                                <span>иванович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения АО
                                “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>всеволодов</span>
                                <span>всеволод</span>
                                <span>всеволодович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения АО
                                “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>иванов</span>
                                <span>иван</span>
                                <span>иванович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения АО
                                “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev" id="btnFeedbackPrev">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next" id="btnFeedbackNext">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
    </div>
</section>


<section class="section section_callback">
    <div class="callback">
        <div class="container">
            <h2 class="section__title animation-element">
                <span class="title">Связаться с нами</span>
                <span class="section__link animation-element">
                <a class="revers" href="">
                    Открыть контакты
                    <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                    </a>
            </span>
            </h2>
            <div class="callback__title animation-element">
                Заинтересовались светодиодным оборудованием?
            </div>
            <div class="callback__subtitle animation-element">
                Укажите ваш мобильный номер телефона и мы
                перезвоним в течение 5 минут
            </div>
        </div>
        <div class="callback__background-pic animation-element">
            <img class="pic" src="/img/callback-pic.png" alt="">
        </div>
        <div class="container-endless">
            <div class="endless">
                <form class="callback__form animation-element" id="callbackForm" action="/" method="POST" data-target="#calbackModal">
                    <div class="callback__data">
                        <!-- Для валидного значения меняем класс у controller на valid-->
                        <div class="controller controller__input">
                            <label class="label label__icon">
                            <span class="icon">
                                <img class="pic" src="/img/icon-phone.svg" alt="">
                            </span>
                                <input class="input" id="callbackPhone" type="text" placeholder="+7 900 000 00 00" name="phone">
                            </label>
                            <div class="validator validator__cross">
                                <img class="valid pic" src="/img/icon-validator-cross-valid.svg" alt="">
                                <img class="invalid pic" src="/img/icon-validator-cross-invalid.svg" alt="">
                            </div>
                            <div class="validator validator__check">
                                <img class="valid pic" src="/img/icon-validator-check-valid.svg" alt="">
                                <img class="invalid pic" src="/img/icon-validator-check-invalid.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="callback__actions">
                        <button class="btn btn_primary" type="submit">
                            Отправить номер
                        </button>
                        <span class="privacy">
                        Нажимая на кнопку “Отправить номер”, я даю согласие на
                        <a class="revers" href="" target="_blank">
                            обработку моих персональных данных
                        </a>
                    </span>
                    </div>
                    <span class="send-mail">
                    Или напишите нам
                    <a href="mailto:info@ekranika.ru">info@ekranika.ru</a>
                </span>
                </form>
            </div>
        </div>
    </div>
</section>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "faq", Array(
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
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "10",	// Код информационного блока
		"IBLOCK_TYPE" => "faq",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
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
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>