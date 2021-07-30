<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка и оплата");
?>
<section class="section section_delivery">
    <div class="delivery">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <span class="title">Доставка</span>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless delivery__content">
                <div class="delivery__description animation-element">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/delivery-text.php"
                        )
                    );?>
                </div>
                <div class="delivery__methods tab-list animation-element">
                    <div class="delivery__methods-title">
                        Способы доставки
                    </div>
                    <div class="delivery__methods-tabs">
                        <div class="tabs__controlls-caption">
                            Конструкция
                        </div>
                            <?$APPLICATION->IncludeComponent("bitrix:news.list", "constructions", Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                                    "AJAX_MODE" => "N",	// Включить режим AJAX
                                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                    "CACHE_TYPE" => "A",	// Тип кеширования
                                    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                                    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                                    "DISPLAY_DATE" => "N",	// Выводить дату элемента
                                    "DISPLAY_NAME" => "Y",	// Выводить название элемента
                                    "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                                    "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                                    "FIELD_CODE" => array(	// Поля
                                        0 => "CODE",
                                        1 => "NAME",
                                        2 => "DETAIL_TEXT",
                                        3 => "",
                                    ),
                                    "FILTER_NAME" => "",	// Фильтр
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                                    "IBLOCK_ID" => "16",	// Код информационного блока
                                    "IBLOCK_TYPE" => "constructions",	// Тип информационного блока (используется только для проверки)
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                                    "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                                    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                                    "NEWS_COUNT" => "5",	// Количество новостей на странице
                                    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                                    "PAGER_TITLE" => "Новости",	// Название категорий
                                    "PARENT_SECTION" => "",	// ID раздела
                                    "PARENT_SECTION_CODE" => "",	// Код раздела
                                    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                                    "PROPERTY_CODE" => array(	// Свойства
                                        0 => "",
                                        1 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                                    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                                    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                                    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                                    "SET_STATUS_404" => "N",	// Устанавливать статус 404
                                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                                    "SHOW_404" => "N",	// Показ специальной страницы
                                    "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                                    "SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
                                    "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                                    "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
                                    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                                ),
                                false
                            );?>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "constructions-content", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                        "AJAX_MODE" => "N",	// Включить режим AJAX
                        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                        "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                        "DISPLAY_DATE" => "N",	// Выводить дату элемента
                        "DISPLAY_NAME" => "Y",	// Выводить название элемента
                        "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                        "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                        "FIELD_CODE" => array(	// Поля
                            0 => "CODE",
                            1 => "NAME",
                            2 => "DETAIL_TEXT",
                            3 => "",
                        ),
                        "FILTER_NAME" => "",	// Фильтр
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                        "IBLOCK_ID" => "16",	// Код информационного блока
                        "IBLOCK_TYPE" => "constructions",	// Тип информационного блока (используется только для проверки)
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                        "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                        "NEWS_COUNT" => "5",	// Количество новостей на странице
                        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                        "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                        "PAGER_TITLE" => "Новости",	// Название категорий
                        "PARENT_SECTION" => "",	// ID раздела
                        "PARENT_SECTION_CODE" => "",	// Код раздела
                        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                        "PROPERTY_CODE" => array(	// Свойства
                            0 => "",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                        "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                        "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                        "SET_STATUS_404" => "N",	// Устанавливать статус 404
                        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                        "SHOW_404" => "N",	// Показ специальной страницы
                        "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
                        "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                    ),
                        false
                    );?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section_payment">
    <div class="payment">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <span class="title">Схемы оплаты</span>
            </h2>
        </div>
        <div class="container">
            <div class="payment__description animation-element">
                <div class="payment__description-text">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/payment-scheme.php"
                        )
                    );?>
                </div>
                <a class="payment__download" target="_blank" href="/download/Placeholder-PDF.pdf">
                    <div class="payment__download-link">
                        <div class="icon">
                            <svg width="106" height="133" viewBox="0 0 106 133" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_ddddd)"><path d="M50.3333 66.3277L52.9901 69.1667M52.9901 69.1667L55.6667 66.3488M52.9901 69.1667L52.9901 58.5M57 63.8333C58.2425 63.8333 58.8638 63.8333 59.3538 64.0363C60.0072 64.307 60.5264 64.8261 60.797 65.4795C61 65.9696 61 66.5908 61 67.8333V69.1667C61 71.6808 61 72.9379 60.219 73.719C59.4379 74.5 58.1808 74.5 55.6667 74.5H50.3333C47.8192 74.5 46.5621 74.5 45.781 73.719C45 72.9379 45 71.6808 45 69.1667V67.8333C45 66.5908 45 65.9696 45.203 65.4795C45.4736 64.8261 45.9928 64.307 46.6462 64.0363C47.1362 63.8333 47.7575 63.8333 49 63.8333" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/></g><defs><filter id="filter0_ddddd" x="0.5" y="0" width="105" height="133" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="6" dy="6"/><feGaussianBlur stdDeviation="15"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-6" dy="-6"/><feGaussianBlur stdDeviation="15"/><feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="14" dy="28"/><feGaussianBlur stdDeviation="15"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/><feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-14" dy="-28"/><feGaussianBlur stdDeviation="15"/><feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/><feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="8"/><feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/><feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/></filter></defs></svg>
                        </div>
                        Скачать реквизиты
                    </div>
                    <div class="payment__download-caption">
                        Плательщикам НДС просьба заблаговременно
                        подготовить копию свидетельства налогоплательщика
                    </div>
                </a>
            </div>
            <div class="payment__calc animation-element">
                <div class="payment__calc-title">
                    Калькулятор рассрочки
                </div>
                <div class="installment-calc">
                    <div class="installment-calc__wrap">
                        <div class="installment-calc__controlls">
                            <div class="label-controll">
                                <div class="label-controll__caption">
                                    Стоимость оборудования
                                </div>
                                <div class="label-controll__body">
                                    <div class="label-controll__content">
                                        <div class="input-suffix custom-input" id="cost">
                                            <input class="input"
                                                   type="text"
                                                   data-calc-property="cost"
                                                   data-calc-value="">
                                            <div class="input-suffix__delimiter"></div>
                                            <div class="input-suffix__units">₽</div>
                                        </div>
                                        <div class="validator validator__cross">
                                            <img class="pic valid"
                                                 src="/img/icon-validator-cross-valid.svg"
                                                 alt="">
                                            <img class="pic invalid"
                                                 src="/img/icon-validator-cross-invalid.svg"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll">
                                <div class="label-controll__caption">
                                    Срок рассрочки
                                </div>
                                <div class="label-controll__body">
                                    <div class="label-controll__content">
                                        <div class="custom-range">
                                            <div class="input-suffix custom-input" id="installment">
                                                <input class="input value"
                                                       type="text"
                                                       data-calc-property="installment"
                                                        value="12">
                                                <span class="input-suffix__delimiter"></span>
                                                <span class="input-suffix__units">мес</span>
                                            </div>
                                            <div class="custom-range__controller">
                                                <span class="status-bar"></span>
                                                <span class="slider"></span>
                                                <input class="input custom-range__slide"
                                                       type="range"
                                                       step="1"
                                                       min="12"
                                                       max="36"
                                                       value="12"
                                                       data-calc-property="installment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="label-controll blocked">
                                <div class="label-controll__caption">
                                    Первоначальный взнос
                                </div>
                                <div class="label-controll__body">
                                    <div class="label-controll__content">
                                        <div class="custom-range">
                                            <div class="input-suffix custom-input" id="firstPayment">
                                                <input class="input value"
                                                       type="text"
                                                       data-calc-property="firstPayment"
                                                       disabled>
                                                <span class="input-suffix__delimiter"></span>
                                                <span class="input-suffix__units">₽</span>
                                            </div>
                                            <div class="custom-range__controller">
                                                <span class="status-bar"></span>
                                                <span class="slider"></span>
                                                <input class="input custom-range__slide"
                                                       type="range"
                                                       step="10000"
                                                       min="0"
                                                       max="0"
                                                       value="0"
                                                       data-calc-property="firstPayment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="installment-calc__btn-calc">
                            <input class="input btn btn_primary not-focused"
                                   id="calculateInstallment"
                                   type="submit"
                                   value="Рассчитать">
                        </div>
                        <div class="installment-calc__remainder">
                            Рассрочка от 12 до 36 месяцев,
                            первоначальный взнос
                            от 30% до 95%.
                            <br>
                            Не оферта, подробности у менеджера.
                        </div>
                    </div>
                    <div class="installment-calc__delimiter"></div>
                    <div class="installment-calc__result">
                        <div class="installment-calc__total">Итого</div>
                        <div class="installment-calc__firstpayment" id="calcResultFirstPayment"></div>
                        <div class="installment-calc__monthlypayment" id="calcResultMonthlyPayment"></div>
                        <div class="installment-calc__paymentterm" id="calcResultPaymentTerm">Срок выплаты</div>
                    </div>
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
        "PATH" => "/components/order-form.php"
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>