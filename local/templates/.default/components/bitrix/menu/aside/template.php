<??>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!$arResult) {
    return;
}

if (!function_exists('asidePrintMenu')):?>
    <?function asidePrintMenu(&$items, $lvl = 1, &$n = 0) {
        $item = current($items);
        $nextItem = next($items);
        $n++;
        if ($nextItem && $nextItem['DEPTH_LEVEL'] > $lvl):?>
            <nav class="popup-menu__menu">
                <ul class="p-menu">
                    <li class="p-menu__item" style="float: left;">
                        <a class="p-menu__link" href="<?=$item['LINK']?>">
                            <?=$item['TEXT'];?>
                        </a>
                        <ul class="p-menu__submenu">
                            <li class="p-menu__submenu-back">Назад</li>
                            <?while(true):?>
                                <?
                                $nextItem = asidePrintMenu($items, $lvl+1, $n);
                                if (!$nextItem || $nextItem['DEPTH_LEVEL'] < $lvl+1) {
                                    break;
                                }
                                ?>
                            <?endwhile;?>
                        </ul>
                    </li>
                </ul>
            </nav>
        <?else:?>
            <?if ($lvl > 1):?>
                <li>
                    <a class="p-menu__submenu-link" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
                        <?=trim($item['TEXT'])?>
                    </a>
                </li>
            <?else:?>
                <nav class="popup-menu__menu">
                    <ul class="p-menu">
                        <li class="p-menu__item">
                            <a class="p-menu__link" href="<?=$item['LINK']?>" <?=(mb_stripos($item["LINK"], '://')?'target="_blank"':'')?>>
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
    if (!asidePrintMenu($arResult)) {
        break;
    }
}
?>

