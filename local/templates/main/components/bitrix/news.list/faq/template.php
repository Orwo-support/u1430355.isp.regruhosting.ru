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
$isMainPage = preg_match('/baza-znaniy/', $APPLICATION->GetCurPage()) !== 1;
?>
<div class="place-target-container">
    <span id="faq" class="place-target-anchor"></span>
</div>
<section class="section section_faq">
    <div class="faq">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <span class="title">Отвечаем на вопросы</span>
                <?if($isMainPage):?>
                    <span class="section__link animation-element">
                    <a class="revers" href="/baza-znaniy/">
                        База знаний
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
                <?endif;?>
            </h2>
            <div class="faq__list animation-element">
                <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <?if($isMainPage):?>
                        <?if($arItem['PROPERTIES']['SHOW_IN_INDEX_PAGE']['VALUE']):?>
                            <div class="faq__item display show"
                                 id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="faq__caption">
                                    <?=$arItem['NAME']?>
                                    <div class="faq__toggler"></div>
                                </div>
                                <div class="faq__description">
                                    <div class="faq__description-body">
                                        <?=$arItem['DETAIL_TEXT']?>
                                    </div>
                                </div>
                            </div>
                        <?endif;?>
                    <?else:?>
                        <div class="faq__item<?=$key < 5 ? ' display show' : '';?>"
                             id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="faq__caption">
                                <?=$arItem['NAME']?>
                                <div class="faq__toggler"></div>
                            </div>
                            <div class="faq__description">
                                <div class="faq__description-body">
                                    <?=$arItem['DETAIL_TEXT']?>
                                </div>
                            </div>
                        </div>
                    <?endif;?>
                <?endforeach;?>
            </div>
            <?if($isMainPage):?>
                <a class="faq__more faq__more_link" href="/baza-znaniy/#faq">
            <?else:?>
                <div class="faq__more">
            <?endif;?>
                <span class="points points_left">
                    <span class="point"></span>
                    <span class="point"></span>
                    <span class="point"></span>
                </span>
                <span class="text">Ещё вопросы</span>
                <span class="points points_right">
                    <span class="point"></span>
                    <span class="point"></span>
                    <span class="point"></span>
                </span>
            <?if($isMainPage):?>
                </a>
            <?else:?>
                </div>
            <?endif;?>
        </div>
    </div>
</section>