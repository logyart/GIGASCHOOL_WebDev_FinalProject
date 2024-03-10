<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach ($arResult['GAME'] as $game):?>
    <?
    // для появления в режиме правке соответствующих кнопок при наведении на элемент
    $this->AddEditAction($game['ID'], $game['EDIT_LINK'], CIBlock::GetArrayByID($game["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($game['ID'], $game['DELETE_LINK'], CIBlock::GetArrayByID($game["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="last-game__result" id="<?=$this->GetEditAreaId($game['ID']);?>">
        <div class="last-game__result-top_heptagons"></div>
        <div class="last-game__result-bot_heptagons"></div>
        <div class="last-game__result-top">
            <div class="last-game__title">Прошедший матч</div>
            <div class="last-game__date"><?=$game['DATE']?> <?=$game['TIMEZONE'];?><br/><?=$game['PLACE']?></div>
        </div>
        <div class="last-game__result-center">
            <div class="last-game__left">
                <div class="team-block">
                    <figure class="team-block__logo">
                        <img src="<?=$game['HC1_LOGO']?>"/>
                    </figure>
                    <figcaption class="team-block__name"><?=$game['HC1_NAME'];?></figcaption>
                    <address class="team-block__city"><?=$game['HC1_CITY'];?></address>
                </div>
            </div>
            <div class="last-game__score"><?=$game['HC1_POINTS'];?> : <?=$game['HC2_POINTS'];?></div>
            <div class="last-game__right">
                <div class="team-block">
                    <figure class="team-block__logo">
                        <img src="<?=$game['HC2_LOGO'];?>"/>
                    </figure>
                    <figcaption class="team-block__name"><?=$game['HC2_NAME'];?></figcaption>
                    <address class="team-block__city"><?=$game['HC2_CITY'];?></address>
                </div>
            </div>
        </div>
    </div>
<?endforeach;?>



