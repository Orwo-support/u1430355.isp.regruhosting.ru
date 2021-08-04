<?switch ($APPLICATION->GetCurPage()) {
    case '/':
        $CALLBACK_FORM_TITLE = 'Связаться с нами';
        $CALLBACK_FORM_IMG_SOURCE = '/img/callback-pic.png';
        $CALLBACK_FORM_SOURCE_PAGE = 'Главная страница';
        break;
    case '/o-nas-garantiya-kontakty/':
        $CALLBACK_FORM_TITLE = 'Стать клиентом';
        $CALLBACK_FORM_IMG_SOURCE = '/img/callback-pic-about.png';
        $CALLBACK_FORM_SOURCE_PAGE = 'О нас, гарантия, контакты';
        break;
}?>
<section class="section section_callback">
    <div class="callback">
        <div class="container">
            <h2 class="section__title animation-element">
                <span class="title"><?=$CALLBACK_FORM_TITLE?></span>
                <span class="section__link animation-element">
                    <a class="revers" href="/o-nas-garantiya-kontakty/">
                        Открыть контакты
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
            <div class="callback__title animation-element">
                Заинтересовались светодиодным оборудованием?
            </div>
            <div class="callback__subtitle animation-element">
                Укажите ваш мобильный номер телефона и мы перезвоним в течение 5 минут
            </div>
        </div>
        <div class="callback__background-pic animation-element">
            <img class="pic" src="<?=$CALLBACK_FORM_IMG_SOURCE?>" alt="">
        </div>
        <div class="container-endless">
            <div class="endless">
                <form class="callback__form animation-element"
                      name="add_callback"
                      action="/utilities/handle-callback-form.php"
                      method="POST"
                      enctype="multipart/form-data"
                      id="callbackForm"
                      data-target="#calbackModal">
                    <input type="hidden" name="from" value="<?=$CALLBACK_FORM_SOURCE_PAGE?>">
                    <div class="callback__data">
                        <div class="controller controller__input">
                            <label class="label label__icon">
                            <span class="icon">
                                <img class="pic" src="/img/icon-phone.svg" alt="">
                            </span>
                                <input class="input"
                                       id="callbackPhone"
                                       type="text"
                                       placeholder="+7 900 000 00 00"
                                       name="phone">
                            </label>
                            <div class="validator validator__cross">
                                <img class="valid pic" src="/img/icon-validator-cross-valid.svg" alt="">
                                <img class="invalid pic" src="/img/icon-validator-cross-invalid.svg" alt="">
                            </div>
                            <div class="validator validator__check">
                                <img class="valid pic" src="/img/icon-validator-check-valid.svg" alt="">
                                <img class="invalid pic" src="/img/icon-validator-check-invalid.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="callback__actions">
                        <button class="btn btn_primary" type="submit">
                            Отправить номер
                        </button>
                        <span class="privacy">
                            Нажимая на кнопку “Отправить номер”,
                            я даю согласие на
                            <a class="revers"
                               href="/politika-konfidentsialnosti/"
                               target="_blank">
                                обработку моих персональных данных
                            </a>
                        </span>
                    </div>
                    <span class="send-mail">
                        Или напишите нам
                        <a href="mailto:info@ekranika.ru">
                            info@ekranika.ru
                        </a>
                    </span>
                </form>
            </div>
        </div>
    </div>
</section>