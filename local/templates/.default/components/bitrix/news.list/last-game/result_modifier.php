<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult['GAME'] = [];
foreach ($arResult['ITEMS'] as $item) {
    $hc1 = CIBlockELement::GetList([], ['ID' => $item['PROPERTIES']['HOCKEY_CLUB_1']['VALUE']])->GetNextElement();
    $hc2 = CIBlockELement::GetList([], ['ID' => $item['PROPERTIES']['HOCKEY_CLUB_2']['VALUE']])->GetNextElement();
    $hc1Fields = $hc1->GetFields();
    $hc1Props = $hc1->GetProperties();
    $hc2Fields = $hc2->GetFields();
    $hc2Props = $hc2->GetProperties();

    $arResult['GAME'][] = [
        'HC1_NAME' => $hc1Fields['NAME'],
        'HC1_LOGO' => CFile::GetPath($hc1Props['LOGO']['VALUE']),
        'HC1_CITY' => $hc1Props['CITY']['VALUE'],
        'HC1_POINTS' => $item['PROPERTIES']['POINTS_HOCKEY_CLUB_1']['VALUE'],

        'HC2_NAME' => $hc2Fields['NAME'],
        'HC2_LOGO' => CFile::GetPath($hc2Props['LOGO']['VALUE']),
        'HC2_CITY' => $hc2Props['CITY']['VALUE'],
        'HC2_POINTS' => $item['PROPERTIES']['POINTS_HOCKEY_CLUB_2']['VALUE'],

        'PLACE' => $item['PROPERTIES']['PLACE']['VALUE'],
        'TIMEZONE' => $item['PROPERTIES']['TIMEZONE']['VALUE'],
        'DATE' =>  FormatDate('d M G:i', MakeTimeStamp($item['PROPERTIES']['DATE']['VALUE'])),
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