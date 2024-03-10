<?php
$photo =  \CFile::resizeImageGet(
    $arResult['PROPERTIES']['PHOTO']['VALUE'],
    ['width' => 940, 'height' => 420],
    BX_RESIZE_IMAGE_PROPORTIONAL
);

$arResult['NEWS'] = [
    'NAME' => $arResult['NAME'],
    'PHOTO_CAPTION' => $arResult['PROPERTIES']['PHOTO_CAPTION']['VALUE'],
    //'PHOTO' => CFile::GetPath($arResult['PROPERTIES']['PHOTO']['VALUE']),
    'PHOTO' => $photo['src'],

    'TEXT' => $arResult['PROPERTIES']['TEXT_NEWS']['~VALUE']['TEXT'],
    'LINKS' => [
        'KHL' => [
            'NAME' => $arResult['PROPERTIES']['PROFILE_KHL']['NAME'],
            'VALUE' => $arResult['PROPERTIES']['PROFILE_KHL']['VALUE'],
        ],
        'EP' => [
            'NAME' => $arResult['PROPERTIES']['PROFILE_EP']['NAME'],
            'VALUE' => $arResult['PROPERTIES']['PROFILE_EP']['VALUE'],
        ],
    ]
];

$arResult['BANNERS'] = [];
$res = CIBlockELement::GetList(['NAME' => 'ASC'], ['SECTION_ID' => 7]);
while ($banner = $res->GetNextElement()) {
    $bannerProps = $banner->GetProperties();
    $bannerFields = $banner->GetFields();

    // если нет большого лого, то пропускаем
    if (!($bannerLogoId = $bannerProps['LOGO_BANNER']['VALUE'])) continue;

    $arButtons = CIBlock::GetPanelButtons(10, $bannerFields['ID']);

    $arResult['BANNERS'][] = [
        'ID' => $bannerFields['ID'],
        'IBLOCK_ID' => $bannerFields['IBLOCK_ID'],
        'LOGO' => CFile::GetPath($bannerLogoId),
        'LINK' => $bannerProps['LINK']['VALUE'],
        'EDIT_LINK' => $arButtons["edit"]["edit_element"]["ACTION_URL"],
        'DELETE_LINK' => $arButtons["edit"]["delete_element"]["ACTION_URL"],
    ];
}


// сортировку берем из параметров компонента
$arSort = array(
    $arParams["SORT_BY1"] => $arParams["SORT_ORDER1"],
    $arParams["SORT_BY2"] => $arParams["SORT_ORDER2"],
);

$arSelect = array(
    "ID",
    "DETAIL_PAGE_URL"
);

$arFilter = array(
    "IBLOCK_ID" => $arResult["IBLOCK_ID"],
    "SECTION_CODE" => $arParams["SECTION_CODE"],
);

// выбирать будем по 1 соседу с каждой стороны от текущего
$arNavParams = array(
    "nPageSize" => 1,
    "nElementID" => $arResult["ID"],
);


$rsElement = CIBlockElement::GetList($arSort, $arFilter, false, $arNavParams, $arSelect);
$rsElement->SetUrlTemplates($arParams["DETAIL_URL"]);

$arItems = [];
while ($obElement = $rsElement->GetNextElement())
    $arItems[] = $obElement->GetFields();

// возвращается от 1го до 3х элементов в зависимости от наличия соседей, обрабатываем эту ситуацию
if (count($arItems) == 3) {
    $arResult["NEXT"] = $arItems[0]["DETAIL_PAGE_URL"];
    $arResult["PREV"] = $arItems[2]["DETAIL_PAGE_URL"];
}
elseif (count($arItems) == 2) {
    if ($arItems[0]["ID"] != $arResult["ID"])
        $arResult["NEXT"] = $arItems[0]["DETAIL_PAGE_URL"];
    else
        $arResult["PREV"] = $arItems[1]["DETAIL_PAGE_URL"];
}

// в $arResult["TORIGHT"] и $arResult["TOLEFT"] лежат ссылки соседних элементов

