<??>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!$arResult) {
    return;
}

if (!function_exists('bottomPrintMenu')):?>
    <?function bottomPrintMenu(&$items, $lvl = 1, &$n = 0) {
        $item = current($items);
        $nextItem = next($items);
        $n++;
        if ($nextItem && $nextItem['DEPTH_LEVEL'] > $lvl):?>
            <nav class="f-menu__menu">
                <ul class="f-menu">
                    <li>
                        <a class="f-menu__link" href="<?=$item['LINK']?>">
                            <?=$item['TEXT'];?>
                        </a>
                        <?while(true):?>
                            <?
                            $nextItem = bottomPrintMenu($items, $lvl+1, $n);
                            if (!$nextItem || $nextItem['DEPTH_LEVEL'] < $lvl+1) {
                                break;
                            }
                            ?>
                        <?endwhile;?>
                    </li>
                </ul>
            </nav>
        <?else:?>
            <?if ($lvl > 1):?>
                <ul class="f-menu__submenu">
                    <li>
                        <a class="f-menu__submenu-link" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                            <?=trim($item['TEXT'])?>
                        </a>
                    </li>
                </ul>
            <?else:?>
                <nav class="f-menu__menu">
                    <ul class="f-menu">
                        <li>
                            <a class="f-menu__link" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                                <?=trim($item['TEXT'])?>
                            </a>
                        </li>
                    </ul>
                </nav>
            <?endif;?>
        <?endif?>

        <?return $nextItem;
    }?>
<?endif?>

<?
while (true) {
    if (!bottomPrintMenu($arResult)) {
        break;
    }
}
?>

