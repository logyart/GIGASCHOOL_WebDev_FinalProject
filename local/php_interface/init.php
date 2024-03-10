<?



$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('iblock', 'OnBeforeIBlockElementAdd', Array(
        "EventHandler",
        "OnBeforeIBlockElementAddHandler"
    )
);

$eventManager->addEventHandler('iblock', 'OnAfterIBlockElementAdd', Array(
        "EventHandler",
        "OnAfterIBlockElementAddHandler"
    )
);




//AddEventHandler("iblock", "OnBeforeIBlockElementAdd", Array("EventHandler", "OnBeforeIBlockElementAddHandler"));
class EventHandler
{
    // создаем обработчик события "OnBeforeIBlockElementAdd"
    public static function OnBeforeIBlockElementAddHandler(&$arFields)
    {
        if ($arFields['IBLOCK_ID'] == 4) {
            // если нет @
            if (!preg_match('/[@]/', $arFields['PROPERTY_VALUES'][11])) {
                global $APPLICATION;
                $APPLICATION->ThrowException("В поле почта отсутствует символ '@'.");
                //echo ('<br>'."В поле почта отсутствует символ '@'.");
                return false;
            }
            // если не цифра
            if (preg_match('/[^0-9]/', $arFields['PROPERTY_VALUES'][12])) {
                global $APPLICATION;
                $APPLICATION->ThrowException("В поле телефон должны быть только цифры.");
                //echo ('<br>'."В поле телефон должны быть только цифры.");
                return false;
            }
            return true;
        }
        if ($arFields['IBLOCK_ID'] == 20) {
            // если нет @
            if (!preg_match('/[@]/', $arFields['PROPERTY_VALUES'][80])) {
                global $APPLICATION;
                $APPLICATION->ThrowException("В поле почта отсутствует символ '@'.");
                //echo ('<br>'."В поле почта отсутствует символ '@'.");
                return false;
            }
            return true;
        }

        return true;
    }

    public static function OnAfterIBlockElementAddHandler(&$arFields)
    {
        if (($arFields['ID'] > 0) &&
            ($arFields['IBLOCK_ID'] == 4))
        {
            Bitrix\Main\Mail\Event::send(array(
                "EVENT_NAME" => "NEW_RESUME",
                "LID" => SITE_ID,
                "C_FIELDS" => [
                    'FULLNAME' => $arFields['PROPERTY_VALUES'][10],
                    'EMAIL' => $arFields['PROPERTY_VALUES'][11],
                    'PHONE' => $arFields['PROPERTY_VALUES'][12],
                    'VACANCY' => $arFields['PROPERTY_VALUES'][13]
                ],
            ));
        }
/*        $message = 'Вакансия: '.$arFields['PROPERTY_VALUES']['VACANCY'].' '.
            'ФИО: '.$arFields['PROPERTY_VALUES']['FULLNAME'].' '.
            'Почта: '.$arFields['PROPERTY_VALUES']['EMAIL'].' '.
            'Телефон: '.'+'.$arFields['PROPERTY_VALUES']['PHONE'];
        $headers = 'Content-Type: text/html; charset=UTF-8';
        mail('logyart@yandex.ru', 'Резюме', $message, $headers);*/
    }
}
?>