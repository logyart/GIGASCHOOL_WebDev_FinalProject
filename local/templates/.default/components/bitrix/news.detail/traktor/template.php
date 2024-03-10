<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$APPLICATION->SetTitle($arResult['NAME']);
$news = $arResult['NEWS'];?>

<div class="inner-page">
    <div class="inner-page__title">
        <div class="wrapper">
            <div class="title-block">
                <h1 class="title-block__title"><?=$news['NAME']?></h1>
                <div class="title-block__crumbs">
                    <div class="bread-crumbs">
                        <a class="bread-crumbs__link" href="/">Трактор</a>
                        <a class="bread-crumbs__link" href="/media">Медиа</a>
                        <span class="bread-crumbs__this">Новости клуба</span>
                    </div>
                </div>
            </div>
            <div class="page-color">
                <div class="page-color__black"></div>
                <div class="page-color__white"></div>
            </div>
        </div>
    </div>
    <div class="inner-page__content">
        <div class="wrapper">
            <div class="standart-page">
                <div class="standart-page__text">
                    <figure class="standart-page__img">
                        <img src="<?=$news['PHOTO'];?>"/>
                        <figcaption><?=$news['PHOTO_CAPTION']?></figcaption>
                    </figure>
                    <?=$news['TEXT']?>
                    <div class="sp__links">
                        <?foreach ($news['LINKS'] as $link):?>
                            <a class="sp__link" href="<?=$link['VALUE']?>" target="_blank"><?=$link['NAME']?></a>
                        <?endforeach;?>
                    </div>
                    <div class="sharing">
                        <a class="sharing-link" href="">Поделиться новостью</a>
                        <div class="soc">
                            <?$APPLICATION->IncludeComponent("bitrix:news.list","icons",Array(
                                    "FILTER_NAME" => "",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "AJAX_MODE" => "N",
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => "10",
                                    "NEWS_COUNT" => "20",
                                    "SORT_BY1" => "ID",
                                    "SORT_ORDER1" => "ASC",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER2" => "DESC",
                                    "FIELD_CODE" => Array("ID", "NAME"),
                                    "PROPERTY_CODE" => Array("LOGO", "LINK", "HTML_LOGO"),
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "SET_TITLE" => "N",
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_LAST_MODIFIED" => "Y",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                    "ADD_SECTIONS_CHAIN" => "Y",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                                    "PARENT_SECTION" => "13",
                                    "PARENT_SECTION_CODE" => "",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "CACHE_TYPE" => "A",
                                    "CACHE_TIME" => "3600",
                                    "CACHE_FILTER" => "Y",
                                    "CACHE_GROUPS" => "Y",
                                    "DISPLAY_TOP_PAGER" => "Y",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "PAGER_TITLE" => "Новости",
                                    "PAGER_SHOW_ALWAYS" => "Y",
                                    "PAGER_TEMPLATE" => "",
                                    "PAGER_DESC_NUMBERING" => "Y",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "Y",
                                    "PAGER_BASE_LINK_ENABLE" => "Y",
                                    "SET_STATUS_404" => "Y",
                                    "SHOW_404" => "Y",
                                    "MESSAGE_404" => "",
                                    "PAGER_BASE_LINK" => "",
                                    "PAGER_PARAMS_NAME" => "arrPager",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => ""
                                )
                            );?>
                        </div>
                    </div>
                </div>
                <div class="standart-page__banner">
                    <?for ($j = 0; $j < 2; $j++):?>
                        <?$banner = array_values($arResult['BANNERS'])[$j];
                        // для появления в режиме правке соответствующих кнопок при наведении на элемент
                        $this->AddEditAction($banner['ID'], $banner['EDIT_LINK'], CIBlock::GetArrayByID($banner["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($banner['ID'], $banner['DELETE_LINK'], CIBlock::GetArrayByID($banner["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="sp__banner-cont" id="<?=$this->GetEditAreaId($banner['ID']);?>">
                            <a class="sp__banner" href="<?=$banner['LINK'];?>" target="_blank">
                                <img src="<?=$banner['LOGO']?>" alt=""/>
                            </a>
                        </div>
                    <?endfor;?>
                </div>
            </div>
            <div class="articals__navigation">
                <?if(!empty($arResult["PREV"])):?>
                    <a class="articals__navigation-arrow" href="<?=$arResult["PREV"]?>">
                        Предыдущая новость
                    </a>
                <?endif?>

                <div class="articals__navigation-title">
                    <?=$news['NAME']?>
                </div>

                <?if(!empty($arResult["NEXT"])):?>
                    <a class="articals__navigation-arrow" href="<?=$arResult["NEXT"]?>">
                        Следующая новость
                    </a>
                <?endif?>
            </div>
        </div>
    </div>
</div>