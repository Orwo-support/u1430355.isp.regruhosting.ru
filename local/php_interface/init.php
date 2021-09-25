<?
function debug ($data) {
    print '<pre>' . print_r($data, 1) . '</pre>';
}

function normalizeDate ($date) {
    $arrMonths = [
        'января',
        'февраля',
        'марта',
        'апреля',
        'мая',
        'июня',
        'июля',
        'августа',
        'сентября',
        'октября',
        'ноября',
        'декабря'
    ];

    $arDate = date_parse_from_format("j.n.Y", $date);

    return $arDate['day']
        . ' '
        . $arrMonths[$arDate['month'] - 1]
        . ' '
        . $arDate['year'];
};

function normalizedPhone ($notNormalPhone) {
    $phoneWithoutLetter = preg_replace('~\D+~','', $notNormalPhone);

    $cleanedPhone = $phoneWithoutLetter[0] == '7' || $phoneWithoutLetter[0] == '8'
        ? substr($phoneWithoutLetter, 1)
        : $phoneWithoutLetter;

    return '+7' . $cleanedPhone;
}

function getNextPage ($arResult, $curPage, $templateUrl) {
    $NavPageNomer = $arResult["NAV_RESULT"]->NavPageNomer; // Номер текущей страницы
    $NavPageCount = $arResult["NAV_RESULT"]->NavPageCount; // Количество страниц
    $NavRecordCount = $arResult["NAV_RESULT"]->NavRecordCount; // Общее количество элементов
    $NavPageSize = $arResult["NAV_RESULT"]->NavPageSize; // Количество элементов на странице

    $nextPage = ($curPage && $curPage > 0 && $curPage < $NavPageCount)
        ? $templateUrl . ($NavPageNomer + 1)
        : null;

    return Array(
        'NavPageNomer' => $NavPageNomer,
        'NavPageCount' => $NavPageCount,
        'NavRecordCount' => $NavRecordCount,
        'NavPageSize' => $NavPageSize,
        'NEXT_PAGE_URL' => $nextPage
    );
}

function fixPostPreviewText ($text) {
    if (strlen($text) > 110) {
        $arrText = explode(" ", mb_strimwidth($text, 0, 110));
        array_pop($arrText);
        return implode(" ", $arrText) . '&nbsp;...';
    }

    return $text;
}

// Get word form for years
function getYearsWordForm ($num) {
    $cases = [2, 0, 1, 1, 1, 2];
        $forms = ['год', 'года', 'лет'];

        $resultForm = $forms[ ($num%100 > 4 && $num%100 < 20)
        ? 2
        : $cases[ ($num%10 < 5)
            ? $num%10
            : 5
        ]
    ];

    return $resultForm;
};

// Get word form for days
function getDaysWordForm ($num) {
    $cases = [2, 0, 1, 1, 1, 2];
        $forms = ['день', 'дня', 'дней'];

        $resultForm = $forms[ ($num%100 > 4 && $num%100 < 20)
        ? 2
        : $cases[ ($num%10 < 5)
            ? $num%10
            : 5
        ]
    ];

    return $resultForm;
};

// Get ip of active user
function getRealIP () {
    $ip = false;
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode(', ', $_SERVER['HTTP_X_FORWARDED_FOR']);
        for ($i = 0; $i < count($ips); $i++) {
            if (!preg_match("/^(10|172\\.16|192\\.168)\\./", $ips[$i])) {
                $ip = $ips[$i];
                break;
            }
        }
    }
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}

/*
 * Обработка отправки сообщения из формы Колбэка
 * Отправка сообщения менеджеру компании */
// Регистрируем обработчик
AddEventHandler (
    "iblock",
    "OnAfterIBlockElementAdd",
    Array("handleCallbackForm", "OnAfterIBlockElementAddHandler")
);
class handleCallbackForm {
    /*
     * Создаем обработчик события "OnAfterIBlockElementAdd"
     * который слушает редактирование
     * инфоблока Запросы/Форма обратной связи
     * с идентификатором 12.
     *
     * В массиве $arSend перезаписываем стандартные макросы
     * почтового сообщения и добавляем свои в сответствии
     * со свойствами инфоблока.
     *
     * Макросы, перезаписываемые в массив $arSend сохраняют
     * свойтсва массива $arFields['PROPERTY_VALUES']
     * в соответсвии с именами свойств, указанными
     * в редактируемом инфоблоке
     */
    function OnAfterIBlockElementAddHandler(&$arFields) {
        if ($arFields["IBLOCK_ID"] == 12) {

            $arSend = array(
                'PHONE' => $arFields['PROPERTY_VALUES']['CALLBACK_PHONE'],
                'PAGE' => $arFields['PROPERTY_VALUES']['CALLBACK_PAGE'],
                'LINK' => $arFields['PROPERTY_VALUES']['CALLBACK_PAGE_LINK'],
            );

            // Первым параметром дложно идти почтовое событие,
            // созданное для данного handler(а)
            CEvent::Send('CALLBACK_FORM',SITE_ID, $arSend);
        }
    }
}

/*
 * Обработка отправки сообщения из формы Заполненного Квиза
 * Отправка сообщения менеджеру компании */
// Регистрируем обработчик
AddEventHandler (
    "iblock",
    "OnAfterIBlockElementAdd",
    Array("handleQuizForm", "OnAfterIBlockElementAddHandler")
);
class handleQuizForm {
    /*
     * Создаем обработчик события "OnAfterIBlockElementAdd"
     * который слушает редактирование инфоблока Запросы/Квиз
     * с идентификатором 13.
     *
     * В массиве $arSend перезаписываем стандартные макросы
     * почтового сообщения и добавляем свои в сответствии
     * со свойствами инфоблока.
     *
     * Макросы, перезаписываемые в массив $arSend сохраняют
     * свойтсва массива $arFields['PROPERTY_VALUES']
     * в соответсвии с именами свойств, указанными
     * в редактируемом инфоблоке
     */
    function OnAfterIBlockElementAddHandler(&$arFields) {
        if ($arFields["IBLOCK_ID"] == 13) {

            $arSend = array(
                'AUTHOR' => $arFields['NAME'],
                'CONTRACT' => $arFields['PROPERTY_VALUES']['QUIZ_CONTRACT'],
                'DISTANCE' => $arFields['PROPERTY_VALUES']['QUIZ_DISTANCE'],
                'WIDTH' => $arFields['PROPERTY_VALUES']['QUIZ_WIDTH'],
                'HEIGHT' => $arFields['PROPERTY_VALUES']['QUIZ_HEIGHT'],
                'LOCATION' => $arFields['PROPERTY_VALUES']['QUIZ_LOCATION'],
                'PHONE' => $arFields['PROPERTY_VALUES']['QUIZ_USER_PHONE'],
                'MESSAGE' => $arFields['PROPERTY_VALUES']['QUIZ_USER_MESSAGE'],
            );

            // Первым параметром дложно идти почтовое событие,
            // созданное для данного handler(а)
            CEvent::Send('USER_FILLED_QUIZ',SITE_ID, $arSend);
        }
    }
}

/*
 * Обработка отправки сообщения из формы Запроса к мендежеру сайта
 * Отправка сообщения менеджеру компании */
// Регистрируем обработчик
AddEventHandler (
    "iblock",
    "OnAfterIBlockElementAdd",
    Array("handleRequestForm", "OnAfterIBlockElementAddHandler")
);
class handleRequestForm {
    /*
     * Создаем обработчик события "OnAfterIBlockElementAdd"
     * который слушает редактирование инфоблока Запросы/Форма запроса
     * с идентификатором 17.
     *
     * В массиве $arSend перезаписываем стандартные макросы
     * почтового сообщения и добавляем свои в сответствии
     * со свойствами инфоблока.
     *
     * Макросы, перезаписываемые в массив $arSend сохраняют
     * свойтсва массива $arFields['PROPERTY_VALUES']
     * в соответсвии с именами свойств, указанными
     * в редактируемом инфоблоке
     */
    function OnAfterIBlockElementAddHandler(&$arFields) {
        if ($arFields["IBLOCK_ID"] == 17) {

            $arSend = array(
                'AUTHOR' => $arFields['NAME'],
                'PHONE' => $arFields['PROPERTY_VALUES']['REQUEST_PHONE'],
                'MESSAGE' => $arFields['PROPERTY_VALUES']['REQUEST_MESSAGE'],
                'PAGE' => $arFields['PROPERTY_VALUES']['REQUEST_FROM_PAGE'],
                'LINK' => $arFields['PROPERTY_VALUES']['REQUEST_FROM_LINK'],
            );

            // Первым параметром дложно идти почтовое событие,
            // созданное для данного handler(а)
            CEvent::Send('REQUEST_FORM',SITE_ID, $arSend);
        }
    }
}

/*
 * Обработка отправки сообщения из формы Оформить заявку,
 * расположенной на каждой странице сайта */
// Регистрируем обработчик
AddEventHandler (
    "iblock",
    "OnAfterIBlockElementAdd",
    Array("handleSetOrderForm", "OnAfterIBlockElementAddHandler")
);
class handleSetOrderForm {
    /*
     * Создаем обработчик события "OnAfterIBlockElementAdd"
     * который слушает редактирование инфоблока Запросы/Форма оформить заявку
     * с идентификатором 73.
     *
     * В массиве $arSend перезаписываем стандартные макросы
     * почтового сообщения и добавляем свои в сответствии
     * со свойствами инфоблока.
     *
     * Макросы, перезаписываемые в массив $arSend сохраняют
     * свойтсва массива $arFields['PROPERTY_VALUES']
     * в соответсвии с именами свойств, указанными
     * в редактируемом инфоблоке
     */
    function OnAfterIBlockElementAddHandler(&$arFields) {
        if ($arFields["IBLOCK_ID"] == 73) {

            $arSend = array(
                'AUTHOR' => $arFields['NAME'],
                'PHONE' => $arFields['PROPERTY_VALUES']['REQUEST_PHONE'],
                'MESSAGE' => $arFields['PROPERTY_VALUES']['REQUEST_MESSAGE'],
                'FROM_PAGE_NAME' => $arFields['PROPERTY_VALUES']['REQUEST_FROM_PAGE'],
                'FROM_PAGE_LINK' => $arFields['PROPERTY_VALUES']['REQUEST_FROM_LINK']
            );

            // Первым параметром дложно идти почтовое событие,
            // созданное для данного handler(а)
            CEvent::Send('SET_ORDER_FORM',SITE_ID, $arSend);
        }
    }
}

/*
 * Обработка отправки сообщения из формы
 * Результатов расчёта калькулятора,
 * расположенной на странице с
 * результатами расчёта калькулятора
 * */
// Регистрируем обработчик
AddEventHandler (
    "iblock",
    "OnAfterIBlockElementAdd",
    Array("handleCalcResultsForm", "OnAfterIBlockElementAddHandler")
);
class handleCalcResultsForm {
    /*
     * Создаем обработчик события "OnAfterIBlockElementAdd"
     * который слушает редактирование инфоблока
     * Запросы/Результаты расчётов калькулятора
     * с идентификатором 74.
     *
     * В массиве $arSend перезаписываем стандартные макросы
     * почтового сообщения и добавляем свои в сответствии
     * со свойствами инфоблока.
     *
     * Макросы, перезаписываемые в массив $arSend сохраняют
     * свойтсва массива $arFields['PROPERTY_VALUES']
     * в соответсвии с именами свойств, указанными
     * в редактируемом инфоблоке
     */
    function OnAfterIBlockElementAddHandler(&$arFields) {
        if ($arFields["IBLOCK_ID"] == 74) {

            $arSend = array(
                'AUTHOR' => $arFields['NAME'],
                'PHONE' => $arFields['PROPERTY_VALUES']['REQUEST_PHONE'],
                'EMAIL' => $arFields['PROPERTY_VALUES']['REQUEST_EMAIL'],
                'MESSAGE' => $arFields['PROPERTY_VALUES']['REQUEST_MESSAGE'],
                'PDF' => $arFields['PROPERTY_VALUES']['REQUEST_PDF'],
                'XLS' => $arFields['PROPERTY_VALUES']['REQUEST_XLS'],
                'TXT' => $arFields['PROPERTY_VALUES']['REQUEST_TXT'],
            );

            // Первым параметром дложно идти почтовое событие,
            // созданное для данного handler(а)
            CEvent::Send('SEND_CALC_RESULTS',SITE_ID, $arSend);
        }
    }
}


function makeFilesFromCalcResults ($arr, $finalCost) {
    //    debug($arr);

    /*
     * Adding TXT file with calc results
     * */
    $text = "Результаты расчёта калькулятора\r\n";
    $text .= "От: " . date('d.m.Y - H:i:s') . " МСК";
    $text .= "\r\n";

    foreach ($arr as $key => $arParam) {
        $text .= "\r\n";
        $text .= $key + 1 . '. ';
        $text .= $arParam['name'] . ": ";
        $text .= $arParam['value'] . " ";
        $text .= $arParam['units'] == 'лет' ? getYearsWordForm($arParam['value']) : $arParam['units'];
    }

    $text .= "\r\n\r\n";
    $text .= "Итого: " . $finalCost;

    $txtFileName = "ekranika_ru_calc_results_".mt_rand().".txt";
    $TXT_FILE_PATH = "/calc-results-files/txt/" . $txtFileName;
    $txtFile = fopen("../calc-results-files/txt/" . $txtFileName, "w");
    fwrite($txtFile, $text);
    fclose($txtFile);
    //unlink("../temp/txt/" . $txtFileName);



    /*
    * Adding EXCEL file with calc results
    * */
    require '../calc-results-files/vendor/autoload.php';

    $document = new \PHPExcel();

    $sheet = $document->setActiveSheetIndex(0); // Выбираем первый лист в документе
    $sheet->setTitle("Результаты калькулятора");

    $columnPosition = 0; // Начальная координата x (с какого столбца начинаем)
    $startLine = 2; // Начальная координата y (с какой строки начинаем)

    // Вставляем заголовок в "A2"
    $sheet->setCellValueByColumnAndRow($columnPosition, $startLine, 'Результаты расчёта калькулятора ('.date('d.m.Y - H:i:s') .' МСК)');

    // Выравниваем по центру
    // $sheet->getStyleByColumnAndRow($columnPosition, $startLine)->getAlignment()->setHorizontal(
    //    PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    // Объединяем ячейки "A2:D2"
    $document->getActiveSheet()->mergeCellsByColumnAndRow($columnPosition, $startLine, $columnPosition+3, $startLine);

    // Перекидываем указатель на следующую строку
    $startLine = $startLine + 2;

    // Массив с названиями столбцов
    $columns = ['№', 'Наименование', 'Значение', 'Единицы измерения'];

    // Указатель на первый столбец
    $currentColumn = $columnPosition;

    // Формируем шапку
    foreach ($columns as $column) {
        // Красим ячейку
        $sheet->getStyleByColumnAndRow($currentColumn, $startLine)
            ->getFill()
            ->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)
            ->getStartColor()
            ->setRGB('4dbf62');

        // Делаем текст жирным
        $sheet->getStyleByColumnAndRow($currentColumn, $startLine)
            ->getFont()
            ->setBold(true);

        $sheet->setCellValueByColumnAndRow($currentColumn, $startLine, $column);

        // Выравниваем по центру
        $sheet->getStyleByColumnAndRow($currentColumn, $startLine)->getAlignment()->setHorizontal(
            PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        // Смещаемся вправо
        $currentColumn++;
    }

    // Формируем список
    foreach ($arr as $key => $arParam) {
        $startLine++; // Перекидываем указатель на следующую строку
        $currentColumn = $columnPosition; // Указатель на первый столбец
        $sheet->setCellValueByColumnAndRow($currentColumn, $startLine, $key + 1); // Вставляем порядковый номер

        // Вставляем наименование
        $currentColumn++;
        $sheet->setCellValueByColumnAndRow($currentColumn, $startLine, $arParam['name']);

        // Выравниваем по левому краю
        $sheet->getStyleByColumnAndRow($currentColumn, $startLine)->getAlignment()->setHorizontal(
            PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

        // Вставляем значение
        $currentColumn++;
        $value = $arParam['value'];
        $sheet->setCellValueByColumnAndRow($currentColumn, $startLine, $value);

        // Выравниваем по левому краю
        $sheet->getStyleByColumnAndRow($currentColumn, $startLine)->getAlignment()->setHorizontal(
            PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

        // Вставляем единицы измерения
        $currentColumn++;
        $units = $arParam['units'] == 'лет' ? getYearsWordForm($arParam['value']) : $arParam['units'];
        $sheet->setCellValueByColumnAndRow($currentColumn, $startLine, $units);

        // Выравниваем по левому краю
        $sheet->getStyleByColumnAndRow($currentColumn, $startLine)->getAlignment()->setHorizontal(
            PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    }

    $startLine = $startLine + 2;
    $sheet->setCellValueByColumnAndRow(0, $startLine, 'Итого:');
    $sheet->getStyleByColumnAndRow(0, $startLine)->getFont()->setBold(true);
    $sheet->getStyleByColumnAndRow(0, $startLine)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

    $sheet->setCellValueByColumnAndRow(1, $startLine, $finalCost);
    $sheet->getStyleByColumnAndRow(1, $startLine)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);


    // Устанавливаем ширину ячеек
    $sheet->getColumnDimension('B')->setAutoSize(false);
    $sheet->getColumnDimension('B')->setWidth(40);

    $sheet->getColumnDimension('C')->setAutoSize(false);
    $sheet->getColumnDimension('C')->setWidth(30);

    $sheet->getColumnDimension('D')->setAutoSize(false);
    $sheet->getColumnDimension('D')->setWidth(25);

    $objWriter = \PHPExcel_IOFactory::createWriter($document, 'Excel5');
    $xlsFileName = "ekranika_ru_calc_results_".mt_rand().".xls";
    $XLS_FILE_PATH = "/calc-results-files/xls/" . $xlsFileName;
    $objWriter->save("../calc-results-files/xls/" . $xlsFileName);



    /*
    * Adding PDF file with calc results
    * */
    require_once('../calc-results-files/tcpdf/tcpdf.php');

    class MYPDF extends TCPDF {
        //Page header
        public function Header() {
            // Logo
            $image_file = $_SERVER['DOCUMENT_ROOT'] .'img/logo.png';
            $this->Image($image_file, 16, 10, 35, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        }

        // Page footer
        public function Footer() {
            // Position at 15 mm from bottom
            $this->SetY(-25);
            // Set font
            $this->SetFont('freesans', 'I', 7);
            $this->Cell(0, 10, 'Страница: '.$this->getAliasNumPage().'/'.$this->getAliasNbPages().'  © Ekranika.ru - Данные актуальны на '.date('d.m.Y - H:i:s') .' МСК', 0, false, 'К', 0, '', 0, false, 'T', 'M');
        }
    }

    // Создаем новый PDF документ
    //$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    // create new PDF document
    $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    //Основная информация о файле
    $pdf->SetCreator('Ekranika.ru');
    $pdf->SetAuthor('Ekranika');
    $pdf->SetTitle('Расчёты светодиодного экрана');
    $pdf->SetSubject('Результат расчётов калькулятора светодиодных экранов');
    $pdf->SetKeywords('');

    // Устанавливаем данные заголовка по умолчанию
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

    // Устанавливаем верхний и нижний колонтитулы
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // Устанавливаем моноширинный шрифт по умолчанию
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // Устанавливаем отступы
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // Устанавливаем автоматические разрывы страниц
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // Устанавливаем шрифт
    $pdf->SetFont('freesans', '', 7, '', true);

    // Добавляем страницу
    $pdf->AddPage();

    // Устанавливаем текст
    $html = '<h2>Результаты расчёта калькулятора на сайте Ekranika.ru</h2>';
    $html .= '<h4><i>От: '.date('d.m.Y - H:i:s').'</i></h4><p></p>';
    $html .= '<hr><p></p><p></p>';
    foreach ($arr as $key => $arParam) {
        $html .= '<p>';
        $html .= $key + 1 . '. ';
        $html .= '<strong>'.$arParam['name'].': </strong>';
        $html .= $arParam['value'] . " ";
        $html .= $arParam['units'] == 'лет' ? getYearsWordForm($arParam['value']) : $arParam['units'];
        $html .= '</p>';
    }
    $finalCost = number_format(floatval(str_replace(" ", '', str_replace(',','.',$finalCost))), 2, ',', ' ');
    $html .= '<p></p><p><strong>Итого: </strong>'.$finalCost.' руб.</p>';

    // Выводим текст с помощью writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

    // Закрываем и выводим PDF документ
    $pdfFileName = "ekranika_ru_calc_results_".mt_rand().".pdf";
    $PDF_FILE_PATH = "/calc-results-files/pdf/" . $pdfFileName ;
    $pdf->Output( $_SERVER["DOCUMENT_ROOT"] . "calc-results-files/pdf/" . $pdfFileName, "F");

    return [$PDF_FILE_PATH, $XLS_FILE_PATH, $TXT_FILE_PATH];
}