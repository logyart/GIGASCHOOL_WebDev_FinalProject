<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach ($arResult['BIOGRAPHY'] as $biography):?>
    <?
    // для появления в режиме правке соответствующих кнопок при наведении на элемент
    $this->AddEditAction($biography['ID'], $biography['EDIT_LINK'], CIBlock::GetArrayByID($biography["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($biography['ID'], $biography['DELETE_LINK'], CIBlock::GetArrayByID($biography["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="coach-timeline__item" id="<?=$this->GetEditAreaId($biography['ID']);?>">
        <div class="coach-timeline__item-title">
            <?=$biography['TITLE'];?>
        </div>
        <div class="coach-timeline__item-text">
            <?=$biography['TEXT'];?>
        </div>
    </div>
<?endforeach;?>



