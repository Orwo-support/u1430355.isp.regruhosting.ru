<?
    $getIBlock = CIBlockSection::GetList(
        array("SORT" => "ASC"),
        array("IBLOCK_ID" => $arParams['IBLOCK_ID'])
    );

    while ($sectionWhile = $getIBlock->GetNext()) {
        $arSections[] = $sectionWhile;
    }

    foreach ($arSections as $arSingleSection) {
        foreach ($arResult["ITEMS"] as $key => $arItem) {
            if ($arItem['IBLOCK_SECTION_ID'] == $arSingleSection['ID']) {
                $arSingleSection['ELEMENTS'][] = $arItem;
            }
        }
        $arSingleSection['COUNT_OF_ITEMS'] = count($arSingleSection['ELEMENTS']);
        $arSingleSection['ELEMENTS'] = array_slice($arSingleSection['ELEMENTS'], 0, 4);
        $arElementGroups[] = $arSingleSection;
    }

    $arResult["ITEMS"] = $arElementGroups;
?>