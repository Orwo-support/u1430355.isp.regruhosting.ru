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
//debug($arParams);
?>
<?
    /* Предыдущая/Следующая статья
     * https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getlist.php
     * Смотри Пример 6:
     * */
    $res=CIBlockElement::GetList(
        array("SORT" => "DESC"),
        array("ACTIVE"=>"Y", "IBLOCK_ID"=>$arResult["IBLOCK_ID"],
            // "IBLOCK_SECTION_ID"=>$arResult["IBLOCK_SECTION_ID"] // Если нужно выбрать элемнты отдельной категории
        ),
        false,
        array("nPageSize" => "1", "nElementID" => $arResult["ID"]),
        array("ID", "NAME", "DETAIL_PAGE_URL")
    );

    $navElements = array();
    while($item = $res->GetNext()){
        $navElements[] = $item;
    }

    if (count($navElements) == 2 && $arResult["ID"] == $navElements[0]['ID']) {
        $PREV_ITEM_URL = $navElements[1]['DETAIL_PAGE_URL'] . '/';
        $NEXT_ITEM_URL = null;
    } elseif (count($navElements) == 3) {
        $PREV_ITEM_URL = $navElements[2]['DETAIL_PAGE_URL'] . '/';
        $NEXT_ITEM_URL = $navElements[0]['DETAIL_PAGE_URL'] . '/';
    } elseif (count($navElements) == 2 && $arResult["ID"] == $navElements[1]['ID']) {
        $PREV_ITEM_URL = null;
        $NEXT_ITEM_URL = $navElements[0]['DETAIL_PAGE_URL'] . '/';
    }

    $PREV_ITEM_ICON = '<svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    $NEXT_ITEM_ICON = '<svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    $GOING_BACK_ICON = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve"><g><g><path fill="#F6F0FF" d="M6.3,12.5c-0.1,0-0.2,0-0.3-0.1l-4.3-4c0,0,0,0,0,0c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0-0.1,0-0.1 c0,0,0,0,0,0l0,0c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0-0.1,0-0.1,0-0.1c0,0,0,0,0,0c0-0.1,0.1-0.1,0.1-0.1c0,0,0,0,0,0l4.3-4 c0.2-0.2,0.5-0.2,0.7,0c0.2,0.2,0.2,0.5,0,0.7L3.3,7.5H14c0.3,0,0.5,0.2,0.5,0.5S14.3,8.5,14,8.5H3.3l3.4,3.1 c0.2,0.2,0.2,0.5,0,0.7C6.6,12.4,6.4,12.5,6.3,12.5z"/></g></g></svg>';
?>
<section class="section section_article-news">
    <div class="container">
        <div class="article-news__controlls">
            <div class="article-news__back animation-element">
                <a class="btn btn_secondary" href="/baza-znaniy/">
                    <span class="icon"><?=$GOING_BACK_ICON?></span>
                    <span>Назад</span>
                </a>
            </div>
            <div class="article-news__controlls-wrap animation-element">
                <?if($PREV_ITEM_URL == null):?>
                    <div class="article-news__controller article-news__controller_before inactive">
                        <span class="btn btn_icon-outlined not-focused" style="cursor: default;">
                            <?=$PREV_ITEM_ICON?>
                        </span>
                    </div>
                <?else:?>
                    <div class="article-news__controller article-news__controller_before">
                        <a class="btn btn_icon-outlined not-focused" href="<?=$PREV_ITEM_URL?>">
                            <?=$PREV_ITEM_ICON?>
                        </a>
                    </div>
                <?endif;?>
                <?if($NEXT_ITEM_URL == null):?>
                    <div class="article-news__controller article-news__controller_next inactive">
                        <span class="btn btn_icon-outlined not-focused" style="cursor: default;">
                            <?=$NEXT_ITEM_ICON?>
                        </span>
                    </div>
                <?else:?>
                    <div class="article-news__controller article-news__controller_next">
                        <a class="btn btn_icon-outlined not-focused" href="<?=$NEXT_ITEM_URL?>">
                            <?=$NEXT_ITEM_ICON?>
                        </a>
                    </div>
                <?endif;?>
            </div>
        </div>
        <div class="article-news__title animation-element">
            <div class="article-news__date"><?=explode(" ", $arResult['DATE_CREATE'])[0]?></div>
            <div class="article-news__time">
                <div class="icon">
                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                </div>
                <div class="text">
                    <?=$arResult['PROPERTIES']['ARTICLE_TIME_READING']['VALUE']?>
                </div>
            </div>
            <h1 class="h1 article-news__captioin">
                <?=$arResult['NAME']?>
            </h1>
        </div>
        <div class="article-news__content-wrap animation-element">
            <div class="article-news__picture">
                <div class="article-news__image"
                     style="background-image: url(<?=$arResult['DETAIL_PICTURE']['SRC']?>)">
                    <img class="pic"
                         src="<?=$arResult['DETAIL_PICTURE']['SRC']?>"
                         alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>"
                         title="<?=$arResult['DETAIL_PICTURE']['TITLE']?>"
                    >
                </div>
                <div class="article-news__image-caption">
                    <?=$arResult['DETAIL_PICTURE']['DESCRIPTION']?>
                </div>
            </div>
            <div class="article-news__content">
                <?if($arResult['PROPERTIES']['ARTICLE_SUBTITLE']['VALUE']):?>
                    <h2 class="h2 article-news__subtitle">
                        <?=$arResult['PROPERTIES']['ARTICLE_SUBTITLE']['VALUE']?>
                    </h2>
                <?endif;?>
                <div class="article-news__text">
                    <?=$arResult['~DETAIL_TEXT']?>
                </div>
                <div class="article-news__links">
                    <?//Класс .copy-url-link добавлять ко всем ссылкам/кнопкам которые должны копировать url в буфер?>
                    <div class="article-news__copy-link copy-url-link">
                        <div class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" xml:space="preserve"><g><g> <path fill="#AB78FF" d="M7.2,18.5c-1.5,0-3-0.6-4-1.7c-1.1-1.1-1.7-2.5-1.7-4s0.6-3,1.7-4.1l0.9-0.9c0.2-0.2,0.5-0.2,0.7,0 s0.2,0.5,0,0.7L3.9,9.4c-0.9,0.9-1.4,2.1-1.4,3.3s0.5,2.5,1.4,3.3C4.8,17,6,17.5,7.2,17.5c1.3,0,2.5-0.5,3.3-1.4l0.9-0.9 c0.2-0.2,0.5-0.2,0.7,0s0.2,0.5,0,0.7l-0.9,0.9C10.2,17.9,8.8,18.5,7.2,18.5z M8.2,12.3c-0.1,0-0.3,0-0.4-0.1 c-0.2-0.2-0.2-0.5,0-0.7l3.7-3.7c0.2-0.2,0.5-0.2,0.7,0s0.2,0.5,0,0.7l-3.7,3.7C8.4,12.3,8.3,12.3,8.2,12.3z M15.5,12.3 c-0.1,0-0.3,0-0.4-0.1c-0.2-0.2-0.2-0.5,0-0.7l0.9-0.9c0.9-0.9,1.4-2.1,1.4-3.3c0-1.3-0.5-2.4-1.4-3.3C15.2,3,14,2.5,12.8,2.5 S10.3,3,9.4,3.9L8.5,4.8C8.3,5,8,5,7.8,4.8s-0.2-0.5,0-0.7l0.9-0.9c1.1-1.1,2.5-1.7,4.1-1.7s3,0.6,4,1.7c1.1,1.1,1.7,2.5,1.7,4 c0,1.5-0.6,3-1.7,4.1l-0.9,0.9C15.8,12.3,15.7,12.3,15.5,12.3z"/></g></g></svg>
                        </div>
                        <div class="text">
                            Копировать ссылку
                        </div>
                    </div>
                    <noindex>
                        <div class="article-news__shsring">
                            <?if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y"):?>
                                <?$APPLICATION->IncludeComponent("bitrix:main.share", "social-sharing", array(
                                    "HANDLERS" => $arParams["SHARE_HANDLERS"],
                                    "PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
                                    "PAGE_TITLE" => $arResult["~NAME"],
                                    "SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                                    "SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                                    "HIDE" => $arParams["SHARE_HIDE"],
                                ),
                                    $component,
                                    array("HIDE_ICONS" => "Y")
                                );?>
                            <?endif;?>
                        </div>
                    </noindex>
                </div>
            </div>
        </div>
    </div>
</section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"popular",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"DETAIL_URL" => "/stati/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DATE_CREATE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "60",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "30",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Статьи",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "ARTICLE_TIME_READING",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "popular",
		"DETAIL_ITEM_ID" => $arResult["ID"]
	),
	false
);?>