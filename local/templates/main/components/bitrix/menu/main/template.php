<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <div class="nav">
        <ul class="nav__list">
            <?foreach($arResult as $arItem):
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                ?>
                <?if($arItem["ITEM_INDEX"] == 0):?>
                <li class="nav__item dropdown">
                    <a class="cursor-default" href="">
                        <?=$arItem["TEXT"]?>
                        <span class="drop-arr">
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.42847 3.6001L7.9999 8.4001L12.5713 3.6001" stroke="#D9D9D9" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                            </span>
                    </a>
                    <div class="dropsection">
                        <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "submain-left",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N", // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "left", // Тип меню для остальных уровней
                                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600", // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "N", // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                "ROOT_MENU_TYPE" => "submain-left",	// Тип меню для первого уровня
                                "USE_EXT" => "N", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            ),
                            false
                        );?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "submain-center",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N", // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "left", // Тип меню для остальных уровней
                                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600", // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "N", // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                "ROOT_MENU_TYPE" => "submain-center",	// Тип меню для первого уровня
                                "USE_EXT" => "N", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            ),
                            false
                        );?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "submain-right",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N", // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "left", // Тип меню для остальных уровней
                                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600", // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "N", // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                "ROOT_MENU_TYPE" => "submain-right",	// Тип меню для первого уровня
                                "USE_EXT" => "N", // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            ),
                            false
                        );?>
                    </div>
                </li>
            <?else:?>
                <li class="nav__item">
                    <a class="<?=$arItem["SELECTED"] ? 'active' : '';?>" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </li>
                <?if($arItem["ITEM_INDEX"] == 2):?>
                    <li class="nav__item nav__points dropdown">
                        <a class="nav__points-btn">
                            <span></span>
                        </a>
                        <div class="dropsection">
                            <ul class="nav__droplist">
                                <?foreach($arResult as $arItem):?>
                                    <?if($arItem["ITEM_INDEX"] > 2):?>
                                        <li class="nav__dropitem">
                                            <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                                        </li>
                                    <?endif;?>
                                <?endforeach;?>
                            </ul>
                        </div>
                    </li>
                <?endif;?>
            <?endif?>
            <?endforeach?>
            <li class="nav__item nav__item_icon">
                <div class="icon icon_calc"><img src="/img/icon-calc-signs.svg" alt=""></div>
                <a>Калькулятор</a>
            </li>
            <li class="nav__item nav__item_icon">
                <div class="icon icon_mail"><img src="/img/icon-mail.svg" alt=""></div>
                <a>Оформить заявку</a>
            </li>
        </ul>
    </div>
<?endif?>