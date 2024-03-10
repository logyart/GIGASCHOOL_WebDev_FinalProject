<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$APPLICATION->SetTitle($arResult['NAME']);?>
<!--<pre><?/*print_r($arResult)*/?></pre>-->
<div class="inner-page">
    <div class="inner-page__title">
        <div class="wrapper">
            <div class="title-block">
                <h1 class="title-block__title">тренеры</h1>
                <div class="title-block__crumbs">
                    <div class="bread-crumbs">
                        <a class="bread-crumbs__link" href="/">Трактор</a>
                        <a class="bread-crumbs__link" href="/teams">Команда</a>
                        <a class="bread-crumbs__link" href="/teams/traktor/">Состав Трактора</a>
                        <a class="bread-crumbs__link" href="/coaches">Тренеры</a>
                        <span class="bread-crumbs__this"><?=$arResult['NAME']?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-page__content">
        <div class="wrapper">
            <?
            $coach = $arResult['COACH'];
            // для появления в режиме правке соответствующих кнопок при наведении на элемент
            $this->AddEditAction($coach['ID'], $coach['EDIT_LINK'], CIBlock::GetArrayByID($coach["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($coach['ID'], $coach['DELETE_LINK'], CIBlock::GetArrayByID($coach["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="coach" id="<?=$this->GetEditAreaId($coach['ID']);?>">
                <div class="coach-photo">
                    <img src="<?=$coach['PHOTO']?>"/>
                </div>
                <div class="coach-bio">
                    <div class="coach-bio__title"><?=$coach['NAME']?></div>
                    <div class="coach-bio__text">Родился <?=$coach['BIRTH']?> года<br> <?=$coach['JOB']?></div>
                    <div class="statistic__list">
                        <?foreach ($coach['STATS'] as $stats):?>
                            <div class="statistic__item">
                                <div class="statistic__item-progress"><span style="width: 60%"></span></div>
                                <div class="statistic__item-number"><?=$stats['VALUE']?></div>
                                <div class="statistic__item-text"><?=$stats['NAME']?></div>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>
                <?foreach ($coach['ABOUT'] as $divClass => $about):?>
                    <div class="coach-info coach-info--<?=strtolower($divClass)?>">
                        <div class="label"><?=$about['NAME']?></div>
                        <div class="text"><?=$about['VALUE']?></div>
                    </div>
                <?endforeach;?>
                <div class="coach-timeline">
                    <div class="coach-timeline__list">
                        <?if ($coach['BIOGRAPHY_ID'] < 0):?>
                            <div class="coach-timeline__item">
                                <div class="coach-timeline__item-title">
                                    <?='Данные засекречены'?>
                                </div>
                            </div>
                        <?else:?>
                            <?$APPLICATION->IncludeComponent("bitrix:news.list","biography",Array(
                                    "FILTER_NAME" => "",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "AJAX_MODE" => "N",
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => "19",
                                    "NEWS_COUNT" => "20",
                                    "SORT_BY1" => "ID",
                                    "SORT_ORDER1" => "ASC",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER2" => "DESC",
                                    "FIELD_CODE" => Array("ID", "NAME"),
                                    "PROPERTY_CODE" => Array("TEXT"),
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
                                    "PARENT_SECTION" => $coach['BIOGRAPHY_ID'],
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
                        <?endif;?>

                        <?/*foreach (array_chunk($coach['BIOGRAPHY'],2) as $text):*/?><!--
                            <div class="coach-timeline__item">
                                <div class="coach-timeline__item-title"><?php /*=$text[0]*/?></div>
                                <div class="coach-timeline__item-text"><?php /*=$text[1]*/?></div>
                            </div>
                        --><?/*endforeach;*/?>

                    </div>
                    <div class="coach-timeline__img">
                        <img src="<?=$coach['PHOTO']?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
