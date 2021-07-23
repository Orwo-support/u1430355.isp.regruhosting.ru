<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
        </main>
        <footer class="footer" id="footer">
            <div class="footer__logotype">
                <a class="logo" href="/">
                    <img src="/img/logo.svg" alt="">
                </a>
                <span class="designed">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/designer.php"
                        )
                    );?>
                </span>
            </div>
            <div class="footer__content">
                <div class="footer__contacts">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/footer-phone.php"
                        )
                    );?>
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "socials-footer", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                            "AJAX_MODE" => "N",	// Включить режим AJAX
                            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
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
                            "IBLOCK_ID" => "3",	// Код информационного блока
                            "IBLOCK_TYPE" => "socials",	// Тип информационного блока (используется только для проверки)
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
                                0 => "SOCIAL_LINK",
                                1 => "SOCIAL_ICON",
                                2 => "SHOW_IN_FOOTER",
                                3 => "",
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
                    <a class="logo" href="/">
                        <img class="logo-mob" src="/img/mob-logo.svg" alt="">
                        <img class="logo-desc" src="/img/logo.svg" alt="">
                    </a>
                </div>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", Array(
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
                        "ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                    false
                );?>
            </div>
            <div class="footer__copyright">
                <span class="content">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/footer-copy-text.php"
                        )
                    );?>
                </span>
                <span class="copy">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/footer-copy.php"
                        )
                    );?>
                </span>
                <span class="designed">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/designer.php"
                        )
                    );?>
                </span>
            </div>
            <button class="scroll-to-page-start" id="scrollToPageStart">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
                    <g>
                        <g>
                            <path fill="#F6F0FF" d="M6.3,12.5c-0.1,0-0.2,0-0.3-0.1l-4.3-4c0,0,0,0,0,0c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1 c0,0,0,0,0,0l0,0c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0-0.1,0-0.1,0-0.1c0,0,0,0,0,0c0-0.1,0.1-0.1,0.1-0.1c0,0,0,0,0,0l4.3-4 c0.2-0.2,0.5-0.2,0.7,0c0.2,0.2,0.2,0.5,0,0.7L3.3,7.5H14c0.3,0,0.5,0.2,0.5,0.5S14.3,8.5,14,8.5H3.3l3.4,3.1 c0.2,0.2,0.2,0.5,0,0.7C6.6,12.4,6.4,12.5,6.3,12.5z"/>
                        </g>
                    </g>
                </svg>
            </button>
        </footer>
    </body>
</html>