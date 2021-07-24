<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<ul class="nav__droplist">
    <li class="nav__dropitem nav__dropitem_caption">
        <a class="cursor-default" href="">Услуги</a>
    </li>
    <?
    foreach($arResult as $arItem):
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