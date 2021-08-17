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
    <?if($APPLICATION->GetCurPage() == '/'):?>
        <div class="list__background"></div>
    <?endif;?>
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
                    <? switch ($APPLICATION->GetCurPage()) {
                        case '/':
                            $ACTION_LIST_TITLE = 'Давайте знакомиться';
                            $ACTION_LIST_LINK_NAME = 'О компании';
                            $ACTION_LIST_LINK_URL = '/o-nas-garantiya-kontakty/#o-kompanii';
                            break;
                        case '/o-nas-garantiya-kontakty/':
                            $ACTION_LIST_TITLE = 'Наши проекты';
                            $ACTION_LIST_LINK_NAME = 'Смотреть портфолио';
                            $ACTION_LIST_LINK_URL = '/nashi-raboty/';
                            break;
                    }?>
                    <?if(isset($ACTION_LIST_TITLE)):?>
                        <div class="list__slide swiper-slide lets-meet">
                            <div class="list__card">
                                <span class="text animation-element"><?=$ACTION_LIST_TITLE;?></span>
                                <div class="link-container animation-element">
                                    <a class="link revers" href="<?=$ACTION_LIST_LINK_URL;?>">
                                        <?=$ACTION_LIST_LINK_NAME;?>
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
                                </div>
                            </div>
                        </div>
                    <?endif;?>
                </div>
            </div>
        </div>
    </div>
</section>