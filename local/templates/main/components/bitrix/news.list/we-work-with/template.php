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
<section class="section section_work-with">
    <div class="work-with">
        <div class="container work-with__caption-container">
            <h2 class="section__title animation-element">
                <span class="title"><?=$arResult['DESCRIPTION']?></span>
                <span class="section__link animation-element">
                    <a class="revers" href="">
                        Посмотреть сертификаты
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
            <div class="endless">
                <div class="work-with__list swiper-container" id="workWithSlider">
                    <div class="work-with__list-wrap swiper-wrapper">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="work-with__slide swiper-slide"
                                 id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="work-with__card animation-element">
                                    <div class="work-with__content">
                                        <div class="work-with__caption">
                                            <?=$arItem['PREVIEW_TEXT']?>
                                        </div>
                                        <div class="work-with__description">
                                            <?=$arItem['DETAIL_TEXT']?>
                                        </div>
                                    </div>
                                    <ul>
                                        <?for ($i = 1; $i <= 5; $i++):?>
                                            <?if($arItem['PROPERTIES']['PROPERTY_'.$i]['VALUE']):?>
                                                <li class="work-with__item">
                                                    <?echo $arItem['PROPERTIES']['PROPERTY_'.$i]['~VALUE']['TEXT']?>
                                                </li>
                                            <?endif;?>
                                        <?endfor;?>
                                    </ul>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>