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
<section class="section section_contacts">
    <div class="contacts">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <span class="title">
                    <?=$arResult['NAME']?>
                </span>
                <span class="section__link animation-element">
                    <a class="revers"
                       href="https://yandex.ru/maps/-/CCUiBTchLB"
                        target="_blank">
                        Посмотреть на карте
                        <svg width="12"
                             height="17"
                             viewBox="0 0 12 17"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.9">
                            <path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289"
                                  stroke="#AB78FF"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </a>
                </span>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless">
                <div class="contacts__content">
                    <div class="contacts__map-container animation-element">
                        <div class="contacts__map" id="map"></div>
                    </div>
                    <ul class="contacts__addres animation-element">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <li class="contacts__addres-item"
                                id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <span class="contacts__addres__title">
                                    <?if($arItem['PROPERTIES']['CONTACTS_TYPE']['VALUE_XML_ID'] == 'icon_house'):?>
                                        <span class="icon icon_house">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 11.6407C3 10.5928 3 10.0688 3.23665 9.62665C3.4733 9.18447 3.90927 8.89382 4.7812 8.31253L9.7812 4.9792C10.8567 4.2622 11.3944 3.9037 12 3.9037C12.6056 3.9037 13.1433 4.2622 14.2188 4.9792L19.2188 8.31253C20.0907 8.89382 20.5267 9.18447 20.7633 9.62665C21 10.0688 21 10.5928 21 11.6407V17.5C21 19.3856 21 20.3284 20.4142 20.9142C19.8284 21.5 18.8856 21.5 17 21.5V21.5C16.0572 21.5 15.5858 21.5 15.2929 21.2071C15 20.9142 15 20.4428 15 19.5V17.5C15 16.5572 15 16.0858 14.7071 15.7929C14.4142 15.5 13.9428 15.5 13 15.5H11C10.0572 15.5 9.58579 15.5 9.29289 15.7929C9 16.0858 9 16.5572 9 17.5V19.5C9 20.4428 9 20.9142 8.70711 21.2071C8.41421 21.5 7.94281 21.5 7 21.5V21.5C5.11438 21.5 4.17157 21.5 3.58579 20.9142C3 20.3284 3 19.3856 3 17.5V11.6407Z" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                    <?elseif($arItem['PROPERTIES']['CONTACTS_TYPE']['VALUE_XML_ID'] == 'icon_phone'):?>
                                        <span class="icon icon_phone">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve"> <g> <g> <path d="M16.1,21.5c-0.2,0-0.4,0-0.5,0c-3-0.5-6.1-2.1-8.5-4.5c-2.4-2.4-4-5.4-4.5-8.5C2.4,7.4,2.7,6.3,3.5,5.5 c0,0,0,0,0,0l2.3-2.3C6,3,6.3,2.8,6.5,2.7C7.4,2.3,8.4,2.5,9,3.2l2.5,2.5c0.2,0.2,0.4,0.5,0.5,0.7c0.1,0.3,0.2,0.6,0.2,0.9 c0,0.6-0.2,1.2-0.7,1.6l-1.6,1.6c0.4,0.8,0.9,1.5,1.5,2.1c0.6,0.6,1.3,1.1,2.1,1.5l1.6-1.6c0.2-0.2,0.5-0.4,0.7-0.5 c0.8-0.3,1.8-0.1,2.5,0.5l2.5,2.5c0.2,0.2,0.4,0.5,0.5,0.7c0.1,0.3,0.2,0.6,0.2,0.9c0,0.6-0.2,1.2-0.7,1.6l-2.3,2.3 C17.9,21.1,17,21.5,16.1,21.5z M4.2,6.2C3.7,6.7,3.4,7.5,3.5,8.2c0.5,2.9,2,5.7,4.3,8c2.3,2.3,5.1,3.8,7.9,4.3 c0.7,0.1,1.5-0.1,2.1-0.7l2.3-2.3c0.2-0.2,0.4-0.6,0.4-0.9c0-0.2,0-0.3-0.1-0.5c-0.1-0.2-0.2-0.3-0.3-0.4l-2.5-2.5 c-0.4-0.4-0.9-0.5-1.4-0.3c-0.2,0.1-0.3,0.2-0.4,0.3L14,15c-0.1,0.1-0.4,0.2-0.6,0.1c-1-0.5-1.9-1.1-2.7-1.9 c-0.8-0.8-1.4-1.7-1.9-2.7c-0.1-0.2,0-0.4,0.1-0.6l1.8-1.8c0.2-0.2,0.4-0.6,0.4-0.9c0-0.2,0-0.3-0.1-0.5c-0.1-0.2-0.2-0.3-0.3-0.4 L8.3,3.9C8,3.5,7.4,3.4,6.9,3.6C6.8,3.7,6.6,3.8,6.5,3.9L4.2,6.2z"/> </g> </g> </svg>
                                        </span>
                                    <?elseif($arItem['PROPERTIES']['CONTACTS_TYPE']['VALUE_XML_ID'] == 'icon_shirt'):?>
                                        <span class="icon icon_shirt">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M16 4.5C17.8856 4.5 18.8284 4.5 19.4142 5.08579C20 5.67157 20 6.61438 20 8.5V18.5C20 20.3856 20 21.3284 19.4142 21.9142C18.8284 22.5 17.8856 22.5 16 22.5H8C6.11438 22.5 5.17157 22.5 4.58579 21.9142C4 21.3284 4 20.3856 4 18.5V8.5C4 6.61438 4 5.67157 4.58579 5.08579C5.17157 4.5 6.11438 4.5 8 4.5M16 4.5C16 5.44281 16 5.91421 15.7071 6.20711C15.4142 6.5 14.9428 6.5 14 6.5H10C9.05719 6.5 8.58579 6.5 8.29289 6.20711C8 5.91421 8 5.44281 8 4.5M16 4.5C16 3.55719 16 3.08579 15.7071 2.79289C15.4142 2.5 14.9428 2.5 14 2.5H10C9.05719 2.5 8.58579 2.5 8.29289 2.79289C8 3.08579 8 3.55719 8 4.5M16 10.5H8M16 14.5H8" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        </span>
                                    <?elseif($arItem['PROPERTIES']['CONTACTS_TYPE']['VALUE_XML_ID'] == 'icon_mail'):?>
                                        <span class="icon icon_mail">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve"> <g> <g> <path class="st0" d="M15.3,20.5H8.7c-3.3,0-4.9,0-6-1.1c-1.1-1.1-1.1-2.7-1.1-5.8v-3.2c0-3.2,0-4.7,1.1-5.8c1.1-1.1,2.8-1.1,6-1.1 h6.7c3.3,0,4.9,0,6,1.1c1.1,1.1,1.1,2.7,1.1,5.8v3.2c0,3.2,0,4.7-1.1,5.8C20.2,20.5,18.6,20.5,15.3,20.5z M8.7,4.5 c-3,0-4.5,0-5.3,0.8c-0.8,0.8-0.8,2.2-0.8,5.1v3.2c0,2.9,0,4.3,0.8,5.1c0.8,0.8,2.3,0.8,5.3,0.8h6.7c3,0,4.5,0,5.3-0.8 c0.8-0.8,0.8-2.2,0.8-5.1v-3.2c0-2.9,0-4.3-0.8-5.1c-0.8-0.8-2.3-0.8-5.3-0.8H8.7z M12,13.3c-1.3,0-2.3-0.7-4.3-2.2L5,9.2 C4.8,9,4.8,8.7,4.9,8.5c0.2-0.2,0.5-0.3,0.7-0.1l2.7,1.9c3.7,2.6,3.7,2.6,7.4,0l2.7-1.9c0.2-0.2,0.5-0.1,0.7,0.1 C19.2,8.7,19.2,9,19,9.2l-2.7,1.9C14.3,12.6,13.3,13.3,12,13.3z"/> </g> </g> </svg>
                                        </span>
                                    <?else:?>
                                        <span class="icon">
                                           <?echo $arItem['PROPERTIES']['CONTACTS_SVG_ICON_CODE']['~VALUE']['TEXT']?>
                                        </span>
                                    <?endif;?>
                                    <span class="txt">
                                        <?= $arItem['PREVIEW_TEXT']?>
                                    </span>
                                </span>
                                <?if($arItem['PROPERTIES']['CONTACTS_TYPE']['VALUE_XML_ID'] == 'icon_house'):?>
                                    <span class="contacts__addres-text">
                                        <?=$arItem['DETAIL_TEXT']?>
                                    </span>
                                <?elseif($arItem['PROPERTIES']['CONTACTS_TYPE']['VALUE_XML_ID'] == 'icon_phone'):?>
                                    <a class="contacts__addres-text" href="tel:<?=normalizedPhone($arItem['~DETAIL_TEXT'])?>">
                                        <?=$arItem['~DETAIL_TEXT']?>
                                    </a>
                                <?elseif($arItem['PROPERTIES']['CONTACTS_TYPE']['VALUE_XML_ID'] == 'icon_shirt'):?>
                                    <span class="contacts__addres-text">
                                        <?=$arItem['DETAIL_TEXT']?>
                                    </span>
                                <?elseif($arItem['PROPERTIES']['CONTACTS_TYPE']['VALUE_XML_ID'] == 'icon_mail'):?>
                                    <a class="contacts__addres-text" href="mailto:<?=$arItem['~DETAIL_TEXT']?>">
                                        <?=$arItem['~DETAIL_TEXT']?>
                                    </a>
                                <?else:?>
                                    <span class="contacts__addres-text">
                                        <?=$arItem['DETAIL_TEXT']?>
                                    </span>
                                <?endif;?>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>