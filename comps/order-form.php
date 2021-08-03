<section class="section section_form-order" data-go-to-place-anchor="#order-form">
    <div class="form-order">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <?
                    if ($APPLICATION->GetCurPage() == '/dostavka-i-oplata/') {
                        echo 'Поможем подобрать оборудование';
                    } elseif (preg_match('/nashi-raboty/', $_SERVER["REQUEST_URI"])) {
                        if ($_SERVER["REQUEST_URI"] === '/nashi-raboty/') echo 'Задайте нам вопрос';
                        else echo 'Поможем подобрать оборудование';
                    } else {
                        echo 'Оставьте заявку, мы поможем с выбором';
                    }
                ?>
            </h2>
        </div>
        <div class="container">
            <form class="form-order__form"
                  id="orderForm"
                  name="form-order"
                  method="POST"
                  enctype="multipart/form-data"
                  data-target="#orderModal"
                  action="/utilities/handle-order-form.php">
                <input type="hidden" name="fromlink"
                       value="https://ekranika.ru<?=$APPLICATION->GetCurPage()?>">
                <input type="hidden" name="fromname" value="<?
                    switch ($APPLICATION->GetCurPage()) {
                        case '/dostavka-i-oplata/': echo 'Доставка и оплата'; break;
                        case '/arenda-svetodiodnykh-ekranov/': echo 'Аренда свтодиодных экранов'; break;
                        case '/proektirovanie-svetodiodnykh-ekranov/': echo 'Проективование свтодиодных экранов'; break;
                        case '/montazh-svetodiodnykh-ekranov/': echo 'Монтаж светодиодных экранов'; break;
                        case '/svetodiodnyy-ekran/': echo 'Светодиодный экра'; break;
                        case '/elektronnoe-tablo/': echo 'Электронное табло'; break;
                        case '/mediabort/': echo 'Медиаборт'; break;
                        case '/svetodiodnyy-shar/': echo 'Светодиодный шар'; break;
                        case '/videokub/': echo 'Видеокуб'; break;
                        case '/reklamnyy-videobanner/': echo 'Рекламный видеобаннер'; break;
                        case '/mediafasad/': echo 'Медиафасад'; break;
                        case '/ekrany-dlya-tts-i-bts/': echo 'Экраны для ТЦ и БЦ'; break;
                        case '/ekrany-dlya-sportivnykh-meropriyatiy/': echo 'Экраны для спортивных мероприятий'; break;
                        case '/ekrany-dlya-konferentsiy/': echo 'Экраны для конференций'; break;
                        case '/reklamnye-ulichnye-ekrany/': echo 'Рекламные уличные экраны'; break;
                    }

                    if(preg_match('/nashi-raboty/', $_SERVER["REQUEST_URI"])) {
                        if ($_SERVER["REQUEST_URI"] === '/nashi-raboty/') echo 'Наши работы';
                        else echo 'Страница отдельной работы';
                    }?>">
                <div class="form-order__data">
                    <div class="form-order__user-data animation-element">
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
                                           id="name"
                                           tabindex="1">
                                </label>
                            </div>
                        </div>
                        <div class="controller-group">
                            <label class="controller-label">Номер телефона</label>
                            <div class="controller controller__input single-valid-warning">
                                <label class="label label__icon">
                                    <span class="controller-icon icon-phone">
                                        <img class="pic" src="/img/icon-phone.svg" alt="">
                                    </span>
                                    <input class="input"
                                           type="text"
                                           placeholder="+7 900 000 00 00"
                                           name="phone"
                                           id="phone"
                                           tabindex="2">
                                </label>
                                <div class="validator validator__cross">
                                    <img class="pic valid"
                                         src="/img/icon-validator-cross-valid.svg"
                                         alt="">
                                    <img class="pic invalid"
                                         src="/img/icon-validator-cross-invalid.svg"
                                         alt="">
                                </div>
                                <div class="validator validator__check">
                                    <img class="pic valid"
                                         src="/img/icon-validator-check-valid.svg"
                                         alt="">
                                    <img class="pic invalid"
                                         src="/img/icon-validator-check-invalid.svg"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-order__comments animation-element">
                        <div class="controller-group">
                            <label class="controller-label">Комментарий</label>
                            <div class="controller-wrap">
                                <span class="controller-icon icon-msg">
                                    <img class="pic"
                                         src="/img/icon-message.svg"
                                         alt="">
                                </span>
                                <textarea class="textarea"
                                          placeholder="Напишите что-нибудь"
                                          name="message"
                                          id="message"
                                          tabindex="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-order__actions animation-element">
                    <div class="form-order__actions-group">
                        <span class="form-order__privacy">
                            Нажимая на кнопку “Отправить заявку”, я даю согласие
                            на <a class="revers"
                                  href="/politika-konfidentsialnosti/"
                                  target="_blank">обработку моих персональных данных</a>
                        </span>
                        <div class="form-order__button">
                            <button class="btn btn_primary form-order__submit"
                                    type="submit"
                                    tabindex="4">
                                Отправить заявку
                            </button>
                        </div>
                    </div>
                    <span class="form-order__note">
                        Перезвоним в течение рабочего дня
                        и поможем определиться с типом
                        оборудования для аренды под ключ
                    </span>
                </div>
            </form>
        </div>
    </div>
</section>