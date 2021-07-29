<?
function debug ($data) {
    print '<pre>' . print_r($data, 1) . '</pre>';
}

/*
 * Обработка отправки сообщения из формы Колбэка
 * Отправка сообщения менеджеру компании */
// Регистрируем обработчик
AddEventHandler(
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
AddEventHandler(
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
 * Обработка отправки сообщения из
 * формы Запроса к мендежеру сайта
 * Отправка сообщения менеджеру компании */
// Регистрируем обработчик
AddEventHandler(
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