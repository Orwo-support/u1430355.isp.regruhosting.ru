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
//debug($arParams);

$arExecutionType = array();
$resExecutionType = CIBlockPropertyEnum::GetList(
    Array("SORT"=>"ASC"),
    Array("IBLOCK_ID"=>32, "CODE"=>"EXECUTION_TYPE")
);
while ($ob = $resExecutionType->GetNext()) {
    $arExecutionType[$ob['XML_ID']] = $ob['VALUE'];
}
//debug($arExecutionType);

$arSolutionType = array();
foreach ($arResult['ITEMS'] as $arItem) {
    $arSolutionType[$arItem['PROPERTIES']['SOLUTION_TYPE']['VALUE_XML_ID']] = $arItem['PROPERTIES']['SOLUTION_TYPE']['VALUE'];
}
asort($arSolutionType);
//debug($arSolutionType);

function getActiveSolutionType ($currentPage) {
    switch ($currentPage) {
        case '/begushchaya-stroka/': $activeSolutionType = 'ticker'; break;
        case '/reklamnyy-videobanner/': $activeSolutionType = 'advertising-video-banner'; break;
        case '/videokub/': $activeSolutionType = 'video-cube'; break;
        case '/mediafasad/': $activeSolutionType = 'media-facade'; break;
        case '/svetodiodnyy-shar/': $activeSolutionType = 'led-ball'; break;
        case '/elektronnoe-tablo/': $activeSolutionType = 'electronic-scoreboard'; break;
        default:  $activeSolutionType = false;
    }

    return $activeSolutionType;
}
$ACTIVE_SOLUTION_TYPE = getActiveSolutionType($APPLICATION->GetCurPage());
?>
<?if($ACTIVE_SOLUTION_TYPE):?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            window.tsFilterState['solutionType'] = '<?=$ACTIVE_SOLUTION_TYPE?>';
        }, 1000);
    });
</script>
<?endif;?>
<section class="section section_typical-solutions">
    <div class="typical-solutions">
        <div class="container">
            <h2 class="section__title animation-element"><span class="title">Типовые решения</span></h2>
        </div>
        <div class="container-endless-fix filter">
            <div class="endless typical-solutions__controlls animation-element">
                <div class="label-controll">
                    <div class="label-controll__caption">Тип решения</div>
                    <div class="label-controll__body">
                        <div class="label-controll__content">
                            <div class="select-simple custom-select"
                                 id="solutionType"
                                 data-controller-type="custom-select">
                                <?//Если есть значение по умолчанию добавить его в .select-suffix__selected-item.selected?>
                                <div class="select-simple__selected-item selected"><?
                                    switch ($APPLICATION->GetCurPage()) {
                                        case '/begushchaya-stroka/': echo 'Бегущая строка'; break;
                                        case '/reklamnyy-videobanner/': echo 'Видеобаннер'; break;
                                        case '/videokub/': echo 'Видеокуб'; break;
                                        case '/mediafasad/': echo 'Медиафасад'; break;
                                        case '/svetodiodnyy-shar/': echo 'Светодиодный шар'; break;
                                        case '/elektronnoe-tablo/': echo 'Электронное табло'; break;
                                    }?></div>
                                <div class="select-simple__arr"></div>
                                <div class="custom-select__container">
                                    <div class="custom-select__list scroller">
                                        <?/*
                                            * Если есть значение по умолчанию добавить .active
                                              соответствующему значению

                                            * Список значений формировать динамически из свойств инфоблока

                                            * Тип свойства фильтра data-filter-property НЕ ТРОГАТЬ!
                                              именно так оно указано в JS
                                        */?>
                                       <div class="custom-select__item filter-controller"
                                            data-filter-property="solutionType" data-filter-value="">Сбросить</div>
                                       <?foreach ($arSolutionType as $stKey=>$stVal):?>
                                           <div class="custom-select__item filter-controller<?=$ACTIVE_SOLUTION_TYPE === $stKey ? ' active' : ''?>"
                                                data-filter-property="solutionType"
                                                data-filter-value="<?=$stKey?>"><?=$stVal?></div>
                                       <?endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="label-controll">
                    <div class="label-controll__help help-button" data-help-modal-id="helpModalTypeOfExecution">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/><path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <div class="help-modal help-modal_default" id="helpModalTypeOfExecution">
                            <div class="help-modal__dialog">
                                <div class="help-modal__content">
                                    <div class="help-modal__close">
                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                    </div>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/help-modal-execution-type.php"
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="label-controll__caption">Тип исполнения</div>
                    <div class="label-controll__body">
                        <div class="label-controll__content">
                            <div class="radio-group" id="executionType" data-controller-type="radio-group">
                                <div class="marker"></div>
                                <?/*
                                    * Если нужно чтобы при инициализации был выбран какой-то пункт,
                                      добавить checked='' в соответсвующий input

                                    * Список значений формировать динамически из свойств инфоблока

                                    * Тип свойства фильтра data-filter-property НЕ ТРОГАТЬ!
                                      именно так оно указано в JS
                                */?>
                                <?foreach ($arExecutionType as $exKey => $exVal):?>
                                    <input class="input"
                                           id="<?='type' . ucfirst($exKey)?>"
                                           type="radio"
                                           name="type"
                                           value="">
                                    <label class="filter-controller"
                                           for="<?='type' . ucfirst($exKey)?>"
                                           data-filter-property="executionType"
                                           data-filter-value="<?=$exKey?>"><?=$exVal?></label>
                                <?endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="notFilterTsResults">
            <div class="typical-solutions__not-results">
                <div class="typical-solutions__not-results-text">Нет элементов удовлетворящих выбранным значениям</div>
                <div class="typical-solutions__not-results-btn">
                    <div class="btn btn_primary" id="resetTsFilter">Сбросить фильтр</div>
                </div>
            </div>
        </div>
        <div class="container-endless" id="tsSlider">
            <div class="endless typical-solutions__list swiper-container" id="typicalSolutionsSlider">
                <div class="typical-solutions__list__wrap swiper-wrapper">
                    <?$TRANSITION_DELAY_COUNTER = 1;?>
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                            $isHidden = $ACTIVE_SOLUTION_TYPE && $ACTIVE_SOLUTION_TYPE !== $arItem['PROPERTIES']['SOLUTION_TYPE']['VALUE_XML_ID']
                                ? ' hidden'
                                : '';
                        ?>
                        <div class="typical-solutions__slide swiper-slide<?=$isHidden?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                            <?
                                $FILTER_PROP_EXECUTION_TYPE = $arItem['PROPERTIES']['EXECUTION_TYPE']['VALUE_XML_ID'];
                                $FILTER_PROP_SOLUTION_TYPE = $arItem['PROPERTIES']['SOLUTION_TYPE']['VALUE_XML_ID'];
                                $FILTER_PROPS_STR = '{"executionType":"' . $FILTER_PROP_EXECUTION_TYPE . '","solutionType":"' . $FILTER_PROP_SOLUTION_TYPE .'"}';
                            ?>
                             data-filter-props='<?=$FILTER_PROPS_STR?>'>
                            <div class="typical-solutions__card animation-element"<?
                                if ($ACTIVE_SOLUTION_TYPE and $isHidden == '') {
                                    echo ' style="transition-delay: '.($TRANSITION_DELAY_COUNTER * 0.3).'s;"';
                                    $TRANSITION_DELAY_COUNTER++;
                                }?>>
                                <div class="typical-solutions__gallery gallery">
                                    <div class="typical-solutions__pics">
                                        <?foreach ($arItem['PROPERTIES']['GALLERY_PHOTOS']['VALUE'] as $key=>$img):?>
                                            <?$IMG_PATH = CFile::GetPath($img);?>
                                            <div class="image<?=$key == 0 ? ' active' : '';?>"
                                                 style="background-image: url(<?=$IMG_PATH?>)"></div>
                                        <?endforeach;?>
                                        <?$COUNT_OF_IMG = count($arItem['PROPERTIES']['GALLERY_PHOTOS']['VALUE'])?>
                                        <?if($COUNT_OF_IMG > 1):?>
                                            <div class="typical-solutions__pics-prev slider-gallery-controller" data-direction="prev">
                                                <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                                            </div>
                                            <div class="typical-solutions__pics-next slider-gallery-controller" data-direction="next">
                                                <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                                            </div>
                                        <?endif;?>
                                    </div>
                                    <div class="typical-solutions__dots">
                                        <?if ($COUNT_OF_IMG > 1) :?>
                                            <?for ($i = 0; $i < $COUNT_OF_IMG; $i++):?>
                                                <div class="dot<?=$i == 0 ? ' active': '';?>"></div>
                                            <?endfor;?>
                                        <?endif;?>
                                    </div>
                                </div>
                                <div class="typical-solutions__caption"><?=$arItem['NAME']?></div>
                                <div class="typical-solutions__params">
                                    <?if($arItem['PROPERTIES']['BRIGHTNESS']['VALUE']):?>
                                        <span>Яркость: <?=$arItem['PROPERTIES']['BRIGHTNESS']['VALUE']?></span>
                                    <?endif;?>
                                    <?if($arItem['PROPERTIES']['WEIGHT']['VALUE']):?>
                                        <span>Вес кабинета: <?=$arItem['PROPERTIES']['WEIGHT']['VALUE']?></span>
                                    <?endif;?>
                                    <?if($arItem['PROPERTIES']['PRICE']['VALUE']):?>
                                        <span class="price">Цена/кабинет: <?=$arItem['PROPERTIES']['PRICE']['VALUE']?></span>
                                    <?endif;?>
                                </div>
                                <div class="typical-solutions__actions">
                                    <a class="btn btn_primary" data-go-to-place-link="true" data-go-to-place-target="#order-form" href=""></a>
                                </div>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
            <div class="btn btn_icon-outlined lite-background slider-controller slider-controller_prev" id="btnTsPrev">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="btn btn_icon-outlined lite-background slider-controller slider-controller_next" id="btnTSNext">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
    </div>
</section>