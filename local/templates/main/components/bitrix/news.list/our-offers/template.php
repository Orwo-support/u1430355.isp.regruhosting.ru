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
<section class="section section_offer">
    <div class="offer">
        <div class="container">
            <h2 class="section__title animation-element">
                <span class="title">Мы предлагаем</span>
                <span class="section__link animation-element">
                <a class="revers" href="/svetodiodnyy-ekran/">
                    Выбрать готовые кабинеты
                    <svg width="12"
                         height="17"
                         viewBox="0 0 12 17"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                            <path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289"
                                  stroke="#AB78FF"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a>
            </span>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless offer__list swiper-container" id="offerSlider">
                <div class="offer__list__wrap swiper-wrapper">
                    <?foreach ($arResult["ITEMS"] as $arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="offer__slide swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <a class="offer__card animation-element" href="<?=$arItem["PROPERTIES"]["TARGET_LINK"]['VALUE']?>">
                                <div class="offer__pic">
                                    <div class="image" style="background-image: url(<?=$arItem["DETAIL_PICTURE"]["SRC"]?>)"></div>
                                </div>
                                <div class="offer__caption"><?=$arItem["NAME"]?></div>
                                <div class="offer__content"><?=$arItem["DETAIL_TEXT"]?></div>
                            </a>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                 id="btnOfferSliderNext">
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
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                 id="btnOfferSliderPrev">
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