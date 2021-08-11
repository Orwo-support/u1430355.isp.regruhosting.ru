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
                'AUTHOR' => $arFields['NAME'],
                'FROM' => $arFields['PROPERTY_VALUES']['CALLBACK_FROM'],
                'PHONE' => $arFields['PROPERTY_VALUES']['CALLBACK_PHONE'],
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
                'FROM_PAGE_NAME' => $arFields['PROPERTY_VALUES']['REQUEST_FROM_NAME'],
                'FROM_PAGE_LINK' => $arFields['PROPERTY_VALUES']['REQUEST_FROM_LINK'],
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
                'FROM_PAGE_NAME' => $arFields['PROPERTY_VALUES']['REQUEST_FROM_NAME'],
                'FROM_PAGE_LINK' => $arFields['PROPERTY_VALUES']['REQUEST_FROM_LINK'],
            );

            // Первым параметром дложно идти почтовое событие,
            // созданное для данного handler(а)
            CEvent::Send('SET_ORDER_FORM',SITE_ID, $arSend);
        }
    }
}