<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Grid\Declension;

$photo =  \CFile::resizeImageGet(
    $arResult['PROPERTIES']['PHOTO']['VALUE'],
    ['width' => 571, 'height' => 571],
    BX_RESIZE_IMAGE_EXACT
);

//$arResult['COACH'] = [];
$arResult['COACH'] = [
    'NAME' => $arResult['NAME'],
    'PHOTO' => $photo['src'],
    //'PHOTO' => CFile::GetPath($arResult['PROPERTIES']['PHOTO']['VALUE']),
    'BIRTH' => FormatDate(
        'j F Y',
        MakeTimeStamp($arResult['PROPERTIES']['BIRTH']['VALUE'], CSite::GetDateFormat())
    ),
    'JOB' => (!empty($arResult['PROPERTIES']['JOB']['VALUE'])
        ? $arResult['PROPERTIES']['JOB']['VALUE']['TEXT'] : 'Данные засекречены'
    ),
    'STATS' => [
        'SEASONS' => [
            'NAME' => (new Declension('сезон', 'сезона', 'сезонов'))->get(
                ($arResult['PROPERTIES']['SEASONS']['VALUE'] ?: 0)
            ),
            'VALUE' => ($arResult['PROPERTIES']['SEASONS']['VALUE'] ?: 0)
        ],
        'MATCHES' => [
            'NAME' => (new Declension('матч', 'матча', 'матчей'))->get(
                ($arResult['PROPERTIES']['MATCHES']['VALUE'] ?: 0)
            ),
            'VALUE' => ($arResult['PROPERTIES']['SEASONS']['VALUE'] ?: 0)
        ],
        'WINS' => [
            'NAME' => (new Declension('победа', 'победы', 'побед'))->get(
                ($arResult['PROPERTIES']['WINS']['VALUE'] ?: 0)
            ),
            'VALUE' => ($arResult['PROPERTIES']['SEASONS']['VALUE'] ?: 0)
        ],
        'FAILS' => [
            'NAME' => (new Declension('поражение', 'поражения', 'поражений'))->get(
                ($arResult['PROPERTIES']['FAILS']['VALUE'] ?: 0)
            ),
            'VALUE' => ($arResult['PROPERTIES']['SEASONS']['VALUE'] ?: 0)
        ],
        'DRAWS' => [
            'NAME' => (new Declension('ничья', 'ничьи', 'ничьи'))->get(
                ($arResult['PROPERTIES']['DRAWS']['VALUE'] ?: 0)
            ),
            'VALUE' => ($arResult['PROPERTIES']['SEASONS']['VALUE'] ?: 0)
        ],
    ],
    'ABOUT' => [
        'PROGRESS' => [
            'NAME' => 'Достижения в «Авангарде»/«Тракторе»',
            'VALUE' => (!empty($arResult['PROPERTIES']['ACHIEVE']['VALUE'])
                ? $arResult['PROPERTIES']['ACHIEVE']['VALUE']['TEXT'] : 'Данные засекречены'
            ),
        ],
        'CAREER' => [
            'NAME' => 'Карьера тренера',
            'VALUE' => (!empty($arResult['PROPERTIES']['CAREER']['VALUE'])
                ? $arResult['PROPERTIES']['CAREER']['VALUE']['TEXT'] : 'Данные засекречены'
            ),
        ],
    ],
    'BIOGRAPHY_ID' => (!empty($arResult['PROPERTIES']['BIOGRAPHY']['VALUE'])
        ? $arResult['PROPERTIES']['BIOGRAPHY']['VALUE'] : -1
    ),
    'DETAIL_PAGE_URL' => $arResult['DETAIL_PAGE_URL'],

    // для возможности редактирования элемента
    'ID' => $arResult['ID'],
    'IBLOCK_ID' => $arResult['IBLOCK_ID'],
    'EDIT_LINK' => $arResult['EDIT_LINK'],
    'DELETE_LINK' => $arResult['DELETE_LINK'],
];

/*$arResult['COACH']['BIOGRAPHY'] = [];
if (!empty($arResult['PROPERTIES']['BIOGRAPHY']['VALUE'])) {
    foreach (explode(PHP_EOL, $arResult['PROPERTIES']['BIOGRAPHY']['VALUE']['TEXT']) as $text) {
        // пропускаем строки из пробелов
        if (trim($text) == '') {
            continue;
        }
        $arResult['COACH']['BIOGRAPHY'][] = $text;
    }
}*/


?>