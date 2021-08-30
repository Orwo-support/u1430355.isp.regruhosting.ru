<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Калькулятор");
?>
<?$PRICE = [
    'modules' => [],
    'powerSupplies' => [],
    'controllers' => [],
    'magnets' => [],
    'profiles' => [],
    'corners' => [],
    'guides' => [],
    'controlSystems' => [],
    'cabinets' => []
];

if (CModule::IncludeModule("iblock")) {
    $price = CIBlockElement::GetList(
        array(),
        array('IBLOCK_TYPE' => 'prices', 'ACTIVE' => 'Y'),
        false,
        false,
        array('ID', 'IBLOCK_ID', 'IBLOCK_CODE', 'PROPERTY_*')
    );

    while ($ob = $price->GetNextElement()) {
        $arFields = $ob->GetFields();
        // debug($arFields);
        $arProps = $ob->GetProperties();
        // debug($arProps);

        foreach ($arProps as $key => $val) {
            $arr[$key] = $val['VALUE'];
        }

        array_push($PRICE[$arFields['IBLOCK_CODE']], $arr);
        unset($arr);
    }
}
// debug($PRICE);
$PRICE_AS_JSON = defined('JSON_UNESCAPED_UNICODE')
    ? json_encode($PRICE, JSON_UNESCAPED_UNICODE)
    : json_encode($PRICE);?>

<div class="calc" id="mainCalc" data-calc-price='<?echo $PRICE_AS_JSON;?>'>
    <div class="container">
        <div class="calc__title-picture">
            <div class="image<?= (!isset($_GET['calc'])) ? ' active' : '';?>"
                 data-calc-type-pic="#outsideScreen"
                 style="background-image: url('/img/calc-location-outside.png');"></div>
            <div class="image<?= $_GET['calc'] == 'insideScreen' ? ' active' : '';?>"
                 data-calc-type-pic="#insideScreen"
                 style="background-image: url('/img/quiz-location-inside.png');"></div>
            <div class="image<?= $_GET['calc'] == 'rentScreen' ? ' active' : '';?>"
                 data-calc-type-pic="#rentScreen"
                 style="background-image: url('/img/calc-media-facade.png');"></div>
        </div>
    </div>
    <div class="container">
        <h2 class="h2 calc__title"><span class="title animation-element">Рассчитать стоимость конструкции</span><span class="step animation-element">шаг 1 из 2</span></h2>
    </div>
    <div class="container-endless-fix">
        <div class="endless calc__tab-list-animation-container animation-element">
            <div class="calc__tab-list swiper-container" id="calcTabsSlider">
                <div class="calc__tab-list-wrap swiper-wrapper">
                    <div class="calc__tab-list__slide swiper-slide">
                        <div class="calc__tab-list__button<?= (!isset($_GET['calc'])) ? ' active' : '';?>"
                             data-target-tab-id="#outsideScreen"
                             data-calc-type="outsideScreen">Уличный светодиодный экран</div></div>
                    <div class="calc__tab-list__slide swiper-slide">
                        <div class="calc__tab-list__button<?= $_GET['calc'] == 'insideScreen' ? ' active' : '';?>"
                             data-target-tab-id="#insideScreen"
                             data-calc-type="insideScreen">Внутренний светодиодный экран</div></div>
                    <div class="calc__tab-list__slide swiper-slide">
                        <div class="calc__tab-list__button<?= $_GET['calc'] == 'rentScreen' ? ' active' : '';?>"
                             data-target-tab-id="#rentScreen"
                             data-calc-type="rentScreen">Аренда</div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="calc__content">
        <div class="calc__calculator calc__calculator_outside-screen<?
                if(!isset($_GET['calc']))
                    echo ' active';
                else
                    echo ' hidden';
            ?>" id="outsideScreen">
            <div class="container">
                <div class="calc__subtitle animation-element">Уличные экраны защищены от влаги и пыли IP65, имеют яркость 4000-6500КД для противодействия солнечному засвету</div>
                <div class="calc__body animation-element">
                    <div class="calc__body-controllers">
                        <div class="label-controll">
                            <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenExecutionType">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/><path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="help-modal help-modal_default" id="helpModalOutsideScreenExecutionType">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">
                                                Каким будет конструкция светодиодного экрана
                                            </div>
                                            <div class="help-modal__text">
                                                Монолитный – конструкция собирается из
                                                профилей на месте монтажа. Она дешевле, дольше по сборке и
                                                используется на шаге пикселя от 2.5мм, чтобы не было видно стыков
                                                модулей.
                                                <br>
                                                Кабинетный – отдельные части металлоконструкции
                                                наполняются комплектующими по заводской разметке на производстве.
                                                Составляются в единое полотно на объекте. Быстрый монтаж, высокая
                                                точность сборки, легкое обслуживание, можно разобрать для хранения
                                                или транспортировки.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__caption">Тип исполнения</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="radio-group calc-execution-type" data-controller-type="radio-group">
                                        <div class="marker"></div><?
                                            // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked в соответсвующий input
                                            // Список значений формировать динамически из параметров элементв на стороне сервера
                                            // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                        ?>
                                        <input class="input"
                                               id="calcOutsideExecutionTypeMonolithic"
                                               type="radio"
                                               name="execution-type-outside-screen"
                                               value="" checked>
                                        <label class="filter-controller"
                                               for="calcOutsideExecutionTypeMonolithic"
                                               data-calc-property="executionType"
                                               data-calc-value="monolithic">Монолитный</label>
                                        <input class="input"
                                               id="calcOutsideExecutionTypeCabin"
                                               type="radio"
                                               name="execution-type-outside-screen"
                                               value="">
                                        <label class="filter-controller"
                                               for="calcOutsideExecutionTypeCabin"
                                               data-calc-property="executionType"
                                               data-calc-value="cabinet">Кабинетный</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll cabin-type hidden">
                            <div class="label-controll__caption">Размер кабинета</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="radio-group calc-cabin-type" data-controller-type="radio-group">
                                        <div class="marker"></div><?
                                            // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked в соответсвующий input
                                            // Список значений формировать динамически из параметров элементв на стороне сервера
                                            // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                        ?>
                                        <input class="input"
                                               id="calcOutsideCabinType640_640"
                                               type="radio"
                                               name="cabin-outside-type"
                                               value="" checked>
                                        <label class="filter-controller"
                                               for="calcOutsideCabinType640_640"
                                               data-calc-property="cabinType"
                                               data-calc-value="640,640">640 x 640</label>
                                        <input class="input"
                                               id="calcOutsideCabinType960_960"
                                               type="radio"
                                               name="cabin-outside-type"
                                               value="">
                                        <label class="filter-controller"
                                               for="calcOutsideCabinType960_960"
                                               data-calc-property="cabinType"
                                               data-calc-value="960,960">960 x 960</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll">
                            <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenPixelStep">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/><path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="help-modal help-modal_default" id="helpModalOutsideScreenPixelStep">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">Расстояние между пикселями</div>
                                            <div class="help-modal__text">
                                                От шага пикселя зависит минимальное
                                                комфортное расстояние для просмотра.
                                                Считается по формуле:<br>
                                                Расстояние просмотра в метрах = шаг пикселя (р) х 1000.<br>
                                                Например, экран с шагом 2.5мм рекомендуется смотреть с
                                                расстояния не менее 2.5 метров, а экран с шагом 8мм –
                                                более чем с 8 метров. С этого расстояния не будет видно
                                                зерно пикселя, а изображение будет восприниматься
                                                цельной картинкой.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__caption">Шаг пикселя</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="select-suffix custom-select calc-pixel-step" data-controller-type="custom-select">
                                        <?// Если есть значение по умолчанию добавить его в .select-suffix__selected-item.selected вместо &nbsp;?>
                                        <div class="select-suffix__selected-item selected">&nbsp;</div>
                                        <div class="select-suffix__arr"></div>
                                        <div class="select-suffix__delimiter"></div>
                                        <div class="select-suffix__units">мм</div>
                                        <div class="custom-select__container">
                                            <div class="custom-select__list scroller"><?
                                                    // Если есть значение по умолчанию добавить .active соответствующему значению
                                                    // Список значений формировать динамически из параметров элементв на стороне сервера
                                                    // Тип свойства фильтра data-filter-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                                ?>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="2,5">2,5</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="3,07">3,07</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="4">4</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="5">5</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="6,66">6,66</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="8">8</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="10">10</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll label-controll__size-type-width">
                            <div class="label-controll__caption">Ширина</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="custom-range">
                                        <div class="input-suffix custom-input">
                                            <input class="input value"
                                                   type="number"
                                                   data-calc-property="width"
                                                   data-min="320"
                                                   data-max="30400"
                                                   value="">
                                            <span class="input-suffix__delimiter"></span>
                                            <span class="input-suffix__units">мм</span>
                                        </div>
                                        <div class="custom-range__controller">
                                            <span class="status-bar"></span>
                                            <span class="slider"></span>
                                            <input class="input custom-range__slide"
                                                   type="range"
                                                   step="320"
                                                   min="320"
                                                   max="30400"
                                                   value="320"
                                                   data-calc-property="width">
                                        </div>
                                        <div class="custom-range__value-error" data-default-txt="Некорректное значение ширины."></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll label-controll__size-type-height">
                            <div class="label-controll__caption">Высота</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="custom-range">
                                        <div class="input-suffix custom-input">
                                            <input class="input value"
                                                   type="number"
                                                   data-calc-property="height"
                                                   data-min="160"
                                                   data-max="30400"
                                                   value="">
                                            <span class="input-suffix__delimiter"></span>
                                            <span class="input-suffix__units">мм</span>
                                        </div>
                                        <div class="custom-range__controller">
                                            <span class="status-bar"></span>
                                            <span class="slider"></span>
                                            <input class="input custom-range__slide"
                                                   type="range"
                                                   step="160"
                                                   min="160"
                                                   max="30400" value="160"
                                                   data-calc-property="height">
                                        </div>
                                        <div class="custom-range__value-error" data-default-txt="Некорректное значение высоты."></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="calc__collapse-controllers hidden">
                            <div class="btn">
                                <span class="text">Дополнительно</span>
                                <span class="icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4 6L7.33333 9.5044C7.6476 9.8348 7.80474 10 8 10C8.19526 10 8.3524 9.8348 8.66667 9.5044L12 6" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                </span>
                            </div>
                            <div class="body">
                                <div class="label-controll">
                                    <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenContentController">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default" id="helpModalOutsideScreenContentController">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Способ передачи изображения
                                                    </div>
                                                    <div class="help-modal__text">
                                                        Выберите, что лучше подходит для
                                                        задачи - управление с компьютера, подключенному к экрану
                                                        напрямую (чаще используется для презентаций) или при помощи
                                                        удаленного соединения (чаще используется для рекламных
                                                        экранов и зацикленного контента).
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="label-controll__caption">Управление контентом</div>
                                    <div class="label-controll__body">
                                        <div class="label-controll__content">
                                            <div class="radio-group calc-content-controller" data-controller-type="radio-group">
                                                <div class="marker"></div><?
                                                    // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked='' в соответсвующий input
                                                    // Список значений формировать динамически из параметров элементв на стороне сервера
                                                    // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                                ?>
                                                <input class="input"
                                                       id="calcOutsideScreenContentControllerPlace"
                                                       type="radio"
                                                       name="content-controll-outside-screen"
                                                       value="">
                                                <label class="filter-controller"
                                                       for="calcOutsideScreenContentControllerPlace"
                                                       data-calc-property="UK"
                                                       data-calc-value="place">На месте</label>
                                                <input class="input"
                                                       id="calcOutsideScreenContentControllerRemotely"
                                                       type="radio"
                                                       name="content-controll-outside-screen"
                                                       value="">
                                                <label class="filter-controller"
                                                       for="calcOutsideScreenContentControllerRemotely"
                                                       data-calc-property="UK"
                                                       data-calc-value="remotely">Удаленно</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="label-controll">
                                    <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenSystemControll">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default" id="helpModalOutsideScreenSystemControll">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Управления контентом наэкране
                                                    </div>
                                                    <div class="help-modal__text">Контроллеры позволяют просто
                                                        воспроизводить картинку с источника, а видеопроцессоры
                                                        делают автомасштабирование, принимают и транслируют
                                                        множество сигналов, позволяют работать со слоями (картинка в
                                                        картинке). Мы закладываем в цену стандартные конфигурации
                                                        оборудования, но если проект особенный - цена на управление
                                                        изменится, с этим поможет менеджер.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="label-controll__caption">Система управления</div>
                                    <div class="label-controll__body">
                                        <div class="label-controll__content">
                                            <div class="radio-group calc-system-controll" data-controller-type="radio-group">
                                                <div class="marker"></div><?
                                                    // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked='' в соответсвующий input
                                                    // Список значений формировать динамически из параметров элементв на стороне сервера
                                                    // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                                ?>
                                                <input class="input"
                                                       id="calcOutsideScreenSystemControllController"
                                                       type="radio"
                                                       name="system-controll-outside-screen"
                                                       value=""
                                                       checked>
                                                <label class="filter-controller"
                                                       for="calcOutsideScreenSystemControllController"
                                                       data-calc-property="SUType"
                                                       data-calc-value="controller">Контроллер</label>
                                                <input class="input"
                                                       id="calcOutsideScreenSystemControllProcessor"
                                                       type="radio"
                                                       name="system-controll-outside-screen"
                                                       value="">
                                                <label class="filter-controller"
                                                       for="calcOutsideScreenSystemControllProcessor"
                                                       data-calc-property="SUType"
                                                       data-calc-value="processor">
                                                    Видеопроцессор</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenBrightnessSensor">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default" id="helpModalOutsideScreenBrightnessSensor">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Автоматически меняет яркость<br>в зависимости от освещенности
                                                    </div>
                                                    <div class="help-modal__text">Обычно используется на уличных
                                                        экранах для гашения яркости в ночное время или в пасмурную
                                                        погоду (экономия энергии, соблюдение требований
                                                        законодательства).
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Датчик яркости
                                            <input class="input visuallyhidden calc-checkbox" type="checkbox" data-calc-property="DY">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenElectricalProject">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default" id="helpModalOutsideScreenElectricalProject">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Включает в себя схемы проводки экрана и автомата
                                                    </div>
                                                    <div class="help-modal__text">
                                                        При отсутствии электропроекта мы
                                                        выведем штекер экрана для самостоятельного подключения к
                                                        электросети. Стоимость рассчитывается отдельно менеджером.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Электротехнический проект
                                            <input class="input visuallyhidden hidden-label-controller calc-checkbox"
                                                   type="checkbox"
                                                   data-calc-property="EP">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox label-controll_hidden hide">
                                    <div class="label-controll_hidden-content">
                                        <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenSwitchboard">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                            <div class="help-modal help-modal_default" id="helpModalOutsideScreenSwitchboard">
                                                <div class="help-modal__dialog">
                                                    <div class="help-modal__content">
                                                        <div class="help-modal__close">
                                                            <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                        </div>
                                                        <div class="help-modal__caption">
                                                            Установим отдельный щиток
                                                        </div>
                                                        <div class="help-modal__text">
                                                            Включим в счёт электрощитовую, если её нет на объекте.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-checkbox">
                                            <label class="custom-checkbox__container">
                                                Электрощитовая
                                                <input class="input visuallyhidden calc-checkbox"
                                                       type="checkbox"
                                                       data-calc-property="ESH">
                                                <span class="custom-checkbox__checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenSteelConstructionProject">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default" id="helpModalOutsideScreenSteelConstructionProject">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Проект экрана с учетом
                                                        особенностей места монтажа
                                                    </div>
                                                    <div class="help-modal__text">
                                                        Создается, если экран изогнут или
                                                        есть особенности в монтаже (например, не ровная поверхность
                                                        крепления). Стоимость рассчитывается отдельно менеджером.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Проект металлоконструкции
                                            <input class="input visuallyhidden calc-checkbox"
                                                   type="checkbox"
                                                   data-calc-property="PM">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenAdditionalSpare">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default" id="helpModalOutsideScreenAdditionalSpare">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Добавим комплект запчастей
                                                    </div>
                                                    <div class="help-modal__text">
                                                        Он часто нужен для обслуживания и сокращает время простоя экрана.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Комплект запасных частей
                                            <input class="input visuallyhidden calc-checkbox" type="checkbox"  data-calc-property="ZCH">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenExtendedWarrantly">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default" id="helpModalOutsideScreenExtendedWarrantly">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Дополнительная гарантия
                                                    </div>
                                                    <div class="help-modal__text">
                                                        Расширенная гарантия действует на
                                                        все узлы экрана.<br>
                                                        Без неё стандартная гарантия на
                                                        изделие - 1 год на все комплектующие,
                                                        кроме блоков питания.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Расширенная гарантия
                                            <input class="input visuallyhidden hidden-label-controller calc-checkbox"
                                                   type="checkbox"
                                                   data-calc-property="RG"
                                                   data-calc-value="1">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_hidden hide">
                                    <div class="label-controll_hidden-content">
                                        <div class="label-controll__caption">Выберите срок гарантии</div>
                                        <div class="label-controll__body">
                                            <div class="label-controll__content">
                                                <div class="select-suffix custom-select"
                                                     data-controller-type="custom-select">
                                                    <?// Если есть значение по умолчанию добавить его в .select-suffix__selected-item.selected вместо &nbsp;?>
                                                    <div class="select-suffix__selected-item short selected">1</div>
                                                    <div class="select-suffix__arr"></div>
                                                    <div class="select-suffix__delimiter"></div>
                                                    <div class="select-suffix__units units-year">год</div>
                                                    <div class="custom-select__container">
                                                        <div class="custom-select__list scroller"><?
                                                                // Если есть значение по умолчанию добавить .active соответствующему значению
                                                                // Список значений формировать динамически из параметров элементв на стороне сервера
                                                                // Тип свойства фильтра data-filter-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                                            ?>
                                                            <div class="custom-select__item filter-controller active"
                                                                 data-calc-property="RG" data-calc-value="1">1</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RG" data-calc-value="2">2</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RG" data-calc-value="3">3</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RG" data-calc-value="4">4</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RG" data-calc-value="5">5</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button" data-help-modal-id="helpModalOutsideScreenAdvancedService">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default" id="helpModalOutsideScreenAdvancedService">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Приоритетное сервисное обслуживание
                                                    </div>
                                                    <div class="help-modal__text">
                                                        Поддержка сервисного центра с
                                                        приоритетной очередностью и
                                                        квотой на бесплатный ремонт.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Расширенный сервис
                                            <input class="input visuallyhidden hidden-label-controller calc-checkbox"
                                                   type="checkbox"
                                                   data-calc-property="RS"
                                                   data-calc-value="1">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_hidden hide">
                                    <div class="label-controll_hidden-content">
                                        <div class="label-controll__caption">Выберите срок сервиса</div>
                                        <div class="label-controll__body">
                                            <div class="label-controll__content">
                                                <div class="select-suffix custom-select"
                                                     data-controller-type="custom-select">
                                                    <?// Если есть значение по умолчанию добавить его в .select-suffix__selected-item.selected вместо &nbsp;?>
                                                    <div class="select-suffix__selected-item short selected">1</div>
                                                    <div class="select-suffix__arr"></div>
                                                    <div class="select-suffix__delimiter"></div>
                                                    <div class="select-suffix__units units-year">год</div>
                                                    <div class="custom-select__container">
                                                        <div class="custom-select__list scroller"><?
                                                                // Если есть значение по умолчанию добавить .active соответствующему значению
                                                                // Список значений формировать динамически из параметров элементв на стороне сервера
                                                                // Тип свойства фильтра data-filter-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                                            ?>
                                                            <div class="custom-select__item filter-controller active"
                                                                 data-calc-property="RS" data-calc-value="1">1</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RS" data-calc-value="2">2</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RS" data-calc-value="3">3</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RS" data-calc-value="4">4</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RS" data-calc-value="5">5</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn_secondary calculating">Рассчитать стоимость</button>
                    </div>
                    <div class="calc__body-picture">
                        <div class="calc__body-image">
                            <div class="calc__body-image-body">
                                <img class="pic" src="/img/calc-location-outside.png" alt="">
                            </div>
                            <form class="calc__results calc-results-form"
                                  action="/rezultaty-raschyetov-kalkulyatora/"
                                  method="POST"
                                  enctype="multipart/form-data">
                                <input class="calc-results-input" type="hidden" name="calc-results" value="">
                                <div class="calc__results-sum">
                                    <div class="txt">Итого:</div>
                                    <div class="number calc-results-number">0 ₽</div>
                                </div>
                                <button class="btn btn_primary not-focused" type="submit">Посмотреть спецификацию</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="calc__calculator calc__calculator_inside-screen<?
                if(isset($_GET['calc']) && $_GET['calc'] == 'insideScreen')
                    echo ' active';
                else
                    echo ' hidden';
            ?>" id="insideScreen">
            <div class="container">
                <div class="calc__subtitle animation-element">Внутренние экраны имеют защиту IP22, параметр яркости 600-800 КД для комфортного просмотра и сохранения энергии</div>
                <div class="calc__body animation-element">
                    <div class="calc__body-controllers">
                        <div class="label-controll">
                            <div class="label-controll__help help-button"
                                 data-help-modal-id="helpModalInsideScreenExecutionType">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <div class="help-modal help-modal_default" id="helpModalInsideScreenExecutionType">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">
                                                Каким будет конструкция светодиодного экрана
                                            </div>
                                            <div class="help-modal__text">
                                                Монолитный – конструкция собирается из
                                                профилей на месте монтажа. Она дешевле, дольше по сборке и
                                                используется на шаге пикселя от 2.5мм, чтобы не было видно стыков
                                                модулей.<br>
                                                Кабинетный – отдельные части металлоконструкции
                                                наполняются комплектующими по заводской разметке на производстве.
                                                Составляются в единое полотно на объекте. Быстрый монтаж, высокая
                                                точность сборки, легкое обслуживание, можно разобрать для хранения
                                                или транспортировки.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__caption">Тип исполнения</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="radio-group calc-execution-type" data-controller-type="radio-group">
                                        <div class="marker"></div><?
                                            // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked в соответсвующий input
                                            // Список значений формировать динамически из параметров элементв на стороне сервера
                                            // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                        ?><input class="input"
                                                 id="calcInsideExecutionTypeMonolithic"
                                                 type="radio"
                                                 name="execution-type-inside-screen"
                                                 value="" checked>
                                        <label class="filter-controller"
                                               for="calcInsideExecutionTypeMonolithic"
                                               data-calc-property="executionType"
                                               data-calc-value="monolithic">Монолитный</label>
                                        <input class="input"
                                               id="calcInsideExecutionTypeCabin"
                                               type="radio"
                                               name="execution-type-inside-screen"
                                               value="">
                                        <label class="filter-controller"
                                               for="calcInsideExecutionTypeCabin"
                                               data-calc-property="executionType"
                                               data-calc-value="cabinet">Кабинетный</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll cabin-type hidden">
                            <div class="label-controll__caption">Размер кабинета</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="radio-group calc-cabin-type" data-controller-type="radio-group">
                                        <div class="marker"></div><?
                                            // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked в соответсвующий input
                                            // Список значений формировать динамически из параметров элементв на стороне сервера
                                            // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                        ?><input class="input"
                                                 id="calcInsideCabinType640_480"
                                                 type="radio"
                                                 name="cabin-inside-type"
                                                 value="" checked>
                                        <label class="filter-controller"
                                               for="calcInsideCabinType640_480"
                                               data-calc-property="cabinType"
                                               data-calc-value="640,480">640 x 480</label>
                                        <input class="input"
                                               id="calcInsideCabinType640_640"
                                               type="radio"
                                               name="cabin-inside-type"
                                               value="">
                                        <label class="filter-controller"
                                               for="calcInsideCabinType640_640"
                                               data-calc-property="cabinType"
                                               data-calc-value="640,640">640 x 640</label>
                                        <input class="input"
                                               id="calcInsideCabinType960_960"
                                               type="radio"
                                               name="cabin-inside-type" value="">
                                        <label class="filter-controller"
                                               for="calcInsideCabinType960_960"
                                               data-calc-property="cabinType"
                                               data-calc-value="960,960">960 x 960</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll label-controll_with-warning">
                            <div class="label-controll__help help-button"
                                 data-help-modal-id="helpModalInsideScreenPixelStep">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <div class="help-modal help-modal_default" id="helpModalInsideScreenPixelStep">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">Расстояние между пикселями</div>
                                            <div class="help-modal__text">
                                                От шага пикселя зависит минимальное
                                                комфортное расстояние для просмотра. Считается по формуле:<br>
                                                Расстояние просмотра в метрах = шаг пикселя (р) х 1000.<br>
                                                Например, экран с шагом 2.5мм рекомендуется смотреть
                                                с расстояния не менее 2.5 метров,
                                                а экран с шагом 8мм – более чем с 8 метров. С этого расстояния не
                                                будет видно зерно пикселя, а изображение будет восприниматься
                                                цельной картинкой.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__caption">Шаг пикселя</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="select-suffix custom-select calc-pixel-step"
                                         data-controller-type="custom-select">
                                        <?//Если есть значение по умолчанию добавить его в .select-suffix__selected-item.selected вместо &nbsp;?>
                                        <div class="select-suffix__selected-item selected">&nbsp;</div>
                                        <div class="select-suffix__arr"></div>
                                        <div class="select-suffix__delimiter"></div>
                                        <div class="select-suffix__units">мм</div>
                                        <div class="custom-select__container">
                                            <div class="custom-select__list scroller"><?
                                                    // Если есть значение по умолчанию добавить .active соответствующему значению
                                                    // Список значений формировать динамически из параметров элементв на стороне сервера
                                                    // Тип свойства фильтра data-filter-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                                ?><div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="1">1</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="1,25">1,25</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="1,37">1,37</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="1,53">1,53</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="1,66">1,66</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="1,86">1,86</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="2">2</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="2,5">2,5</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="3,07">3,07</div>
                                                <div class="custom-select__item filter-controller"
                                                     data-calc-property="pixelStep" data-calc-value="4">4</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__warning"></div>
                        </div>
                        <div class="label-controll label-controll__size-type-width">
                            <div class="label-controll__caption">Ширина</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="custom-range">
                                        <div class="input-suffix custom-input">
                                            <input class="input value"
                                                   type="number"
                                                   data-calc-property="width"
                                                   data-min="320"
                                                   data-max="16000"
                                                   value="">
                                            <span class="input-suffix__delimiter"></span>
                                            <span class="input-suffix__units">мм</span>
                                        </div>
                                        <div class="custom-range__controller">
                                            <span class="status-bar"></span>
                                            <span class="slider"></span>
                                            <input class="input custom-range__slide"
                                                   type="range"
                                                   step="320"
                                                   min="320"
                                                   max="16000"
                                                   value="320"
                                                   data-calc-property="width">
                                        </div>
                                        <div class="custom-range__value-error"
                                             data-default-txt="Некорректное значение ширины."></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll label-controll__size-type-height">
                            <div class="label-controll__caption">Высота</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="custom-range">
                                        <div class="input-suffix custom-input">
                                            <input class="input value"
                                                   type="number"
                                                   data-calc-property="height"
                                                   data-min="160"
                                                   data-max="16000"
                                                   value="">
                                            <span class="input-suffix__delimiter"></span>
                                            <span class="input-suffix__units">мм</span>
                                        </div>
                                        <div class="custom-range__controller">
                                            <span class="status-bar"></span>
                                            <span class="slider"></span>
                                            <input class="input custom-range__slide"
                                                   type="range"
                                                   step="160"
                                                   min="160"
                                                   max="16000"
                                                   value="160"
                                                   data-calc-property="height">
                                        </div>
                                        <div class="custom-range__value-error"
                                             data-default-txt="Некорректное значение высоты."></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="calc__collapse-controllers hidden">
                            <div class="btn">
                                <span class="text">Дополнительно</span>
                                <span class="icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4 6L7.33333 9.5044C7.6476 9.8348 7.80474 10 8 10C8.19526 10 8.3524 9.8348 8.66667 9.5044L12 6" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                </span>
                            </div>
                            <div class="body">
                                <div class="label-controll">
                                    <div class="label-controll__help help-button"
                                         data-help-modal-id="helpModalInsideScreenContentController">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default"
                                             id="helpModalInsideScreenContentController">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">Способ передачи изображения</div>
                                                    <div class="help-modal__text">
                                                        Выберите, что лучше подходит для
                                                        задачи - управление с компьютера, подключенному к экрану
                                                        напрямую (чаще используется для презентаций) или при помощи
                                                        удаленного соединения (чаще используется для рекламных
                                                        экранов и зацикленного контента).
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="label-controll__caption">Управление контентом</div>
                                    <div class="label-controll__body">
                                        <div class="label-controll__content">
                                            <div class="radio-group calc-content-controller"
                                                 data-controller-type="radio-group">
                                                <div class="marker"></div><?
                                                    // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked='' в соответсвующий input
                                                    // Список значений формировать динамически из параметров элементв на стороне сервера
                                                    // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                                ?><input class="input"
                                                         id="calcInsideScreenContentControllerPlace"
                                                         type="radio"
                                                         name="content-controll-inside-screen"
                                                         value="">
                                                <label class="filter-controller"
                                                       for="calcInsideScreenContentControllerPlace"
                                                       data-calc-property="UK"
                                                       data-calc-value="place">На месте</label>
                                                <input class="input"
                                                       id="calcInsideScreenContentControllerRemotely"
                                                       type="radio"
                                                       name="content-controll-inside-screen"
                                                       value="">
                                                <label class="filter-controller"
                                                       for="calcInsideScreenContentControllerRemotely"
                                                       data-calc-property="UK"
                                                       data-calc-value="remotely">Удаленно</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="label-controll">
                                    <div class="label-controll__help help-button"
                                         data-help-modal-id="helpModalInsideScreenSystemControll">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default"
                                             id="helpModalInsideScreenSystemControll">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Управления контентом на экране
                                                    </div>
                                                    <div class="help-modal__text">Контроллеры позволяют просто
                                                        воспроизводить картинку с источника, а видеопроцессоры
                                                        делают автомасштабирование, принимают и транслируют
                                                        множество сигналов, позволяют работать со слоями (картинка в
                                                        картинке). Мы закладываем в цену стандартные конфигурации
                                                        оборудования, но если проект особенный - цена на управление
                                                        изменится, с этим поможет менеджер.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="label-controll__caption">Система управления</div>
                                    <div class="label-controll__body">
                                        <div class="label-controll__content">
                                            <div class="radio-group calc-system-controll"
                                                 data-controller-type="radio-group">
                                                <div class="marker"></div><?
                                                    // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked='' в соответсвующий input
                                                    // Список значений формировать динамически из параметров элементв на стороне сервера
                                                    // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                                ?><input class="input"
                                                         id="calcInsideScreenSystemControllController"
                                                         type="radio"
                                                         name="system-controll-inside-screen"
                                                         value=""
                                                         checked>
                                                <label class="filter-controller"
                                                       for="calcInsideScreenSystemControllController"
                                                       data-calc-property="SUType"
                                                       data-calc-value="controller">Контроллер</label>
                                                <input class="input"
                                                       id="calcInsideScreenSystemControllProcessor"
                                                       type="radio"
                                                       name="system-controll-inside-screen"
                                                       value="">
                                                <label class="filter-controller"
                                                       for="calcInsideScreenSystemControllProcessor"
                                                       data-calc-property="SUType"
                                                       data-calc-value="processor">Видеопроцессор</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button"
                                         data-help-modal-id="helpModalInsideScreenBrightnessSensor">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default"
                                             id="helpModalInsideScreenBrightnessSensor">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Автоматически меняет яркость<br>в зависимости от освещенности
                                                    </div>
                                                    <div class="help-modal__text">Обычно используется на уличных
                                                        экранах для гашения яркости в ночное время или в пасмурную
                                                        погоду (экономия энергии, соблюдение требований
                                                        законодательства).
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Датчик яркости
                                            <input class="input visuallyhidden calc-checkbox"
                                                   type="checkbox"
                                                   data-calc-property="DY">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button"
                                         data-help-modal-id="helpModalInsideScreenElectricalProject">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default"
                                             id="helpModalInsideScreenElectricalProject">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Включает в себя схемы проводки экрана и автомата
                                                    </div>
                                                    <div class="help-modal__text">При отсутствии электропроекта мы
                                                        выведем штекер экрана для самостоятельного подключения к
                                                        электросети. Стоимость рассчитывается отдельно менеджером.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Электротехнический проект
                                            <input class="input visuallyhidden hidden-label-controller calc-checkbox"
                                                    type="checkbox"
                                                   data-calc-property="EP">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox label-controll_hidden hide">
                                    <div class="label-controll_hidden-content">
                                        <div class="label-controll__help help-button"
                                             data-help-modal-id="helpModalInsideScreenSwitchboard">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                            <div class="help-modal help-modal_default"
                                                 id="helpModalInsideScreenSwitchboard">
                                                <div class="help-modal__dialog">
                                                    <div class="help-modal__content">
                                                        <div class="help-modal__close">
                                                            <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                        </div>
                                                        <div class="help-modal__caption">
                                                            Установим отдельный щиток
                                                        </div>
                                                        <div class="help-modal__text">Включим в счёт электрощитовую,
                                                            если её нет на объекте.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-checkbox">
                                            <label class="custom-checkbox__container">
                                                Электрощитовая
                                                <input class="input visuallyhidden calc-checkbox"
                                                       type="checkbox"
                                                       data-calc-property="ESH">
                                                <span class="custom-checkbox__checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button"
                                         data-help-modal-id="helpModalInsideScreenSteelConstructionProject">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default"
                                             id="helpModalInsideScreenSteelConstructionProject">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Проект экрана с учетом особенностей места монтажа
                                                    </div>
                                                    <div class="help-modal__text">Создается, если экран изогнут или
                                                        есть особенности в монтаже (например, не ровная поверхность
                                                        крепления). Стоимость рассчитывается отдельно менеджером.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Проект металлоконструкции
                                            <input class="input visuallyhidden calc-checkbox"
                                                   type="checkbox"
                                                   data-calc-property="PM">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button"
                                         data-help-modal-id="helpModalInsideScreenAdditionalSpare">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default"
                                             id="helpModalInsideScreenAdditionalSpare">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">Добавим комплект запчастей</div>
                                                    <div class="help-modal__text">Он часто нужен для обслуживания и
                                                        сокращает время простоя экрана.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Комплект запасных частей
                                            <input class="input visuallyhidden calc-checkbox"
                                                   type="checkbox"
                                                   data-calc-property="ZCH">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button"
                                         data-help-modal-id="helpModalInsideScreenExtendedWarrantly">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default"
                                             id="helpModalInsideScreenExtendedWarrantly">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">Дополнительная гарантия</div>
                                                    <div class="help-modal__text">Расширенная гарантия действует на
                                                        все узлы экрана.<br>Без неё стандартная гарантия на изделие
                                                        - 1 год на все комплектующие, кроме блоков питания.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label class="custom-checkbox__container">
                                            Расширенная гарантия
                                            <input class="input visuallyhidden hidden-label-controller calc-checkbox"
                                                   type="checkbox"
                                                   data-calc-property="RG"
                                                   data-calc-value="1">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_hidden hide">
                                    <div class="label-controll_hidden-content">
                                        <div class="label-controll__caption">Выберите срок гарантии</div>
                                        <div class="label-controll__body">
                                            <div class="label-controll__content">
                                                <div class="select-suffix custom-select"
                                                     data-controller-type="custom-select">
                                                    <?//Если есть значение по умолчанию добавить его в .select-suffix__selected-item.selected вместо &nbsp;?>
                                                    <div class="select-suffix__selected-item short selected">1</div>
                                                    <div class="select-suffix__arr"></div>
                                                    <div class="select-suffix__delimiter"></div>
                                                    <div class="select-suffix__units units-year">год</div>
                                                    <div class="custom-select__container">
                                                        <div class="custom-select__list scroller"><?
                                                                // Если есть значение по умолчанию добавить .active соответствующему значению
                                                                // Список значений формировать динамически из параметров элементв на стороне сервера
                                                                // Тип свойства фильтра data-filter-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                                            ?><div class="custom-select__item filter-controller active"
                                                                 data-calc-property="RG" data-calc-value="1">1</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RG" data-calc-value="2">2</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RG" data-calc-value="3">3</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RG" data-calc-value="4">4</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RG" data-calc-value="5">5</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_checkbox">
                                    <div class="label-controll__help help-button"
                                         data-help-modal-id="helpModalInsideScreenAdvancedService">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                        <div class="help-modal help-modal_default"
                                             id="helpModalInsideScreenAdvancedService">
                                            <div class="help-modal__dialog">
                                                <div class="help-modal__content">
                                                    <div class="help-modal__close">
                                                        <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                                    </div>
                                                    <div class="help-modal__caption">
                                                        Приоритетное сервисное обслуживание
                                                    </div>
                                                    <div class="help-modal__text">Поддержка сервисного центра с
                                                        приоритетной очередностью и квотой на бесплатный ремонт.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-checkbox"><label class="custom-checkbox__container">
                                            Расширенный сервис
                                            <input class="input visuallyhidden hidden-label-controller calc-checkbox"
                                                   type="checkbox"
                                                   data-calc-property="RS"
                                                   data-calc-value="1">
                                            <span class="custom-checkbox__checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="label-controll label-controll_hidden hide">
                                    <div class="label-controll_hidden-content">
                                        <div class="label-controll__caption">Выберите срок сервиса</div>
                                        <div class="label-controll__body">
                                            <div class="label-controll__content">
                                                <div class="select-suffix custom-select"
                                                     data-controller-type="custom-select">
                                                    <?//Если есть значение по умолчанию добавить его в .select-suffix__selected-item.selected вместо &nbsp;?>
                                                    <div class="select-suffix__selected-item short selected">1</div>
                                                    <div class="select-suffix__arr"></div>
                                                    <div class="select-suffix__delimiter"></div>
                                                    <div class="select-suffix__units units-year">год</div>
                                                    <div class="custom-select__container">
                                                        <div class="custom-select__list scroller"><?
                                                                // Если есть значение по умолчанию добавить .active соответствующему значению
                                                                // Список значений формировать динамически из параметров элементв на стороне сервера
                                                                // Тип свойства фильтра data-filter-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                                            ?><div class="custom-select__item filter-controller active"
                                                                 data-calc-property="RS" data-calc-value="1">1</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RS" data-calc-value="2">2</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RS" data-calc-value="3">3</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RS" data-calc-value="4">4</div>
                                                            <div class="custom-select__item filter-controller"
                                                                 data-calc-property="RS" data-calc-value="5">5</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn_secondary calculating">Рассчитать стоимость</button>
                    </div>
                    <div class="calc__body-picture">
                        <div class="calc__body-image">
                            <div class="calc__body-image-body">
                                <img class="pic" src="/img/quiz-location-inside.png" alt=""></div>
                            <form class="calc__results calc-results-form"
                                  action="/rezultaty-raschyetov-kalkulyatora/"
                                  method="POST"
                                  enctype="multipart/form-data">
                                <input class="calc-results-input" type="hidden" name="calc-results" value="">
                                <div class="calc__results-sum">
                                    <div class="txt">Итого:</div>
                                    <div class="number calc-results-number">0 ₽</div>
                                </div>
                                <button class="btn btn_primary not-focused" type="submit">Посмотреть спецификацию</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="calc__calculator calc__calculator_rent<?
                if(isset($_GET['calc']) && $_GET['calc'] == 'rentScreen')
                    echo ' active';
                else
                    echo ' hidden';
            ?>" id="rentScreen">
            <div class="container">
                <div class="calc__subtitle animation-element">У нас можно взять в аренду экран на мероприятие с установкой под ключ. У нас можно взять в аренду экран на мероприятие с установкой под ключ</div>
                <div class="calc__body animation-element">
                    <div class="calc__body-controllers">
                        <div class="label-controll">
                            <div class="label-controll__help help-button"
                                 data-help-modal-id="helpModalRentExecution">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <div class="help-modal help-modal_default" id="helpModalRentExecution">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">Где будет установлен экран</div>
                                            <div class="help-modal__text">В зависимости от этого параметра меняются
                                                шаг пикселя, яркость и степень защиты оборудования.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__caption">Исполнение</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="radio-group calc-rent-execution" data-controller-type="radio-group">
                                        <div class="marker"></div><?
                                            // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked в соответсвующий input
                                            // Список значений формировать динамически из параметров элементв на стороне сервера
                                            // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                        ?><input class="input"
                                                 id="calcRentExecutionInner"
                                                 type="radio"
                                                 name="execution-rent">
                                        <label class="filter-controller"
                                               for="calcRentExecutionInner"
                                               data-calc-property="execution"
                                               data-calc-value="inner"
                                               data-calc-pixel-step="3.9"
                                               data-max-sizes-id="39">Внутренний</label>
                                        <input class="input"
                                               id="calcRentExecutionOuter"
                                               type="radio"
                                               name="execution-rent">
                                        <label class="filter-controller"
                                               for="calcRentExecutionOuter"
                                               data-calc-property="execution"
                                               data-calc-value="outer"
                                               data-calc-pixel-step="4.8"
                                               data-max-sizes-id="48">Внешний</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll">
                            <div class="label-controll__help help-button"
                                 data-help-modal-id="helpModalRentPixelStep">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <div class="help-modal help-modal_default" id="helpModalRentPixelStep">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">Внутренний экран</div>
                                            <div class="help-modal__text">Внутренний экран 3.9 мм позволяет увидеть
                                                четкую картинку с расстояния не менее 3 метров.
                                            </div>
                                            <br>
                                            <div class="help-modal__caption">Уличный экран</div>
                                            <div class="help-modal__text">Уличный экран 4.8 мм рекомендуется
                                                смотреть с расстояния не менее 5 метров.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__caption">Шаг пикселя</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="radio-group rent-pixel-step" data-controller-type="radio-group">
                                        <div class="marker"></div>
                                        <input class="input"
                                               id="calcRentPixelStep39"
                                               type="radio"
                                               name="rent-pixel-step">
                                        <label class="filter-controller"
                                               for="calcRentPixelStep39"
                                               data-calc-property="pixelStep"
                                               data-calc-value="3.9"
                                               data-calc-execution="inner"
                                               data-max-sizes-id="39">3,9 мм.</label>
                                        <input class="input"
                                               id="calcRentPixelStep48"
                                               type="radio"
                                               name="rent-pixel-step">
                                        <label class="filter-controller"
                                               for="calcRentPixelStep48"
                                               data-calc-property="pixelStep"
                                               data-calc-value="4.8"
                                               data-calc-execution="outer"
                                               data-max-sizes-id="48">4,8 мм.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll label-controll__size-type-width">
                            <div class="label-controll__caption">Ширина</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="custom-range">
                                        <div class="input-suffix custom-input">
                                            <input class="input value"
                                                   type="number"
                                                   data-calc-property="width"
                                                   data-min="500"
                                                   data-max="50000"
                                                   step="500"
                                                   value="">
                                            <span class="input-suffix__delimiter"></span>
                                            <span class="input-suffix__units">мм.</span>
                                        </div>
                                        <div class="custom-range__controller">
                                            <span class="status-bar"></span>
                                            <span class="slider"></span>
                                            <input class="input custom-range__slide"
                                                   type="range"
                                                   step="500"
                                                   min="500"
                                                   max="50000"
                                                   value="500"
                                                   data-calc-property="width">
                                        </div>
                                        <div class="custom-range__value-error"
                                             data-default-txt="Некорректное значение ширины."></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll label-controll__size-type-height">
                            <div class="label-controll__caption">Высота</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="custom-range">
                                        <div class="input-suffix custom-input">
                                            <input class="input value"
                                                   type="number"
                                                   data-calc-property="height"
                                                   data-min="500"
                                                   data-max="50000"
                                                   step="500"
                                                   value="">
                                            <span class="input-suffix__delimiter"></span>
                                            <span class="input-suffix__units">мм</span>
                                        </div>
                                        <div class="custom-range__controller">
                                            <span class="status-bar"></span>
                                            <span class="slider"></span>
                                            <input class="input custom-range__slide"
                                                   type="range"
                                                   step="500"
                                                   min="500"
                                                   max="50000"
                                                   value="500"
                                                   data-calc-property="height">
                                        </div>
                                        <div class="custom-range__value-error"
                                             data-default-txt="Некорректное значение высоты."></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll">
                            <div class="label-controll__help help-button"
                                 data-help-modal-id="helpModalRentConstruction">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <div class="help-modal help-modal_default" id="helpModalRentConstruction">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">Как мы установим экран</div>
                                            <div class="help-modal__text">Может стоять на ногах (мы добавим их
                                                стоимость к расчёту) или быть подвешан в воздухе - для этого нужна
                                                специальная металлоконструкция. Если её нет на объекте - можно
                                                арендовать за отдельную плату.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__caption">Конструкция</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="radio-group calc-rent-construction"
                                         data-controller-type="radio-group">
                                        <div class="marker"></div><?
                                            // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked в соответсвующий input
                                            // Список значений формировать динамически из параметров элементв на стороне сервера
                                            // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                        ?><input class="input"
                                                 id="calcRentConstructionFloor"
                                                 type="radio"
                                                 name="construction-calc-rent">
                                        <label class="filter-controller"
                                               for="calcRentConstructionFloor"
                                               data-calc-property="construction"
                                               data-calc-value="floor">Напольная</label>
                                        <input class="input"
                                               id="calcRentConstructionSuspended"
                                               type="radio"
                                               name="construction-calc-rent">
                                        <label class="filter-controller"
                                               for="calcRentConstructionSuspended"
                                               data-calc-property="construction"
                                               data-calc-value="suspended">Подвесная</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll">
                            <div class="label-controll__help help-button"
                                 data-help-modal-id="helpModalRentSystemControl">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <div class="help-modal help-modal_default" id="helpModalRentSystemControl">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">Управление контентом на экране</div>
                                            <div class="help-modal__text">Контроллеры позволяют воспроизводить
                                                картинку с компьютера напрямую (дублируют экран), а видеопроцессоры
                                                делают автомасштабирование, принимают и транслируют множество
                                                сигналов, позволяют работать со слоями (картинка в картинке).
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__caption">Система управления</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="radio-group calc-rent-system-controll"
                                         data-controller-type="radio-group">
                                        <div class="marker"></div><?
                                            // Если нужно чтобы при инициализации был выбран какой-то пункт, добавить checked='' в соответсвующий input
                                            // Список значений формировать динамически из параметров элементв на стороне сервера
                                            // Тип свойства в сторе data-calc-property НЕ ТРОГАТЬ! именно так оно указано в JS
                                        ?><input class="input"
                                                 id="calcRentSystemControlController"
                                                 type="radio"
                                                 name="system-control-rent">
                                        <label class="filter-controller"
                                               for="calcRentSystemControlController"
                                               data-calc-property="systemControl"
                                               data-calc-value="controller">Контроллер</label>
                                        <input class="input"
                                               id="calcRentSystemControlProcessor"
                                               type="radio"
                                               name="system-control-rent">
                                        <label class="filter-controller"
                                               for="calcRentSystemControlProcessor"
                                               data-calc-property="systemControl"
                                               data-calc-value="processor">Видеопроцессор</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll calc-rent-days-controller">
                            <div class="label-controll__help help-button" data-help-modal-id="helpModalRentDays">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <div class="help-modal help-modal_default" id="helpModalRentDays">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">Скидки за продолжитель<span class="wbr"></span>ность</div>
                                            <div class="help-modal__text">Чем дольше пользуетесь экраном, тем дешевле.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__caption">Срок аренды</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="custom-range">
                                        <div class="input-suffix custom-input">
                                            <input class="input value"
                                                   type="number"
                                                   data-calc-property="rentDays"
                                                   data-min="1"
                                                   data-max="30"
                                                   step="1" value="">
                                            <span class="input-suffix__delimiter"></span>
                                            <span class="input-suffix__units">дни</span>
                                        </div>
                                        <div class="custom-range__controller">
                                            <span class="status-bar"></span>
                                            <span class="slider"></span>
                                            <input class="input custom-range__slide"
                                                   type="range"
                                                   step="1"
                                                   min="1"
                                                   max="30"
                                                   value="1"
                                                   data-calc-property="rentDays">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll label-controll_date">
                            <div class="label-controll__help help-button"
                                 data-help-modal-id="helpModalRentStartDate">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <div class="help-modal help-modal_default" id="helpModalRentStartDate">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">Когда нужен экран</div>
                                            <div class="help-modal__text">Если знаете дату, мы сразу можем проверить бронь на эти даты.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll__caption">Начало аренды</div>
                            <div class="label-controll__body">
                                <div class="label-controll__content">
                                    <div class="input-datepicker not-selected custom-input">
                                        <input class="input visuallyhidden"
                                               id="datepickerRentDateStart"
                                               type="text"
                                               data-calc-property="dateStart">
                                        <span class="day">дд</span>
                                        <span class="input-datepicker__delimiter"></span>
                                        <span class="month">мм</span>
                                        <span class="input-datepicker__delimiter"></span>
                                        <span class="year">гггг</span>
                                        <span class="input-datepicker__icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.5 2C5.5 1.72386 5.27614 1.5 5 1.5C4.72386 1.5 4.5 1.72386 4.5 2H5.5ZM4.5 6C4.5 6.27614 4.72386 6.5 5 6.5C5.27614 6.5 5.5 6.27614 5.5 6H4.5ZM11.5 2C11.5 1.72386 11.2761 1.5 11 1.5C10.7239 1.5 10.5 1.72386 10.5 2H11.5ZM10.5 6C10.5 6.27614 10.7239 6.5 11 6.5C11.2761 6.5 11.5 6.27614 11.5 6H10.5ZM1.5 6V12H2.5V6H1.5ZM4 14.5H12V13.5H4V14.5ZM14.5 12V6H13.5V12H14.5ZM12 3.5H4V4.5H12V3.5ZM14.5 6C14.5 4.61929 13.3807 3.5 12 3.5V4.5C12.8284 4.5 13.5 5.17157 13.5 6H14.5ZM12 14.5C13.3807 14.5 14.5 13.3807 14.5 12H13.5C13.5 12.8284 12.8284 13.5 12 13.5V14.5ZM1.5 12C1.5 13.3807 2.61929 14.5 4 14.5V13.5C3.17157 13.5 2.5 12.8284 2.5 12H1.5ZM2.5 6C2.5 5.17157 3.17157 4.5 4 4.5V3.5C2.61929 3.5 1.5 4.61929 1.5 6H2.5ZM4.5 2V6H5.5V2H4.5ZM10.5 2V6H11.5V2H10.5Z" fill="#AB78FF"/> <path d="M2.5 6C2.5 5.17157 3.17157 4.5 4 4.5H12C12.8284 4.5 13.5 5.17157 13.5 6V7.5H2.5V6Z" fill="#AB78FF" stroke="#AB78FF"/> </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="label-controll label-controll_checkbox calc-rent-technician-controller">
                            <div class="label-controll__help help-button"
                                 data-help-modal-id="helpModalRentTechnician">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <div class="help-modal help-modal_default" id="helpModalRentTechnician">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">Нужен человек для работы с экраном?</div>
                                            <div class="help-modal__text">Добавим к расчёту специалиста, который
                                                будет запускать видеоряд на мероприятии.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-checkbox">
                                <label class="custom-checkbox__container">
                                    Техник для управления видео
                                    <input class="input visuallyhidden calc-checkbox"
                                           type="checkbox"
                                           data-calc-property="technician">
                                    <span class="custom-checkbox__checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="label-controll label-controll_checkbox">
                            <div class="label-controll__help help-button"
                                 data-help-modal-id="helpModalRentDelivery">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="8" cy="8" r="6.5" stroke="#A3A3A3"/> <path d="M8 7.25V11M8 5V4.75" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <div class="help-modal help-modal_default" id="helpModalRentDelivery">
                                    <div class="help-modal__dialog">
                                        <div class="help-modal__content">
                                            <div class="help-modal__close">
                                                <svg width="98" height="126" viewBox="0 0 98 126" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 59L49 63M49 63L53 67M49 63L53 59M49 63L45 67" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.5" y="0.5" width="97" height="125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                                            </div>
                                            <div class="help-modal__caption">Доставка считается отдельно</div>
                                            <div class="help-modal__text">Скажите менеджеру адрес и он сделает
                                                необходимые расчёты.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-checkbox">
                                <label class="custom-checkbox__container">
                                    Доставка за пределы Москвы
                                    <input class="input visuallyhidden calc-checkbox"
                                           type="checkbox"
                                           data-calc-property="delivery">
                                    <span class="custom-checkbox__checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn_secondary calculating">Рассчитать стоимость</button>
                    </div>
                    <div class="calc__body-picture">
                        <div class="calc__body-image">
                            <div class="calc__body-image-body">
                                <img class="pic" src="/img/calc-media-facade.png" alt="">
                            </div>
                            <form class="calc__results calc-results-form"
                                  action="/rezultaty-raschyetov-kalkulyatora/"
                                  method="POST"
                                  enctype="multipart/form-data">
                                <input class="calc-results-input" type="hidden" name="calc-results" value="">
                                <div class="calc__results-sum">
                                    <div class="txt">Итого:</div>
                                    <div class="number calc-results-number">0 ₽</div>
                                </div>
                                <button class="btn btn_primary not-focused" type="submit">Посмотреть спецификацию</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>