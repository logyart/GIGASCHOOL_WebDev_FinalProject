<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$aMenuLinks = [];
$rsSect = CIBlockSection::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 17]);
while ($section = $rsSect->GetNext())
{
    $aMenuLinks[] = Array(
        $section['NAME'],
        $section['SECTION_PAGE_URL'].'/',
        Array(),
        Array(),
        '',
    );
}
?>
<?/*$aMenuLinks = Array(
	Array(
		"Трактор",
		"./",
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Белые медведи",
		"arenda-photograph/",
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Челмет",
		"events/",
		Array(), 
		Array(), 
		"" 
	),
);
*/?>