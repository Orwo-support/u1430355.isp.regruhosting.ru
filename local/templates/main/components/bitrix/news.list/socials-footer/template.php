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
<ul class="socials">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <?if ($arItem["PROPERTIES"]["SHOW_IN_FOOTER"]["VALUE_XML_ID"] == "Y") :?>
            <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <a class="social-icon"
                   href="<?=$arItem["PROPERTIES"]["SOCIAL_LINK"]["VALUE"]?>"
                   target="_blank">
                    <div class="social-icon__pic">
                        <?=html_entity_decode($arItem["PROPERTIES"]["SOCIAL_ICON"]["VALUE"]["TEXT"]);?>
                    </div>
                </a>
            </li>
        <?endif;?>
    <?endforeach;?>
</ul>