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
                            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"constructions", 
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
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "CODE",
			1 => "NAME",
			2 => "DETAIL_TEXT",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "constructions",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "constructions"
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
<div class="place-target-container">
    <span id="rassrochka" class="place-target-anchor"></span>
</div>
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
                <?include_once($_SERVER["DOCUMENT_ROOT"]."/comps/download-requisites.php");?>
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
<?include_once($_SERVER["DOCUMENT_ROOT"]."/comps/order-form.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>