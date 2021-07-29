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
<div class="delivery__methods-slider">
    <div class="delivery__methods-list swiper-container" id="deliveryMethodsSlider">
        <div class="delivery__methods-wrap swiper-wrapper">
            <?foreach ($arResult["ITEMS"] as $key=>$arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="delivery__methods-slide swiper-slide tabs-item<?=$key == 0 ? ' visible show' : '';?>"
                     id="<?=$arItem['CODE']?>">
                    <div class="delivery__methods-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="delivery__methods-caption">
                            <?=$arItem['NAME']?>
                        </div>
                        <div class="delivery__methods-description">
                            <?=$arItem['DETAIL_TEXT'];?>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</div>