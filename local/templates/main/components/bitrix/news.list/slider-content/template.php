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

$INFO_BLOCK_DESCRIPTION = $arResult["DESCRIPTION"];
$INFO_BLOCK_IMG_PATH = CFile::GetPath($arResult["PICTURE"]);
$RENT_SLIDER_COUNT = count($arResult["ITEMS"]);
?>
<section class="section section_banner-content">
    <div class="container">
        <div class="banner-content animation-element">
            <div class="banner-content__wrap">
                <div class="banner-content__picture"
                     style="background-image: url('<?=$INFO_BLOCK_IMG_PATH?>');"
                     data-swiper-parallax-opacity="0">
                </div>
                <div class="banner-content__desc">
                    <h2 class="h2 banner-content__title">
                        <?=$INFO_BLOCK_DESCRIPTION?>
                    </h2>
                    <div class="banner-content__slider<?=$RENT_SLIDER_COUNT > 1 ? ' swiper-container' : '';?>" id="contentBannerSlider">
                        <div class="banner-content__slider-wrap<?=$RENT_SLIDER_COUNT > 1 ? ' swiper-wrapper' : '';?>">
                            <?foreach($arResult["ITEMS"] as $arItem):?>
                                <?
                                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                ?>
                                <div class="banner-content__slide swiper-slide"
                                     id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                    <div class="banner-content__subtitle"
                                         data-swiper-parallax-opacity="0">
                                        <?=$arItem["PREVIEW_TEXT"]?>
                                    </div>
                                    <div class="<?
                                        if ($arItem['PROPERTIES']['SLIDER_ITEM_CUSTOM_CLASSES']['VALUE']) {
                                            print $arItem['PROPERTIES']['SLIDER_ITEM_CUSTOM_CLASSES']['VALUE'];
                                        } else {
                                            print 'banner-content__text';
                                        }?>"
                                         data-swiper-parallax-x="-700"
                                         data-swiper-parallax-opacity="0"
                                         data-swiper-parallax-duration="700">
                                        <?=$arItem["DETAIL_TEXT"]?>
                                    </div>
                                </div>
                            <?endforeach;?>
                        </div>
                    </div>
                    <div class="banner-content__actions">
                        <a class="btn btn_primary" href="/kalkulyator/">
                            Рассчитать стоимость
                        </a>
                        <a class="link revers"
                           href="#"
                           data-go-to-place-link="true"
                           data-go-to-place-target="#order-form">
                            Отправить заявку на расчёт
                        </a>
                    </div>
                </div>
            </div>
            <?if($RENT_SLIDER_COUNT > 1):?>
                <div class="slide-nums" id="bannerSliderNums">
                    <div class="slide-nums__current">
                        <div class="slide-nums__scrolled">
                            <?for($s = 1; $s <= $RENT_SLIDER_COUNT; $s++):?>
                                <div class="slide-nums__number<?=$s == 1 ? ' active' : ''?>">
                                    0<?=$s?>
                                </div>
                            <?endfor;?>
                        </div>
                    </div>
                    <div class="slide-nums__all">
                        <div class="number">0<?=$RENT_SLIDER_COUNT?></div>
                    </div>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                     id="btnBannerProjectsPrev">
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
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                     id="btnBannerProjectsNext">
                    <svg width="14"
                         height="26"
                         viewBox="0 0 14 26"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
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