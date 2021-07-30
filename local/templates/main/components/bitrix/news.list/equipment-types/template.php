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
<section class="section section_types">
    <div class="types">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <span class="title">Типы оборудования</span>
                <span class="section__link animation-element">
                    <a class="revers"
                       href="#"
                       data-go-to-place-link="true"
                       data-go-to-place-target="#order-form">
                        Нужна помощь в подборе оборудования?
                        <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                    </a>
                </span>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless types__list swiper-container" id="typesSlider">
                <div class="types__list__wrap swiper-wrapper">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                            <div class="types__slide swiper-slide"
                                 id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="types__card animation-element">
                                    <div class="types__pic custom-cursor gallery-picture"
                                         data-gallery-img-source="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
                                        <div class="image" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)"></div>
                                    </div>
                                    <div class="types__title">
                                        <div class="types__caption"><?=$arItem["PREVIEW_TEXT"]?></div>
                                        <div class="types__btn">
                                            <svg width="28"
                                                 height="16"
                                                 viewBox="0 0 28 16"
                                                 fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 2L14 14L26 2"
                                                      stroke="#A3A3A3"
                                                      stroke-width="4"
                                                      stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="types__description">
                                        <div class="text">
                                            <?=$arItem["DETAIL_TEXT"]?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?endforeach;?>
                </div>
            </div>
            <div class="btn btn_icon-outlined lite-background slider-controller slider-controller_prev"
                 id="btnTypesSliderPrev">
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
            <div class="btn btn_icon-outlined lite-background slider-controller slider-controller_next"
                 id="btnTypesSliderNext">
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
        </div>
    </div>
</section>