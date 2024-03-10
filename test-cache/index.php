<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Тест кэш");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Тест кэш");

\Bitrix\Main\Loader::includeModule('iblock');

$cache = Bitrix\Main\Data\Cache::createInstance();
$cacheTime = 300;
$cacheId = 'cache-sample-resume-count';
$cacheDir = '/gigaschool-cache-resume-count/';

if ($cache->initCache($cacheTime, $cacheId, $cacheDir))
{
    $result = $cache->getVars();
}
elseif ($cache->startDataCache())
{
    // TODO: обратиться к БД и получить кол-во отправленных резюме
    global $CACHE_MANAGER;
    $CACHE_MANAGER->StartTagCache($cacheDir);
    $CACHE_MANAGER->RegisterTag('iblock_id_4');
    $result = array(
        'resume_count' => CIBlock::GetElementCount(4)
    );
    // ...
    if ($isInvalid)
    {
        $cache->abortDataCache();
    }
    // ...
    $cache->endDataCache($result);
    $CACHE_MANAGER->EndTagCache();
}
echo 'Количество отправленных резюме: ' . $result['resume_count'];
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>