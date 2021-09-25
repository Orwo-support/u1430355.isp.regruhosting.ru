<?switch ($APPLICATION->GetCurPage()) {
    case '/': $PAGE_NAME = 'Главная страница'; break;
    case '/politika-konfidentsialnosti/': $PAGE_NAME = 'Политика конфиденциальности'; break;
    case '/dostavka-i-oplata/': $PAGE_NAME = 'Доставка и оплата'; break;
    case '/arenda-svetodiodnykh-ekranov/': $PAGE_NAME = 'Аренда светодиодных экранов'; break;
    case '/proektirovanie-svetodiodnykh-ekranov/': $PAGE_NAME = 'Проектирование светодиодных экранов'; break;
    case '/montazh-svetodiodnykh-ekranov/': $PAGE_NAME = 'Монтаж светодиодных экранов'; break;
    case '/svetodiodnyy-ekran/': $PAGE_NAME = 'Светодиодные экраны'; break;
    case '/begushchaya-stroka/': $PAGE_NAME = 'Бегущие строки'; break;
    case '/elektronnoe-tablo/': $PAGE_NAME = 'Электронное табло'; break;
    case '/mediabort/': $PAGE_NAME = 'Медиафасады'; break;
    case '/svetodiodnyy-shar/': $PAGE_NAME = 'Светодиодный шар'; break;
    case '/videokub/': $PAGE_NAME = 'Видеокуб'; break;
    case '/reklamnyy-videobanner/': $PAGE_NAME = 'Рекламный видеобаннер'; break;
    case '/mediafasad/': $PAGE_NAME = 'Медиафасад'; break;
    case '/ekrany-dlya-tts-i-bts/': $PAGE_NAME = 'Экраны для Торговых и Бизнес центров'; break;
    case '/ekrany-dlya-sportivnykh-meropriyatiy/': $PAGE_NAME = 'Экраны для спортивных мероприятий'; break;
    case '/ekrany-dlya-konferentsiy/': $PAGE_NAME = 'Экраны для конференций'; break;
    case '/reklamnye-ulichnye-ekrany/': $PAGE_NAME = 'Рекламные уличные экраны'; break;
    case '/o-nas-garantiya-kontakty/': $PAGE_NAME = 'О нас, Гарантия, Контакты'; break;
    case '/baza-znaniy/': $PAGE_NAME = 'База знаний'; break;
    case '/kalkulyator/': $PAGE_NAME = 'Калькулятор'; break;
    case '/rezultaty-raschyetov-kalkulyatora/': $PAGE_NAME = 'Результаты расчётов калькулятора'; break;
}

if(preg_match('/nashi-raboty/', $_SERVER["REQUEST_URI"])) {
    if ($_SERVER["REQUEST_URI"] === '/nashi-raboty/') $PAGE_NAME = 'Наши работы';
    else $PAGE_NAME = 'Страница отдельной работы';
}

if(preg_match('/stati/', $_SERVER["REQUEST_URI"])
    || preg_match('/novosti/', $_SERVER["REQUEST_URI"])) {
    $PAGE_NAME = 'Страница отдельной новости или статьи';
}?>
<div class="order-form-modal" id="setOrderFormModal">
    <div class="order-form-modal__dialog" id="setOrderFormContent">
        <div class="order-form-modal__content">
            <div class="form-order">
                <div class="container">
                    <h2 class="h2 section__title"><?
                      $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/set-order-form-title.php"
                            )
                        );?></h2>
                </div>
                <div class="container">
                    <form class="form-order__form" id="setOrderForm"
                          action=""
                          method="POST"
                          enctype="multipart/form-data">
                        <input type="hidden" name="page" value="<?=$PAGE_NAME?>">
                        <input type="hidden" name="ip" value="<?=getRealIP()?>">
                        <input type="hidden" name="link" value="<?=((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>">
                        <div class="form-order__data">
                            <div class="form-order__user-data">
                                <div class="controller-group">
                                    <label class="controller-label">Как вас зовут?</label>
                                    <div class="controller controller__input">
                                        <label class="label label__icon">
                                            <span class="controller-icon icon-human">
                                                <img class="pic" src="/img/icon-person.svg" alt="">
                                            </span>
                                            <input class="input"
                                                   type="text"
                                                   placeholder="Напишите Ваше имя"
                                                   name="name"
                                                   id="setOrderFormName"
                                                   tabindex="1">
                                        </label>
                                    </div>
                                </div>
                                <div class="controller-group">
                                    <label class="controller-label">Номер телефона</label>
                                    <div class="controller controller__input single-valid-warning">
                                        <label class="label label__icon">
                                            <span class="controller-icon icon-phone">
                                                <img src="/img/icon-phone.svg" alt="">
                                            </span>
                                            <input class="input"
                                                   type="text"
                                                   placeholder="+7 900 000 00 00"
                                                   name="phone"
                                                   id="setOrderFormPhone"
                                                   tabindex="2">
                                        </label>
                                        <div class="validator validator__cross">
                                            <img class="valid"
                                                 src="/img/icon-validator-cross-valid.svg"
                                                 alt="">
                                            <img class="invalid" src="/img/icon-validator-cross-invalid.svg" alt="">
                                        </div>
                                        <div class="validator validator__check">
                                            <img class="valid" src="/img/icon-validator-check-valid.svg" alt="">
                                            <img class="invalid" src="/img/icon-validator-check-invalid.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-order__comments">
                                <div class="controller-group">
                                    <label class="controller-label" for="setOrderFormMessage">Комментарий</label>
                                    <div class="controller-wrap">
                                        <span class="controller-icon icon-msg">
                                            <img src="/img/icon-message.svg" alt="">
                                        </span>
                                        <textarea class="textarea"
                                                  placeholder="Напишите что-нибудь"
                                                  name="message"
                                                  id="setOrderFormMessage"
                                                  tabindex="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-order__actions">
                            <div class="form-order__actions-group">
                                <span class="form-order__privacy"><?
                                    $APPLICATION->IncludeComponent(
                                      "bitrix:main.include",
                                      "",
                                      Array(
                                          "AREA_FILE_SHOW" => "file",
                                          "AREA_FILE_SUFFIX" => "inc",
                                          "EDIT_TEMPLATE" => "",
                                          "PATH" => "/include/set-order-form-policy.php"
                                      )
                                    );?></span>
                                <div class="form-order__button">
                                    <button class="btn btn_primary form-order__submit" type="submit" tabindex="4">Отправить заявку</button>
                                </div>
                            </div>
                            <span class="form-order__note"><?
                              $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/set-order-form-comment.php"
                                )
                              );?></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="order-form-modal__close-bnt btn-set-order-modal-close">
                <div class="icon">
                    <svg width="102" height="122" viewBox="0 0 102 122" fill="none" xmlns="http://www.w3.org/2000/svg"> <g filter="url(#filter0_ddddd)"> <path d="M45 51L51 57M51 57L57 63M51 57L57 51M51 57L45 63" stroke="#80758F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </g> <defs> <filter id="filter0_ddddd" x="0.25" y="-7.75" width="101.5" height="129.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="6" dy="6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00784314 0 0 0 0 0.0470588 0 0 0 0.3 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-6" dy="-6"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="14" dy="28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.3 0"/> <feBlend mode="normal" in2="effect2_dropShadow" result="effect3_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dx="-14" dy="-28"/> <feGaussianBlur stdDeviation="15"/> <feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.15 0"/> <feBlend mode="normal" in2="effect3_dropShadow" result="effect4_dropShadow"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset/> <feGaussianBlur stdDeviation="8"/> <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.48 0"/> <feBlend mode="normal" in2="effect4_dropShadow" result="effect5_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow" result="shape"/> </filter> </defs> </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="setOrderFormModalResult">
        <div class="modal__dialog">
            <div class="modal__content">
                <div class="modal__header">
                    <div class="modal__title">Заявка отправлена</div>
                    <div class="modal__subtitle">Перезвоним вам в ближайшее время</div>
                </div>
                <div class="modal__body">
                    <img class="modal-img" src="/img/icon-modal-phone.svg" alt="">
                </div>
                <div class="modal__footer">
                    <button class="btn btn_primary not-focused btn-set-order-modal-close">Закрыть окно</button>
                </div>
            </div>
        </div>
    </div>
</div>
