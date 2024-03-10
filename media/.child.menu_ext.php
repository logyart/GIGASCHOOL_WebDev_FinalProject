<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
\Bitrix\Main\Loader::includeModule('iblock');
global $APPLICATION;
// если нужно вывести разделы инфоблока
$aMenuLinksExt = $APPLICATION->IncludeComponent("bitrix:menu.sections","",Array(
		"ID" => $_REQUEST['SECTION_ID'],
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "8",
		"DEPTH_LEVEL" => "2",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>

<?
// если нужно вывести элементы инфоблока
/*$rsItems = \CIBlockSection::getList(
    [],
    [
        'IBLOCK_ID' => 8,
        'ACTIVE' => 'Y',
    ],
    false,
    [
        'ID',
        'IBLOCK_ID',
        'NAME',
        'SECTION_PAGE_URL',
    ]
);

while ($section = $rsItems->getNext()) {
    $aMenuLinks[] = [
        $section['NAME'],
        $section['SECTION_PAGE_URL'],
        Array(),
        Array(),
        "",
    ];
}*/

?>
