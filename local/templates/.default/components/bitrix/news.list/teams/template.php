<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$APPLICATION->addViewContent('team-name', $arResult['TEAM']);

?>
<?/*echo 'RAZDEL: '*/?>
<!--<pre><?/*print_r($arResult)*/?></pre>-->
<?//echo $APPLICATION->GetCurUri();?>
<?parse_str(parse_url($APPLICATION->GetCurUri(), PHP_URL_QUERY), $params);
?><!--<pre><?/*print_r($params)*/?></pre>-->
<? $id = preg_replace("/[^0-9]/", '', $params['role']);?>

<!--<div class="inner-page__content">
    <div class="wrapper">
        <div class="team">
            <div class="team__top">
                <div class="team-sort">
                    <?/*$APPLICATION->IncludeComponent("bitrix:menu","roles",Array(
                            "ROOT_MENU_TYPE" => "roles",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "Y",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => ""
                        )
                    );*/?>
                </div>
                <div class="type">
                    <div class="type__item type__item--plate"></div>
                    <div class="type__item type__item--row active"></div>
                </div>
            </div>-->
<div class="team-row__list">
    <?foreach ($arResult['PLAYERS'] as $player):?>
        <?
        // для появления в режиме правке соответствующих кнопок при наведении на элемент
        $this->AddEditAction($player['ID'], $player['EDIT_LINK'], CIBlock::GetArrayByID($player["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($player['ID'], $player['DELETE_LINK'], CIBlock::GetArrayByID($player["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="team-row__item" data-number="<?=$player['NUMBER']?>" id="<?=$this->GetEditAreaId($player['ID']);?>">
            <div class="tr-item--left">
                <div class="tr-item__info">
                    <div class="tr-item__title"><?=$player['SURNAME']?><br> <?=$player['NAME']?></div>
                    <div class="tr-item__subtitle">Родился <?=$player['BIRTH']?><br> в <?=$player['COUNTRY']?></div>
                    <div class="tr-item__statistic">
                        <div class="statistic__list">
                            <?foreach ($player['STATS'] as $stats):?>
                                <div class="statistic__item">
                                    <div class="statistic__item-progress"><span style="width: 49%"></span></div>
                                    <div class="statistic__item-number"><?=$stats['VALUE']?></div>
                                    <div class="statistic__item-text"><?=$stats['NAME']?></div>
                                </div>
                            <?endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tr-item--right">
                <figure class="tr-item__img">
                    <img src="<?=$player['PHOTO']?>"/>
                </figure>
                <div class="tr-item__number"><?=$player['NUMBER']?></div>
                <div class="tr-item__more">
                    <a href="<?=$player['DETAIL_PAGE_URL']?>">Подробнее о <?=$player['ROLE']?></a>
                </div>
            </div>
        </div>
    <?endforeach;?>
</div>
<!-- </div>
</div>
</div>-->






