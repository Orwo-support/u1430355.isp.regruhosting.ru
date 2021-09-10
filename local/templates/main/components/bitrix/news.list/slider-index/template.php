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
//debug($arResult["ITEMS"]);
?>
<?$INDEX_SLIDER_COUNT = count($arResult["ITEMS"]);?>
<section class="section section_slider">
    <div class="slider">
        <div class="slider__background-image<?=$INDEX_SLIDER_COUNT > 1 ? ' swiper-container' : '';?>" id="bannerPictureSlider">
            <?if($INDEX_SLIDER_COUNT > 1):?>
                <div class="swiper-wrapper">
            <?endif;?>
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <div class="swiper-slide">
                        <div class="slider__picture"
                             data-swiper-parallax-opacity="0"
                             data-swiper-parallax="-200"
                             data-swiper-parallax-duration="1000">
                            <? $CUSTOM_SLIDER_CODE = $arItem["PROPERTIES"]
                                ["CUSTOM_SLIDER_CODE"]
                                ["VALUE"]
                                ["TEXT"];

                            if ($CUSTOM_SLIDER_CODE) :?>
                                <?=html_entity_decode($CUSTOM_SLIDER_CODE);?>
                            <?else:?>
                                <img class="image pic <?=$arItem["PROPERTIES"]["PICTURE_CUSTOM_CLASSES"]["VALUE"]?>"
                                     src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"
                                     alt="">
                            <?endif;?>
                        </div>
                    </div>
                <?endforeach;?>
            <?if($INDEX_SLIDER_COUNT > 1):?>
                </div>
            <?endif;?>
        </div>
        <div class="slider__mask"></div>
        <div class="slider__content <?=$INDEX_SLIDER_COUNT > 1 ? 'swiper-container' : '';?>" id="bannerContentSlider">
            <?if($INDEX_SLIDER_COUNT > 1):?>
                <div class="swiper-wrapper">
            <?endif;?>
                <?foreach ($arResult["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="slider__slide swiper-slide"
                         id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <h2 class="slider__title"
                            data-swiper-parallax-x="-50"
                            data-swiper-parallax-opacity="0"
                            data-swiper-parallax-duration="900">
                            <?=$arItem["PROPERTIES"]["SLIDER_TITLE"]["~VALUE"]["TEXT"]?>
                        </h2>
                        <div class="slider__subtitle"
                             data-swiper-parallax-x="-200"
                             data-swiper-parallax-opacity="0"
                             data-swiper-parallax-duration="1200">
                            <?=$arItem["PROPERTIES"]["SLIDER_SUBTITLE"]["~VALUE"]["TEXT"]?>
                        </div>
                        <div class="slider__actions">
                            <div data-swiper-parallax-x="-300"
                                 data-swiper-parallax-opacity="0"
                                 data-swiper-parallax-duration="1700"><a class="btn btn_primary" href="/kalkulyator/">Узнать стоимость</a></div>
                            <div data-swiper-parallax-x="-350"
                                 data-swiper-parallax-opacity="0"
                                 data-swiper-parallax-duration="2100"><span class="link revers btn-quiz-toggle">Как выбрать экран?</span></div>
                        </div>
                    </div>
                <?endforeach;?>
            <?if($INDEX_SLIDER_COUNT > 1):?>
                </div>
            <?endif;?>
            <?if($INDEX_SLIDER_COUNT > 1):?>
                <div class="slide-nums" id="sliderNums">
                    <div class="slide-nums__current">
                        <div class="slide-nums__scrolled">
                            <?for($s = 1; $s <= $INDEX_SLIDER_COUNT; $s++):?>
                                <div class="slide-nums__number<?=$s == 1 ? ' active' : ''?>">
                                    0<?=$s?>
                                </div>
                            <?endfor;?>
                        </div>
                    </div>
                    <div class="slide-nums__all">
                        <div class="number">0<?=$INDEX_SLIDER_COUNT?></div>
                    </div>
                </div>
                <div class="btn btn_icon-outlined not-focused" id="btnSliderPrev">
                    <svg width="14"
                         height="26"
                         viewBox="0 0 14 26"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1"
                              stroke="#80758F"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="btn btn_icon-outlined not-focused" id="btnSliderNext">
                    <svg width="14"
                         height="26"
                         viewBox="0 0 14 26"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1"
                              stroke="#80758F"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
            <?endif;?>
        </div>
    </div>
</section>