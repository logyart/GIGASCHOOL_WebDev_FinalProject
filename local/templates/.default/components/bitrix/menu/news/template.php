<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!$arResult) {
    return;
}

if (!function_exists('newsPrintMenu')):?>
    <?function newsPrintMenu(&$items, $lvl = 1, &$n = 0) {
        $item = current($items);
        $nextItem = next($items);
        $n++;
        if ($nextItem && $nextItem['DEPTH_LEVEL'] > $lvl):?>
            <a class="links__item <?if($item['SELECTED']):?> active <?endif;?>" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                <?=trim($item['TEXT'])?>
            </a>
            <?while(true):?>
                <?
                $nextItem = newsPrintMenu($items, $lvl+1, $n);
                if (!$nextItem || $nextItem['DEPTH_LEVEL'] < $lvl+1) {
                    break;
                }
                ?>
            <?endwhile;?>
        <?else:?>
            <?if ($lvl > 1):?>
                <a class="links__item <?if($item['SELECTED']):?> active <?endif;?>" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                    <?=trim($item['TEXT'])?>
                </a>
            <?else:?>
                <a class="links__item <?if($item['SELECTED']):?> active <?endif;?>" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                    <?=trim($item['TEXT'])?>
                </a>
            <?endif;?>
        <?endif;?>

        <?return $nextItem;
    }?>
<?endif;?>

<?
while (true) {
    if (!newsPrintMenu($arResult)) {
        break;
    }
}
?>



