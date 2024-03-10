<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Grid\Declension;

$photo =  \CFile::resizeImageGet(
    $arResult['PROPERTIES']['PHOTO']['VALUE'],
    ['width' => 490, 'height' => 490],
    BX_RESIZE_IMAGE_PROPORTIONAL
);

// бомж-замена окончаний
$role_about= mb_strtolower($arResult['PROPERTIES']['ROLE']['VALUE']);
$role_plural = mb_strtolower($arResult['PROPERTIES']['ROLE']['VALUE']);
if (mb_substr($role_about,-1) == 'к') {
    $role_about= $role_about. 'е';
    $role_plural = $role_plural . 'и';
}
else if (mb_substr($role_about,-1) == 'ь') {
    $role_about= mb_substr($role_about,0,-1) . 'е';
    $role_plural = mb_substr($role_plural, 0,-1) . 'и';
}
else if (mb_substr($role_about,-2) == 'ий'){
    $role_about= mb_substr($role_about,0,-2) . 'ем';
    $role_plural = mb_substr($role_plural, 0,-2) . 'ие';
}

$arResult['PLAYER'] = [
    'NAME' => $arResult['NAME'],
    //'PHOTO' => CFile::GetPath($arResult['PROPERTIES']['PHOTO']['VALUE']),
    'PHOTO' => $photo['src'],
    'BIRTH' => FormatDate(
        'j F Y',
        MakeTimeStamp($arResult['PROPERTIES']['BIRTH']['VALUE'], CSite::GetDateFormat())
    ),
    'COUNTRY' => ($arResult['PROPERTIES']['COUNTRY']['VALUE'] ?: 'РФ'),

    'STATS' => [
        'MATCHES' => [
            'NAME' => (new Declension('матч', 'матча', 'матчей'))->get(
                ($arResult['PROPERTIES']['MATCHES']['VALUE'] ?: 0)
            ),
            'VALUE' => ($arResult['PROPERTIES']['MATCHES']['VALUE'] ?: 0)
        ],
        'POINTS' => [
            'NAME' => (new Declension('очко', 'очка', 'очков'))->get(
                ($arResult['PROPERTIES']['POINTS']['VALUE'] ?: 0)
            ),
            'VALUE' => ($arResult['PROPERTIES']['POINTS']['VALUE'] ?: 0)
        ],
        'PENALTY' => [
            'NAME' => (new Declension('минута штрафа', 'минуты штрафа', 'минут штрафа'))->get(
                ($arResult['PROPERTIES']['PENALTY']['VALUE'] ?: 0)
            ),
            'VALUE' => ($arResult['PROPERTIES']['PENALTY']['VALUE'] ?: 0)
        ],
        'POWERS' => [
            'NAME' => (new Declension('силовой прием', 'силового приема', 'силовых приемов'))->get(
                ($arResult['PROPERTIES']['POWERS']['VALUE'] ?: 0)
            ),
            'VALUE' => ($arResult['PROPERTIES']['POWERS']['VALUE'] ?: 0)
        ],
        'THROW' => [
            'NAME' => (new Declension('бросок', 'броска', 'бросков'))->get(
                ($arResult['PROPERTIES']['THROW']['VALUE'] ?: 0)
            ),
            'VALUE' => ($arResult['PROPERTIES']['THROW']['VALUE'] ?: 0)
        ],
    ],
    'PARAMS' => [
        'HEIGHT' => [
            'NAME' => $arResult['PROPERTIES']['HEIGHT']['NAME'],
            'VALUE' => ($arResult['PROPERTIES']['HEIGHT']['VALUE'] ?: 0) . ' см',
        ],
        'WEIGHT' => [
            'NAME' => $arResult['PROPERTIES']['WEIGHT']['NAME'],
            'VALUE' => ($arResult['PROPERTIES']['WEIGHT']['VALUE'] ?: 0) . ' кг',
        ],
        'GRIP' => [
            'NAME' => $arResult['PROPERTIES']['GRIP']['NAME'],
            'VALUE' => ($arResult['PROPERTIES']['GRIP']['VALUE'] ?: 0),
        ],
    ],
    'HISTORY' => [
        'DRAFTS' => [
            'NAME' => $arResult['PROPERTIES']['DRAFT']['NAME'],
            'VALUE' => (!empty($arResult['PROPERTIES']['DRAFT']['VALUE'])
                ? $arResult['PROPERTIES']['DRAFT']['VALUE']['TEXT'] : 'Данные засекречены'),
        ],
        'PROGRESS' => [
            'NAME' => $arResult['PROPERTIES']['ACHIEVE']['NAME'],
            'VALUE' => (!empty($arResult['PROPERTIES']['ACHIEVE']['VALUE'])
                ? $arResult['PROPERTIES']['ACHIEVE']['VALUE']['TEXT'] : 'Данные засекречены'),
        ],
        'CAREER' => [
            'NAME' => $arResult['PROPERTIES']['CAREER']['NAME'],
            'VALUE' => (!empty($arResult['PROPERTIES']['CAREER']['VALUE'])
                ? $arResult['PROPERTIES']['CAREER']['VALUE']['TEXT'] : 'Данные засекречены'),
        ],
        'ABOUT' => [
            'NAME' => 'о ' . $role_about,
            'VALUE' => (!empty($arResult['PROPERTIES']['BIOGRAPHY']['VALUE'])
                ? $arResult['PROPERTIES']['BIOGRAPHY']['VALUE']['TEXT'] : 'Данные засекречены')
        ],
    ],

    'TEAM_ID' => $arResult['IBLOCK_SECTION_ID'],
    'ROLE' => [
        'SINGULAR' => $arResult['PROPERTIES']['ROLE']['VALUE'],
        'PLURAL' => $role_plural,
        'ABOUT' => $role_about,
    ],
    'NUMBER' => $arResult['PROPERTIES']['NUMBER']['VALUE'],
    'DETAIL_PAGE_URL' => $arResult['DETAIL_PAGE_URL'],

    // для возможности редактирования элемента
    'ID' => $arResult['ID'],
    'IBLOCK_ID' => $arResult['IBLOCK_ID'],
    'EDIT_LINK' => $arResult['EDIT_LINK'],
    'DELETE_LINK' => $arResult['DELETE_LINK'],
];

?>