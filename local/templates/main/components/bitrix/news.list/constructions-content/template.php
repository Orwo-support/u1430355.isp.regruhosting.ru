<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//debug($arResult['ITEMS']);
?>
<div class="slider-tabs">
    <div class="slider-tabs__container swiper-container" id="ourNewsSlider">
        <div class="slider-tabs__wrap swiper-wrapper">
            <div class="marker"></div>
            <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                <div class="slider-tabs__slide swiper-slide">
                    <div class="slider-tabs__button<?= $key == 0 ? ' active' : '';?>"
                         data-target-tab-id="#<?=$arItem['CODE']?>">
                        <?=$arItem['NAME']?>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</div>