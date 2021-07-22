<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
<section class="section section_slider">
    <div class="slider">
        <div class="slider__background-image swiper-container" id="bannerPictureSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider__picture" data-swiper-parallax-opacity="0" data-swiper-parallax="-200"
                         data-swiper-parallax-duration="1000">
                        <div class="slider__animation visible" id="sliderAnimation">
                            <canvas class="slider__canvas" id="cMob"></canvas>
                            <canvas class="slider__canvas" id="cTab"></canvas>
                            <canvas class="slider__canvas" id="cDesk"></canvas>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider__picture" data-swiper-parallax-opacity="0" data-swiper-parallax="-200" data-swiper-parallax-duration="1000">
                        <img class="image picture-man" src="/img/slider-back-1.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider__picture" data-swiper-parallax-opacity="0" data-swiper-parallax="-200" data-swiper-parallax-duration="1000">
                        <img class="image" src="/img/slider-back-2.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider__picture" data-swiper-parallax-opacity="0" data-swiper-parallax="-200" data-swiper-parallax-duration="1000">
                        <img class="image" src="/img/slider-back-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="slider__mask"></div>
        <div class="slider__content swiper-container" id="bannerContentSlider">
            <div class="swiper-wrapper">
                <div class="slider__slide swiper-slide">
                    <h2 class="slider__title" data-swiper-parallax-x="-50" data-swiper-parallax-opacity="0"
                        data-swiper-parallax-duration="900">Погрузись в мир LED экранов</h2>
                    <div class="slider__subtitle" data-swiper-parallax-x="-200" data-swiper-parallax-opacity="0"
                         data-swiper-parallax-duration="1200">Аренда под ключ 5000 р/м2</div>
                    <div class="slider__actions"><a class="btn btn_primary" data-swiper-parallax-x="-300"
                                                    data-swiper-parallax-opacity="0" data-swiper-parallax-duration="1700">Узнать
                            стоимость</a><a class="link revers btn-quiz-toggle" href=""
                                            data-swiper-parallax-x="-350" data-swiper-parallax-opacity="0"
                                            data-swiper-parallax-duration="2100">Как выбрать экран?</a></div>
                </div>
                <div class="slider__slide swiper-slide">
                    <h2 class="slider__title" data-swiper-parallax-x="-50" data-swiper-parallax-opacity="0"
                        data-swiper-parallax-duration="900">Погрузись в мир LED экранов</h2>
                    <div class="slider__subtitle" data-swiper-parallax-x="-200" data-swiper-parallax-opacity="0"
                         data-swiper-parallax-duration="1200">Аренда под ключ 5000 р/м2</div>
                    <div class="slider__actions"><a class="btn btn_primary" data-swiper-parallax-x="-300"
                                                    data-swiper-parallax-opacity="0" data-swiper-parallax-duration="1700">Узнать
                            стоимость</a><a class="link revers btn-quiz-toggle" href=""
                                            data-swiper-parallax-x="-350" data-swiper-parallax-opacity="0"
                                            data-swiper-parallax-duration="2100">Как выбрать экран?</a></div>
                </div>
                <div class="slider__slide swiper-slide">
                    <h2 class="slider__title" data-swiper-parallax-x="-50" data-swiper-parallax-opacity="0"
                        data-swiper-parallax-duration="900">Погрузись в мир LED экранов</h2>
                    <div class="slider__subtitle" data-swiper-parallax-x="-200" data-swiper-parallax-opacity="0"
                         data-swiper-parallax-duration="1200">Аренда под ключ 5000 р/м2</div>
                    <div class="slider__actions"><a class="btn btn_primary" data-swiper-parallax-x="-300"
                                                    data-swiper-parallax-opacity="0" data-swiper-parallax-duration="1700">Узнать
                            стоимость</a><a class="link revers btn-quiz-toggle" href=""
                                            data-swiper-parallax-x="-350" data-swiper-parallax-opacity="0"
                                            data-swiper-parallax-duration="2100">Как выбрать экран?</a></div>
                </div>
                <div class="slider__slide swiper-slide">
                    <h2 class="slider__title" data-swiper-parallax-x="-50" data-swiper-parallax-opacity="0"
                        data-swiper-parallax-duration="900">Погрузись в мир LED экранов</h2>
                    <div class="slider__subtitle" data-swiper-parallax-x="-200" data-swiper-parallax-opacity="0"
                         data-swiper-parallax-duration="1200">Аренда под ключ 5000 р/м2</div>
                    <div class="slider__actions"><a class="btn btn_primary" data-swiper-parallax-x="-300"
                                                    data-swiper-parallax-opacity="0" data-swiper-parallax-duration="1700">Узнать
                            стоимость</a><a class="link revers btn-quiz-toggle" href=""
                                            data-swiper-parallax-x="-350" data-swiper-parallax-opacity="0"
                                            data-swiper-parallax-duration="2100">Как выбрать экран?</a></div>
                </div>
            </div>
            <div class="slide-nums" id="sliderNums">
                <div class="slide-nums__current">
                    <div class="slide-nums__scrolled">
                        <div class="slide-nums__number active">01</div>
                        <div class="slide-nums__number">02</div>
                        <div class="slide-nums__number">03</div>
                        <div class="slide-nums__number">04</div>
                    </div>
                </div>
                <div class="slide-nums__all">
                    <div class="number">04</div>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused" id="btnSliderPrev"><svg width="14" height="26"
                                                                                   viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                </svg>
            </div>
            <div class="btn btn_icon-outlined not-focused" id="btnSliderNext"><svg width="14" height="26"
                                                                                   viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
</section>
<section class="section section_offer">
    <div class="offer">
        <div class="container">
            <h2 class="section__title animation-element">
                <span class="title">Мы предлагаем</span>
                <span class="section__link animation-element">
                    <a class="revers" href="">
                        Выбрать готовые кабинеты
                        <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                    </a>
                </span>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless offer__list swiper-container" id="offerSlider">
                <div class="offer__list__wrap swiper-wrapper">
                    <div class="offer__slide swiper-slide">
                        <a class="offer__card animation-element" href="">
                            <div class="offer__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                            <div class="offer__caption">Светодиодный экран</div>
                            <div class="offer__content">
                                Устройство для передачи статической и динамической
                                информации высокой яркости и насыщенностим
                            </div>
                        </a>
                    </div>
                    <div class="offer__slide swiper-slide">
                        <a class="offer__card animation-element" href="">
                            <div class="offer__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                            <div class="offer__caption">Бегущая строка</div>
                            <div class="offer__content">
                                Один из самых популярных и доступных видов наружной
                                рекламы
                            </div>
                        </a>
                    </div>
                    <div class="offer__slide swiper-slide">
                        <a class="offer__card animation-element" href="">
                            <div class="offer__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                            <div class="offer__caption">Электронное табло</div>
                            <div class="offer__content">
                                Светодиодный экран с большим шагом пикселя. С его помощью транслируют
                                повтор моментов в спортивных соревнованиях и матчах
                            </div>
                        </a>
                    </div>
                    <div class="offer__slide swiper-slide">
                        <a class="offer__card animation-element" href="">
                            <div class="offer__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                            <div class="offer__caption">Медиаборт</div>
                            <div class="offer__content">
                                широкоформатный светодиодный экран, транслирующий
                                рекламу и информировацию для зрителей, преимущественно на
                            </div>
                        </a>
                    </div>
                    <div class="offer__slide swiper-slide">
                        <a class="offer__card animation-element" href="">
                            <div class="offer__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                            <div class="offer__caption">Светодиодный экран</div>
                            <div class="offer__content">
                                Устройство для передачи статической и динамической
                                информации высокой яркости и насыщенностим
                            </div>
                        </a>
                    </div>
                    <div class="offer__slide swiper-slide">
                        <a class="offer__card animation-element" href="">
                            <div class="offer__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                            <div class="offer__caption">
                                Бегущая строка<div class="offer__content">Один из самых
                                популярных и доступных видов наружной рекламы</div>
                            </div>
                        </a>
                    </div>
                    <div class="offer__slide swiper-slide">
                        <a class="offer__card animation-element" href="">
                            <div class="offer__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                            <div class="offer__caption">Электронное табло</div>
                            <div class="offer__content">
                                Светодиодный экран с большим шагом пикселя. С его помощью транслируют
                                повтор моментов в спортивных соревнованиях и матчах
                            </div>
                        </a>
                    </div>
                    <div class="offer__slide swiper-slide">
                        <a class="offer__card animation-element" href="">
                            <div class="offer__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                            <div class="offer__caption">Медиаборт</div>
                            <div class="offer__content">
                                широкоформатный светодиодный экран, транслирующий
                                рекламу и информировацию для зрителей, преимущественно на
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next" id="btnOfferSliderNext">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev" id="btnOfferSliderPrev">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
    </div>
</section>
<section class="section section_list">
    <div class="list__background"></div>
    <div class="list">
        <div class="container">
            <h2 class="section__title animation-element">Почему партнеры выбирают Экранику</h2>
        </div>
        <div class="container-endless-fix">
            <div class="endless list__list swiper-container" id="listSlider">
                <div class="list__list__wrap swiper-wrapper">
                    <div class="list__slide swiper-slide">
                        <div class="list__card">
                            <div class="list__num">
                                <span class="back"></span>
                                <span class="number">
                                    <span class="img img_1 animation-element"></span>
                                </span>
                            </div>
                            <div class="list__title animation-element">
                                Компания - производитель с собственным складом
                            </div>
                            <div class="list__content animation-element">
                                Ценовые предложения без посредников и торговых надбавок.
                                Даем рассрочку без переплат для постоянных партнеров
                            </div>
                        </div>
                    </div>
                    <div class="list__slide swiper-slide">
                        <div class="list__card">
                            <div class="list__num">
                                <span class="back"></span>
                                <span class="number">
                                    <span class="img img_2 animation-element"></span>
                                </span>
                            </div>
                            <div class="list__title animation-element">Быстрая доставка по России и СНГ</div>
                            <div class="list__content animation-element">
                                Доставляем по Москве и области ― в течение одного — двух дней.
                                По России и СНГ ― отправляем комфортным перевозчиком, на выбор клиента
                            </div>
                        </div>
                    </div>
                    <div class="list__slide swiper-slide">
                        <div class="list__card">
                            <div class="list__num">
                                <span class="back"></span>
                                <span class="number">
                                    <span class="img img_3 animation-element"></span>
                                </span>
                            </div>
                            <div class="list__title animation-element">Гарантийное обслуживание 3 года</div>
                            <div class="list__content animation-element">
                                Даем гарантию на все виды готовых
                                изделий, кроме блоков питания. Сотрудничаем с зарекомендованными поставщиками из
                                КНР. Наделены опытными и обученными на заводах — производителях специалистами.
                                Получаем поддержку представителей компаний Qiangli и Novastar
                            </div>
                        </div>
                    </div>
                    <div class="list__slide swiper-slide">
                        <div class="list__card">
                            <div class="list__num">
                                <span class="back"></span>
                                <span class="number">
                                    <span class="img img_4 animation-element"></span>
                                </span>
                            </div>
                            <div class="list__title animation-element">
                                Полный цикл работ и расширенная поддержка
                            </div>
                            <div class="list__content animation-element">
                                Разработаем проект, произведем монтаж,
                                гарантийное и послегарантийное обслуживание. Предоставим персонального менеджера
                                для оперативного решения комплексных вопросов по услугам сервисного центра и
                                технической поддержки заводов — производителей
                            </div>
                        </div>
                    </div>
                    <div class="list__slide swiper-slide">
                        <div class="list__card">
                            <div class="list__num">
                                <span class="back"></span>
                                <span class="number">
                                    <span class="img img_5 animation-element"></span>
                                </span>
                            </div>
                            <div class="list__title animation-element">
                                Круглосуточная техподдержка
                            </div>
                            <div class="list__content animation-element">
                                Возникли неполадки ― сразу набирайте
                                наш номер телефона. Ответим на вопросы, вернем технику в строй за считанные
                                часы, причем независимо от того, где она была куплена
                            </div>
                        </div>
                    </div>
                    <div class="list__slide swiper-slide">
                        <div class="list__card">
                            <div class="list__num">
                                <span class="back"></span>
                                <span class="number">
                                    <span class="img img_6 animation-element"></span>
                                </span>
                            </div>
                            <div class="list__title animation-element">28 моделей готовых кабинета в сборе</div>
                            <div class="list__content animation-element">
                                Благодаря такому решению, выполним заказ в срок от 4 дней.
                                Отправим готовый экран с уже необходимыми клиенту
                                размерами, конфигурацией и шагом пикселя
                            </div>
                        </div>
                    </div>
                    <div class="list__slide swiper-slide">
                        <div class="list__card">
                            <div class="list__num">
                                <span class="back"></span>
                                <span class="number">
                                    <span class="img img_7 animation-element"></span>
                                </span>
                            </div>
                            <div class="list__title animation-element">Аренда готовых медиаэкранов</div>
                            <div class="list__content animation-element">
                                Удобное и экономически выгодное решение
                                для оценки возможностей LED экрана на желаемой площадке перед его покупкой.
                                Привезем, смонтируем, подключим, настроим и будем следить за работой техники до
                                завершения ивента
                            </div>
                        </div>
                    </div><!-- Для полседнего элемента обязательно добавить .lets-meet-->
                    <div class="list__slide swiper-slide lets-meet">
                        <div class="list__card">
                            <span class="text animation-element">Давайте знакомиться</span>
                            <div class="link-container animation-element">
                                <a class="link revers" href="">
                                    О компании
                                    <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section_projects">
    <div class="projects">
        <div class="container">
            <h2 class="section__title animation-element">
                <span class="title">Реализованные проекты</span>
                <span class="section__link animation-element">
                    <a class="revers" href="">
                        Смотреть портфолио
                        <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                    </a>
                </span>
            </h2>
        </div>
        <div class="container-endless">
            <div class="endless projects__list swiper-container" id="projectsSlider">
                <div class="projects__list__wrap swiper-wrapper">
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card animation-element" href="">
                            <div class="projects__place">г. Москва<br>Конференц-зал</div>
                            <div class="projects__params">
                                <div class="screen">Экран 13,11 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 2,5 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card animation-element" href="">
                            <div class="projects__place">Экспоцентр Москва</div>
                            <div class="projects__params">
                                <div class="screen">Экран Absen 48 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 3,9 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card animation-element" href="">
                            <div class="projects__place">Ассоциация банков<br>России</div>
                            <div class="projects__params">
                                <div class="screen">Экран Absen 18 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 3,9 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card" href="">
                            <div class="projects__place">г. Москва<br>Конференц-зал</div>
                            <div class="projects__params">
                                <div class="screen">Экран 13,11 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 2,5 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card" href="">
                            <div class="projects__place">Экспоцентр Москва</div>
                            <div class="projects__params">
                                <div class="screen">Экран Absen 48 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 3,9 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <div class="projects__slide swiper-slide">
                        <a class="projects__card" href="">
                            <div class="projects__place">Ассоциация банков<br>России</div>
                            <div class="projects__params">
                                <div class="screen">Экран Absen 18 м<sup>2</sup></div>
                                <div class="pixels">Шаг пикселя 3,9 мм</div>
                            </div>
                            <div class="projects__pic">
                                <div class="image" style="background-image: url('/img/placeholder-img.jpg')"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev" id="btnProjectsPrev">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next" id="btnProjectsNext">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
    </div>
</section>
<section class="section section_work">
    <div class="work__background"></div>
    <div class="work work-num-animation">
        <div class="container">
            <h2 class="section__title animation-element">Как мы работаем над заказом</h2>
            <div class="work__steps animation-element">6 шагов до наслаждения яркостью</div>
        </div>
        <div class="container-endless">
            <div class="endless work__list swiper-container" id="workSlider">
                <div class="work__list__wrap swiper-wrapper">
                    <div class="work__slide swiper-slide">
                        <div class="work__card">
                            <div class="work__num">
                                <div class="lines">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_dd)"><circle cx="120" cy="127" r="60" fill="#0B0D19"/></g><g filter="url(#filter1_dd)"><circle cx="120" cy="127" r="51" stroke="#0B0D19" stroke-opacity="0.01" stroke-width="6"/></g><g filter="url(#filter2_iif)"><circle cx="120" cy="127" r="54" stroke="#0B0D19" stroke-width="12"/></g><g id="line1" filter="url(#filter3_d)"><path d="M162.702 93.9362C154.283 83.0837 142.046 75.8466 128.481 73.698" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line2" filter="url(#filter4_d)"><path d="M170.396 146.071C175.586 133.354 175.735 119.138 170.812 106.315" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line3" filter="url(#filter5_d)"><path d="M128.728 180.168C142.335 178.304 154.721 171.324 163.365 160.651" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line4" filter="url(#filter6_d)"><path d="M78.3648 161.13C86.7829 171.983 99.0201 179.22 112.586 181.368" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line5" filter="url(#filter7_d)"><path d="M69.6703 107.996C64.4807 120.712 64.3319 134.928 69.254 147.751" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line6" filter="url(#filter8_d)"><path d="M111.339 73.8987C97.731 75.7627 85.345 82.7419 76.7014 93.4158" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><defs><filter id="filter0_dd" x="0" y="0" width="240" height="254" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="20" dy="27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.17 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-20" dy="-27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.35 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter1_dd" x="10" y="24" width="200" height="188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-16" dy="-9"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.209896 0 0 0 0 0.150694 0 0 0 0 0.258333 0 0 0 0.8 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="16" dy="8"/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 1 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter2_iif" x="57" y="64" width="127" height="127" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="4" dy="4"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00654762 0 0 0 0 0.0458333 0 0 0 0.47 0"/><feBlend mode="normal" in2="shape" result="effect1_innerShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="-3" dy="-3"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0.204554 0 0 0 0 0.155069 0 0 0 0 0.241667 0 0 0 0.1 0"/><feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"/><feGaussianBlur stdDeviation="0.5" result="effect3_foregroundBlur"/></filter><filter id="filter3_d" x="105.48" y="50.6978" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter4_d" x="147.395" y="83.3147" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter5_d" x="105.727" y="137.65" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter6_d" x="55.3647" y="138.13" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter7_d" x="42.6672" y="84.9949" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter8_d" x="53.7014" y="50.8984" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
                                </div>
                                <div class="number">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="num1" d="M126 111V144H116.881V117.129H109V111H126Z" fill="transparent"/><path id="num2" d="M133 135.882V142H108.483V137.133L120.996 125.315C122.325 124.048 123.221 122.966 123.684 122.07C124.148 121.143 124.38 120.232 124.38 119.336C124.38 118.038 123.932 117.049 123.036 116.369C122.171 115.659 120.888 115.303 119.189 115.303C117.768 115.303 116.485 115.581 115.342 116.138C114.199 116.663 113.241 117.466 112.469 118.548L107 115.025C108.267 113.14 110.012 111.673 112.237 110.622C114.462 109.541 117.011 109 119.884 109C122.294 109 124.395 109.402 126.187 110.205C128.01 110.978 129.416 112.09 130.405 113.542C131.424 114.963 131.934 116.647 131.934 118.594C131.934 120.355 131.563 122.008 130.822 123.553C130.08 125.098 128.643 126.86 126.512 128.837L119.05 135.882H133Z" fill="transparent"/><path id="num3" d="M123.131 123.209C125.994 123.673 128.188 124.739 129.713 126.407C131.238 128.045 132 130.084 132 132.525C132 134.41 131.502 136.156 130.506 137.763C129.51 139.338 127.986 140.605 125.932 141.563C123.909 142.521 121.42 143 118.463 143C116.16 143 113.889 142.706 111.648 142.119C109.439 141.501 107.556 140.636 106 139.524L108.941 133.777C110.186 134.704 111.617 135.43 113.235 135.955C114.885 136.449 116.565 136.697 118.276 136.697C120.175 136.697 121.668 136.341 122.758 135.631C123.847 134.889 124.391 133.854 124.391 132.525C124.391 129.868 122.353 128.539 118.276 128.539H114.822V123.58L121.544 116.025H107.634V110H130.506V114.867L123.131 123.209Z" fill="transparent"/><path id="num4" d="M134 136.07H128.555V143H121.008V136.07H103V130.931L118.763 110H126.883L112.267 129.847H121.247V123.671H128.555V129.847H134V136.07Z" fill="transparent"/><path id="num5" d="M118.534 123.19C123.131 123.19 126.517 124.101 128.692 125.924C130.897 127.747 132 130.188 132 133.247C132 135.225 131.503 137.032 130.509 138.67C129.515 140.277 127.993 141.574 125.943 142.563C123.924 143.521 121.423 144 118.441 144C116.142 144 113.875 143.706 111.638 143.119C109.432 142.501 107.553 141.636 106 140.524L108.982 134.777C110.225 135.704 111.654 136.43 113.269 136.955C114.884 137.449 116.546 137.697 118.254 137.697C120.149 137.697 121.64 137.326 122.728 136.584C123.815 135.843 124.358 134.808 124.358 133.479C124.358 132.088 123.784 131.038 122.634 130.327C121.516 129.617 119.559 129.261 116.763 129.261H108.423L110.1 111H129.996V117.025H116.391L115.878 123.19H118.534Z" fill="transparent"/><path id="num6" d="M120.742 122.443C122.829 122.443 124.728 122.854 126.441 123.674C128.154 124.494 129.509 125.664 130.505 127.184C131.502 128.673 132 130.405 132 132.38C132 134.507 131.455 136.376 130.365 137.986C129.275 139.597 127.78 140.843 125.881 141.724C124.012 142.575 121.926 143 119.621 143C115.043 143 111.462 141.633 108.877 138.898C106.292 136.163 105 132.258 105 127.184C105 123.568 105.701 120.468 107.102 117.885C108.503 115.302 110.45 113.343 112.941 112.006C115.464 110.669 118.375 110 121.676 110C123.42 110 125.087 110.198 126.675 110.593C128.294 110.957 129.664 111.489 130.785 112.188L127.983 117.612C126.363 116.548 124.324 116.017 121.863 116.017C119.092 116.017 116.896 116.807 115.277 118.387C113.657 119.967 112.785 122.261 112.661 125.269C114.592 123.385 117.285 122.443 120.742 122.443ZM119.201 137.485C120.82 137.485 122.128 137.059 123.125 136.209C124.152 135.358 124.666 134.203 124.666 132.744C124.666 131.286 124.152 130.131 123.125 129.28C122.128 128.399 120.789 127.959 119.107 127.959C117.457 127.959 116.102 128.414 115.043 129.326C113.984 130.207 113.455 131.347 113.455 132.744C113.455 134.142 113.969 135.282 114.997 136.163C116.024 137.044 117.426 137.485 119.201 137.485Z" fill="transparent"/></svg>
                                </div>
                            </div>
                            <div class="work__title animation-element">
                                Подбор экрана и комплектующих
                            </div>
                            <div class="work__day animation-element">
                                <img src="/img/icon-clock.svg" alt="">
                                <span>1 день</span>
                            </div>
                            <div class="work__content animation-element">
                                Обсуждаем с клиентом задачу, подбираем
                                готовое решение, определяем LED модули
                                и систему управления. Формируем заказ
                            </div>
                        </div>
                    </div>
                    <div class="work__slide swiper-slide">
                        <div class="work__card">
                            <div class="work__num">
                                <div class="lines">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_dd)"><circle cx="120" cy="127" r="60" fill="#0B0D19"/></g><g filter="url(#filter1_dd)"><circle cx="120" cy="127" r="51" stroke="#0B0D19" stroke-opacity="0.01" stroke-width="6"/></g><g filter="url(#filter2_iif)"><circle cx="120" cy="127" r="54" stroke="#0B0D19" stroke-width="12"/></g><g id="line1" filter="url(#filter3_d)"><path d="M162.702 93.9362C154.283 83.0837 142.046 75.8466 128.481 73.698" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line2" filter="url(#filter4_d)"><path d="M170.396 146.071C175.586 133.354 175.735 119.138 170.812 106.315" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line3" filter="url(#filter5_d)"><path d="M128.728 180.168C142.335 178.304 154.721 171.324 163.365 160.651" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line4" filter="url(#filter6_d)"><path d="M78.3648 161.13C86.7829 171.983 99.0201 179.22 112.586 181.368" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line5" filter="url(#filter7_d)"><path d="M69.6703 107.996C64.4807 120.712 64.3319 134.928 69.254 147.751" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line6" filter="url(#filter8_d)"><path d="M111.339 73.8987C97.731 75.7627 85.345 82.7419 76.7014 93.4158" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><defs><filter id="filter0_dd" x="0" y="0" width="240" height="254" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="20" dy="27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.17 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-20" dy="-27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.35 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter1_dd" x="10" y="24" width="200" height="188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-16" dy="-9"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.209896 0 0 0 0 0.150694 0 0 0 0 0.258333 0 0 0 0.8 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="16" dy="8"/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 1 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter2_iif" x="57" y="64" width="127" height="127" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="4" dy="4"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00654762 0 0 0 0 0.0458333 0 0 0 0.47 0"/><feBlend mode="normal" in2="shape" result="effect1_innerShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="-3" dy="-3"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0.204554 0 0 0 0 0.155069 0 0 0 0 0.241667 0 0 0 0.1 0"/><feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"/><feGaussianBlur stdDeviation="0.5" result="effect3_foregroundBlur"/></filter><filter id="filter3_d" x="105.48" y="50.6978" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter4_d" x="147.395" y="83.3147" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter5_d" x="105.727" y="137.65" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter6_d" x="55.3647" y="138.13" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter7_d" x="42.6672" y="84.9949" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter8_d" x="53.7014" y="50.8984" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
                                </div>
                                <div class="number">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="num1" d="M126 111V144H116.881V117.129H109V111H126Z" fill="transparent"/><path id="num2" d="M133 135.882V142H108.483V137.133L120.996 125.315C122.325 124.048 123.221 122.966 123.684 122.07C124.148 121.143 124.38 120.232 124.38 119.336C124.38 118.038 123.932 117.049 123.036 116.369C122.171 115.659 120.888 115.303 119.189 115.303C117.768 115.303 116.485 115.581 115.342 116.138C114.199 116.663 113.241 117.466 112.469 118.548L107 115.025C108.267 113.14 110.012 111.673 112.237 110.622C114.462 109.541 117.011 109 119.884 109C122.294 109 124.395 109.402 126.187 110.205C128.01 110.978 129.416 112.09 130.405 113.542C131.424 114.963 131.934 116.647 131.934 118.594C131.934 120.355 131.563 122.008 130.822 123.553C130.08 125.098 128.643 126.86 126.512 128.837L119.05 135.882H133Z" fill="transparent"/><path id="num3" d="M123.131 123.209C125.994 123.673 128.188 124.739 129.713 126.407C131.238 128.045 132 130.084 132 132.525C132 134.41 131.502 136.156 130.506 137.763C129.51 139.338 127.986 140.605 125.932 141.563C123.909 142.521 121.42 143 118.463 143C116.16 143 113.889 142.706 111.648 142.119C109.439 141.501 107.556 140.636 106 139.524L108.941 133.777C110.186 134.704 111.617 135.43 113.235 135.955C114.885 136.449 116.565 136.697 118.276 136.697C120.175 136.697 121.668 136.341 122.758 135.631C123.847 134.889 124.391 133.854 124.391 132.525C124.391 129.868 122.353 128.539 118.276 128.539H114.822V123.58L121.544 116.025H107.634V110H130.506V114.867L123.131 123.209Z" fill="transparent"/><path id="num4" d="M134 136.07H128.555V143H121.008V136.07H103V130.931L118.763 110H126.883L112.267 129.847H121.247V123.671H128.555V129.847H134V136.07Z" fill="transparent"/><path id="num5" d="M118.534 123.19C123.131 123.19 126.517 124.101 128.692 125.924C130.897 127.747 132 130.188 132 133.247C132 135.225 131.503 137.032 130.509 138.67C129.515 140.277 127.993 141.574 125.943 142.563C123.924 143.521 121.423 144 118.441 144C116.142 144 113.875 143.706 111.638 143.119C109.432 142.501 107.553 141.636 106 140.524L108.982 134.777C110.225 135.704 111.654 136.43 113.269 136.955C114.884 137.449 116.546 137.697 118.254 137.697C120.149 137.697 121.64 137.326 122.728 136.584C123.815 135.843 124.358 134.808 124.358 133.479C124.358 132.088 123.784 131.038 122.634 130.327C121.516 129.617 119.559 129.261 116.763 129.261H108.423L110.1 111H129.996V117.025H116.391L115.878 123.19H118.534Z" fill="transparent"/><path id="num6" d="M120.742 122.443C122.829 122.443 124.728 122.854 126.441 123.674C128.154 124.494 129.509 125.664 130.505 127.184C131.502 128.673 132 130.405 132 132.38C132 134.507 131.455 136.376 130.365 137.986C129.275 139.597 127.78 140.843 125.881 141.724C124.012 142.575 121.926 143 119.621 143C115.043 143 111.462 141.633 108.877 138.898C106.292 136.163 105 132.258 105 127.184C105 123.568 105.701 120.468 107.102 117.885C108.503 115.302 110.45 113.343 112.941 112.006C115.464 110.669 118.375 110 121.676 110C123.42 110 125.087 110.198 126.675 110.593C128.294 110.957 129.664 111.489 130.785 112.188L127.983 117.612C126.363 116.548 124.324 116.017 121.863 116.017C119.092 116.017 116.896 116.807 115.277 118.387C113.657 119.967 112.785 122.261 112.661 125.269C114.592 123.385 117.285 122.443 120.742 122.443ZM119.201 137.485C120.82 137.485 122.128 137.059 123.125 136.209C124.152 135.358 124.666 134.203 124.666 132.744C124.666 131.286 124.152 130.131 123.125 129.28C122.128 128.399 120.789 127.959 119.107 127.959C117.457 127.959 116.102 128.414 115.043 129.326C113.984 130.207 113.455 131.347 113.455 132.744C113.455 134.142 113.969 135.282 114.997 136.163C116.024 137.044 117.426 137.485 119.201 137.485Z" fill="transparent"/></svg>
                                </div>
                            </div>
                            <div class="work__title animation-element">
                                Согласование проекта
                            </div>
                            <div class="work__day animation-element">
                                <img src="/img/icon-clock.svg" alt="">
                                <span>3 дня</span>
                            </div>
                            <div class="work__content animation-element">
                                Встречаемся с клиентом, чтобы
                                подтвердить расчёты и сметы, согласовать электропроект.
                                При необходимости
                                помогаем подготовить помещение под установку экрана
                            </div>
                        </div>
                    </div>
                    <div class="work__slide swiper-slide">
                        <div class="work__card">
                            <div class="work__num">
                                <div class="lines">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_dd)"><circle cx="120" cy="127" r="60" fill="#0B0D19"/></g><g filter="url(#filter1_dd)"><circle cx="120" cy="127" r="51" stroke="#0B0D19" stroke-opacity="0.01" stroke-width="6"/></g><g filter="url(#filter2_iif)"><circle cx="120" cy="127" r="54" stroke="#0B0D19" stroke-width="12"/></g><g id="line1" filter="url(#filter3_d)"><path d="M162.702 93.9362C154.283 83.0837 142.046 75.8466 128.481 73.698" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line2" filter="url(#filter4_d)"><path d="M170.396 146.071C175.586 133.354 175.735 119.138 170.812 106.315" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line3" filter="url(#filter5_d)"><path d="M128.728 180.168C142.335 178.304 154.721 171.324 163.365 160.651" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line4" filter="url(#filter6_d)"><path d="M78.3648 161.13C86.7829 171.983 99.0201 179.22 112.586 181.368" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line5" filter="url(#filter7_d)"><path d="M69.6703 107.996C64.4807 120.712 64.3319 134.928 69.254 147.751" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line6" filter="url(#filter8_d)"><path d="M111.339 73.8987C97.731 75.7627 85.345 82.7419 76.7014 93.4158" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><defs><filter id="filter0_dd" x="0" y="0" width="240" height="254" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="20" dy="27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.17 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-20" dy="-27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.35 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter1_dd" x="10" y="24" width="200" height="188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-16" dy="-9"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.209896 0 0 0 0 0.150694 0 0 0 0 0.258333 0 0 0 0.8 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="16" dy="8"/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 1 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter2_iif" x="57" y="64" width="127" height="127" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="4" dy="4"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00654762 0 0 0 0 0.0458333 0 0 0 0.47 0"/><feBlend mode="normal" in2="shape" result="effect1_innerShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="-3" dy="-3"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0.204554 0 0 0 0 0.155069 0 0 0 0 0.241667 0 0 0 0.1 0"/><feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"/><feGaussianBlur stdDeviation="0.5" result="effect3_foregroundBlur"/></filter><filter id="filter3_d" x="105.48" y="50.6978" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter4_d" x="147.395" y="83.3147" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter5_d" x="105.727" y="137.65" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter6_d" x="55.3647" y="138.13" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter7_d" x="42.6672" y="84.9949" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter8_d" x="53.7014" y="50.8984" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
                                </div>
                                <div class="number">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="num1" d="M126 111V144H116.881V117.129H109V111H126Z" fill="transparent"/><path id="num2" d="M133 135.882V142H108.483V137.133L120.996 125.315C122.325 124.048 123.221 122.966 123.684 122.07C124.148 121.143 124.38 120.232 124.38 119.336C124.38 118.038 123.932 117.049 123.036 116.369C122.171 115.659 120.888 115.303 119.189 115.303C117.768 115.303 116.485 115.581 115.342 116.138C114.199 116.663 113.241 117.466 112.469 118.548L107 115.025C108.267 113.14 110.012 111.673 112.237 110.622C114.462 109.541 117.011 109 119.884 109C122.294 109 124.395 109.402 126.187 110.205C128.01 110.978 129.416 112.09 130.405 113.542C131.424 114.963 131.934 116.647 131.934 118.594C131.934 120.355 131.563 122.008 130.822 123.553C130.08 125.098 128.643 126.86 126.512 128.837L119.05 135.882H133Z" fill="transparent"/><path id="num3" d="M123.131 123.209C125.994 123.673 128.188 124.739 129.713 126.407C131.238 128.045 132 130.084 132 132.525C132 134.41 131.502 136.156 130.506 137.763C129.51 139.338 127.986 140.605 125.932 141.563C123.909 142.521 121.42 143 118.463 143C116.16 143 113.889 142.706 111.648 142.119C109.439 141.501 107.556 140.636 106 139.524L108.941 133.777C110.186 134.704 111.617 135.43 113.235 135.955C114.885 136.449 116.565 136.697 118.276 136.697C120.175 136.697 121.668 136.341 122.758 135.631C123.847 134.889 124.391 133.854 124.391 132.525C124.391 129.868 122.353 128.539 118.276 128.539H114.822V123.58L121.544 116.025H107.634V110H130.506V114.867L123.131 123.209Z" fill="transparent"/><path id="num4" d="M134 136.07H128.555V143H121.008V136.07H103V130.931L118.763 110H126.883L112.267 129.847H121.247V123.671H128.555V129.847H134V136.07Z" fill="transparent"/><path id="num5" d="M118.534 123.19C123.131 123.19 126.517 124.101 128.692 125.924C130.897 127.747 132 130.188 132 133.247C132 135.225 131.503 137.032 130.509 138.67C129.515 140.277 127.993 141.574 125.943 142.563C123.924 143.521 121.423 144 118.441 144C116.142 144 113.875 143.706 111.638 143.119C109.432 142.501 107.553 141.636 106 140.524L108.982 134.777C110.225 135.704 111.654 136.43 113.269 136.955C114.884 137.449 116.546 137.697 118.254 137.697C120.149 137.697 121.64 137.326 122.728 136.584C123.815 135.843 124.358 134.808 124.358 133.479C124.358 132.088 123.784 131.038 122.634 130.327C121.516 129.617 119.559 129.261 116.763 129.261H108.423L110.1 111H129.996V117.025H116.391L115.878 123.19H118.534Z" fill="transparent"/><path id="num6" d="M120.742 122.443C122.829 122.443 124.728 122.854 126.441 123.674C128.154 124.494 129.509 125.664 130.505 127.184C131.502 128.673 132 130.405 132 132.38C132 134.507 131.455 136.376 130.365 137.986C129.275 139.597 127.78 140.843 125.881 141.724C124.012 142.575 121.926 143 119.621 143C115.043 143 111.462 141.633 108.877 138.898C106.292 136.163 105 132.258 105 127.184C105 123.568 105.701 120.468 107.102 117.885C108.503 115.302 110.45 113.343 112.941 112.006C115.464 110.669 118.375 110 121.676 110C123.42 110 125.087 110.198 126.675 110.593C128.294 110.957 129.664 111.489 130.785 112.188L127.983 117.612C126.363 116.548 124.324 116.017 121.863 116.017C119.092 116.017 116.896 116.807 115.277 118.387C113.657 119.967 112.785 122.261 112.661 125.269C114.592 123.385 117.285 122.443 120.742 122.443ZM119.201 137.485C120.82 137.485 122.128 137.059 123.125 136.209C124.152 135.358 124.666 134.203 124.666 132.744C124.666 131.286 124.152 130.131 123.125 129.28C122.128 128.399 120.789 127.959 119.107 127.959C117.457 127.959 116.102 128.414 115.043 129.326C113.984 130.207 113.455 131.347 113.455 132.744C113.455 134.142 113.969 135.282 114.997 136.163C116.024 137.044 117.426 137.485 119.201 137.485Z" fill="transparent"/></svg>
                                </div>
                            </div>
                            <div class="work__title animation-element">
                                Изготовление и прошивка
                            </div>
                            <div class="work__day animation-element">
                                <img src="/img/icon-clock.svg" alt="">
                                <span>7 - 10 дней</span>
                            </div>
                            <div class="work__content animation-element">
                                Собираем светодиодные модули и каркас в
                                прочную упаковку, готовим к транспортировке.
                                Выбираем программное обеспечение,
                                выполняем подготовку и настройки
                            </div>
                        </div>
                    </div>
                    <div class="work__slide swiper-slide">
                        <div class="work__card">
                            <div class="work__num">
                                <div class="lines">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_dd)"><circle cx="120" cy="127" r="60" fill="#0B0D19"/></g><g filter="url(#filter1_dd)"><circle cx="120" cy="127" r="51" stroke="#0B0D19" stroke-opacity="0.01" stroke-width="6"/></g><g filter="url(#filter2_iif)"><circle cx="120" cy="127" r="54" stroke="#0B0D19" stroke-width="12"/></g><g id="line1" filter="url(#filter3_d)"><path d="M162.702 93.9362C154.283 83.0837 142.046 75.8466 128.481 73.698" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line2" filter="url(#filter4_d)"><path d="M170.396 146.071C175.586 133.354 175.735 119.138 170.812 106.315" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line3" filter="url(#filter5_d)"><path d="M128.728 180.168C142.335 178.304 154.721 171.324 163.365 160.651" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line4" filter="url(#filter6_d)"><path d="M78.3648 161.13C86.7829 171.983 99.0201 179.22 112.586 181.368" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line5" filter="url(#filter7_d)"><path d="M69.6703 107.996C64.4807 120.712 64.3319 134.928 69.254 147.751" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line6" filter="url(#filter8_d)"><path d="M111.339 73.8987C97.731 75.7627 85.345 82.7419 76.7014 93.4158" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><defs><filter id="filter0_dd" x="0" y="0" width="240" height="254" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="20" dy="27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.17 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-20" dy="-27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.35 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter1_dd" x="10" y="24" width="200" height="188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-16" dy="-9"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.209896 0 0 0 0 0.150694 0 0 0 0 0.258333 0 0 0 0.8 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="16" dy="8"/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 1 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter2_iif" x="57" y="64" width="127" height="127" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="4" dy="4"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00654762 0 0 0 0 0.0458333 0 0 0 0.47 0"/><feBlend mode="normal" in2="shape" result="effect1_innerShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="-3" dy="-3"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0.204554 0 0 0 0 0.155069 0 0 0 0 0.241667 0 0 0 0.1 0"/><feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"/><feGaussianBlur stdDeviation="0.5" result="effect3_foregroundBlur"/></filter><filter id="filter3_d" x="105.48" y="50.6978" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter4_d" x="147.395" y="83.3147" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter5_d" x="105.727" y="137.65" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter6_d" x="55.3647" y="138.13" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter7_d" x="42.6672" y="84.9949" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter8_d" x="53.7014" y="50.8984" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
                                </div>
                                <div class="number">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="num1" d="M126 111V144H116.881V117.129H109V111H126Z" fill="transparent"/><path id="num2" d="M133 135.882V142H108.483V137.133L120.996 125.315C122.325 124.048 123.221 122.966 123.684 122.07C124.148 121.143 124.38 120.232 124.38 119.336C124.38 118.038 123.932 117.049 123.036 116.369C122.171 115.659 120.888 115.303 119.189 115.303C117.768 115.303 116.485 115.581 115.342 116.138C114.199 116.663 113.241 117.466 112.469 118.548L107 115.025C108.267 113.14 110.012 111.673 112.237 110.622C114.462 109.541 117.011 109 119.884 109C122.294 109 124.395 109.402 126.187 110.205C128.01 110.978 129.416 112.09 130.405 113.542C131.424 114.963 131.934 116.647 131.934 118.594C131.934 120.355 131.563 122.008 130.822 123.553C130.08 125.098 128.643 126.86 126.512 128.837L119.05 135.882H133Z" fill="transparent"/><path id="num3" d="M123.131 123.209C125.994 123.673 128.188 124.739 129.713 126.407C131.238 128.045 132 130.084 132 132.525C132 134.41 131.502 136.156 130.506 137.763C129.51 139.338 127.986 140.605 125.932 141.563C123.909 142.521 121.42 143 118.463 143C116.16 143 113.889 142.706 111.648 142.119C109.439 141.501 107.556 140.636 106 139.524L108.941 133.777C110.186 134.704 111.617 135.43 113.235 135.955C114.885 136.449 116.565 136.697 118.276 136.697C120.175 136.697 121.668 136.341 122.758 135.631C123.847 134.889 124.391 133.854 124.391 132.525C124.391 129.868 122.353 128.539 118.276 128.539H114.822V123.58L121.544 116.025H107.634V110H130.506V114.867L123.131 123.209Z" fill="transparent"/><path id="num4" d="M134 136.07H128.555V143H121.008V136.07H103V130.931L118.763 110H126.883L112.267 129.847H121.247V123.671H128.555V129.847H134V136.07Z" fill="transparent"/><path id="num5" d="M118.534 123.19C123.131 123.19 126.517 124.101 128.692 125.924C130.897 127.747 132 130.188 132 133.247C132 135.225 131.503 137.032 130.509 138.67C129.515 140.277 127.993 141.574 125.943 142.563C123.924 143.521 121.423 144 118.441 144C116.142 144 113.875 143.706 111.638 143.119C109.432 142.501 107.553 141.636 106 140.524L108.982 134.777C110.225 135.704 111.654 136.43 113.269 136.955C114.884 137.449 116.546 137.697 118.254 137.697C120.149 137.697 121.64 137.326 122.728 136.584C123.815 135.843 124.358 134.808 124.358 133.479C124.358 132.088 123.784 131.038 122.634 130.327C121.516 129.617 119.559 129.261 116.763 129.261H108.423L110.1 111H129.996V117.025H116.391L115.878 123.19H118.534Z" fill="transparent"/><path id="num6" d="M120.742 122.443C122.829 122.443 124.728 122.854 126.441 123.674C128.154 124.494 129.509 125.664 130.505 127.184C131.502 128.673 132 130.405 132 132.38C132 134.507 131.455 136.376 130.365 137.986C129.275 139.597 127.78 140.843 125.881 141.724C124.012 142.575 121.926 143 119.621 143C115.043 143 111.462 141.633 108.877 138.898C106.292 136.163 105 132.258 105 127.184C105 123.568 105.701 120.468 107.102 117.885C108.503 115.302 110.45 113.343 112.941 112.006C115.464 110.669 118.375 110 121.676 110C123.42 110 125.087 110.198 126.675 110.593C128.294 110.957 129.664 111.489 130.785 112.188L127.983 117.612C126.363 116.548 124.324 116.017 121.863 116.017C119.092 116.017 116.896 116.807 115.277 118.387C113.657 119.967 112.785 122.261 112.661 125.269C114.592 123.385 117.285 122.443 120.742 122.443ZM119.201 137.485C120.82 137.485 122.128 137.059 123.125 136.209C124.152 135.358 124.666 134.203 124.666 132.744C124.666 131.286 124.152 130.131 123.125 129.28C122.128 128.399 120.789 127.959 119.107 127.959C117.457 127.959 116.102 128.414 115.043 129.326C113.984 130.207 113.455 131.347 113.455 132.744C113.455 134.142 113.969 135.282 114.997 136.163C116.024 137.044 117.426 137.485 119.201 137.485Z" fill="transparent"/></svg>
                                </div>
                            </div>
                            <div class="work__title animation-element">
                                Доставка на объект клиента
                            </div>
                            <div class="work__day animation-element">
                                <img src="/img/icon-clock.svg" alt="">
                                <span>3 дня</span>
                            </div>
                            <div class="work__content animation-element">
                                Перевозим комплектующие для сборки LED
                                экрана на площадку
                            </div>
                        </div>
                    </div>
                    <div class="work__slide swiper-slide">
                        <div class="work__card">
                            <div class="work__num">
                                <div class="lines">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_dd)"><circle cx="120" cy="127" r="60" fill="#0B0D19"/></g><g filter="url(#filter1_dd)"><circle cx="120" cy="127" r="51" stroke="#0B0D19" stroke-opacity="0.01" stroke-width="6"/></g><g filter="url(#filter2_iif)"><circle cx="120" cy="127" r="54" stroke="#0B0D19" stroke-width="12"/></g><g id="line1" filter="url(#filter3_d)"><path d="M162.702 93.9362C154.283 83.0837 142.046 75.8466 128.481 73.698" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line2" filter="url(#filter4_d)"><path d="M170.396 146.071C175.586 133.354 175.735 119.138 170.812 106.315" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line3" filter="url(#filter5_d)"><path d="M128.728 180.168C142.335 178.304 154.721 171.324 163.365 160.651" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line4" filter="url(#filter6_d)"><path d="M78.3648 161.13C86.7829 171.983 99.0201 179.22 112.586 181.368" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line5" filter="url(#filter7_d)"><path d="M69.6703 107.996C64.4807 120.712 64.3319 134.928 69.254 147.751" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line6" filter="url(#filter8_d)"><path d="M111.339 73.8987C97.731 75.7627 85.345 82.7419 76.7014 93.4158" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><defs><filter id="filter0_dd" x="0" y="0" width="240" height="254" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="20" dy="27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.17 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-20" dy="-27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.35 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter1_dd" x="10" y="24" width="200" height="188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-16" dy="-9"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.209896 0 0 0 0 0.150694 0 0 0 0 0.258333 0 0 0 0.8 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="16" dy="8"/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 1 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter2_iif" x="57" y="64" width="127" height="127" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="4" dy="4"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00654762 0 0 0 0 0.0458333 0 0 0 0.47 0"/><feBlend mode="normal" in2="shape" result="effect1_innerShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="-3" dy="-3"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0.204554 0 0 0 0 0.155069 0 0 0 0 0.241667 0 0 0 0.1 0"/><feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"/><feGaussianBlur stdDeviation="0.5" result="effect3_foregroundBlur"/></filter><filter id="filter3_d" x="105.48" y="50.6978" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter4_d" x="147.395" y="83.3147" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter5_d" x="105.727" y="137.65" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter6_d" x="55.3647" y="138.13" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter7_d" x="42.6672" y="84.9949" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter8_d" x="53.7014" y="50.8984" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
                                </div>
                                <div class="number">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="num1" d="M126 111V144H116.881V117.129H109V111H126Z" fill="transparent"/><path id="num2" d="M133 135.882V142H108.483V137.133L120.996 125.315C122.325 124.048 123.221 122.966 123.684 122.07C124.148 121.143 124.38 120.232 124.38 119.336C124.38 118.038 123.932 117.049 123.036 116.369C122.171 115.659 120.888 115.303 119.189 115.303C117.768 115.303 116.485 115.581 115.342 116.138C114.199 116.663 113.241 117.466 112.469 118.548L107 115.025C108.267 113.14 110.012 111.673 112.237 110.622C114.462 109.541 117.011 109 119.884 109C122.294 109 124.395 109.402 126.187 110.205C128.01 110.978 129.416 112.09 130.405 113.542C131.424 114.963 131.934 116.647 131.934 118.594C131.934 120.355 131.563 122.008 130.822 123.553C130.08 125.098 128.643 126.86 126.512 128.837L119.05 135.882H133Z" fill="transparent"/><path id="num3" d="M123.131 123.209C125.994 123.673 128.188 124.739 129.713 126.407C131.238 128.045 132 130.084 132 132.525C132 134.41 131.502 136.156 130.506 137.763C129.51 139.338 127.986 140.605 125.932 141.563C123.909 142.521 121.42 143 118.463 143C116.16 143 113.889 142.706 111.648 142.119C109.439 141.501 107.556 140.636 106 139.524L108.941 133.777C110.186 134.704 111.617 135.43 113.235 135.955C114.885 136.449 116.565 136.697 118.276 136.697C120.175 136.697 121.668 136.341 122.758 135.631C123.847 134.889 124.391 133.854 124.391 132.525C124.391 129.868 122.353 128.539 118.276 128.539H114.822V123.58L121.544 116.025H107.634V110H130.506V114.867L123.131 123.209Z" fill="transparent"/><path id="num4" d="M134 136.07H128.555V143H121.008V136.07H103V130.931L118.763 110H126.883L112.267 129.847H121.247V123.671H128.555V129.847H134V136.07Z" fill="transparent"/><path id="num5" d="M118.534 123.19C123.131 123.19 126.517 124.101 128.692 125.924C130.897 127.747 132 130.188 132 133.247C132 135.225 131.503 137.032 130.509 138.67C129.515 140.277 127.993 141.574 125.943 142.563C123.924 143.521 121.423 144 118.441 144C116.142 144 113.875 143.706 111.638 143.119C109.432 142.501 107.553 141.636 106 140.524L108.982 134.777C110.225 135.704 111.654 136.43 113.269 136.955C114.884 137.449 116.546 137.697 118.254 137.697C120.149 137.697 121.64 137.326 122.728 136.584C123.815 135.843 124.358 134.808 124.358 133.479C124.358 132.088 123.784 131.038 122.634 130.327C121.516 129.617 119.559 129.261 116.763 129.261H108.423L110.1 111H129.996V117.025H116.391L115.878 123.19H118.534Z" fill="transparent"/><path id="num6" d="M120.742 122.443C122.829 122.443 124.728 122.854 126.441 123.674C128.154 124.494 129.509 125.664 130.505 127.184C131.502 128.673 132 130.405 132 132.38C132 134.507 131.455 136.376 130.365 137.986C129.275 139.597 127.78 140.843 125.881 141.724C124.012 142.575 121.926 143 119.621 143C115.043 143 111.462 141.633 108.877 138.898C106.292 136.163 105 132.258 105 127.184C105 123.568 105.701 120.468 107.102 117.885C108.503 115.302 110.45 113.343 112.941 112.006C115.464 110.669 118.375 110 121.676 110C123.42 110 125.087 110.198 126.675 110.593C128.294 110.957 129.664 111.489 130.785 112.188L127.983 117.612C126.363 116.548 124.324 116.017 121.863 116.017C119.092 116.017 116.896 116.807 115.277 118.387C113.657 119.967 112.785 122.261 112.661 125.269C114.592 123.385 117.285 122.443 120.742 122.443ZM119.201 137.485C120.82 137.485 122.128 137.059 123.125 136.209C124.152 135.358 124.666 134.203 124.666 132.744C124.666 131.286 124.152 130.131 123.125 129.28C122.128 128.399 120.789 127.959 119.107 127.959C117.457 127.959 116.102 128.414 115.043 129.326C113.984 130.207 113.455 131.347 113.455 132.744C113.455 134.142 113.969 135.282 114.997 136.163C116.024 137.044 117.426 137.485 119.201 137.485Z" fill="transparent"/></svg>
                                </div>
                            </div>
                            <div class="work__title animation-element">
                                Сборка и монтаж оборудования
                            </div>
                            <div class="work__day animation-element">
                                <img src="/img/icon-clock.svg" alt="">
                                <span>2 дня</span>
                            </div>
                            <div class="work__content animation-element">
                                Собираем LED экран из подготовленных и
                                доставленных на площадку комплектующих,
                                устанавливаем его в соответствии с
                                проектом. Вносим завершающие настройки перед запуском
                            </div>
                        </div>
                    </div>
                    <div class="work__slide swiper-slide">
                        <div class="work__card">
                            <div class="work__num">
                                <div class="lines">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_dd)"><circle cx="120" cy="127" r="60" fill="#0B0D19"/></g><g filter="url(#filter1_dd)"><circle cx="120" cy="127" r="51" stroke="#0B0D19" stroke-opacity="0.01" stroke-width="6"/></g><g filter="url(#filter2_iif)"><circle cx="120" cy="127" r="54" stroke="#0B0D19" stroke-width="12"/></g><g id="line1" filter="url(#filter3_d)"><path d="M162.702 93.9362C154.283 83.0837 142.046 75.8466 128.481 73.698" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line2" filter="url(#filter4_d)"><path d="M170.396 146.071C175.586 133.354 175.735 119.138 170.812 106.315" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line3" filter="url(#filter5_d)"><path d="M128.728 180.168C142.335 178.304 154.721 171.324 163.365 160.651" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line4" filter="url(#filter6_d)"><path d="M78.3648 161.13C86.7829 171.983 99.0201 179.22 112.586 181.368" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line5" filter="url(#filter7_d)"><path d="M69.6703 107.996C64.4807 120.712 64.3319 134.928 69.254 147.751" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><g id="line6" filter="url(#filter8_d)"><path d="M111.339 73.8987C97.731 75.7627 85.345 82.7419 76.7014 93.4158" stroke="transparent" stroke-width="6" stroke-linecap="round"/></g><defs><filter id="filter0_dd" x="0" y="0" width="240" height="254" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="20" dy="27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 0.17 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-20" dy="-27"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.137255 0 0 0 0 0.129412 0 0 0 0 0.227451 0 0 0 0.35 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter1_dd" x="10" y="24" width="200" height="188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-16" dy="-9"/><feGaussianBlur stdDeviation="20"/><feColorMatrix type="matrix" values="0 0 0 0 0.209896 0 0 0 0 0.150694 0 0 0 0 0.258333 0 0 0 0.8 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="16" dy="8"/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.0156863 0 0 0 0 0.0196078 0 0 0 0 0.054902 0 0 0 1 0"/><feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/></filter><filter id="filter2_iif" x="57" y="64" width="127" height="127" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="4" dy="4"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.00654762 0 0 0 0 0.0458333 0 0 0 0.47 0"/><feBlend mode="normal" in2="shape" result="effect1_innerShadow"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dx="-3" dy="-3"/><feGaussianBlur stdDeviation="2.5"/><feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/><feColorMatrix type="matrix" values="0 0 0 0 0.204554 0 0 0 0 0.155069 0 0 0 0 0.241667 0 0 0 0.1 0"/><feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"/><feGaussianBlur stdDeviation="0.5" result="effect3_foregroundBlur"/></filter><filter id="filter3_d" x="105.48" y="50.6978" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter4_d" x="147.395" y="83.3147" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter5_d" x="105.727" y="137.65" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter6_d" x="55.3647" y="138.13" width="80.2215" height="66.2388" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter7_d" x="42.6672" y="84.9949" width="50.0038" height="85.7569" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter><filter id="filter8_d" x="53.7014" y="50.8984" width="80.6377" height="65.5175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.670588 0 0 0 0 0.470588 0 0 0 0 1 0 0 0 1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>
                                </div>
                                <div class="number">
                                    <svg width="240" height="254" viewBox="0 0 240 254" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="num1" d="M126 111V144H116.881V117.129H109V111H126Z" fill="transparent"/><path id="num2" d="M133 135.882V142H108.483V137.133L120.996 125.315C122.325 124.048 123.221 122.966 123.684 122.07C124.148 121.143 124.38 120.232 124.38 119.336C124.38 118.038 123.932 117.049 123.036 116.369C122.171 115.659 120.888 115.303 119.189 115.303C117.768 115.303 116.485 115.581 115.342 116.138C114.199 116.663 113.241 117.466 112.469 118.548L107 115.025C108.267 113.14 110.012 111.673 112.237 110.622C114.462 109.541 117.011 109 119.884 109C122.294 109 124.395 109.402 126.187 110.205C128.01 110.978 129.416 112.09 130.405 113.542C131.424 114.963 131.934 116.647 131.934 118.594C131.934 120.355 131.563 122.008 130.822 123.553C130.08 125.098 128.643 126.86 126.512 128.837L119.05 135.882H133Z" fill="transparent"/><path id="num3" d="M123.131 123.209C125.994 123.673 128.188 124.739 129.713 126.407C131.238 128.045 132 130.084 132 132.525C132 134.41 131.502 136.156 130.506 137.763C129.51 139.338 127.986 140.605 125.932 141.563C123.909 142.521 121.42 143 118.463 143C116.16 143 113.889 142.706 111.648 142.119C109.439 141.501 107.556 140.636 106 139.524L108.941 133.777C110.186 134.704 111.617 135.43 113.235 135.955C114.885 136.449 116.565 136.697 118.276 136.697C120.175 136.697 121.668 136.341 122.758 135.631C123.847 134.889 124.391 133.854 124.391 132.525C124.391 129.868 122.353 128.539 118.276 128.539H114.822V123.58L121.544 116.025H107.634V110H130.506V114.867L123.131 123.209Z" fill="transparent"/><path id="num4" d="M134 136.07H128.555V143H121.008V136.07H103V130.931L118.763 110H126.883L112.267 129.847H121.247V123.671H128.555V129.847H134V136.07Z" fill="transparent"/><path id="num5" d="M118.534 123.19C123.131 123.19 126.517 124.101 128.692 125.924C130.897 127.747 132 130.188 132 133.247C132 135.225 131.503 137.032 130.509 138.67C129.515 140.277 127.993 141.574 125.943 142.563C123.924 143.521 121.423 144 118.441 144C116.142 144 113.875 143.706 111.638 143.119C109.432 142.501 107.553 141.636 106 140.524L108.982 134.777C110.225 135.704 111.654 136.43 113.269 136.955C114.884 137.449 116.546 137.697 118.254 137.697C120.149 137.697 121.64 137.326 122.728 136.584C123.815 135.843 124.358 134.808 124.358 133.479C124.358 132.088 123.784 131.038 122.634 130.327C121.516 129.617 119.559 129.261 116.763 129.261H108.423L110.1 111H129.996V117.025H116.391L115.878 123.19H118.534Z" fill="transparent"/><path id="num6" d="M120.742 122.443C122.829 122.443 124.728 122.854 126.441 123.674C128.154 124.494 129.509 125.664 130.505 127.184C131.502 128.673 132 130.405 132 132.38C132 134.507 131.455 136.376 130.365 137.986C129.275 139.597 127.78 140.843 125.881 141.724C124.012 142.575 121.926 143 119.621 143C115.043 143 111.462 141.633 108.877 138.898C106.292 136.163 105 132.258 105 127.184C105 123.568 105.701 120.468 107.102 117.885C108.503 115.302 110.45 113.343 112.941 112.006C115.464 110.669 118.375 110 121.676 110C123.42 110 125.087 110.198 126.675 110.593C128.294 110.957 129.664 111.489 130.785 112.188L127.983 117.612C126.363 116.548 124.324 116.017 121.863 116.017C119.092 116.017 116.896 116.807 115.277 118.387C113.657 119.967 112.785 122.261 112.661 125.269C114.592 123.385 117.285 122.443 120.742 122.443ZM119.201 137.485C120.82 137.485 122.128 137.059 123.125 136.209C124.152 135.358 124.666 134.203 124.666 132.744C124.666 131.286 124.152 130.131 123.125 129.28C122.128 128.399 120.789 127.959 119.107 127.959C117.457 127.959 116.102 128.414 115.043 129.326C113.984 130.207 113.455 131.347 113.455 132.744C113.455 134.142 113.969 135.282 114.997 136.163C116.024 137.044 117.426 137.485 119.201 137.485Z" fill="transparent"/></svg>
                                </div>
                            </div>
                            <div class="work__title animation-element">
                                Запуск LED экрана
                            </div>
                            <div class="work__day animation-element">
                                <img src="/img/icon-clock.svg" alt="">
                                <span>1 день</span>
                            </div>
                            <div class="work__content animation-element">
                                Рассказываем, как загружать контент и
                                пользоваться управлением. Ваш LED экран работает,
                                посетители наслаждаются ярким
                                и чётким изображением
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section_clients">
    <div class="clients">
        <div class="container">
            <h2 class="section__title animation-element">Наши клиенты</h2>
        </div>
        <div class="container-endless">
            <div class="endless clients__list swiper-container" id="clientsList">
                <div class="clients__list__wrap swiper-wrapper">
                    <div class="clients__slide swiper-slide">
                        <div class="clients__card">
                            <a class="clients__link animation-element" href="">
                                <svg width="344" height="210" viewBox="0 0 344 210" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M86.7552 95H91.6152V112.04H102.145V116H86.7552V95ZM115.279 116.36C113.099 116.36 111.129 115.89 109.369 114.95C107.629 114.01 106.259 112.72 105.259 111.08C104.279 109.42 103.789 107.56 103.789 105.5C103.789 103.44 104.279 101.59 105.259 99.95C106.259 98.29 107.629 96.99 109.369 96.05C111.129 95.11 113.099 94.64 115.279 94.64C117.459 94.64 119.419 95.11 121.159 96.05C122.899 96.99 124.269 98.29 125.269 99.95C126.269 101.59 126.769 103.44 126.769 105.5C126.769 107.56 126.269 109.42 125.269 111.08C124.269 112.72 122.899 114.01 121.159 114.95C119.419 115.89 117.459 116.36 115.279 116.36ZM115.279 112.22C116.519 112.22 117.639 111.94 118.639 111.38C119.639 110.8 120.419 110 120.979 108.98C121.559 107.96 121.849 106.8 121.849 105.5C121.849 104.2 121.559 103.04 120.979 102.02C120.419 101 119.639 100.21 118.639 99.65C117.639 99.07 116.519 98.78 115.279 98.78C114.039 98.78 112.919 99.07 111.919 99.65C110.919 100.21 110.129 101 109.549 102.02C108.989 103.04 108.709 104.2 108.709 105.5C108.709 106.8 108.989 107.96 109.549 108.98C110.129 110 110.919 110.8 111.919 111.38C112.919 111.94 114.039 112.22 115.279 112.22ZM145.212 105.17H149.652V113.69C148.512 114.55 147.192 115.21 145.692 115.67C144.192 116.13 142.682 116.36 141.162 116.36C138.982 116.36 137.022 115.9 135.282 114.98C133.542 114.04 132.172 112.75 131.172 111.11C130.192 109.45 129.702 107.58 129.702 105.5C129.702 103.42 130.192 101.56 131.172 99.92C132.172 98.26 133.552 96.97 135.312 96.05C137.072 95.11 139.052 94.64 141.252 94.64C143.092 94.64 144.762 94.95 146.262 95.57C147.762 96.19 149.022 97.09 150.042 98.27L146.922 101.15C145.422 99.57 143.612 98.78 141.492 98.78C140.152 98.78 138.962 99.06 137.922 99.62C136.882 100.18 136.072 100.97 135.492 101.99C134.912 103.01 134.622 104.18 134.622 105.5C134.622 106.8 134.912 107.96 135.492 108.98C136.072 110 136.872 110.8 137.892 111.38C138.932 111.94 140.112 112.22 141.432 112.22C142.832 112.22 144.092 111.92 145.212 111.32V105.17ZM164.936 116.36C162.756 116.36 160.786 115.89 159.026 114.95C157.286 114.01 155.916 112.72 154.916 111.08C153.936 109.42 153.446 107.56 153.446 105.5C153.446 103.44 153.936 101.59 154.916 99.95C155.916 98.29 157.286 96.99 159.026 96.05C160.786 95.11 162.756 94.64 164.936 94.64C167.116 94.64 169.076 95.11 170.816 96.05C172.556 96.99 173.926 98.29 174.926 99.95C175.926 101.59 176.426 103.44 176.426 105.5C176.426 107.56 175.926 109.42 174.926 111.08C173.926 112.72 172.556 114.01 170.816 114.95C169.076 115.89 167.116 116.36 164.936 116.36ZM164.936 112.22C166.176 112.22 167.296 111.94 168.296 111.38C169.296 110.8 170.076 110 170.636 108.98C171.216 107.96 171.506 106.8 171.506 105.5C171.506 104.2 171.216 103.04 170.636 102.02C170.076 101 169.296 100.21 168.296 99.65C167.296 99.07 166.176 98.78 164.936 98.78C163.696 98.78 162.576 99.07 161.576 99.65C160.576 100.21 159.786 101 159.206 102.02C158.646 103.04 158.366 104.2 158.366 105.5C158.366 106.8 158.646 107.96 159.206 108.98C159.786 110 160.576 110.8 161.576 111.38C162.576 111.94 163.696 112.22 164.936 112.22ZM184.736 98.96H178.016V95H196.316V98.96H189.596V116H184.736V98.96ZM209.23 108.56V116H204.37V108.5L196.24 95H201.4L207.01 104.33L212.62 95H217.39L209.23 108.56ZM228.908 95C230.768 95 232.378 95.31 233.738 95.93C235.118 96.55 236.178 97.43 236.918 98.57C237.658 99.71 238.028 101.06 238.028 102.62C238.028 104.16 237.658 105.51 236.918 106.67C236.178 107.81 235.118 108.69 233.738 109.31C232.378 109.91 230.768 110.21 228.908 110.21H224.678V116H219.818V95H228.908ZM228.638 106.25C230.098 106.25 231.208 105.94 231.968 105.32C232.728 104.68 233.108 103.78 233.108 102.62C233.108 101.44 232.728 100.54 231.968 99.92C231.208 99.28 230.098 98.96 228.638 98.96H224.678V106.25H228.638ZM258.358 112.1V116H242.098V95H257.968V98.9H246.928V103.46H256.678V107.24H246.928V112.1H258.358Z" fill="#A3A3A3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="clients__slide swiper-slide">
                        <div class="clients__card">
                            <a class="clients__link animation-element" href="">
                                <svg width="344" height="210" viewBox="0 0 344 210" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M86.7552 95H91.6152V112.04H102.145V116H86.7552V95ZM115.279 116.36C113.099 116.36 111.129 115.89 109.369 114.95C107.629 114.01 106.259 112.72 105.259 111.08C104.279 109.42 103.789 107.56 103.789 105.5C103.789 103.44 104.279 101.59 105.259 99.95C106.259 98.29 107.629 96.99 109.369 96.05C111.129 95.11 113.099 94.64 115.279 94.64C117.459 94.64 119.419 95.11 121.159 96.05C122.899 96.99 124.269 98.29 125.269 99.95C126.269 101.59 126.769 103.44 126.769 105.5C126.769 107.56 126.269 109.42 125.269 111.08C124.269 112.72 122.899 114.01 121.159 114.95C119.419 115.89 117.459 116.36 115.279 116.36ZM115.279 112.22C116.519 112.22 117.639 111.94 118.639 111.38C119.639 110.8 120.419 110 120.979 108.98C121.559 107.96 121.849 106.8 121.849 105.5C121.849 104.2 121.559 103.04 120.979 102.02C120.419 101 119.639 100.21 118.639 99.65C117.639 99.07 116.519 98.78 115.279 98.78C114.039 98.78 112.919 99.07 111.919 99.65C110.919 100.21 110.129 101 109.549 102.02C108.989 103.04 108.709 104.2 108.709 105.5C108.709 106.8 108.989 107.96 109.549 108.98C110.129 110 110.919 110.8 111.919 111.38C112.919 111.94 114.039 112.22 115.279 112.22ZM145.212 105.17H149.652V113.69C148.512 114.55 147.192 115.21 145.692 115.67C144.192 116.13 142.682 116.36 141.162 116.36C138.982 116.36 137.022 115.9 135.282 114.98C133.542 114.04 132.172 112.75 131.172 111.11C130.192 109.45 129.702 107.58 129.702 105.5C129.702 103.42 130.192 101.56 131.172 99.92C132.172 98.26 133.552 96.97 135.312 96.05C137.072 95.11 139.052 94.64 141.252 94.64C143.092 94.64 144.762 94.95 146.262 95.57C147.762 96.19 149.022 97.09 150.042 98.27L146.922 101.15C145.422 99.57 143.612 98.78 141.492 98.78C140.152 98.78 138.962 99.06 137.922 99.62C136.882 100.18 136.072 100.97 135.492 101.99C134.912 103.01 134.622 104.18 134.622 105.5C134.622 106.8 134.912 107.96 135.492 108.98C136.072 110 136.872 110.8 137.892 111.38C138.932 111.94 140.112 112.22 141.432 112.22C142.832 112.22 144.092 111.92 145.212 111.32V105.17ZM164.936 116.36C162.756 116.36 160.786 115.89 159.026 114.95C157.286 114.01 155.916 112.72 154.916 111.08C153.936 109.42 153.446 107.56 153.446 105.5C153.446 103.44 153.936 101.59 154.916 99.95C155.916 98.29 157.286 96.99 159.026 96.05C160.786 95.11 162.756 94.64 164.936 94.64C167.116 94.64 169.076 95.11 170.816 96.05C172.556 96.99 173.926 98.29 174.926 99.95C175.926 101.59 176.426 103.44 176.426 105.5C176.426 107.56 175.926 109.42 174.926 111.08C173.926 112.72 172.556 114.01 170.816 114.95C169.076 115.89 167.116 116.36 164.936 116.36ZM164.936 112.22C166.176 112.22 167.296 111.94 168.296 111.38C169.296 110.8 170.076 110 170.636 108.98C171.216 107.96 171.506 106.8 171.506 105.5C171.506 104.2 171.216 103.04 170.636 102.02C170.076 101 169.296 100.21 168.296 99.65C167.296 99.07 166.176 98.78 164.936 98.78C163.696 98.78 162.576 99.07 161.576 99.65C160.576 100.21 159.786 101 159.206 102.02C158.646 103.04 158.366 104.2 158.366 105.5C158.366 106.8 158.646 107.96 159.206 108.98C159.786 110 160.576 110.8 161.576 111.38C162.576 111.94 163.696 112.22 164.936 112.22ZM184.736 98.96H178.016V95H196.316V98.96H189.596V116H184.736V98.96ZM209.23 108.56V116H204.37V108.5L196.24 95H201.4L207.01 104.33L212.62 95H217.39L209.23 108.56ZM228.908 95C230.768 95 232.378 95.31 233.738 95.93C235.118 96.55 236.178 97.43 236.918 98.57C237.658 99.71 238.028 101.06 238.028 102.62C238.028 104.16 237.658 105.51 236.918 106.67C236.178 107.81 235.118 108.69 233.738 109.31C232.378 109.91 230.768 110.21 228.908 110.21H224.678V116H219.818V95H228.908ZM228.638 106.25C230.098 106.25 231.208 105.94 231.968 105.32C232.728 104.68 233.108 103.78 233.108 102.62C233.108 101.44 232.728 100.54 231.968 99.92C231.208 99.28 230.098 98.96 228.638 98.96H224.678V106.25H228.638ZM258.358 112.1V116H242.098V95H257.968V98.9H246.928V103.46H256.678V107.24H246.928V112.1H258.358Z" fill="#A3A3A3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="clients__slide swiper-slide">
                        <div class="clients__card">
                            <a class="clients__link animation-element" href="">
                                <svg width="344" height="210" viewBox="0 0 344 210" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M86.7552 95H91.6152V112.04H102.145V116H86.7552V95ZM115.279 116.36C113.099 116.36 111.129 115.89 109.369 114.95C107.629 114.01 106.259 112.72 105.259 111.08C104.279 109.42 103.789 107.56 103.789 105.5C103.789 103.44 104.279 101.59 105.259 99.95C106.259 98.29 107.629 96.99 109.369 96.05C111.129 95.11 113.099 94.64 115.279 94.64C117.459 94.64 119.419 95.11 121.159 96.05C122.899 96.99 124.269 98.29 125.269 99.95C126.269 101.59 126.769 103.44 126.769 105.5C126.769 107.56 126.269 109.42 125.269 111.08C124.269 112.72 122.899 114.01 121.159 114.95C119.419 115.89 117.459 116.36 115.279 116.36ZM115.279 112.22C116.519 112.22 117.639 111.94 118.639 111.38C119.639 110.8 120.419 110 120.979 108.98C121.559 107.96 121.849 106.8 121.849 105.5C121.849 104.2 121.559 103.04 120.979 102.02C120.419 101 119.639 100.21 118.639 99.65C117.639 99.07 116.519 98.78 115.279 98.78C114.039 98.78 112.919 99.07 111.919 99.65C110.919 100.21 110.129 101 109.549 102.02C108.989 103.04 108.709 104.2 108.709 105.5C108.709 106.8 108.989 107.96 109.549 108.98C110.129 110 110.919 110.8 111.919 111.38C112.919 111.94 114.039 112.22 115.279 112.22ZM145.212 105.17H149.652V113.69C148.512 114.55 147.192 115.21 145.692 115.67C144.192 116.13 142.682 116.36 141.162 116.36C138.982 116.36 137.022 115.9 135.282 114.98C133.542 114.04 132.172 112.75 131.172 111.11C130.192 109.45 129.702 107.58 129.702 105.5C129.702 103.42 130.192 101.56 131.172 99.92C132.172 98.26 133.552 96.97 135.312 96.05C137.072 95.11 139.052 94.64 141.252 94.64C143.092 94.64 144.762 94.95 146.262 95.57C147.762 96.19 149.022 97.09 150.042 98.27L146.922 101.15C145.422 99.57 143.612 98.78 141.492 98.78C140.152 98.78 138.962 99.06 137.922 99.62C136.882 100.18 136.072 100.97 135.492 101.99C134.912 103.01 134.622 104.18 134.622 105.5C134.622 106.8 134.912 107.96 135.492 108.98C136.072 110 136.872 110.8 137.892 111.38C138.932 111.94 140.112 112.22 141.432 112.22C142.832 112.22 144.092 111.92 145.212 111.32V105.17ZM164.936 116.36C162.756 116.36 160.786 115.89 159.026 114.95C157.286 114.01 155.916 112.72 154.916 111.08C153.936 109.42 153.446 107.56 153.446 105.5C153.446 103.44 153.936 101.59 154.916 99.95C155.916 98.29 157.286 96.99 159.026 96.05C160.786 95.11 162.756 94.64 164.936 94.64C167.116 94.64 169.076 95.11 170.816 96.05C172.556 96.99 173.926 98.29 174.926 99.95C175.926 101.59 176.426 103.44 176.426 105.5C176.426 107.56 175.926 109.42 174.926 111.08C173.926 112.72 172.556 114.01 170.816 114.95C169.076 115.89 167.116 116.36 164.936 116.36ZM164.936 112.22C166.176 112.22 167.296 111.94 168.296 111.38C169.296 110.8 170.076 110 170.636 108.98C171.216 107.96 171.506 106.8 171.506 105.5C171.506 104.2 171.216 103.04 170.636 102.02C170.076 101 169.296 100.21 168.296 99.65C167.296 99.07 166.176 98.78 164.936 98.78C163.696 98.78 162.576 99.07 161.576 99.65C160.576 100.21 159.786 101 159.206 102.02C158.646 103.04 158.366 104.2 158.366 105.5C158.366 106.8 158.646 107.96 159.206 108.98C159.786 110 160.576 110.8 161.576 111.38C162.576 111.94 163.696 112.22 164.936 112.22ZM184.736 98.96H178.016V95H196.316V98.96H189.596V116H184.736V98.96ZM209.23 108.56V116H204.37V108.5L196.24 95H201.4L207.01 104.33L212.62 95H217.39L209.23 108.56ZM228.908 95C230.768 95 232.378 95.31 233.738 95.93C235.118 96.55 236.178 97.43 236.918 98.57C237.658 99.71 238.028 101.06 238.028 102.62C238.028 104.16 237.658 105.51 236.918 106.67C236.178 107.81 235.118 108.69 233.738 109.31C232.378 109.91 230.768 110.21 228.908 110.21H224.678V116H219.818V95H228.908ZM228.638 106.25C230.098 106.25 231.208 105.94 231.968 105.32C232.728 104.68 233.108 103.78 233.108 102.62C233.108 101.44 232.728 100.54 231.968 99.92C231.208 99.28 230.098 98.96 228.638 98.96H224.678V106.25H228.638ZM258.358 112.1V116H242.098V95H257.968V98.9H246.928V103.46H256.678V107.24H246.928V112.1H258.358Z" fill="#A3A3A3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="clients__slide swiper-slide">
                        <div class="clients__card">
                            <a class="clients__link animation-element" href="">
                                <svg width="344" height="210" viewBox="0 0 344 210" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M86.7552 95H91.6152V112.04H102.145V116H86.7552V95ZM115.279 116.36C113.099 116.36 111.129 115.89 109.369 114.95C107.629 114.01 106.259 112.72 105.259 111.08C104.279 109.42 103.789 107.56 103.789 105.5C103.789 103.44 104.279 101.59 105.259 99.95C106.259 98.29 107.629 96.99 109.369 96.05C111.129 95.11 113.099 94.64 115.279 94.64C117.459 94.64 119.419 95.11 121.159 96.05C122.899 96.99 124.269 98.29 125.269 99.95C126.269 101.59 126.769 103.44 126.769 105.5C126.769 107.56 126.269 109.42 125.269 111.08C124.269 112.72 122.899 114.01 121.159 114.95C119.419 115.89 117.459 116.36 115.279 116.36ZM115.279 112.22C116.519 112.22 117.639 111.94 118.639 111.38C119.639 110.8 120.419 110 120.979 108.98C121.559 107.96 121.849 106.8 121.849 105.5C121.849 104.2 121.559 103.04 120.979 102.02C120.419 101 119.639 100.21 118.639 99.65C117.639 99.07 116.519 98.78 115.279 98.78C114.039 98.78 112.919 99.07 111.919 99.65C110.919 100.21 110.129 101 109.549 102.02C108.989 103.04 108.709 104.2 108.709 105.5C108.709 106.8 108.989 107.96 109.549 108.98C110.129 110 110.919 110.8 111.919 111.38C112.919 111.94 114.039 112.22 115.279 112.22ZM145.212 105.17H149.652V113.69C148.512 114.55 147.192 115.21 145.692 115.67C144.192 116.13 142.682 116.36 141.162 116.36C138.982 116.36 137.022 115.9 135.282 114.98C133.542 114.04 132.172 112.75 131.172 111.11C130.192 109.45 129.702 107.58 129.702 105.5C129.702 103.42 130.192 101.56 131.172 99.92C132.172 98.26 133.552 96.97 135.312 96.05C137.072 95.11 139.052 94.64 141.252 94.64C143.092 94.64 144.762 94.95 146.262 95.57C147.762 96.19 149.022 97.09 150.042 98.27L146.922 101.15C145.422 99.57 143.612 98.78 141.492 98.78C140.152 98.78 138.962 99.06 137.922 99.62C136.882 100.18 136.072 100.97 135.492 101.99C134.912 103.01 134.622 104.18 134.622 105.5C134.622 106.8 134.912 107.96 135.492 108.98C136.072 110 136.872 110.8 137.892 111.38C138.932 111.94 140.112 112.22 141.432 112.22C142.832 112.22 144.092 111.92 145.212 111.32V105.17ZM164.936 116.36C162.756 116.36 160.786 115.89 159.026 114.95C157.286 114.01 155.916 112.72 154.916 111.08C153.936 109.42 153.446 107.56 153.446 105.5C153.446 103.44 153.936 101.59 154.916 99.95C155.916 98.29 157.286 96.99 159.026 96.05C160.786 95.11 162.756 94.64 164.936 94.64C167.116 94.64 169.076 95.11 170.816 96.05C172.556 96.99 173.926 98.29 174.926 99.95C175.926 101.59 176.426 103.44 176.426 105.5C176.426 107.56 175.926 109.42 174.926 111.08C173.926 112.72 172.556 114.01 170.816 114.95C169.076 115.89 167.116 116.36 164.936 116.36ZM164.936 112.22C166.176 112.22 167.296 111.94 168.296 111.38C169.296 110.8 170.076 110 170.636 108.98C171.216 107.96 171.506 106.8 171.506 105.5C171.506 104.2 171.216 103.04 170.636 102.02C170.076 101 169.296 100.21 168.296 99.65C167.296 99.07 166.176 98.78 164.936 98.78C163.696 98.78 162.576 99.07 161.576 99.65C160.576 100.21 159.786 101 159.206 102.02C158.646 103.04 158.366 104.2 158.366 105.5C158.366 106.8 158.646 107.96 159.206 108.98C159.786 110 160.576 110.8 161.576 111.38C162.576 111.94 163.696 112.22 164.936 112.22ZM184.736 98.96H178.016V95H196.316V98.96H189.596V116H184.736V98.96ZM209.23 108.56V116H204.37V108.5L196.24 95H201.4L207.01 104.33L212.62 95H217.39L209.23 108.56ZM228.908 95C230.768 95 232.378 95.31 233.738 95.93C235.118 96.55 236.178 97.43 236.918 98.57C237.658 99.71 238.028 101.06 238.028 102.62C238.028 104.16 237.658 105.51 236.918 106.67C236.178 107.81 235.118 108.69 233.738 109.31C232.378 109.91 230.768 110.21 228.908 110.21H224.678V116H219.818V95H228.908ZM228.638 106.25C230.098 106.25 231.208 105.94 231.968 105.32C232.728 104.68 233.108 103.78 233.108 102.62C233.108 101.44 232.728 100.54 231.968 99.92C231.208 99.28 230.098 98.96 228.638 98.96H224.678V106.25H228.638ZM258.358 112.1V116H242.098V95H257.968V98.9H246.928V103.46H256.678V107.24H246.928V112.1H258.358Z" fill="#A3A3A3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="clients__slide swiper-slide">
                        <div class="clients__card">
                            <a class="clients__link animation-element" href="">
                                <svg width="344" height="210" viewBox="0 0 344 210" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M86.7552 95H91.6152V112.04H102.145V116H86.7552V95ZM115.279 116.36C113.099 116.36 111.129 115.89 109.369 114.95C107.629 114.01 106.259 112.72 105.259 111.08C104.279 109.42 103.789 107.56 103.789 105.5C103.789 103.44 104.279 101.59 105.259 99.95C106.259 98.29 107.629 96.99 109.369 96.05C111.129 95.11 113.099 94.64 115.279 94.64C117.459 94.64 119.419 95.11 121.159 96.05C122.899 96.99 124.269 98.29 125.269 99.95C126.269 101.59 126.769 103.44 126.769 105.5C126.769 107.56 126.269 109.42 125.269 111.08C124.269 112.72 122.899 114.01 121.159 114.95C119.419 115.89 117.459 116.36 115.279 116.36ZM115.279 112.22C116.519 112.22 117.639 111.94 118.639 111.38C119.639 110.8 120.419 110 120.979 108.98C121.559 107.96 121.849 106.8 121.849 105.5C121.849 104.2 121.559 103.04 120.979 102.02C120.419 101 119.639 100.21 118.639 99.65C117.639 99.07 116.519 98.78 115.279 98.78C114.039 98.78 112.919 99.07 111.919 99.65C110.919 100.21 110.129 101 109.549 102.02C108.989 103.04 108.709 104.2 108.709 105.5C108.709 106.8 108.989 107.96 109.549 108.98C110.129 110 110.919 110.8 111.919 111.38C112.919 111.94 114.039 112.22 115.279 112.22ZM145.212 105.17H149.652V113.69C148.512 114.55 147.192 115.21 145.692 115.67C144.192 116.13 142.682 116.36 141.162 116.36C138.982 116.36 137.022 115.9 135.282 114.98C133.542 114.04 132.172 112.75 131.172 111.11C130.192 109.45 129.702 107.58 129.702 105.5C129.702 103.42 130.192 101.56 131.172 99.92C132.172 98.26 133.552 96.97 135.312 96.05C137.072 95.11 139.052 94.64 141.252 94.64C143.092 94.64 144.762 94.95 146.262 95.57C147.762 96.19 149.022 97.09 150.042 98.27L146.922 101.15C145.422 99.57 143.612 98.78 141.492 98.78C140.152 98.78 138.962 99.06 137.922 99.62C136.882 100.18 136.072 100.97 135.492 101.99C134.912 103.01 134.622 104.18 134.622 105.5C134.622 106.8 134.912 107.96 135.492 108.98C136.072 110 136.872 110.8 137.892 111.38C138.932 111.94 140.112 112.22 141.432 112.22C142.832 112.22 144.092 111.92 145.212 111.32V105.17ZM164.936 116.36C162.756 116.36 160.786 115.89 159.026 114.95C157.286 114.01 155.916 112.72 154.916 111.08C153.936 109.42 153.446 107.56 153.446 105.5C153.446 103.44 153.936 101.59 154.916 99.95C155.916 98.29 157.286 96.99 159.026 96.05C160.786 95.11 162.756 94.64 164.936 94.64C167.116 94.64 169.076 95.11 170.816 96.05C172.556 96.99 173.926 98.29 174.926 99.95C175.926 101.59 176.426 103.44 176.426 105.5C176.426 107.56 175.926 109.42 174.926 111.08C173.926 112.72 172.556 114.01 170.816 114.95C169.076 115.89 167.116 116.36 164.936 116.36ZM164.936 112.22C166.176 112.22 167.296 111.94 168.296 111.38C169.296 110.8 170.076 110 170.636 108.98C171.216 107.96 171.506 106.8 171.506 105.5C171.506 104.2 171.216 103.04 170.636 102.02C170.076 101 169.296 100.21 168.296 99.65C167.296 99.07 166.176 98.78 164.936 98.78C163.696 98.78 162.576 99.07 161.576 99.65C160.576 100.21 159.786 101 159.206 102.02C158.646 103.04 158.366 104.2 158.366 105.5C158.366 106.8 158.646 107.96 159.206 108.98C159.786 110 160.576 110.8 161.576 111.38C162.576 111.94 163.696 112.22 164.936 112.22ZM184.736 98.96H178.016V95H196.316V98.96H189.596V116H184.736V98.96ZM209.23 108.56V116H204.37V108.5L196.24 95H201.4L207.01 104.33L212.62 95H217.39L209.23 108.56ZM228.908 95C230.768 95 232.378 95.31 233.738 95.93C235.118 96.55 236.178 97.43 236.918 98.57C237.658 99.71 238.028 101.06 238.028 102.62C238.028 104.16 237.658 105.51 236.918 106.67C236.178 107.81 235.118 108.69 233.738 109.31C232.378 109.91 230.768 110.21 228.908 110.21H224.678V116H219.818V95H228.908ZM228.638 106.25C230.098 106.25 231.208 105.94 231.968 105.32C232.728 104.68 233.108 103.78 233.108 102.62C233.108 101.44 232.728 100.54 231.968 99.92C231.208 99.28 230.098 98.96 228.638 98.96H224.678V106.25H228.638ZM258.358 112.1V116H242.098V95H257.968V98.9H246.928V103.46H256.678V107.24H246.928V112.1H258.358Z" fill="#A3A3A3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="clients__slide swiper-slide">
                        <div class="clients__card">
                            <a class="clients__link" href="">
                                <svg width="344" height="210" viewBox="0 0 344 210" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M86.7552 95H91.6152V112.04H102.145V116H86.7552V95ZM115.279 116.36C113.099 116.36 111.129 115.89 109.369 114.95C107.629 114.01 106.259 112.72 105.259 111.08C104.279 109.42 103.789 107.56 103.789 105.5C103.789 103.44 104.279 101.59 105.259 99.95C106.259 98.29 107.629 96.99 109.369 96.05C111.129 95.11 113.099 94.64 115.279 94.64C117.459 94.64 119.419 95.11 121.159 96.05C122.899 96.99 124.269 98.29 125.269 99.95C126.269 101.59 126.769 103.44 126.769 105.5C126.769 107.56 126.269 109.42 125.269 111.08C124.269 112.72 122.899 114.01 121.159 114.95C119.419 115.89 117.459 116.36 115.279 116.36ZM115.279 112.22C116.519 112.22 117.639 111.94 118.639 111.38C119.639 110.8 120.419 110 120.979 108.98C121.559 107.96 121.849 106.8 121.849 105.5C121.849 104.2 121.559 103.04 120.979 102.02C120.419 101 119.639 100.21 118.639 99.65C117.639 99.07 116.519 98.78 115.279 98.78C114.039 98.78 112.919 99.07 111.919 99.65C110.919 100.21 110.129 101 109.549 102.02C108.989 103.04 108.709 104.2 108.709 105.5C108.709 106.8 108.989 107.96 109.549 108.98C110.129 110 110.919 110.8 111.919 111.38C112.919 111.94 114.039 112.22 115.279 112.22ZM145.212 105.17H149.652V113.69C148.512 114.55 147.192 115.21 145.692 115.67C144.192 116.13 142.682 116.36 141.162 116.36C138.982 116.36 137.022 115.9 135.282 114.98C133.542 114.04 132.172 112.75 131.172 111.11C130.192 109.45 129.702 107.58 129.702 105.5C129.702 103.42 130.192 101.56 131.172 99.92C132.172 98.26 133.552 96.97 135.312 96.05C137.072 95.11 139.052 94.64 141.252 94.64C143.092 94.64 144.762 94.95 146.262 95.57C147.762 96.19 149.022 97.09 150.042 98.27L146.922 101.15C145.422 99.57 143.612 98.78 141.492 98.78C140.152 98.78 138.962 99.06 137.922 99.62C136.882 100.18 136.072 100.97 135.492 101.99C134.912 103.01 134.622 104.18 134.622 105.5C134.622 106.8 134.912 107.96 135.492 108.98C136.072 110 136.872 110.8 137.892 111.38C138.932 111.94 140.112 112.22 141.432 112.22C142.832 112.22 144.092 111.92 145.212 111.32V105.17ZM164.936 116.36C162.756 116.36 160.786 115.89 159.026 114.95C157.286 114.01 155.916 112.72 154.916 111.08C153.936 109.42 153.446 107.56 153.446 105.5C153.446 103.44 153.936 101.59 154.916 99.95C155.916 98.29 157.286 96.99 159.026 96.05C160.786 95.11 162.756 94.64 164.936 94.64C167.116 94.64 169.076 95.11 170.816 96.05C172.556 96.99 173.926 98.29 174.926 99.95C175.926 101.59 176.426 103.44 176.426 105.5C176.426 107.56 175.926 109.42 174.926 111.08C173.926 112.72 172.556 114.01 170.816 114.95C169.076 115.89 167.116 116.36 164.936 116.36ZM164.936 112.22C166.176 112.22 167.296 111.94 168.296 111.38C169.296 110.8 170.076 110 170.636 108.98C171.216 107.96 171.506 106.8 171.506 105.5C171.506 104.2 171.216 103.04 170.636 102.02C170.076 101 169.296 100.21 168.296 99.65C167.296 99.07 166.176 98.78 164.936 98.78C163.696 98.78 162.576 99.07 161.576 99.65C160.576 100.21 159.786 101 159.206 102.02C158.646 103.04 158.366 104.2 158.366 105.5C158.366 106.8 158.646 107.96 159.206 108.98C159.786 110 160.576 110.8 161.576 111.38C162.576 111.94 163.696 112.22 164.936 112.22ZM184.736 98.96H178.016V95H196.316V98.96H189.596V116H184.736V98.96ZM209.23 108.56V116H204.37V108.5L196.24 95H201.4L207.01 104.33L212.62 95H217.39L209.23 108.56ZM228.908 95C230.768 95 232.378 95.31 233.738 95.93C235.118 96.55 236.178 97.43 236.918 98.57C237.658 99.71 238.028 101.06 238.028 102.62C238.028 104.16 237.658 105.51 236.918 106.67C236.178 107.81 235.118 108.69 233.738 109.31C232.378 109.91 230.768 110.21 228.908 110.21H224.678V116H219.818V95H228.908ZM228.638 106.25C230.098 106.25 231.208 105.94 231.968 105.32C232.728 104.68 233.108 103.78 233.108 102.62C233.108 101.44 232.728 100.54 231.968 99.92C231.208 99.28 230.098 98.96 228.638 98.96H224.678V106.25H228.638ZM258.358 112.1V116H242.098V95H257.968V98.9H246.928V103.46H256.678V107.24H246.928V112.1H258.358Z" fill="#A3A3A3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="clients__slide swiper-slide">
                        <div class="clients__card">
                            <a class="clients__link" href="">
                                <svg width="344" height="210" viewBox="0 0 344 210" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M86.7552 95H91.6152V112.04H102.145V116H86.7552V95ZM115.279 116.36C113.099 116.36 111.129 115.89 109.369 114.95C107.629 114.01 106.259 112.72 105.259 111.08C104.279 109.42 103.789 107.56 103.789 105.5C103.789 103.44 104.279 101.59 105.259 99.95C106.259 98.29 107.629 96.99 109.369 96.05C111.129 95.11 113.099 94.64 115.279 94.64C117.459 94.64 119.419 95.11 121.159 96.05C122.899 96.99 124.269 98.29 125.269 99.95C126.269 101.59 126.769 103.44 126.769 105.5C126.769 107.56 126.269 109.42 125.269 111.08C124.269 112.72 122.899 114.01 121.159 114.95C119.419 115.89 117.459 116.36 115.279 116.36ZM115.279 112.22C116.519 112.22 117.639 111.94 118.639 111.38C119.639 110.8 120.419 110 120.979 108.98C121.559 107.96 121.849 106.8 121.849 105.5C121.849 104.2 121.559 103.04 120.979 102.02C120.419 101 119.639 100.21 118.639 99.65C117.639 99.07 116.519 98.78 115.279 98.78C114.039 98.78 112.919 99.07 111.919 99.65C110.919 100.21 110.129 101 109.549 102.02C108.989 103.04 108.709 104.2 108.709 105.5C108.709 106.8 108.989 107.96 109.549 108.98C110.129 110 110.919 110.8 111.919 111.38C112.919 111.94 114.039 112.22 115.279 112.22ZM145.212 105.17H149.652V113.69C148.512 114.55 147.192 115.21 145.692 115.67C144.192 116.13 142.682 116.36 141.162 116.36C138.982 116.36 137.022 115.9 135.282 114.98C133.542 114.04 132.172 112.75 131.172 111.11C130.192 109.45 129.702 107.58 129.702 105.5C129.702 103.42 130.192 101.56 131.172 99.92C132.172 98.26 133.552 96.97 135.312 96.05C137.072 95.11 139.052 94.64 141.252 94.64C143.092 94.64 144.762 94.95 146.262 95.57C147.762 96.19 149.022 97.09 150.042 98.27L146.922 101.15C145.422 99.57 143.612 98.78 141.492 98.78C140.152 98.78 138.962 99.06 137.922 99.62C136.882 100.18 136.072 100.97 135.492 101.99C134.912 103.01 134.622 104.18 134.622 105.5C134.622 106.8 134.912 107.96 135.492 108.98C136.072 110 136.872 110.8 137.892 111.38C138.932 111.94 140.112 112.22 141.432 112.22C142.832 112.22 144.092 111.92 145.212 111.32V105.17ZM164.936 116.36C162.756 116.36 160.786 115.89 159.026 114.95C157.286 114.01 155.916 112.72 154.916 111.08C153.936 109.42 153.446 107.56 153.446 105.5C153.446 103.44 153.936 101.59 154.916 99.95C155.916 98.29 157.286 96.99 159.026 96.05C160.786 95.11 162.756 94.64 164.936 94.64C167.116 94.64 169.076 95.11 170.816 96.05C172.556 96.99 173.926 98.29 174.926 99.95C175.926 101.59 176.426 103.44 176.426 105.5C176.426 107.56 175.926 109.42 174.926 111.08C173.926 112.72 172.556 114.01 170.816 114.95C169.076 115.89 167.116 116.36 164.936 116.36ZM164.936 112.22C166.176 112.22 167.296 111.94 168.296 111.38C169.296 110.8 170.076 110 170.636 108.98C171.216 107.96 171.506 106.8 171.506 105.5C171.506 104.2 171.216 103.04 170.636 102.02C170.076 101 169.296 100.21 168.296 99.65C167.296 99.07 166.176 98.78 164.936 98.78C163.696 98.78 162.576 99.07 161.576 99.65C160.576 100.21 159.786 101 159.206 102.02C158.646 103.04 158.366 104.2 158.366 105.5C158.366 106.8 158.646 107.96 159.206 108.98C159.786 110 160.576 110.8 161.576 111.38C162.576 111.94 163.696 112.22 164.936 112.22ZM184.736 98.96H178.016V95H196.316V98.96H189.596V116H184.736V98.96ZM209.23 108.56V116H204.37V108.5L196.24 95H201.4L207.01 104.33L212.62 95H217.39L209.23 108.56ZM228.908 95C230.768 95 232.378 95.31 233.738 95.93C235.118 96.55 236.178 97.43 236.918 98.57C237.658 99.71 238.028 101.06 238.028 102.62C238.028 104.16 237.658 105.51 236.918 106.67C236.178 107.81 235.118 108.69 233.738 109.31C232.378 109.91 230.768 110.21 228.908 110.21H224.678V116H219.818V95H228.908ZM228.638 106.25C230.098 106.25 231.208 105.94 231.968 105.32C232.728 104.68 233.108 103.78 233.108 102.62C233.108 101.44 232.728 100.54 231.968 99.92C231.208 99.28 230.098 98.96 228.638 98.96H224.678V106.25H228.638ZM258.358 112.1V116H242.098V95H257.968V98.9H246.928V103.46H256.678V107.24H246.928V112.1H258.358Z" fill="#A3A3A3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="clients__slide swiper-slide">
                        <div class="clients__card">
                            <a class="clients__link" href="">
                                <svg width="344" height="210" viewBox="0 0 344 210" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M86.7552 95H91.6152V112.04H102.145V116H86.7552V95ZM115.279 116.36C113.099 116.36 111.129 115.89 109.369 114.95C107.629 114.01 106.259 112.72 105.259 111.08C104.279 109.42 103.789 107.56 103.789 105.5C103.789 103.44 104.279 101.59 105.259 99.95C106.259 98.29 107.629 96.99 109.369 96.05C111.129 95.11 113.099 94.64 115.279 94.64C117.459 94.64 119.419 95.11 121.159 96.05C122.899 96.99 124.269 98.29 125.269 99.95C126.269 101.59 126.769 103.44 126.769 105.5C126.769 107.56 126.269 109.42 125.269 111.08C124.269 112.72 122.899 114.01 121.159 114.95C119.419 115.89 117.459 116.36 115.279 116.36ZM115.279 112.22C116.519 112.22 117.639 111.94 118.639 111.38C119.639 110.8 120.419 110 120.979 108.98C121.559 107.96 121.849 106.8 121.849 105.5C121.849 104.2 121.559 103.04 120.979 102.02C120.419 101 119.639 100.21 118.639 99.65C117.639 99.07 116.519 98.78 115.279 98.78C114.039 98.78 112.919 99.07 111.919 99.65C110.919 100.21 110.129 101 109.549 102.02C108.989 103.04 108.709 104.2 108.709 105.5C108.709 106.8 108.989 107.96 109.549 108.98C110.129 110 110.919 110.8 111.919 111.38C112.919 111.94 114.039 112.22 115.279 112.22ZM145.212 105.17H149.652V113.69C148.512 114.55 147.192 115.21 145.692 115.67C144.192 116.13 142.682 116.36 141.162 116.36C138.982 116.36 137.022 115.9 135.282 114.98C133.542 114.04 132.172 112.75 131.172 111.11C130.192 109.45 129.702 107.58 129.702 105.5C129.702 103.42 130.192 101.56 131.172 99.92C132.172 98.26 133.552 96.97 135.312 96.05C137.072 95.11 139.052 94.64 141.252 94.64C143.092 94.64 144.762 94.95 146.262 95.57C147.762 96.19 149.022 97.09 150.042 98.27L146.922 101.15C145.422 99.57 143.612 98.78 141.492 98.78C140.152 98.78 138.962 99.06 137.922 99.62C136.882 100.18 136.072 100.97 135.492 101.99C134.912 103.01 134.622 104.18 134.622 105.5C134.622 106.8 134.912 107.96 135.492 108.98C136.072 110 136.872 110.8 137.892 111.38C138.932 111.94 140.112 112.22 141.432 112.22C142.832 112.22 144.092 111.92 145.212 111.32V105.17ZM164.936 116.36C162.756 116.36 160.786 115.89 159.026 114.95C157.286 114.01 155.916 112.72 154.916 111.08C153.936 109.42 153.446 107.56 153.446 105.5C153.446 103.44 153.936 101.59 154.916 99.95C155.916 98.29 157.286 96.99 159.026 96.05C160.786 95.11 162.756 94.64 164.936 94.64C167.116 94.64 169.076 95.11 170.816 96.05C172.556 96.99 173.926 98.29 174.926 99.95C175.926 101.59 176.426 103.44 176.426 105.5C176.426 107.56 175.926 109.42 174.926 111.08C173.926 112.72 172.556 114.01 170.816 114.95C169.076 115.89 167.116 116.36 164.936 116.36ZM164.936 112.22C166.176 112.22 167.296 111.94 168.296 111.38C169.296 110.8 170.076 110 170.636 108.98C171.216 107.96 171.506 106.8 171.506 105.5C171.506 104.2 171.216 103.04 170.636 102.02C170.076 101 169.296 100.21 168.296 99.65C167.296 99.07 166.176 98.78 164.936 98.78C163.696 98.78 162.576 99.07 161.576 99.65C160.576 100.21 159.786 101 159.206 102.02C158.646 103.04 158.366 104.2 158.366 105.5C158.366 106.8 158.646 107.96 159.206 108.98C159.786 110 160.576 110.8 161.576 111.38C162.576 111.94 163.696 112.22 164.936 112.22ZM184.736 98.96H178.016V95H196.316V98.96H189.596V116H184.736V98.96ZM209.23 108.56V116H204.37V108.5L196.24 95H201.4L207.01 104.33L212.62 95H217.39L209.23 108.56ZM228.908 95C230.768 95 232.378 95.31 233.738 95.93C235.118 96.55 236.178 97.43 236.918 98.57C237.658 99.71 238.028 101.06 238.028 102.62C238.028 104.16 237.658 105.51 236.918 106.67C236.178 107.81 235.118 108.69 233.738 109.31C232.378 109.91 230.768 110.21 228.908 110.21H224.678V116H219.818V95H228.908ZM228.638 106.25C230.098 106.25 231.208 105.94 231.968 105.32C232.728 104.68 233.108 103.78 233.108 102.62C233.108 101.44 232.728 100.54 231.968 99.92C231.208 99.28 230.098 98.96 228.638 98.96H224.678V106.25H228.638ZM258.358 112.1V116H242.098V95H257.968V98.9H246.928V103.46H256.678V107.24H246.928V112.1H258.358Z" fill="#A3A3A3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev" id="btnClientsSliderPrev">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next" id="btnClientsSliderNext">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
    </div>
</section>
<section class="section section_feedback">
    <div class="feedback__background"></div>
    <div class="feedback">
        <div class="container">
            <h2 class="section__title animation-element">О нас говорят</h2>
        </div>
        <div class="container-endless">
            <div class="endless feedback__list swiper-container" id="feedbackList">
                <div class="feedback__list__wrap swiper-wrapper">
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card animation-element">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>всеволодов</span>
                                <span>всеволод</span>
                                <span>всеволодович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения АО “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card animation-element">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>иванов</span>
                                <span>иван</span>
                                <span>иванович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения
                                АО “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card animation-element">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>всеволодов</span>
                                <span>всеволод</span>
                                <span>всеволодович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения
                                АО “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>иванов</span>
                                <span>иван</span>
                                <span>иванович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения АО
                                “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>всеволодов</span>
                                <span>всеволод</span>
                                <span>всеволодович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения АО
                                “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                    <div class="feedback__slide swiper-slide">
                        <div class="feedback__card">
                            <div class="feedback__pic" style="background-image: url('/img/placeholder-img.jpg')">
                                <div class="btn btn_play"></div>
                            </div>
                            <div class="feedback__quotes"></div>
                            <div class="feedback__line"></div>
                            <div class="feedback__msg">
                                Собрали и доставили экран за три дня,
                                не верил что такое
                                возможно! Экран потрясающий!
                            </div>
                            <div class="feedback__name">
                                <span>иванов</span>
                                <span>иван</span>
                                <span>иванович</span>
                            </div>
                            <div class="feedback__job">
                                Руководитель отдела обеспечения АО
                                “Развлекательный центр
                                всероссийского цетра развлечений”
                            </div>
                            <div class="feedback__socials">
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.378 1.25H5.625C3.20897 1.25 1.25 3.20897 1.25 5.625V12.378C1.25 14.7925 3.20747 16.75 5.622 16.75H12.378C14.7924 16.75 16.75 14.7927 16.75 12.3787V5.622C16.75 3.20747 14.7925 1.25 12.378 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.32495 9.6748H12.375" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.375 6.2998H11.6663C10.5668 6.2998 9.67505 7.19155 9.67505 8.29105V8.9998V15.7498" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                                <a class="social-icon" href="">
                                    <div class="social-icon__pic">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.3787 1.25H5.622C3.20657 1.25 1.25 3.20761 1.25 5.622V12.378C1.25 14.7934 3.20761 16.75 5.622 16.75H12.378C14.7933 16.75 16.75 14.7925 16.75 12.3787V5.622C16.75 3.20672 14.7925 1.25 12.3787 1.25Z" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.7118 5.03496C12.5723 5.03571 12.459 5.14896 12.459 5.28846C12.459 5.42796 12.573 5.54121 12.7125 5.54121C12.852 5.54121 12.9653 5.42796 12.9653 5.28846C12.966 5.14821 12.852 5.03496 12.7118 5.03496" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.9092 7.09062C11.9637 8.14504 11.9637 9.85458 10.9092 10.909C9.85482 11.9634 8.14528 11.9634 7.09086 10.909C6.03644 9.85458 6.03644 8.14504 7.09086 7.09062C8.14528 6.0362 9.85482 6.0362 10.9092 7.09062" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_prev" id="btnFeedbackPrev">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="btn btn_icon-outlined not-focused slider-controller slider-controller_next" id="btnFeedbackNext">
                <svg width="14" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.999998 25L13 13L1 1" stroke="#80758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
    </div>
</section>
<section class="section section_callback">
    <div class="callback">
        <div class="container">
            <h2 class="section__title animation-element">
                <span class="title">Связаться с нами</span>
                <span class="section__link animation-element">
                    <a class="revers" href="">
                        Открыть контакты
                        <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                        </a>
                </span>
            </h2>
            <div class="callback__title animation-element">
                Заинтересовались светодиодным оборудованием?
            </div>
            <div class="callback__subtitle animation-element">
                Укажите ваш мобильный номер телефона и мы
                перезвоним в течение 5 минут
            </div>
        </div>
        <div class="callback__background-pic animation-element">
            <img src="/img/callback-pic.png" alt="">
        </div>
        <div class="container-endless">
            <div class="endless">
                <form class="callback__form animation-element" id="callbackForm" action="/" method="POST" data-target="#calbackModal">
                    <div class="callback__data">
                        <!-- Для валидного значения меняем класс у controller на valid-->
                        <div class="controller controller__input">
                            <label class="label label__icon">
                                <span class="icon">
                                    <img src="/img/icon-phone.svg" alt="">
                                </span>
                                <input id="callbackPhone" type="text" placeholder="+7 900 000 00 00" name="phone">
                            </label>
                            <div class="validator validator__cross">
                                <img class="valid" src="/img/icon-validator-cross-valid.svg" alt="">
                                <img class="invalid" src="/img/icon-validator-cross-invalid.svg" alt="">
                            </div>
                            <div class="validator validator__check">
                                <img class="valid" src="/img/icon-validator-check-valid.svg" alt="">
                                <img class="invalid" src="/img/icon-validator-check-invalid.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="callback__actions">
                        <button class="btn btn_primary" type="submit">
                            Отправить номер
                        </button>
                        <span class="privacy">
                            Нажимая на кнопку “Отправить номер”, я даю согласие на
                            <a class="revers" href="" target="_blank">
                                обработку моих персональных данных
                            </a>
                        </span>
                    </div>
                    <span class="send-mail">
                        Или напишите нам
                        <a href="mailto:info@ekranika.ru">info@ekranika.ru</a>
                    </span>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="section section_faq">
    <div class="faq">
        <div class="container">
            <h2 class="section__title animation-element">
                <span class="title">Отвечаем на вопросы</span>
                <span class="section__link animation-element">
                    <a class="revers" href="">
                        База знаний
                        <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.9"><path d="M3.90002 13.3572L9.10002 8.50004L3.90002 3.64289" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
                    </a>
                </span>
            </h2>
            <!-- При инициализации первым 5 элементам добавить класссы .display и .show-->
            <div class="faq__list animation-element">
                <div class="faq__item display show">
                    <div class="faq__caption">
                        Что нужно знать для подбора экрана?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Основные критерии, которые необходимо
                                учитывать перед арендой или приобретением
                                светодиодного экрана:
                            </p>
                            <ul>
                                <li>
                                    <span>Яркость</span>
                                    <p>Попадание прямых солнечных лучей на экран может вызвать эффект засветки
                                        изображения. Для исключения подобных явлений уличные LED-панели должны
                                        иметь яркость не менее 5000 Нит. Внутри помещений достаточно 800 Нит</p>
                                </li>
                                <li>
                                    <span>Цветопередача</span>
                                    <p>На сегодняшний день применяются две основные группы светодиодных экранов:
                                        монохромные, с одноцветным выводом изображения (в большинстве случаев
                                        применяются для передачи текстовой и графической информации) и
                                        полноцветные, передающие всю цветовую гамму</p>
                                </li>
                                <li>
                                    <span>Разрешение и оптимальное расстояние просмотра</span>
                                    <p>Плотность пикселей непосредственно влияет на качество отображаемого
                                        изображения на экране. Чем выше разрешение, тем ближе положение, с
                                        которого картинка будет восприниматься целостно, без разбивки на
                                        отдельные точки</p>
                                    <p>Важный параметр, от которого зависит разрешение – шаг пикселя (расстояние
                                        между центральными точками двух рядом стоящих пикселей). От него же
                                        зависит расстояние просмотра. Усредненный расчет для определения
                                        минимального удаления зрителя от экрана делается по формуле Px1000, где
                                        P = шаг пикселя в мм</p>
                                    <p>Оптимальное значение P внутри помещений составляет от 0,5 мм (Full HD
                                        качество) до 4, максимум 10. В наружных конструкциях применяются
                                        LED-панели с шагом от 4 до 20 мм</p>
                                </li>
                                <li>
                                    <span>Угол обзора</span>
                                    <p>Угол обзора светодиодных экранов зависит от типа конструкции светодиода.
                                        Поверхностный SMD монтаж позволяет применять светодиоды нового поколения
                                        с расширением угла обзора до 140° в обеих плоскостях</p>
                                </li>
                                <li>
                                    <span>Потребляемая мощность и напряжение</span>
                                    <p>Перед установкой LED-панелей необходимо уточнить параметры электросетей
                                        здания или помещения по допустимым нагрузкам. Средний диапазон мощности,
                                        потребляемой от сети, составляет от 350 до 650 Вт в зависимости от
                                        модели экрана</p>
                                </li>
                                <li>
                                    <span>Монтажная конструкция</span>
                                    <p>Светодиодные панели собираются из отдельных модулей (кабинетов) разных
                                        типовых размеров. Полностью собранное оборудование должно иметь
                                        идеальную геометрию без видимых границ между блоками. Для уличных
                                        экранов обязательным условием является прочность конструкции,
                                        соответствующая ветровой нагрузке конкретного региона</p>
                                </li>
                                <li>
                                    <span>Надежность и безопасность</span>
                                    <p>Уличные светодиодные панели имеют класс защиты IP65, предотвращающий
                                        повреждения от попадания твердых предметов, а также исключающий
                                        попадание воды и пыли к узлам электрооборудования</p>
                                    <p>Для внутренних экранов достаточен класс IP31, защищающий от попадания
                                        мелких (от 2,5 мм) предметов и капель воды. В зависимости от региона и
                                        места монтажа светодиодные панели могут оснащаться системами охлаждения
                                        и подогрева</p>
                                </li>
                            </ul>
                        </div>
                        <div class="faq__description-footer">
                            <p>
                                Не знаете какой экран выбрать? Пройдите опрос из 4-х простых вопросов, на
                                основании ответов на которые, мы подберем для вас именнно то, что наиболее
                                подходит под ваши потребности
                            </p>
                            <div class="btn btn_primary">Пройти опрос</div>
                        </div>
                    </div>
                </div>
                <div class="faq__item display show">
                    <div class="faq__caption">
                        Как подобрать шаг пикселя?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item display show">
                    <div class="faq__caption">
                        В чем разница между уличным и внутренним?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item display show">
                    <div class="faq__caption">
                        Как посмотреть варианты экранов?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item display show">
                    <div class="faq__caption">
                        Как подобрать управление?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Как происходит оплата?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Как происходит установка?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Как происходит доставка?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Сколько времени занимает установка?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Сколько служит экран?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Какая гарантия?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Сколько весит экран?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        На что ставят экран в помещении или на улице?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Разница между фронтальным и тыльным обслуживанием?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Как управлять контентом?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Где заказать видеоряд?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Как происходит постпродажное обслуживание?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Что делать, если наступил гарантийный случай?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__caption">
                        Что делать, если повредили экран?
                        <div class="faq__toggler"></div>
                    </div>
                    <div class="faq__description">
                        <div class="faq__description-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi
                                consectetur, cum eaque enim eos esse excepturi fugit incidunt iusto laboriosam,
                                minus nobis quaerat quis reprehenderit sequi totam ullam, vel!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq__more">
                <span class="points points_left">
                    <span class="point"></span>
                    <span class="point"></span>
                    <span class="point"></span>
                </span>
                <span class="text">Ещё вопросы</span>
                <span class="points points_right">
                    <span class="point"></span>
                    <span class="point"></span>
                    <span class="point"></span>
                </span>
            </div>
        </div>
    </div>
</section>
<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>