<?
$aMenuLinks = [
    Array(
        'Все новости',
        'news/',
        Array(),
        Array(),
        '',
    )
];
$rsSect = CIBlockSection::GetList(['ID' => 'ASC'], ['IBLOCK_ID' => 16]);
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