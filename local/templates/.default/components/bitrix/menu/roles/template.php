<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
// бомж-замена окончаний для множественного числа
function editEndOfWord($text) {
    if (mb_substr($text, -1) == 'к')
        $text = $text . 'и';
    else if (mb_substr($text,-1) == 'ь')
        $text = mb_substr($text, 0,-1) . 'и';
    else if (mb_substr($text, -2) == 'ий')
        $text = mb_substr($text, 0,-2) . 'ие';
    return $text;
}

if (!$arResult) {
    return;
}

if (!function_exists('rolesPrintMenu')):?>
    <?function rolesPrintMenu(&$items, $lvl = 1, &$n = 0) {
        $item = current($items);
        $nextItem = next($items);
        $n++;
        if ($nextItem && $nextItem['DEPTH_LEVEL'] > $lvl):?>
            <a class="team-sort__link <?if($item['SELECTED']):?> active <?endif;?>" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                <?=editEndOfWord(trim($item['TEXT']))?>
            </a>
            <?while(true):?>
                <?
                $nextItem = rolesPrintMenu($items, $lvl+1, $n);
                if (!$nextItem || $nextItem['DEPTH_LEVEL'] < $lvl+1) {
                    break;
                }
                ?>
            <?endwhile;?>
        <?else:?>
            <?if ($lvl > 1): // здесь submenu?>
                <a class="team-sort__link <?if($item['SELECTED']):?> active <?endif;?>" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                    <?=editEndOfWord(trim($item['TEXT']))?>
                </a>
            <?else:?>
                <a class="team-sort__link <?if($item['SELECTED']):?> active <?endif;?>"  href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                    <?=editEndOfWord(trim($item['TEXT']))?>
                </a>
            <?endif;?>
        <?endif;?>

        <?return $nextItem;
    }?>
<?endif;?>

<?
while (true) {
    if (!rolesPrintMenu($arResult)) {
        break;
    }
}
?>



