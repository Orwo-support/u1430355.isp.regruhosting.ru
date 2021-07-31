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
<section class="section section_list">
    <div class="list">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <?=$arResult["DESCRIPTION"]?>
            </h2>
        </div>
        <div class="container-endless-fix">
            <div class="endless list__list swiper-container" id="listSlider">
                <div class="list__list__wrap swiper-wrapper">
                    <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="list__slide swiper-slide"
                             id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="list__card">
                                <div class="list__num">
                                    <span class="back"></span>
                                    <span class="number">
                                    <span class="img img_<?= ($key + 1);?> animation-element"></span>
                                </span>
                                </div>
                                <div class="list__title animation-element">
                                    <?=$arItem["PREVIEW_TEXT"]?>
                                </div>
                                <div class="list__content animation-element">
                                    <?=$arItem["DETAIL_TEXT"]?>
                                </div>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>