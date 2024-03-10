<?php

if ($arParams['IBLOCK_ID'] <= 0)
    die('ID инфоблока должен быть больше нуля');
$arResult['IBLOCK_ID'] = $arParams['IBLOCK_ID'];

if ($arParams['PARENT_SECTION_ID'] != '' &&
    $arParams['PARENT_SECTION_ID'] <= 0)
    die('ID раздела инфоблока должен быть больше нуля');
$arResult['PARENT_SECTION_ID'] = $arParams['PARENT_SECTION_ID'];

//TODO: ещё кучу проверок добавить...

foreach ($arParams['FIELD_CODE'] as $field) {
    $arResult['FIELDS'][] = $field;
}

foreach ($arParams['PROPERTY_CODE'] as $property) {
    $arResult['PROPERTIES'][] = $property;
}

$this->includeComponentTemplate();
