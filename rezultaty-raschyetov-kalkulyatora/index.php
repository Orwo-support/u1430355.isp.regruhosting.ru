<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результаты расчётов калькулятора");

$CALC_RESULTS = strip_tags(trim($_POST['calc-results']));
if (get_magic_quotes_gpc()) $CALC_RESULTS = stripcslashes($CALC_RESULTS);
$CALC_RESULTS = json_decode($CALC_RESULTS);

//debug($CALC_RESULTS);
?>
<div class="<?
    switch ($CALC_RESULTS->calcType) {
        case 'outsideScreen':
            echo 'calc_outside-screen';
            break;
        case 'insideScreen':
            echo 'calc_inside-screen';
            break;
        case 'mediaFaced':
            echo 'calc_media-facade';
            break;
        case 'rentScreen':
            echo 'calc_rent';
            break;
    }?>">
    <div class="container calc-results-animation-wrap animation-element">
        <div class="calc__specification hidden invisible">
            <div class="calc__specification-title">
                <span class="title">Просмотр спецификации</span>
                <span class="step">шаг 2 из 2</span>
            </div>
            <div class="calc__tab-list swiper-container">
                <div class="calc__tab-list-wrap swiper-wrapper">
                    <a class="calc__tab-list__slide swiper-slide" href="/kalkulyator/">
                            <span class="calc__tab-list__button<?= $CALC_RESULTS->calcType == 'outsideScreen' ? ' active' : ''?>"
                                  data-target-tab-id="#outsideScreen">Уличный светодиодный экран</span></a>

                    <a class="calc__tab-list__slide swiper-slide" href="/kalkulyator/?calc=insideScreen">
                        <span class="calc__tab-list__button<?= $CALC_RESULTS->calcType == 'insideScreen' ? ' active' : ''?>"
                              data-target-tab-id="#insideScreen">Внутренний светодиодный экран</span></a>

                    <a class="calc__tab-list__slide swiper-slide" href="/kalkulyator/?calc=rentScreen">
                        <span class="calc__tab-list__button<?= $CALC_RESULTS->calcType == 'rentScreen' ? ' active' : ''?>"
                              data-target-tab-id="#rentScreen">Аренда</span></a>
                </div>
            </div>
            <div class="calc__specification-list">
                <div class="calc__specification-list-title">Спецификация</div>
                <div class="calc__specification-list-short">
                    <?// На забыть добавить короткую спецификацию?>
                    <ul>
                        <li>Уличный светодиодный экран 2720 x 3420 мм</li>
                        <li>Комплектующие в сборе</li>
                        <li>Гарантийное обслуживание</li>
                        <li>Страховка</li>
                    </ul>
                </div>
                <div class="calc__specification-list-sum">
                    <span>Итого:</span>
                    <span class="sum-container"><?
                        if ($CALC_RESULTS->calcType == 'rentScreen') {
                            echo number_format($CALC_RESULTS->cost, 2, ',', ' ');
                        } else {
                            echo number_format($CALC_RESULTS->RubSum, 2, ',', ' ');
                        }?> ₽</span>
                </div>
            </div>
            <div class="calc__specification-table scroller">
                <?$PARAM_LIST_COUNTER = 1;?>
                <table>
                    <tr>
                        <th>#</th>
                        <th>Наименование</th>
                        <th>Единица измерения</th>
                        <th>Количество</th>
                    </tr>
                    <?if($CALC_RESULTS->calcType == 'outsideScreen' or $CALC_RESULTS->calcType == 'insideScreen'):?>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Тип экрана</td>
                            <td colspan="2" class="long-txt"><?=$CALC_RESULTS->executionType == 'monolithic' ? 'Монолитный' : 'Кабинетный';?></td>
                        </tr>
                        <?if($CALC_RESULTS->executionType == 'cabinet'):?>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Используемый кабинет</td>
                                <td colspan="2" class="long-txt"><?
                                    echo $CALC_RESULTS->Cab->name;
                                    echo $CALC_RESULTS->Cab->location ? ', '.$CALC_RESULTS->Cab->location : '';
                                    ?></td>
                            </tr
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Количество кабинетов</td>
                                <td>шт.</td>
                                <td><?=$CALC_RESULTS->QCab?></td>
                            </tr>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Размер одного кабинета</td>
                                <td>мм.</td>
                                <td><?=$CALC_RESULTS->sizeType[0] . 'x' . $CALC_RESULTS->sizeType[1]?></td>
                            </tr>
                        <?endif;?>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Разрешение экрана</td>
                            <td>пиксели</td>
                            <td><?=$CALC_RESULTS->pixelStep?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Ширина экрана</td>
                            <td>мм.</td>
                            <td><?=$CALC_RESULTS->width?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Высота экрана</td>
                            <td>мм.</td>
                            <td><?=$CALC_RESULTS->height?></td>
                        </tr>
                        <?if($CALC_RESULTS->executionType == 'monolithic'):?>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Количество модулей в ширину</td>
                                <td>шт.</td>
                                <td><?=$CALC_RESULTS->QModW?></td>
                            </tr>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Количество модулей в высоту</td>
                                <td>шт.</td>
                                <td><?=$CALC_RESULTS->QModH?></td>
                            </tr>
                        <?endif;?>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Количество модулей в изделии</td>
                            <td>шт.</td>
                            <td><?=$CALC_RESULTS->QModSum?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Используемый светодиодный модуль</td>
                            <td colspan="2" class="long-txt"><?
                                echo $CALC_RESULTS->Mod->name;
                                echo $CALC_RESULTS->Mod->pixels ? ' '.$CALC_RESULTS->Mod->pixels : '';
                                echo $CALC_RESULTS->Mod->type ? ' '.$CALC_RESULTS->Mod->type : '';
                                echo $CALC_RESULTS->Mod->size ? ' '.$CALC_RESULTS->Mod->size : '';
                                echo $CALC_RESULTS->Mod->outdoor ? ' '.$CALC_RESULTS->Mod->outdoor : '';
                            ?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Количество блоков питания</td>
                            <td>шт.</td>
                            <td><?=$CALC_RESULTS->QBp?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Используемый блок питания</td>
                            <td colspan="2" class="long-txt"><?
                                echo $CALC_RESULTS->Bp->name;
                                echo $CALC_RESULTS->Bp->model ? ' '.$CALC_RESULTS->Bp->model : '';
                                echo $CALC_RESULTS->Bp->modification ? ' '.$CALC_RESULTS->Bp->modification : '';
                                ?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Количество принимающих карт</td>
                            <td>шт.</td>
                            <td><?=$CALC_RESULTS->QRv?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Используемая принимающая карта</td>
                            <td colspan="2" class="long-txt"><?
                                echo $CALC_RESULTS->Rv->name;
                                echo $CALC_RESULTS->Rv->model ? ' '.$CALC_RESULTS->Rv->model : '';
                                ?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Количество магнитов</td>
                            <td>шт.</td>
                            <td><?=$CALC_RESULTS->QMag?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Используемый магнитный держатель</td>
                            <td colspan="2" class="long-txt"><?
                                echo $CALC_RESULTS->Mag->name;
                                echo $CALC_RESULTS->Mag->model ? ' '.$CALC_RESULTS->Mag->model : '';
                                ?></td>
                        </tr>
                        <?if($CALC_RESULTS->executionType == 'monolithic'):?>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Используемый профиль</td>
                                <td colspan="2" class="long-txt"><?
                                    echo $CALC_RESULTS->Pr->name;
                                    echo $CALC_RESULTS->Pr->model ? ' '.$CALC_RESULTS->Pr->model : '';
                                    echo $CALC_RESULTS->Pr->color ? ' '.$CALC_RESULTS->Pr->color : '';
                                    ?></td>
                            </tr>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Используемый уголок</td>
                                <td colspan="2" class="long-txt"><?
                                    echo $CALC_RESULTS->Ug->name;
                                    echo $CALC_RESULTS->Ug->model ? ' '.$CALC_RESULTS->Ug->model : '';
                                    ?></td>
                            </tr>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Количество направляющих</td>
                                <td>м.</td>
                                <td><?=$CALC_RESULTS->QNa?></td>
                            </tr>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Используемые направляющие</td>
                                <td colspan="2" class="long-txt"><?
                                    echo $CALC_RESULTS->Na->name;
                                    echo $CALC_RESULTS->Na->model ? ' '.$CALC_RESULTS->Ug->model : '';
                                    ?></td>
                            </tr>
                        <?endif;?>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Количество металлоконструкции</td>
                            <td>м.кв.</td>
                            <td><?=$CALC_RESULTS->QMk?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Используемая система управления</td>
                            <td colspan="2" class="long-txt"><?
                                echo $CALC_RESULTS->SU->name;
                                echo $CALC_RESULTS->SU->model ? ' '.$CALC_RESULTS->SU->model : '';
                                ?></td>
                        </tr>
                        <?if($CALC_RESULTS->RG):?>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Расширенная гарантия</td>
                                <td>лет</td>
                                <td><?=$CALC_RESULTS->RG?></td>
                            </tr>
                        <?endif;?>
                        <?if($CALC_RESULTS->RG):?>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Расширенный сервис</td>
                                <td>лет</td>
                                <td><?=$CALC_RESULTS->RS?></td>
                            </tr>
                        <?endif;?>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Управление контентом</td>
                            <td colspan="2" class="long-txt"><?= $CALC_RESULTS->UK == 'place' ? 'На месте' : 'Удалённо';?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Датчик яркости</td>
                            <td colspan="2" class="long-txt"><?= $CALC_RESULTS->DY == '1' ? 'Нужен' : 'Не нужен';?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Электротехнический проект</td>
                            <td colspan="2" class="long-txt"><?= $CALC_RESULTS->EP == '1' ? 'Нужен' : 'Не нужен';?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Электрощитовая</td>
                            <td colspan="2" class="long-txt"><?= $CALC_RESULTS->ESH == '1' ? 'Нужна' : 'Не нужна';?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Проект металлоконструкции</td>
                            <td colspan="2" class="long-txt"><?= $CALC_RESULTS->PM == '1' ? 'Нужен' : 'Не нужен';?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Комплект запасных частей</td>
                            <td colspan="2" class="long-txt"><?= $CALC_RESULTS->ZCH == '1' ? 'Нужен' : 'Не нужен';?></td>
                        </tr>
                    <?endif;?>

                    <?if($CALC_RESULTS->calcType == 'rentScreen'):?>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Исполнение</td>
                            <td colspan="2" class="long-txt"><?=$CALC_RESULTS->execution == 'inner' ? 'Внутренний' : 'Внешний';?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Шаг пикселя</td>
                            <td>пиксели</td>
                            <td><?=$CALC_RESULTS->pixelStep?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Ширина экрана</td>
                            <td>мм.</td>
                            <td><?=$CALC_RESULTS->width?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Высота экрана</td>
                            <td>мм.</td>
                            <td><?=$CALC_RESULTS->height?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Количество кабинетов в экране</td>
                            <td>шт.</td>
                            <td colspan="2" class="long-txt"><?=$CALC_RESULTS->QCabSum?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Конструкция</td>
                            <td colspan="2" class="long-txt"><?=$CALC_RESULTS->construction == 'floor' ? 'Напольная' : 'Подвесная';?></td>
                        </tr>
                        <?if($CALC_RESULTS->supportsNumber):?>
                            <tr>
                                <td><?=$PARAM_LIST_COUNTER++?></td>
                                <td>Количество опор</td>
                                <td>шт.</td>
                                <td colspan="2" class="long-txt"><?=$CALC_RESULTS->supportsNumber?></td>
                            </tr>
                        <?endif;?>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Система управления</td>
                            <td colspan="2" class="long-txt"><?=$CALC_RESULTS->systemControl == 'controller' ? 'Контроллер' : 'Видеопроцессор';?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Срок аренды</td>
                            <td>дни</td>
                            <td><?=$CALC_RESULTS->rentDays?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Дата начала аренды</td>
                            <td colspan="2" class="long-txt"><?=$CALC_RESULTS->dateStart ? normalizeDate($CALC_RESULTS->dateStart) : 'Не указана';?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Техник для управления видео</td>
                            <td colspan="2" class="long-txt"><?=$CALC_RESULTS->technician ? 'Нужен' : 'Не нужен';?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Доставка за пределы Москвы</td>
                            <td colspan="2" class="long-txt"><?=$CALC_RESULTS->delivery == 0 ? 'Не нужна' : 'Нужна';?></td>
                        </tr>
                        <tr>
                            <td><?=$PARAM_LIST_COUNTER++?></td>
                            <td>Стоимость дня аренды (без учёта скидки)</td>
                            <td>руб.</td>
                            <td colspan="2" class="long-txt"><?=number_format($CALC_RESULTS->costPerDay, 2, ',', ' ')?></td>
                        </tr>
                    <?endif;?>
                </table>
            </div>
            <div class="calc__specification-result">
                <div class="calc__specification-result-sum">
                    <span>Итого:</span>
                    <span class="sum-container"><?
                        if ($CALC_RESULTS->calcType == 'rentScreen') {
                            echo number_format($CALC_RESULTS->cost, 2, ',', ' ');
                        } else {
                            echo number_format($CALC_RESULTS->RubSum, 2, ',', ' ');
                        }?> ₽</span>
                </div>
                <div class="calc__specification-result-comment">
                    <span>В расчете указана приблизительная стоимость.</span>
                    <br>
                    <span>Для определения более точной стоимости</span>
                    <a class="link revers show-order-form">заполните заявку</a>
                </div>
                <div class="calc__specification-result-download">
                    <div class="btn btn_primary not-focused">
                        <span class="icon-prolog">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 6.8708L6.99256 9M6.99256 9L9 6.88658M6.99256 9L6.99256 1M11 5C11 5 11.3978 5 11.7654 5.15224C12.2554 5.35523 12.6448 5.74458 12.8478 6.23463C13 6.60218 13 7.06812 13 8V9C13 10.8856 13 11.8284 12.4142 12.4142C11.8284 13 10.8856 13 9 13H5C3.11438 13 2.17157 13 1.58579 12.4142C1 11.8284 1 10.8856 1 9V8C1 7.06812 1 6.60218 1.15224 6.23463C1.35523 5.74458 1.74458 5.35523 2.23463 5.15224C2.60218 5 3 5 3 5" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span class="d-none sm-visible md-visible">Скачать смету</span>
                        <span class="d-none lg-visible xl-visible">Скачать спецификацию</span>
                        <span class="icon-epilogue">
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L4.33333 4.5044C4.6476 4.8348 4.80474 5 5 5C5.19526 5 5.3524 4.8348 5.66667 4.5044L9 1" stroke="#5B4589" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                    </div>
                    <div class="dropdown">
                        <a href="" download>
                            <span class="icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 6.8708L6.99256 9M6.99256 9L9 6.88658M6.99256 9L6.99256 1M11 5C11 5 11.3978 5 11.7654 5.15224C12.2554 5.35523 12.6448 5.74458 12.8478 6.23463C13 6.60218 13 7.06812 13 8V9C13 10.8856 13 11.8284 12.4142 12.4142C11.8284 13 10.8856 13 9 13H5C3.11438 13 2.17157 13 1.58579 12.4142C1 11.8284 1 10.8856 1 9V8C1 7.06812 1 6.60218 1.15224 6.23463C1.35523 5.74458 1.74458 5.35523 2.23463 5.15224C2.60218 5 3 5 3 5" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            <span class="txt">Pdf</span>
                        </a>
                        <a href="" download>
                            <span class="icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 6.8708L6.99256 9M6.99256 9L9 6.88658M6.99256 9L6.99256 1M11 5C11 5 11.3978 5 11.7654 5.15224C12.2554 5.35523 12.6448 5.74458 12.8478 6.23463C13 6.60218 13 7.06812 13 8V9C13 10.8856 13 11.8284 12.4142 12.4142C11.8284 13 10.8856 13 9 13H5C3.11438 13 2.17157 13 1.58579 12.4142C1 11.8284 1 10.8856 1 9V8C1 7.06812 1 6.60218 1.15224 6.23463C1.35523 5.74458 1.74458 5.35523 2.23463 5.15224C2.60218 5 3 5 3 5" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            <span class="txt">Excel</span>
                        </a>
                        <a href="" download>
                            <span class="icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 6.8708L6.99256 9M6.99256 9L9 6.88658M6.99256 9L6.99256 1M11 5C11 5 11.3978 5 11.7654 5.15224C12.2554 5.35523 12.6448 5.74458 12.8478 6.23463C13 6.60218 13 7.06812 13 8V9C13 10.8856 13 11.8284 12.4142 12.4142C11.8284 13 10.8856 13 9 13H5C3.11438 13 2.17157 13 1.58579 12.4142C1 11.8284 1 10.8856 1 9V8C1 7.06812 1 6.60218 1.15224 6.23463C1.35523 5.74458 1.74458 5.35523 2.23463 5.15224C2.60218 5 3 5 3 5" stroke="#AB78FF" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            <span class="txt">Txt</span>
                        </a>
                    </div>
                </div>
                <a class="calc__specification-result-share" href="">
                    <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.76217 9.92072L4.72253 10.9604C2.42582 13.2571 2.42582 16.9808 4.72253 19.2775C7.01924 21.5742 10.7429 21.5742 13.0396 19.2775L14.0793 18.2378M9.92072 5.76217L10.9604 4.72253C13.2571 2.42582 16.9808 2.42582 19.2775 4.72253C21.5742 7.01924 21.5742 10.7429 19.2775 13.0396L18.2378 14.0793M9.92072 14.0793L14.0793 9.92072" stroke="#F6F0FF" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    Поделиться спецификацией
                </a>
                <div class="calc__specification-result-recalc">
                    <a class="btn reset-calc-section" href="/kalkulyator/<?
                        if ($CALC_RESULTS->calcType == 'insideScreen') echo '?calc=insideScreen';
                        elseif ($CALC_RESULTS->calcType == 'rentScreen') echo '?calc=rentScreen';
                    ?>">
                        <span class="icon">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.26627 13.5802L3.68849 13.3124H3.68849L3.26627 13.5802ZM12.7337 13.5802L12.3115 13.3124L12.7337 13.5802ZM5.85714 4.16667C5.581 4.16667 5.35714 4.39052 5.35714 4.66667C5.35714 4.94281 5.581 5.16667 5.85714 5.16667V4.16667ZM10.1429 5.16667C10.419 5.16667 10.6429 4.94281 10.6429 4.66667C10.6429 4.39052 10.419 4.16667 10.1429 4.16667V5.16667ZM4.81818 2.5H11.1818V1.5H4.81818V2.5ZM11.1818 2.5C11.6322 2.5 11.8915 2.50257 12.0757 2.54161C12.2149 2.57113 12.2623 2.61003 12.3115 2.6876L13.156 2.15196C12.9389 1.80975 12.6389 1.63876 12.283 1.56334C11.9721 1.49743 11.5885 1.5 11.1818 1.5V2.5ZM13.5 4.86642C13.5 4.19984 13.5004 3.66787 13.4649 3.25131C13.4294 2.83549 13.3542 2.46446 13.156 2.15196L12.3115 2.6876C12.3796 2.79488 12.4374 2.97154 12.4685 3.33629C12.4996 3.7003 12.5 4.18176 12.5 4.86642H13.5ZM4.81818 1.5C4.41148 1.5 4.02793 1.49743 3.71699 1.56334C3.36114 1.63876 3.06111 1.80975 2.84404 2.15196L3.68849 2.6876C3.73769 2.61003 3.78507 2.57113 3.92434 2.54161C4.10851 2.50257 4.36779 2.5 4.81818 2.5V1.5ZM3.5 4.86642C3.5 4.18176 3.50043 3.7003 3.53148 3.33629C3.56258 2.97154 3.62044 2.79488 3.68849 2.6876L2.84404 2.15196C2.64582 2.46446 2.57055 2.83549 2.53509 3.25131C2.49957 3.66787 2.5 4.19984 2.5 4.86642H3.5ZM11.1818 13.5H4.81818V14.5H11.1818V13.5ZM4.81818 13.5C4.36779 13.5 4.10851 13.4974 3.92434 13.4584C3.78507 13.4289 3.73769 13.39 3.68849 13.3124L2.84404 13.848C3.06111 14.1902 3.36114 14.3612 3.71699 14.4367C4.02793 14.5026 4.41148 14.5 4.81818 14.5V13.5ZM2.5 11.1336C2.5 11.8002 2.49957 12.3321 2.53509 12.7487C2.57055 13.1645 2.64583 13.5355 2.84404 13.848L3.68849 13.3124C3.62044 13.2051 3.56258 13.0285 3.53148 12.6637C3.50043 12.2997 3.5 11.8182 3.5 11.1336H2.5ZM11.1818 14.5C11.5885 14.5 11.9721 14.5026 12.283 14.4367C12.6389 14.3612 12.9389 14.1902 13.156 13.848L12.3115 13.3124C12.2623 13.39 12.2149 13.4289 12.0757 13.4584C11.8915 13.4974 11.6322 13.5 11.1818 13.5V14.5ZM12.5 11.1336C12.5 11.8182 12.4996 12.2997 12.4685 12.6637C12.4374 13.0285 12.3796 13.2051 12.3115 13.3124L13.156 13.848C13.3542 13.5355 13.4294 13.1645 13.4649 12.7487C13.5004 12.3321 13.5 11.8002 13.5 11.1336H12.5ZM2.5 4.86642V11.1336H3.5V4.86642H2.5ZM12.5 4.86642V11.1336H13.5V4.86642H12.5ZM5.85714 5.16667H10.1429V4.16667H5.85714V5.16667ZM9.78571 12.5C10.226 12.5 10.6429 12.1588 10.6429 11.6667H9.64286C9.64286 11.609 9.66882 11.5632 9.69709 11.5368C9.72477 11.511 9.75732 11.5 9.78571 11.5V12.5ZM8.92857 11.6667C8.92857 12.1588 9.34538 12.5 9.78571 12.5V11.5C9.81411 11.5 9.84665 11.511 9.87433 11.5368C9.90261 11.5632 9.92857 11.609 9.92857 11.6667H8.92857ZM9.78571 11.8333C9.75732 11.8333 9.72477 11.8223 9.69709 11.7965C9.66882 11.7701 9.64286 11.7243 9.64286 11.6667H10.6429C10.6429 11.1745 10.226 10.8333 9.78571 10.8333V11.8333ZM9.78571 10.8333C9.34538 10.8333 8.92857 11.1745 8.92857 11.6667H9.92857C9.92857 11.7243 9.90261 11.7701 9.87433 11.7965C9.84665 11.8223 9.81411 11.8333 9.78571 11.8333V10.8333ZM9.78571 9.16667C10.226 9.16667 10.6429 8.8255 10.6429 8.33333H9.64286C9.64286 8.27568 9.66882 8.2299 9.69709 8.20351C9.72477 8.17767 9.75732 8.16667 9.78571 8.16667V9.16667ZM8.92857 8.33333C8.92857 8.8255 9.34538 9.16667 9.78571 9.16667V8.16667C9.81411 8.16667 9.84665 8.17767 9.87434 8.20351C9.90261 8.2299 9.92857 8.27568 9.92857 8.33333H8.92857ZM9.78571 8.5C9.75732 8.5 9.72477 8.48899 9.69709 8.46316C9.66882 8.43677 9.64286 8.39098 9.64286 8.33333H10.6429C10.6429 7.84117 10.226 7.5 9.78571 7.5V8.5ZM9.78571 7.5C9.34538 7.5 8.92857 7.84117 8.92857 8.33333H9.92857C9.92857 8.39098 9.90261 8.43677 9.87434 8.46316C9.84665 8.48899 9.81411 8.5 9.78571 8.5V7.5ZM6.21429 12.5C6.65462 12.5 7.07143 12.1588 7.07143 11.6667H6.07143C6.07143 11.609 6.09739 11.5632 6.12566 11.5368C6.15335 11.511 6.18589 11.5 6.21429 11.5V12.5ZM5.35714 11.6667C5.35714 12.1588 5.77395 12.5 6.21429 12.5V11.5C6.24268 11.5 6.27522 11.511 6.30291 11.5368C6.33118 11.5632 6.35714 11.609 6.35714 11.6667H5.35714ZM6.21429 11.8333C6.18589 11.8333 6.15335 11.8223 6.12566 11.7965C6.09739 11.7701 6.07143 11.7243 6.07143 11.6667H7.07143C7.07143 11.1745 6.65462 10.8333 6.21429 10.8333V11.8333ZM6.21429 10.8333C5.77395 10.8333 5.35714 11.1745 5.35714 11.6667H6.35714C6.35714 11.7243 6.33118 11.7701 6.30291 11.7965C6.27522 11.8223 6.24268 11.8333 6.21429 11.8333V10.8333ZM6.21429 9.16667C6.65462 9.16667 7.07143 8.8255 7.07143 8.33333H6.07143C6.07143 8.27568 6.09739 8.2299 6.12566 8.20351C6.15335 8.17767 6.18589 8.16667 6.21429 8.16667V9.16667ZM5.35714 8.33333C5.35714 8.8255 5.77395 9.16667 6.21429 9.16667V8.16667C6.24268 8.16667 6.27523 8.17767 6.30291 8.20351C6.33118 8.2299 6.35714 8.27568 6.35714 8.33333H5.35714ZM6.21429 8.5C6.18589 8.5 6.15335 8.48899 6.12566 8.46316C6.09739 8.43677 6.07143 8.39098 6.07143 8.33333H7.07143C7.07143 7.84117 6.65462 7.5 6.21429 7.5V8.5ZM6.21429 7.5C5.77395 7.5 5.35714 7.84117 5.35714 8.33333H6.35714C6.35714 8.39098 6.33118 8.43677 6.30291 8.46316C6.27523 8.48899 6.24268 8.5 6.21429 8.5V7.5Z" fill="#AB78FF"/></svg>
                        </span>
                        Пересчитать
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="calc__order">
            <div class="calc__order-title">
                <span class="title">Отправьте заявку на подробный расчет</span>
            </div>
            <div class="calc__order-form">
                <form class="form-order" id="calcForm" action="/" method="POST" data-target="#calcModal">
                    <div class="controller-group">
                        <label class="controller-label">ФИО</label>
                        <div class="controller controller__input">
                            <label class="label label__icon">
                                <span class="controller-icon icon-human">
                                    <img src="/img/icon-person.svg" alt="">
                                </span>
                                <input class="input"
                                       type="text"
                                       placeholder="Как Вас зовут?"
                                       name="name"
                                       id="calcFormName">
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
                                       id="calcFormPhone">
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
                    <div class="controller-group">
                        <label class="controller-label">Email</label>
                        <div class="controller controller__input">
                            <label class="label label__icon">
                                <span class="controller-icon icon-mail">
                                    <img src="/img/icon-calc-mail.svg" alt="">
                                </span>
                                <input class="input"
                                       type="text"
                                       placeholder="example@email.com"
                                       name="mail"
                                       id="calcFormMail">
                            </label>
                        </div>
                    </div>
                    <div class="controller-group">
                        <label class="controller-label">Комментарий</label>
                        <div class="controller-wrap">
                            <span class="controller-icon icon-msg">
                                <img src="/img/icon-message.svg" alt="">
                            </span>
                            <textarea class="textarea"
                                      placeholder="Напишите что-нибудь"
                                      name="message"
                                      id="calcFormMessage"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="calc__order-result">
                <div class="calc__order-result-pic">
                    <?
                        if ($CALC_RESULTS->calcType == 'outsideScreen') {
                            echo '<img class="pic" src="/img/calc-location-outside.png" alt="">';
                        } elseif ($CALC_RESULTS->calcType == 'insideScreen') {
                            echo '<img class="pic" src="/img/quiz-location-inside.png" alt="">';
                        } elseif ($CALC_RESULTS->calcType == 'mediaFaced') {
                            echo '<img class="pic" src="/img/calc-media-facade.png" alt="">';
                        } elseif ($CALC_RESULTS->calcType == 'rentScreen') {
                            echo '<img class="pic" src="/img/quiz-location-inside.png" alt="">';
                        }
                    ?>
                </div>
                <div class="calc__order-result-list">
                    <div class="calc__order-result-list-title">Спецификация</div>
                    <?// На забыть добавить короткую спецификацию?>
                    <div class="calc__order-result-list-short">
                        <ul>
                            <li>Уличный светодиодный экран 2720 x 3420 мм</li>
                            <li>Комплектующие в сборе</li>
                            <li>Гарантийное обслуживание</li>
                            <li>Страховка</li>
                        </ul>
                    </div>
                    <div class="calc__order-result-list-sum">
                        <span>Итого:</span>
                        <span class="sum-container"><?
                            if ($CALC_RESULTS->calcType == 'rentScreen') {
                                echo number_format($CALC_RESULTS->cost, 2, ',', ' ');
                            } else {
                                echo number_format($CALC_RESULTS->RubSum, 2, ',', ' ');
                            }?> ₽</span>
                    </div>
                </div>
                <div class="calc__order-result-submit">
                    <div class="form-order__actions">
                        <div class="form-order__actions-group">
                            <span class="form-order__privacy">
                                Нажимая на кнопку “Отправить заявку”, я даю согласие на
                                <a class="revers"
                                   href="/politika-konfidentsialnosti/"
                                    target="_blank">обработку моих персональных данных</a>
                            </span>
                            <div class="form-order__button">
                                <button class="btn btn_primary form-order__submit" type="submit">Отправить заявку</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>