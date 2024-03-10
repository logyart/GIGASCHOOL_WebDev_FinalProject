<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!$arResult) {
    return;
}

if (!function_exists('topPrintMenu')):?>
    <?function topPrintMenu(&$items, $lvl = 1, &$n = 0) {
        $item = current($items);
        $nextItem = next($items);
        $n++;
        if ($nextItem && $nextItem['DEPTH_LEVEL'] > $lvl):?>
            <li>
                <a class="h-menu__link" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                    <?=trim($item['TEXT'])?>
                </a>
                <?while(true):?>
                    <?
                    $nextItem = topPrintMenu($items, $lvl+1, $n);
                    if (!$nextItem || $nextItem['DEPTH_LEVEL'] < $lvl+1) {
                        break;
                    }
                    ?>
                <?endwhile;?>
            </li>

        <?else:?>
            <?if ($lvl > 1): // здесь submenu?>
                <a class="h-menu__link" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                    <?=trim($item['TEXT'])?>
                </a>
            <?else:?>
                <li>
                    <a class="h-menu__link" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                        <?=trim($item['TEXT'])?>
                    </a>
                </li>
            <?endif;?>
        <?endif;?>

        <?return $nextItem;
    }?>
<?endif;?>

<?
while (true) {
    if (!topPrintMenu($arResult)) {
        break;
    }
}
?>


