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
//debug($arParams['DETAIL_ARTICLE_ID']);
?>
<section class="section section_news-list">
    <div class="news-list">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <span class="title"><?
                    if (preg_match('/stati/', $_SERVER["REQUEST_URI"])) {
                        echo 'Другие статьи';
                    } elseif (preg_match('/novosti/', $_SERVER["REQUEST_URI"])) {
                        echo 'Другие новости';
                    }
                ?></span>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless news-list__list swiper-container"
                 id="newsListSlider">
                <div class="news-list__wrap swiper-wrapper">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?if($arItem['ID'] != $arParams['DETAIL_ITEM_ID']):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="news-list__slide swiper-slide"
                                 id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <a class="news-list__card animation-element"
                                   href="<?=$arItem['DETAIL_PAGE_URL']?>">
                                    <div class="news-list__pic">
                                        <div class="image" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)"></div>
                                    </div>
                                    <div class="news-list__date">
                                        <?=explode(" ", $arItem['DATE_CREATE'])[0]?>
                                    </div>
                                    <div class="news-list__caption">
                                        <?=$arItem['PREVIEW_TEXT']?>
                                    </div>
                                    <div class="news-list_time">
                                        <div class="icon">
                                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        </div>
                                        <span class="content">
                                        <?if (preg_match('/stati/', $_SERVER["REQUEST_URI"])) {
                                            echo $arItem['PROPERTIES']['ARTICLE_TIME_READING']['VALUE'];
                                        } elseif (preg_match('/novosti/', $_SERVER["REQUEST_URI"])) {
                                            echo $arItem['PROPERTIES']['NEWS_TIME_READING']['VALUE'];
                                        }?>
                                    </span>
                                    </div>
                                </a>
                            </div>
                        <?endif;?>
                    <?endforeach;?>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                 id="btnNewsListPrev">
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
                 id="btnNewsListNext">
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