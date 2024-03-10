<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



foreach ($arResult['ITEMS'] as &$item) {
    $item['ICON'] = CFile::GetPath($item['PROPERTIES']['LOGO']['VALUE']);
    // название класса в верстке для правильной стилизации
    switch($item['IBLOCK_SECTION_ID']) {
        case 7:
        case 8:
            $item['CLASS_NAME'] =  'fbs__list-item';
            break;
        case 11:
        case 12:
            $item['CLASS_NAME'] =  's-list__item';
            break;
        case 10:
            $item['CLASS_NAME'] = 'apps__link';
            break;
        case 13:
            $item['CLASS_NAME'] = 'soc__link';
            break;
    }
}

unset($item);
?>

