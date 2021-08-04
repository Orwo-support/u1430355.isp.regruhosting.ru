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
//debug($arResult);
?>
<section class="section section_certificates">
    <div class="certificates">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <?=$arResult['DESCRIPTION']?>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless">
                <div class="certificates__subtitle animation-element">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/certificates-subtitle.php"
                        )
                    );?>
                </div>
                <div class="certificates__list swiper-container"
                     id="certificatesSlider">
                    <div class="certificates__list-wrap swiper-wrapper">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="certificates__slide swiper-slide"
                                 id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="certificates__card animation-element gallery-picture custom-cursor"
                                     data-gallery-img-source="<?=$arItem['DETAIL_PICTURE']['SRC']?>">
                                    <div class="certificates__pic"
                                         style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>')"></div>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev animation-element"
                     id="btnCertificatesSliderPrev">
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
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next animation-element"
                     id="btnCertificatesSliderNext">
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
    </div>
</section>