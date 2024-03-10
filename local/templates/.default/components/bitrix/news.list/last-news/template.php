<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach ($arResult['NEWS'] as $news):?>
    <?
    // для появления в режиме правке соответствующих кнопок при наведении на элемент
    $this->AddEditAction($news['ID'], $news['EDIT_LINK'], CIBlock::GetArrayByID($news["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($news['ID'], $news['DELETE_LINK'], CIBlock::GetArrayByID($news["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?if ($news['PHOTO']):?>
        <div class="swiper-slide" id="<?=$this->GetEditAreaId($news['ID']);?>">
            <div class="slider__slide">
                <a class="news__slide" href="<?=$news['DETAIL_PAGE_URL']?>">
                    <div class="news__slide-img">
                        <img src="<?=$news['PHOTO']?>" alt="<?=$news['NAME']?>"/></div>
                    <div class="news__slide-info">
                        <div class="news__slide-title"><?=$news['NAME']?></div>
                        <div class="news__slide-date"><?=$news['DATE']?></div>
                    </div>
                </a>
            </div>
        </div>
    <?else:?>
        <a class="main-news__item" href="<?=$news['DETAIL_PAGE_URL']?>" id="<?=$this->GetEditAreaId($news['ID']);?>">
            <div class="main-news__item-title"><?=$news['NAME']?></div>
        </a>
    <?endif;?>

<?endforeach;?>



