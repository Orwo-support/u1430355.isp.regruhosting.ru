<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <ul class="about-offer__items">
        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <li class="about-offer__item">
                <a class="about-offer__link" href="<?=$arItem["LINK"]?>">
                    <span class="about-offer__arr">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve"><g><g><path class="st0" d="M9.7,12.5c-0.1,0-0.3-0.1-0.4-0.2c-0.2-0.2-0.2-0.5,0-0.7l3.4-3.1H2C1.7,8.5,1.5,8.3,1.5,8S1.7,7.5,2,7.5 h10.7L9.4,4.4c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0l4.3,4c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0.1h0c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0l0,0c0,0,0,0.1,0,0.2c0,0,0,0,0,0l0,0c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0,0.1,0,0.1,0,0.2l0,0c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0h0c0,0.1-0.1,0.1-0.1,0.1c0,0,0,0,0,0l-4.3,4C10,12.5,9.8,12.5,9.7,12.5z"/></g></g></svg>
                    </span>
                    <span class="about-offer__link-txt">
                        <?=$arItem["TEXT"]?>
                    </span>
                </a>
            </li>
        <?endforeach?>
    </ul>
<?endif?>