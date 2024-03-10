
<?
global $APPLICATION;
$aMenuLinks = [
    Array(
        'Все',
        $APPLICATION->GetCurDir(),
        Array(),
        Array(),
        '',
    ),

];
$roles = CIBlockPropertyEnum::GetList(Array('ID' => 'ASC'), Array("IBLOCK_ID" => 17, "CODE" => "ROLE"));
while ($role = $roles->GetNext())
{
    $aMenuLinks[] = Array(
        $role['VALUE'],
        $APPLICATION->GetCurDir() . '?role=' . $role['ID'] . '/',
        Array(),
        Array(),
        '',
    );
}
?>