<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
    /*
     * При создании массива с результирующими данными сразу добавляем туда ссылку
     * на следующую страницу и данные постраничной навигации
     *
     * $arResult["NAV_RESULT"]->NavPageNomer; - Номер текущей страницы
     * $arResult["NAV_RESULT"]->NavPageCount; - Количество страниц
     * $arResult["NAV_RESULT"]->NavRecordCount; - Общее количество элементов
     * $arResult["NAV_RESULT"]->NavPageSize; - Количество элементов на странице
     */
    $arResponse['nextPage'] = [
        getNextPage(
            $arResult,
            $_GET['PAGEN_1'],
            '/utilities/get-next-ticker-articles-page.php?PAGEN_1=')
    ];

    foreach($arResult["ITEMS"] as $key=>$arItem){
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        $TIME_READING = $arItem['PROPERTIES']['ARTICLE_TIME_READING']['VALUE'] != ''
            ? $arItem['PROPERTIES']['ARTICLE_TIME_READING']['VALUE']
            : $arItem['PROPERTIES']['NEWS_TIME_READING']['VALUE'];

        $arr = [
            'ID' => $this->GetEditAreaId($arItem['ID']),
            'TRANSITION_DELAY' => $key + 1,
            'DETAIL_PAGE_URL' => $arItem["DETAIL_PAGE_URL"],
            'PICTURE_SRC' => $arItem['PREVIEW_PICTURE']['SRC'],
            'DATE' => explode(" ", $arItem['DATE_CREATE'])[0],
            'CAPTION' => fixPostPreviewText($arItem['PREVIEW_TEXT']),
            'ARTICLE_TIME_READING' => $TIME_READING,
        ];

        $arResponse[] = $arr;
    }
?>

<!--RestartBuffer--><?
$JSON__DATA = defined('JSON_UNESCAPED_UNICODE')
    ? json_encode($arResponse, JSON_UNESCAPED_UNICODE)
    : json_encode($arResponse);
echo $JSON__DATA;
?><!--RestartBuffer-->