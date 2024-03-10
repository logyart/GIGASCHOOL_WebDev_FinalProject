<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="inner-page">
    <div class="inner-page__title">
        <div class="wrapper">
            <div class="title-block">
                <h1 class="title-block__title">Все главные тренеры клуба</h1>
                <div class="title-block__crumbs">
                    <div class="bread-crumbs">
                        <a class="bread-crumbs__link" href="/">Трактор</a>
                        <a class="bread-crumbs__link" href="/">Клуб</a>
                        <span class="bread-crumbs__this">Руководство</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-page__content">
        <div class="wrapper">
            <div class="coaches">
                <div class="coaches__list">
                    <?foreach ($arResult['COACHES'] as $coach):?>
                        <?
                        // для появления в режиме правке соответствующих кнопок при наведении на элемент
                        $this->AddEditAction($coach['ID'], $coach['EDIT_LINK'], CIBlock::GetArrayByID($coach["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($coach['ID'], $coach['DELETE_LINK'], CIBlock::GetArrayByID($coach["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <a class="coaches__item" id="<?=$this->GetEditAreaId($coach['ID']);?>" href="<?=$coach['DETAIL_PAGE_URL']?>">
                            <figure class="coaches__item-img">
                                <img src="<?=$coach['PHOTO']?>" loading="lazy" alt="<?=$coach['NAME']?>"/>
                            </figure>
                            <div class="coaches__item-title"><?=$coach['NAME']?></div>
                            <div class="coaches__item-text">Родился <?=$coach['BIRTH']?> года</div>
                        </a>
                    <?endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>
