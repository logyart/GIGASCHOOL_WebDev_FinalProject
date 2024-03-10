<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <script src="main.js"></script>
<?if($arResult["NavPageCount"] > 1):?>

    <?if ($arResult["NavPageNomer"]+1 <= $arResult["nEndPage"]):?>
        <?
        $plus = $arResult["NavPageNomer"]+1;
        $url = $arResult["sUrlPathParams"] . "PAGEN_".$arResult["NavNum"]."=".$plus;
        ?>

        <!--<div class="load-more-items" data-url="<?php /*=$url*/?>">Показать еще</div>-->
        <a class="load-more-items paginator__link-more" href="<?=$url?>">Показать еще</a>
    <?endif?>

<?endif?>