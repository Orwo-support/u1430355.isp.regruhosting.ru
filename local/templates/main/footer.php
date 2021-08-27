<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
        </main>
        <footer class="footer" id="footer">
            <div class="footer__logotype">
                <a class="logo" href="/">
                    <img class="pic" src="/img/logo.svg" alt="">
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
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "socials-footer", array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "socials",
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
			0 => "SOCIAL_LINK",
			1 => "SOCIAL_ICON",
			2 => "SHOW_IN_FOOTER",
			3 => "",
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
		"STRICT_SECTION_CHECK" => "N"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
                    <a class="logo" href="/">
                        <img class="logo-mob pic" src="/img/mob-logo.svg" alt="">
                        <img class="logo-desc pic" src="/img/logo.svg" alt="">
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