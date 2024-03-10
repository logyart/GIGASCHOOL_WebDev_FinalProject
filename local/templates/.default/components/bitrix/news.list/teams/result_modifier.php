<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Grid\Declension;

$arResult['TEAM'] = $arResult['SECTION']['PATH'][0]['NAME'];

$arResult['PLAYERS'] = [];

foreach ($arResult['ITEMS'] as $item) {
    $fullname = explode(' ', $item['NAME']);

    $role = mb_strtolower($item['PROPERTIES']['ROLE']['VALUE']);
    // бомж-замена окончаний
    if (mb_substr($role, -1) == 'к')
        $role = $role . 'е';
    else if (mb_substr($role,-1) == 'ь')
        $role = mb_substr($role, 0,-1) . 'е';
    else if (mb_substr($role, -2) == 'ий')
        $role = mb_substr($role, 0,-2) . 'ем';

    /*$photo =  \CFile::resizeImageGet(
        $arResult['PROPERTIES']['PHOTO']['VALUE'],
        ['width' => 490, 'height' => 490],
        BX_RESIZE_IMAGE_PROPORTIONAL
    );*/

    $arResult['PLAYERS'][] = [
        'SURNAME' => $fullname[0],
        'NAME' => $fullname[1],
        //'PHOTO' => $photo['src'],
        'PHOTO' => CFile::GetPath($item['PROPERTIES']['PHOTO']['VALUE']),
        'BIRTH' => FormatDate(
                'j F Y',
                MakeTimeStamp($item['PROPERTIES']['BIRTH']['VALUE'], CSite::GetDateFormat())
        ),
        'COUNTRY' => $item['PROPERTIES']['COUNTRY']['VALUE'],

        'STATS' => [
            'MATCHES' => [
                'NAME' => (new Declension('матч', 'матча', 'матчей'))->get(
                    ($item['PROPERTIES']['MATCHES']['VALUE'] ?: 0)
                ),
                'VALUE' => ($item['PROPERTIES']['MATCHES']['VALUE'] ?: 0)
            ],
            'POINTS' => [
                'NAME' => (new Declension('очко', 'очка', 'очков'))->get(
                    ($item['PROPERTIES']['POINTS']['VALUE'] ?: 0)
                ),
                'VALUE' => ($item['PROPERTIES']['POINTS']['VALUE'] ?: 0)
            ],
            'PENALTY' => [
                'NAME' => (new Declension('минута штрафа', 'минуты штрафа', 'минут штрафа'))->get(
                    ($item['PROPERTIES']['PENALTY']['VALUE'] ?: 0)
                ),
                'VALUE' => ($item['PROPERTIES']['PENALTY']['VALUE'] ?: 0)
            ],
            'POWERS' => [
                'NAME' => (new Declension('силовые приемы', 'силового приема', 'силовых приемов'))->get(
                    ($item['PROPERTIES']['POWERS']['VALUE'] ?: 0)
                ),
                'VALUE' => ($item['PROPERTIES']['POWERS']['VALUE'] ?: 0)
            ],
            'THROW' => [
                'NAME' => (new Declension('бросок', 'броска', 'бросков'))->get(
                    ($item['PROPERTIES']['THROW']['VALUE'] ?: 0)
                ),
                'VALUE' => ($item['PROPERTIES']['THROW']['VALUE'] ?: 0)
            ],
        ],

        'TEAM_ID' => $arResult['IBLOCK_SECTION_ID'],
        'ROLE' => $role,
        'NUMBER' => $item['PROPERTIES']['NUMBER']['VALUE'],
        'DETAIL_PAGE_URL' => $item['DETAIL_PAGE_URL'],

        // для возможности редактирования элемента
        'ID' => $item['ID'],
        'IBLOCK_ID' => $item['IBLOCK_ID'],
        'EDIT_LINK' => $item['EDIT_LINK'],
        'DELETE_LINK' => $item['DELETE_LINK'],
    ];
}
?>