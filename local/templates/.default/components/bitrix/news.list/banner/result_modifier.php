<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult['BANNERS'] = [];
foreach ($arResult['ITEMS'] as $item) {

    $arResult['BANNERS'][] = [
        'NAME' => $item['NAME'],
        'DESCRIPTION' => ($item['PROPERTIES']['DESCRIPTION']['VALUE'] ? $item['PROPERTIES']['DESCRIPTION']['VALUE']['TEXT'] : ''),
        'LINK' =>  $item['PROPERTIES']['LINK']['VALUE'],
        'FILE' =>  CFile::GetPath($item['PROPERTIES']['FILE']['VALUE']),
        /*'PHOTO' => \CFile::resizeImageGet(
            $item['PROPERTIES']['PHOTO']['VALUE'],
            ['width' => 800, 'height' => 600],
            BX_RESIZE_IMAGE_EXACT
        ),*/

        // для возможности редактирования элемента
        'ID' => $item['ID'],
        'IBLOCK_ID' => $item['IBLOCK_ID'],
        'EDIT_LINK' => $item['EDIT_LINK'],
        'DELETE_LINK' => $item['DELETE_LINK'],
    ];
}
?>