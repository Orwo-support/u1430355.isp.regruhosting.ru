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
                        <a>
                            <?=$arItem["TEXT"]?>
                            <span class="drop-arr">
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.42847 3.6001L7.9999 8.4001L12.5713 3.6001" stroke="#D9D9D9" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                            </span>
                        </a>
                        <div class="dropsection">
                            <ul class="nav__droplist">
                                <li class="nav__dropitem nav__dropitem_caption">
                                    <a href="#">Продукция на заказ</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Светодиодный экран</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Бегущая строка</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Электронное табло</a></li>
                                <li class="nav__dropitem">
                                    <a href="#">Медиаборт</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Светодиодный шар</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Видеокуб</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Рекламный медиабаннер</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Медиафасад</a>
                                </li>
                            </ul>
                            <ul class="nav__droplist">
                                <li class="nav__dropitem nav__dropitem_caption">
                                    <a href="#">Готовые решения</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Экраны для ТЦ и БЦ</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Экраны для спортивных мероприятий</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Экраны для конференций</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Рекламные уличные экраны</a>
                                </li>
                            </ul>
                            <ul class="nav__droplist">
                                <li class="nav__dropitem nav__dropitem_caption">
                                    <a href="#">Услуги</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Аренда под ключ</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Монтаж светодиодных экранов</a>
                                </li>
                                <li class="nav__dropitem">
                                    <a href="#">Проектирование</a>
                                </li>
                            </ul>
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