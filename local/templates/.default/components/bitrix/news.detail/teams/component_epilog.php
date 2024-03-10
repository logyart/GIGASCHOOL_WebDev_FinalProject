<?
$teamName = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID'])->GetNext()['NAME'];
$APPLICATION->addViewContent('team-name', $teamName);

?>