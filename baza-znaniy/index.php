<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("База знаний");
?>
<section class="section section_tab-list">
    <div class="tab-list article-list">
        <div class="container"><h2 class="section__title animation-element"><span
                        class="title">Полезные статьи</span></h2></div>
        <div class="tabs animation-element">
            <div class="container-endless-fix">
                <div class="endless tabs__controlls">
                    <div class="slider-tabs">
                        <div class="slider-tabs__container swiper-container" id="ourWorksSlider">
                            <div class="slider-tabs__wrap swiper-wrapper">
                                <div class="marker"></div>
                                <div class="slider-tabs__slide swiper-slide">
                                    <!-- При инициализации, добавить первому элемну класс .active-->
                                    <div class="slider-tabs__button active" data-target-tab-id="#ticker">Бегущие
                                        строки
                                    </div>
                                </div>
                                <div class="slider-tabs__slide swiper-slide">
                                    <div class="slider-tabs__button" data-target-tab-id="#mediaFacade">Медиафасады
                                    </div>
                                </div>
                                <div class="slider-tabs__slide swiper-slide">
                                    <div class="slider-tabs__button" data-target-tab-id="#outerLedScreen">Уличные
                                        светодиодные экраны
                                    </div>
                                </div>
                                <div class="slider-tabs__slide swiper-slide">
                                    <div class="slider-tabs__button" data-target-tab-id="#innerLedScreen">Внутренние
                                        светодиодные экраны
                                    </div>
                                </div>
                                <div class="slider-tabs__slide swiper-slide">
                                    <div class="slider-tabs__button" data-target-tab-id="#rent">Аренда</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-items" id="aricleList">
            <!-- При сборке страницы, первому слайду добавить классы .visible.show и класс .animation-element-->
            <div class="container-endless tabs-item visible show animation-element" id="ticker">
                <div class="endless tab-list__list swiper-container" id="tabListTickerSlider">
                    <div class="tab-list__list__wrap swiper-wrapper">
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">3 минуты на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">5 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">17 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">11 минут на прочтение</span></div>
                            </a></div>
                    </div>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                     id="btnTabListTickerPrev">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                     id="btnTabListTickerNext">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="container-endless tabs-item" id="mediaFacade">
                <div class="endless tab-list__list swiper-container" id="tabListMediaFacadeSlider">
                    <div class="tab-list__list__wrap swiper-wrapper">
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">3 минуты на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">5 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">17 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">11 минут на прочтение</span></div>
                            </a></div>
                    </div>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                     id="btnTabListMediaFacadePrev">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                     id="btnTabListMediaFacadeNext">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="container-endless tabs-item" id="outerLedScreen">
                <div class="endless tab-list__list swiper-container" id="tabListOuterLedScreenSlider">
                    <div class="tab-list__list__wrap swiper-wrapper">
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">5 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">3 минуты на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">17 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">11 минут на прочтение</span></div>
                            </a></div>
                    </div>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                     id="btnTabListOuterLedScreenPrev">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                     id="btnTabListOuterLedScreenNext">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="container-endless tabs-item" id="innerLedScreen">
                <div class="endless tab-list__list swiper-container" id="tabListInnerLedScreenSlider">
                    <div class="tab-list__list__wrap swiper-wrapper">
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">3 минуты на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">5 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">17 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">11 минут на прочтение</span></div>
                            </a></div>
                    </div>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                     id="btnTabListInnerLedScreenPrev">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                     id="btnTabListInnerLedScreenNext">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="container-endless tabs-item" id="rent">
                <div class="endless tab-list__list swiper-container" id="tabListRentSlider">
                    <div class="tab-list__list__wrap swiper-wrapper">
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">5 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">3 минуты на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">17 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">11 минут на прочтение</span></div>
                            </a></div>
                    </div>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                     id="btnTabListRentPrev">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                     id="btnTabListRentNext">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <button class="tab-list__get-data" data-list-id="#aricleList"><span class="points points_left"><span
                    class="point"></span><span class="point"></span><span class="point"></span></span><span class="text">Еще статьи</span><span
                class="points points_right"><span class="point"></span><span class="point"></span><span
                    class="point"></span></span></button>
</section>
<section class="section section_tab-list">
    <div class="tab-list article-list">
        <div class="container"><h2 class="section__title animation-element"><span class="title">Новости</span></h2>
        </div>
        <div class="tabs animation-element">
            <div class="container-endless-fix">
                <div class="endless tabs__controlls">
                    <div class="slider-tabs">
                        <div class="slider-tabs__container swiper-container" id="ourNewsSlider">
                            <div class="slider-tabs__wrap swiper-wrapper">
                                <div class="marker"></div>
                                <div class="slider-tabs__slide swiper-slide">
                                    <!-- При инициализации, добавить первому элемну класс .active-->
                                    <div class="slider-tabs__button active" data-target-tab-id="#newsCompany">
                                        Новости компании
                                    </div>
                                </div>
                                <div class="slider-tabs__slide swiper-slide">
                                    <div class="slider-tabs__button" data-target-tab-id="#newsPartners">Новости
                                        партнеров
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-items" id="newsList">
            <!-- При сборке страницы, первому слайду добавить классы .visible.show и класс .animation-element-->
            <div class="container-endless tabs-item visible show animation-element" id="newsCompany">
                <div class="endless tab-list__list swiper-container" id="tabListNewsCompanySlider">
                    <div class="tab-list__list__wrap swiper-wrapper">
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">3 минуты на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">5 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">17 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">11 минут на прочтение</span></div>
                            </a></div>
                    </div>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                     id="btnTabListNewsCompanyPrev">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                     id="btnTabListNewsCompanyNext">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="container-endless tabs-item" id="newsPartners">
                <div class="endless tab-list__list swiper-container" id="tabListNewsPartnersSlider">
                    <div class="tab-list__list__wrap swiper-wrapper">
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">3 минуты на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">5 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">10.09.2020</div>
                                <div class="article-list__caption">Светодиодные экраны для рекламы: гайд по выбору</div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">17 минут на прочтение</span></div>
                            </a></div>
                        <div class="article-list__slide swiper-slide"><a class="article-list__card" href="">
                                <div class="article-list__pic">
                                    <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                                </div>
                                <div class="article-list__date">12.10.2020</div>
                                <div class="article-list__caption">Уличные светодиодные экраны: особенности
                                    эксплуатации
                                </div>
                                <div class="article-list_time">
                                    <div class="icon">
                                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684"
                                                  stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="content">11 минут на прочтение</span></div>
                            </a></div>
                    </div>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev"
                     id="btnTabListNewsPartnersPrev">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next"
                     id="btnTabListNewsPartnersNext">
                    <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <button class="tab-list__get-data" data-list-id="#newsList"><span class="points points_left"><span
                    class="point"></span><span class="point"></span><span class="point"></span></span><span class="text">Еще новости</span><span
                class="points points_right"><span class="point"></span><span class="point"></span><span
                    class="point"></span></span></button>
</section>



<?$APPLICATION->IncludeComponent("bitrix:news.list", "firmware", Array(
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
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "62",	// Код информационного блока
		"IBLOCK_TYPE" => "firmware",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "50",	// Количество новостей на странице
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
			0 => "FIRMWARE_UPDATE_DATE",
			1 => "FIRMWARE_DOWNLOAD_FILE",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "TIMESTAMP_X",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => "firmware"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>