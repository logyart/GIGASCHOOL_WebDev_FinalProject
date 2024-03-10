<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult['COACHES'] = [];
foreach ($arResult['ITEMS'] as $item) {

    $arResult['COACHES'][] = [
        'NAME' => $item['NAME'],
        /*'PHOTO' => \CFile::resizeImageGet(
            $item['PROPERTIES']['PHOTO']['VALUE'],
            ['width' => 800, 'height' => 600],
            BX_RESIZE_IMAGE_EXACT
        ),*/
        'PHOTO' => CFile::GetPath($item['PROPERTIES']['PHOTO']['VALUE']),
        'BIRTH' => FormatDate(
            'j F Y',
            MakeTimeStamp($item['PROPERTIES']['BIRTH']['VALUE'], CSite::GetDateFormat())
        ),
        'DETAIL_PAGE_URL' => $item['DETAIL_PAGE_URL'],

        // для возможности редактирования элемента
        'ID' => $item['ID'],
        'IBLOCK_ID' => $item['IBLOCK_ID'],
        'EDIT_LINK' => $item['EDIT_LINK'],
        'DELETE_LINK' => $item['DELETE_LINK'],
    ];
}
?>