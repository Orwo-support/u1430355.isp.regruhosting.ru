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
/*
 * В файле result_modifier.php (находится в папке шаблона)
 * отредактировал $arResult таким образом, что в $arResult['ITEMS']
 * теперь лежат разделы, которые в массиве ELEMENTS хранят
 * все элменты данного раздела
 * */
//debug($arParams);
//debug($arResult['ITEMS']);
?>
<section class="section section_tab-list">
    <div class="tab-list article-list">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <span class="title"><?=$arParams['LOCAL_SECTION_TITLE']?></span>
            </h2>
        </div>
        <div class="tabs animation-element">
            <div class="container-endless-fix">
                <div class="endless tabs__controlls">
                    <div class="slider-tabs">
                        <div class="slider-tabs__container swiper-container" id="<?
                            if ($arParams['IBLOCK_ID'] == 60) echo 'ourWorksSlider';
                            elseif ($arParams['IBLOCK_ID'] == 61) echo 'ourNewsSlider';
                        ?>">
                            <div class="slider-tabs__wrap swiper-wrapper">
                                <div class="marker"></div>
                                <?foreach($arResult['ITEMS'] as $key => $arSection):?>
                                    <?if(!empty($arSection['ELEMENTS'])):?>
                                        <div class="slider-tabs__slide swiper-slide">
                                            <div class="slider-tabs__button<?= $key == 0 ? ' active' : '';?>"
                                                 data-target-tab-id="#<?=$arSection['CODE']?>">
                                                <?=$arSection['NAME']?>
                                            </div>
                                        </div>
                                    <?endif;?>
                                <?endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-items" id="<?=$arParams['LOCAL_TAB_ID']?>">
            <?foreach($arResult["ITEMS"] as $key => $arSection):?>
                <?if(!empty($arSection['ELEMENTS'])):?>
                    <?/*
                       * Формируем идентификаторы для
                       * построения слайдеров с элементами
                       * (статьями/новостями)
                       *
                       * ЗНАЧЕНИЯ ПЕРЕМЕННЫХ НЕ ТРОГАТЬ!!!
                       * Именно так они запсаны
                       * в инициализаторах слайдеров в JS!
                       *
                       * В случае необходимости изменения,
                       * обязательно отредактировать
                       * в /layout/src/js/swiper.js
                       * Далее пересобрать бандл и
                       * переподключить в прологе
                       * используемого шаблона
                       * (local/templates/main/header.php).
                       * */?>

                    <?switch ($arSection['CODE']) {
                        case 'ticker':
                            $SLIDER_CONTAINER_ID = 'tabListTickerSlider';
                            break;
                        case 'mediaFacade':
                            $SLIDER_CONTAINER_ID = 'tabListMediaFacadeSlider';
                            break;
                        case 'outerLedScreen':
                            $SLIDER_CONTAINER_ID = 'tabListOuterLedScreenSlider';
                            break;
                        case 'innerLedScreen':
                            $SLIDER_CONTAINER_ID = 'tabListInnerLedScreenSlider';
                            break;
                        case 'rent':
                            $SLIDER_CONTAINER_ID = 'tabListRentSlider';
                            break;
                        case 'newsCompany':
                            $SLIDER_CONTAINER_ID = 'tabListNewsCompanySlider';
                            break;
                        case 'newsPartners':
                            $SLIDER_CONTAINER_ID = 'tabListNewsPartnersSlider';
                            break;
                    }

                    if ($arParams['IBLOCK_ID'] == 60) $COMPONENT_TYPE_NAME = 'articles';
                    elseif ($arParams['IBLOCK_ID'] == 61) $COMPONENT_TYPE_NAME = 'news';

                    $NEXT_PAGE_URL = '/utilities/get-next-'.$arSection['CODE'].'-'.$COMPONENT_TYPE_NAME.'-page.php?PAGEN_1=2';?>

                    <div class="container-endless tabs-item animation-element<?= $key == 0 ? ' visible show' : '';?>"
                         id="<?=$arSection['CODE']?>">
                        <div class="endless tab-list__list swiper-container" id="<?=$SLIDER_CONTAINER_ID?>">
                            <div class="tab-list__list__wrap swiper-wrapper"
                                data-next-page-url="<?=$arSection['COUNT_OF_ITEMS'] > 4 ? $NEXT_PAGE_URL : 'null'?>">
                                <?foreach($arSection['ELEMENTS'] as $arItem):?>
                                    <?
                                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                    ?>
                                    <div class="article-list__slide swiper-slide"
                                         id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                        <a class="article-list__card" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                            <div class="article-list__pic">
                                                <div class="image"
                                                     style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)"></div>
                                            </div>
                                            <div class="article-list__date"><?=explode(" ", $arItem['DATE_CREATE'])[0]?></div>
                                            <div class="article-list__caption"><?=fixPostPreviewText($arItem['PREVIEW_TEXT'])?></div>
                                            <div class="article-list_time">
                                                <div class="icon">
                                                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                                </div>
                                                <span class="content"><?
                                                    if ($arParams['IBLOCK_ID'] == 60)
                                                        echo $arItem['PROPERTIES']['ARTICLE_TIME_READING']['VALUE'];
                                                    elseif ($arParams['IBLOCK_ID'] == 61) $COMPONENT_TYPE_NAME = 'news';
                                                        echo $arItem['PROPERTIES']['NEWS_TIME_READING']['VALUE'];
                                                    ?></span>
                                            </div>
                                        </a>
                                    </div>
                                <?endforeach;?>
                            </div>
                        </div>
                        <?switch ($arSection['CODE']) {
                            case 'ticker':
                                $SLIDER_CONTROLLER_PREV_ID = 'btnTabListTickerPrev';
                                $SLIDER_CONTROLLER_NEXT_ID = 'btnTabListTickerNext';
                                break;
                            case 'mediaFacade':
                                $SLIDER_CONTROLLER_PREV_ID = 'btnTabListMediaFacadePrev';
                                $SLIDER_CONTROLLER_NEXT_ID = 'btnTabListMediaFacadeNext';
                                break;
                            case 'outerLedScreen':
                                $SLIDER_CONTROLLER_PREV_ID = 'btnTabListOuterLedScreenPrev';
                                $SLIDER_CONTROLLER_NEXT_ID = 'btnTabListOuterLedScreenNext';
                                break;
                            case 'innerLedScreen':
                                $SLIDER_CONTROLLER_PREV_ID = 'btnTabListInnerLedScreenPrev';
                                $SLIDER_CONTROLLER_NEXT_ID = 'btnTabListInnerLedScreenNext';
                                break;
                            case 'rent':
                                $SLIDER_CONTROLLER_PREV_ID = 'btnTabListRentPrev';
                                $SLIDER_CONTROLLER_NEXT_ID = 'btnTabListRentNext';
                                break;
                            case 'newsCompany':
                                $SLIDER_CONTROLLER_PREV_ID = 'btnTabListNewsCompanyPrev';
                                $SLIDER_CONTROLLER_NEXT_ID = 'btnTabListNewsCompanyNext';
                                break;
                            case 'newsPartners':
                                $SLIDER_CONTROLLER_PREV_ID = 'btnTabListNewsPartnersPrev';
                                $SLIDER_CONTROLLER_NEXT_ID = 'btnTabListNewsPartnersNext';
                                break;
                        }?>
                        <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                             id="<?=$SLIDER_CONTROLLER_PREV_ID?>">
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
                        <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                             id="<?=$SLIDER_CONTROLLER_NEXT_ID?>">
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
                <?endif;?>
            <?endforeach;?>
        </div>
    </div>
    <button class="tab-list__get-data<?=$arResult["ITEMS"][0]['COUNT_OF_ITEMS'] > 4 ? '' : ' hidden'?>"
            data-list-id="#<?=$arParams['LOCAL_TAB_ID']?>">
        <span class="points points_left">
            <span class="point"></span>
            <span class="point"></span>
            <span class="point"></span>
        </span>
        <span class="text"><?
            if ($arParams['IBLOCK_ID'] == 60) echo 'Еще статьи';
            elseif ($arParams['IBLOCK_ID'] == 61) echo 'Еще новости';?></span>
        <span class="points points_right">
            <span class="point"></span>
            <span class="point"></span>
            <span class="point"></span>
        </span>
    </button>
</section>