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
<section class="section section_clients">
    <div class="clients">
        <div class="container">
            <h2 class="section__title animation-element">Наши клиенты</h2>
        </div>
        <div class="container-endless">
            <div class="endless clients__list swiper-container" id="clientsList">
                <div class="clients__list__wrap swiper-wrapper">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="clients__slide swiper-slide"
                             id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="clients__card">
                                <a class="clients__link animation-element" href="<?=$arItem["PROPERTIES"]["CLIENT_LINK_URL"]["VALUE"]?>">
                                    <?if($arItem["PROPERTIES"]["CLIENT_LOGO_TEXT"]["VALUE"]):?>
                                        <span class="txt"><?=$arItem["PROPERTIES"]["CLIENT_LOGO_TEXT"]["VALUE"]?></span>
                                    <?elseif($arItem["PROPERTIES"]["CLIENT_LOGO_SVG_CODE"]["VALUE"]):?>
                                        <?=html_entity_decode($arItem["PROPERTIES"]["CLIENT_LOGO_SVG_CODE"]["VALUE"]["TEXT"]);?>
                                    <?else:?>
                                        <span class="picture"
                                              title="<?=htmlspecialchars($arItem["DETAIL_PICTURE"]["DESCRIPTION"])?>"
                                              style="background-image: url('<?=$arItem["DETAIL_PICTURE"]["SRC"]?>');"></span>
                                    <?endif;?>
                                </a>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev" id="btnClientsSliderPrev">
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
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next" id="btnClientsSliderNext">
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