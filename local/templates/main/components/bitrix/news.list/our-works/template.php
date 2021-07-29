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
<section class="section section_projects">
    <div class="projects">
        <div class="container">
            <h2 class="section__title animation-element">
                <span class="title">
                    Реализованные проекты
                </span>
                <span class="section__link animation-element">
                <a class="revers" href="/nashi-raboty/">
                    Смотреть портфолио
                    <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                </a>
            </span>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless projects__list swiper-container" id="projectsSlider">
                <div class="projects__list__wrap swiper-wrapper">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="projects__slide swiper-slide"
                             id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <a class="projects__card animation-element"
                               href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                <div class="projects__place">
                                    <?=$arItem['PREVIEW_TEXT']?>
                                    <br>
                                    <?=$arItem['PROPERTIES']['WORK_CITY']['VALUE']?>
                                </div>
                                <div class="projects__params">
                                    <div class="screen">
                                        Экран <?=$arItem['PROPERTIES']['WORK_SCREEN_TYPE']['VALUE']?>
                                    </div>
                                    <div class="pixels">
                                        Шаг пикселя <?=$arItem['PROPERTIES']['WORK_PIXEL_STEP']['VALUE']?></div>
                                </div>
                                <div class="projects__pic">
                                    <div class="image" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)"></div>
                                </div>
                            </a>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev" id="btnProjectsPrev">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next" id="btnProjectsNext">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
    </div>
</section>