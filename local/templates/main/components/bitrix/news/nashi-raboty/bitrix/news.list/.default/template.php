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

//debug($arResult);
?>
<section class="section section_tab-list">
    <div class="tab-list">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <span class="title">
                    <?=$arResult['NAME']?>
                </span>
            </h2>
        </div>
        <div class="tabs animation-element">
            <div class="container-endless-fix">
                <div class="endless tabs__controlls">
                    <div class="slider-tabs">
                        <div class="slider-tabs__container swiper-container" id="ourWorksSlider">
                            <div class="slider-tabs__wrap swiper-wrapper">
                                <div class="marker"></div>
                                <?foreach($arResult['ITEMS'] as $key => $arSection):?>
                                    <div class="slider-tabs__slide swiper-slide">
                                        <div class="slider-tabs__button<?= $key == 0 ? ' active' : '';?>"
                                             data-target-tab-id="#<?=$arSection['CODE']?>">
                                            <?=$arSection['NAME']?>
                                        </div>
                                    </div>
                                <?endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-items">
            <?foreach($arResult["ITEMS"] as $key => $arSection):?>
                <?if(!empty($arSection['ELEMENTS'])):?>
                    <?/*
                       * Формируем идентификаторы для
                       * построения слайдеров с элементами (работами)
                       * ЗНАЧЕНИЯ ПЕРЕМЕННЫХ НЕ ТРОГАТЬ!!!
                       * Именно так они запсаны
                       * в инициализаторах слайдеров в JS!
                       *
                       * В случае необходимости изменения,
                       * обязательно отредактировать
                       * в /layout/src/js/swiper.js
                       * Далее пересобрать бандл и
                       * переподключить в хедере.
                       * */?>
                    <?switch ($arSection['CODE']) {
                        case 'ticker':
                            $BUTTON_PREV_ID = 'btnTabListTickerPrev';
                            $BUTTON_NEXT_ID = 'btnTabListTickerNext';
                            $SLIDER_CONTAINER_ID = 'tabListOurWorkTickerSlider';
                            break;
                        case 'mediaFacade':
                            $BUTTON_PREV_ID = 'btnTabListMediaFacadePrev';
                            $BUTTON_NEXT_ID = 'btnTabListMediaFacadeNext';
                            $SLIDER_CONTAINER_ID = 'tabListOurWorkMediaFacadeSlider';
                            break;
                        case 'outerLedScreen':
                            $BUTTON_PREV_ID = 'btnTabListOuterLedScreenPrev';
                            $BUTTON_NEXT_ID = 'btnTabListOuterLedScreenNext';
                            $SLIDER_CONTAINER_ID = 'tabListOurWorkOuterLedScreenSlider';
                            break;
                        case 'innerLedScreen':
                            $BUTTON_PREV_ID = 'btnTabListInnerLedScreenPrev';
                            $BUTTON_NEXT_ID = 'btnTabListInnerLedScreenNext';
                            $SLIDER_CONTAINER_ID = 'tabListOurWorkInnerLedScreenSlider';
                            break;
                        case 'rent':
                            $BUTTON_PREV_ID = 'btnTabListRentPrev';
                            $BUTTON_NEXT_ID = 'btnTabListRentNext';
                            $SLIDER_CONTAINER_ID = 'tabListOurWorkRentSlider';
                            break;
                    }?>
                    <div class="container-endless tabs-item<?= $key == 0 ? ' visible show' : '';?>"
                         id="<?=$arSection['CODE']?>">
                        <div class="endless tab-list__list swiper-container"
                             id="<?=$SLIDER_CONTAINER_ID?>">
                            <div class="tab-list__list__wrap swiper-wrapper">
                                <?foreach($arSection['ELEMENTS'] as $arItem):?>
                                    <?
                                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                    ?>
                                    <div class="tab-list__slide swiper-slide"
                                         id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                        <a class="tab-list__card<?= $key == 0 ? ' animation-element' : '';?>"
                                           href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                            <div class="tab-list__place">
                                                <?=$arItem['PREVIEW_TEXT']?>
                                                <br>
                                                <?=$arItem['PROPERTIES']['WORK_CITY']['VALUE']?>
                                            </div>
                                            <div class="tab-list__params">
                                                <div class="screen">
                                                    Экран <?=$arItem['PROPERTIES']['WORK_SCREEN_TYPE']['VALUE']?>
                                                </div>
                                                <div class="pixels">
                                                    Шаг пикселя <?=$arItem['PROPERTIES']['WORK_PIXEL_STEP']['VALUE']?>
                                                </div>
                                            </div>
                                            <div class="tab-list__pic">
                                                <div class="image" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)"></div>
                                            </div>
                                        </a>
                                    </div>
                                <?endforeach;?>
                            </div>
                        </div>
                        <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                             id="<?=$BUTTON_PREV_ID?>">
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
                             id="<?=$BUTTON_NEXT_ID?>">
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
</section>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "stages-of-work",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "PREVIEW_TEXT",
            1 => "DETAIL_TEXT",
            2 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "53",
        "IBLOCK_TYPE" => "work_stages",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "7",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "WORK_DAYS",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "DESC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "stages-of-work"
    ),
    false
);?>
<?include_once($_SERVER["DOCUMENT_ROOT"]."/comps/order-form.php");?>