<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult['BIOGRAPHY'] = [];
foreach ($arResult['ITEMS'] as $item) {

    $arResult['BIOGRAPHY'][] = [
        'TITLE' => $item['NAME'],
        'TEXT' => $item['PROPERTIES']['TEXT']['VALUE']['TEXT'],

        // для возможности редактирования элемента
        'ID' => $item['ID'],
        'IBLOCK_ID' => $item['IBLOCK_ID'],
        'EDIT_LINK' => $item['EDIT_LINK'],
        'DELETE_LINK' => $item['DELETE_LINK'],
    ];
}
?>