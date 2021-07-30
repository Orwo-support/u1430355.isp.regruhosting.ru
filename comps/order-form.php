<section class="section section_form-order" data-go-to-place-anchor="#order-form">
    <div class="form-order">
        <div class="container">
            <h2 class="h2 section__title animation-element">
                <?
                    if ($APPLICATION->GetCurPage() == '/dostavka-i-oplata/') {
                        print 'Поможем подобрать оборудование';
                    } elseif ($APPLICATION->GetCurPage() == '/arenda-svetodiodnykh-ekranov/'
                                || $APPLICATION->GetCurPage() == '/proektirovanie-svetodiodnykh-ekranov/') {
                        print 'Оставьте заявку, мы поможем с выбором';
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
                    if ($APPLICATION->GetCurPage() == '/dostavka-i-oplata/') {
                        print 'Доставка и оплата';
                    } else if ($APPLICATION->GetCurPage() == '/arenda-svetodiodnykh-ekranov/') {
                        print 'Аренда свтодиодных экранов';
                    } else if ($APPLICATION->GetCurPage() == '/proektirovanie-svetodiodnykh-ekranov/') {
                        print 'Проективование свтодиодных экранов';
                    }
                ?>">
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
                                           id="name">
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
                                           id="phone">
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
                                          id="message"></textarea>
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
                            <button class="btn btn_primary form-order__submit" type="submit">
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