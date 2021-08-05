<?php
/* Удаляем из результирующего массива все элементы
 * (статьи из списка статей или новости из списка новостей)
 * в статусе которых не указано "Показывать в списке популярные"
 */
if (preg_match('/stati/', $_SERVER["REQUEST_URI"])) {
    foreach ($arResult['ITEMS'] as $keyItem => $arItem) {
        if ($arItem['PROPERTIES']['ARTICLE_SHOW_IN_POPULAR']['VALUE_XML_ID'] == 'NO') {
            unset($arResult['ITEMS'][$keyItem]);
        }
    }
} elseif (preg_match('/novosti/', $_SERVER["REQUEST_URI"])) {
    foreach ($arResult['ITEMS'] as $keyItem => $arItem) {
        if ($arItem['PROPERTIES']['NEWS_SHOW_IN_POPULAR']['VALUE_XML_ID'] == 'NO') {
            unset($arResult['ITEMS'][$keyItem]);
        }
    }
}