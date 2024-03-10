<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?foreach ($arResult['ITEMS'] as $item):?>
    <? // для появления в режиме правке соответствующих кнопок при наведении на элемент
    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <a id="<?=$this->GetEditAreaId($item['ID']);?>" class="<?=$item['CLASS_NAME']?>" href="<?=($item['PROPERTIES']['LINK']['VALUE'] ?: '#');?>" target="_blank">
        <?if ($item['ICON']):?>
            <img src="<?=$item['ICON'];?>"/>
        <?else: //если нет фото, то загружаем текст html, рисующий картинку?>
            <?=$item['PROPERTIES']['HTML_LOGO']['~VALUE']['TEXT'];?>
        <?endif?>
    </a>
<?endforeach;?>



