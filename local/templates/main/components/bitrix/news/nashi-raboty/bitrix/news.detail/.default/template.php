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
<section class="section section_single-work">
    <div class="single-work">
        <div class="container-endless">
            <div class="endless">
                <div class="single-work__card">
                    <div class="single-work__date animation-element">
                        <?=normalizeDate($arResult['PROPERTIES']['WORK_DATE']['VALUE'])?>
                    </div>
                    <div class="single-work__title animation-element">
                        <?=$arResult['PREVIEW_TEXT']?>
                        <span class="single-work__city">
                            <?=$arResult['PROPERTIES']['WORK_CITY']['VALUE']?>
                        </span>
                    </div>
                    <div class="single-work__props animation-element">
                        <div class="single-work__props-item single-work__pixel-step">
                            <div class="single-work__param">
                                <?=$arResult['PROPERTIES']['WORK_PIXEL_STEP']['VALUE']?>
                            </div>
                            <div class="single-work__caption">Шаг пикселя</div>
                        </div>
                        <div class="single-work__props-item single-work__size">
                            <div class="single-work__param">
                                <?=$arResult['PROPERTIES']['WORK_SCREEN_SIZE']['VALUE']?>
                            </div>
                            <div class="single-work__caption">Размер экрана</div>
                        </div>
                        <div class="single-work__props-item single-work__resolution">
                            <div class="single-work__param">
                                <?=$arResult['PROPERTIES']['WORK_SCREEN_RESOLUTION']['VALUE']?>
                            </div>
                            <div class="single-work__caption">Разрешение экрана</div>
                        </div>
                        <div class="single-work__props-item single-work__price">
                            <div class="single-work__param">
                                от <?=$arResult['PROPERTIES']['WORK_PRICE']['VALUE']?> ₽/м<sup>2</sup>
                            </div>
                            <div class="single-work__caption">Стоимость</div>
                        </div>
                    </div>
                    <div class="single-work__gallery swiper-container" id="singleWorkSlider">
                        <div class="single-work__gallery-wrap swiper-wrapper">
                            <?foreach ($arResult['PROPERTIES']['WORK_GALLERY']['VALUE'] as $key => $PICTURE):?>
                                <?$PICTURE_PATH = CFile::GetPath($PICTURE);?>
                                <div class="single-work__gallery-slide swiper-slide<?= $key < 3 ? ' animation-element' : '';?>"
                                     style="background-image: url(<?=$PICTURE_PATH?>);"></div>
                            <?endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev animation-element"
                 id="btnSingleWorkPrev">
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
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next animation-element"
                 id="btnSingleWorkNext">
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
<section class="section section_project-description">
    <div class="project-description">
        <div class="container">
            <h2 class="h2 project-description__title animation-element">
                Описание проекта
            </h2>
        </div>
        <div class="container">
            <div class="project-description__content">
                <div class="project-description__text animation-element">
                    <?=$arResult['DETAIL_TEXT']?>
                </div>
                <div class="project-description__price animation-element">
                    <div class="project-description__amount">
                        от <?=$arResult['PROPERTIES']['WORK_PRICE']['VALUE']?> ₽/м<sup>2</sup>
                    </div>
                    <div class="project-description__comment">
                        Примерная стоимость оборудования по проекту
                    </div>
                    <div class="project-description__action">
                        <a class="btn btn_primary"
                           data-go-to-place-link="true"
                           data-go-to-place-target="#order-form"
                           href="">
                            Отправить заявку на расчёт
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section_feedback">
    <div class="feedback">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                Отзыв заказчика
            </h2>
        </div>
        <div class="container">
            <div class="feedback__card animation-element">
                <?$PICTURE = $arResult['PROPERTIES']['WORK_CUSTOMER_PHOTO']['VALUE'];?>
                <?$PICTURE_PATH = CFile::GetPath($PICTURE);?>
                <div class="feedback__pic" style="background-image: url(<?=$PICTURE_PATH?>)"
                     data-video-link="<?=$arResult['PROPERTIES']['WORK_CUSTOMER_YOUTUBE_LINK']['VALUE']?>">
                    <div class="btn btn_play"></div>
                </div>
                <div class="feedback__quotes"></div>
                <div class="feedback__line"></div>
                <div class="feedback__msg">
                    <?=$arResult['PROPERTIES']['WORK_CUSTOMER_FEEDBACK']['VALUE']?>
                </div>
                <div class="feedback__name">
                    <span><?=$arResult['PROPERTIES']['WORK_CUSTOMER_SURNAME']['VALUE']?></span>
                    <span><?=$arResult['PROPERTIES']['WORK_CUSTOMER_NAME']['VALUE']?></span>
                    <span><?=$arResult['PROPERTIES']['WORK_CUSTOMER_PATRONYMIC']['VALUE']?></span>
                </div>
                <div class="feedback__job">
                    <?=$arResult['PROPERTIES']['WORK_CUSTOMER_POSITION']['VALUE']?>
                </div>
                <div class="feedback__socials">
                    <?if($arResult['PROPERTIES']['WORK_CUSTOMER_FACEBOOK']['VALUE'] !== ''):?>
                        <a class="social-icon"
                           target="_blank"
                           href="<?=$arResult['PROPERTIES']['WORK_CUSTOMER_FACEBOOK']['VALUE']?>">
                            <div class="social-icon__pic">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </a>
                    <?endif;?>
                    <?if($arResult['PROPERTIES']['WORK_CUSTOMER_INSTAGRAM']['VALUE'] !== ''):?>
                        <a class="social-icon"
                           target="_blank"
                           href="<?=$arResult['PROPERTIES']['WORK_CUSTOMER_INSTAGRAM']['VALUE']?>">
                            <div class="social-icon__pic">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </a>
                    <?endif;?>
                    <?if($arResult['PROPERTIES']['WORK_CUSTOMER_YOUTUBE']['VALUE'] !== ''):?>
                        <a class="social-icon"
                           target="_blank"
                           href="<?=$arResult['PROPERTIES']['WORK_CUSTOMER_YOUTUBE']['VALUE']?>">
                            <div class="social-icon__pic">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 12L12 9L7 6V12Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </a>
                    <?endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/comps/order-form.php"
    )
);?>
