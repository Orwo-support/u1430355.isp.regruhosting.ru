<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?//debug($arParams)?>
<?//debug($arResult)?>
<?if (!empty($arResult)):?>
    <?switch ($arParams['ROOT_MENU_TYPE']) {
        case 'submainleft':
            $SUBMENU_LIST_TITLE = 'Продукция на заказ';
            break;
        case 'submaincenter':
            $SUBMENU_LIST_TITLE = 'Готовые решения';
            break;
        case 'submainright':
            $SUBMENU_LIST_TITLE = 'Услуги';
            break;
    }?>
    <ul class="nav__droplist">
        <li class="nav__dropitem nav__dropitem_caption">
            <a class="cursor-default" href=""><?=$SUBMENU_LIST_TITLE?></a>
        </li>
        <?foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <?if($arItem["SELECTED"]):?>
                <li class="nav__dropitem">
                    <a href="<?=$arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?></a>
                </li>
            <?else:?>
                <li class="nav__dropitem">
                    <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </li>
            <?endif?>
        <?endforeach?>
    </ul>
<?endif?>