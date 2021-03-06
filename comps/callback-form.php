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
                    <a class="revers" href="/o-nas-garantiya-kontakty/#kontakty">
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
            <div class="callback__title animation-element"><?
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/callback-form-title.php"
                    )
                  );
            ?></div>
            <div class="callback__subtitle animation-element"><?
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/callback-form-subtitle.php"
                    )
                  );
            ?></div>
        </div>
        <div class="callback__background-pic animation-element">
            <img class="pic" src="<?=$CALLBACK_FORM_IMG_SOURCE?>" alt="">
        </div>
        <div class="container-endless">
            <div class="endless">
                <form class="callback__form animation-element"
                      name="add_callback"
                      action=""
                      method="POST"
                      enctype="multipart/form-data"
                      id="callbackForm"
                      data-target="#calbackModal">
                    <input type="hidden" name="page" value="<?=$CALLBACK_FORM_SOURCE_PAGE?>">
                    <input type="hidden" name="ip" value="<?=getRealIP()?>">
                    <input type="hidden" name="link" value="<?=((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>">
                    <div class="callback__data">
                        <div class="controller controller__input single-valid-warning">
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
                        <span class="privacy"><?
                          $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/callback-form-plicy.php"
                            )
                          );?></span>
                    </div>
                    <span class="send-mail"><?
                      $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/callback-form-mail-us.php"
                        )
                      );?></span>
                </form>
            </div>
        </div>
    </div>
</section>