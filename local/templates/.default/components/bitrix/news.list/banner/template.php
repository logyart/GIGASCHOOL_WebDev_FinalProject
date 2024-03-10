<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach ($arResult['BANNERS'] as $banner):?>
    <?
    // для появления в режиме правке соответствующих кнопок при наведении на элемент
    $this->AddEditAction($banner['ID'], $banner['EDIT_LINK'], CIBlock::GetArrayByID($banner["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($banner['ID'], $banner['DELETE_LINK'], CIBlock::GetArrayByID($banner["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?if ($arResult['SECTION']['PATH'][0]['ID'] == 15):?>
        <a class="swiper-slide" id="<?=$this->GetEditAreaId($banner['ID']);?>" href="<?=$banner['LINK']?>" target="_blank">
            <?if (!empty($banner['DESCRIPTION'])):?>
                <div class="main-slider__slide-cont">
                    <div class="wrapper">
                        <div class="main-slider__slide">
                            <div class="main-slider__slide-img">
                                <img src="<?=$banner['FILE']?>" alt=""/>
                            </div>
                            <div class="main-slider__slide-info">
                                <div class="main-slider__slide-title"><?=$banner['NAME']?></div>
                                <div class="main-slider__slide-text"><?=$banner['DESCRIPTION'];?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?else:?>
                <picture class="main-slider__img">
                    <source media="(min-width: 667px)" srcset="<?=$banner['FILE']?>"/>
                    <source media="(max-width: 667px)" srcset="<?=$banner['FILE']?>"/>
                    <img src="<?=$banner['FILE']?>" alt=""/>
                </picture>
            <?endif;?>
        </a>
    <?else:?>
        <a class="main-banner__link" id="<?=$this->GetEditAreaId($banner['ID']);?>" href="<?=$banner['LINK']?>" target="_blank">
            <img src="<?=$banner['FILE']?>" alt=""/>
        </a>
    <?endif;?>
<?endforeach;?>



