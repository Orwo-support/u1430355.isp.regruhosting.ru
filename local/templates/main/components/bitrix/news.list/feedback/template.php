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
<section class="section section_feedback">
    <div class="feedback__background"></div>
    <div class="feedback">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                О нас говорят
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless feedback__list swiper-container" id="feedbackList">
                <div class="feedback__list__wrap swiper-wrapper">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="feedback__slide swiper-slide"
                             id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="feedback__card animation-element">
                                <div class="feedback__pic" style="background-image: url(<?=$arItem['DETAIL_PICTURE']['SRC']?>)"
                                     data-video-link="<?=$arItem['PROPERTIES']['FEEDBACK_YOUTUBE_LINK']['VALUE']?>">
                                    <div class="btn btn_play"></div>
                                </div>
                                <div class="feedback__quotes"></div>
                                <div class="feedback__line"></div>
                                <div class="feedback__msg">
                                    <?=$arItem['DETAIL_TEXT']?>
                                </div>
                                <div class="feedback__name">
                                    <span><?=$arItem['PROPERTIES']['FEEDBACK_AUTHOR_SURNAME']['VALUE']?></span>
                                    <span><?=$arItem['PROPERTIES']['FEEDBACK_AUTHOR_NAME']['VALUE']?></span>
                                    <span><?=$arItem['PROPERTIES']['FEEDBACK_AUTHOR_PATRONYMIC']['VALUE']?></span>
                                </div>
                                <div class="feedback__job">
                                    <?=$arItem['PROPERTIES']['FEEDBACK_AUTHOR_POSITION']['VALUE']?>
                                </div>
                                <div class="feedback__socials">
                                    <?if($arItem['PROPERTIES']['FEEDBACK_AUTHOR_FACEBOOK']['VALUE'] !== ''):?>
                                        <a class="social-icon"
                                           href="<?=$arItem['PROPERTIES']['FEEDBACK_AUTHOR_FACEBOOK']['VALUE']?>">
                                            <div class="social-icon__pic">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                        </a>
                                    <?endif;?>
                                    <?if($arItem['PROPERTIES']['FEEDBACK_AUTHOR_INSTAGRAM']['VALUE'] !== ''):?>
                                        <a class="social-icon"
                                           href="<?=$arItem['PROPERTIES']['FEEDBACK_AUTHOR_INSTAGRAM']['VALUE']?>">
                                            <div class="social-icon__pic">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                        </a>
                                    <?endif;?>
                                    <?if($arItem['PROPERTIES']['FEEDBACK_AUTHOR_VK']['VALUE'] !== ''):?>
                                        <a class="social-icon"
                                           href="<?=$arItem['PROPERTIES']['FEEDBACK_AUTHOR_VK']['VALUE']?>">
                                            <div class="social-icon__pic">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.5H5.625C3.34704 1.5 1.5 3.34704 1.5 5.625V12.378C1.5 14.6545 3.34554 16.5 5.622 16.5H12.378C14.6544 16.5 16.5 14.6546 16.5 12.3787V5.622C16.5 3.34554 14.6545 1.5 12.378 1.5Z" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.03441 7H9.04436V11.5H9.0427C8.00283 11.5 6.85988 10.9371 6.04942 9.90026C4.83249 8.38051 4.5 7.23181 4.5 7.00074M13 11.4999C13 11.4999 12.6326 10.8097 11.887 10.0505C11.3899 9.53136 10.69 9.25067 10.0533 9.25067C10.69 9.25067 11.3899 8.96923 11.887 8.4508C12.6326 7.69093 13 7.00067 13 7.00067M10.0534 9.25146H9.04264" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                        </a>
                                    <?endif;?>
                                    <?if($arItem['PROPERTIES']['FEEDBACK_AUTHOR_YOUTUBE']['VALUE'] !== ''):?>
                                        <a class="social-icon"
                                           href="<?=$arItem['PROPERTIES']['FEEDBACK_AUTHOR_YOUTUBE']['VALUE']?>">
                                            <div class="social-icon__pic">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 12L12 9L7 6V12Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                        </a>
                                    <?endif;?>
                                </div>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                 id="btnFeedbackPrev">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                 id="btnFeedbackNext">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
    </div>
</section>