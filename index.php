<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Трактор");
// закоменнтить swiper-wrapper
?>

<section class="first-screen">
    <div class="main-slider">
        <div class="swiper-wrapper">
            <?$APPLICATION->IncludeComponent("bitrix:news.list","banner", Array(
                    "FILTER_NAME" => "",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "13",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ID",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "DESC",
                    "FIELD_CODE" => Array("ID", 'NAME'),
                    "PROPERTY_CODE" => Array("DESCRIPTION", "FILE", "LINK"),
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
                    "PARENT_SECTION" => "15",
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
            <div class="main-slider__dots">
                <div class="wrapper">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
</section>

<!--в main-news__list при подключении news 404 ошибка, я её отключил.
Возможно, из-за того что этот компонент привязан к news в настрйоках инфоблока-->
<div class="wrapper">
    <div class="main-news">
        <div class="main-news__news">
            <div class="main-news__top">
                <div class="main-news__title">Новости о клубе</div>
                <a class="main-news__all" href="/news">Все новости</a>
            </div>
            <div class="main-news__list">
                <?$APPLICATION->IncludeComponent("bitrix:news","last-news",Array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "SEF_MODE" => "Y",
                        "AJAX_MODE" => "N",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "16",
                        "NEWS_COUNT" => "3",
                        "USE_SEARCH" => "Y",
                        "USE_RSS" => "Y",
                        "USE_RATING" => "N",
                        "USE_CATEGORIES" => "Y",
                        "USE_REVIEW" => "Y",
                        "USE_FILTER" => "Y",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "DESC",
                        "CHECK_DATES" => "Y",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "LIST_FIELD_CODE" => Array("ID", "NAME"),
                        "LIST_PROPERTY_CODE" => Array(),
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "META_KEYWORDS" => "-",
                        "META_DESCRIPTION" => "-",
                        "BROWSER_TITLE" => "-",
                        "DETAIL_SET_CANONICAL_URL" => "Y",
                        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "DETAIL_FIELD_CODE" => Array("ID", "NAME"),
                        "DETAIL_PROPERTY_CODE" => Array("TEXT_NEWS", "PHOTO_CAPTION". "PHOTO"),
                        "DETAIL_DISPLAY_TOP_PAGER" => "Y",
                        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                        "DETAIL_PAGER_TITLE" => "Страница",
                        "DETAIL_PAGER_TEMPLATE" => "",
                        "DETAIL_PAGER_SHOW_ALL" => "Y",
                        "STRICT_SECTION_CHECK" => "Y",
                        "SET_TITLE" => "N",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "SET_LAST_MODIFIED" => "Y",
                        "PAGER_BASE_LINK_ENABLE" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "USE_PERMISSIONS" => "N",
                        "GROUP_PERMISSIONS" => Array("1"),
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "Y",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "Y",
                        "FILTER_NAME" => "",
                        "FILTER_FIELD_CODE" => Array(),
                        "FILTER_PROPERTY_CODE" => Array(),
                        "NUM_NEWS" => "20",
                        "NUM_DAYS" => "30",
                        "YANDEX" => "Y",
                        "MAX_VOTE" => "5",
                        "VOTE_NAMES" => Array("0", "1", "2", "3", "4"),
                        "CATEGORY_IBLOCK" => Array(),
                        "CATEGORY_CODE" => "CATEGORY",
                        "CATEGORY_ITEMS_COUNT" => "5",
                        "MESSAGES_PER_PAGE" => "10",
                        "USE_CAPTCHA" => "N",
                        "REVIEW_AJAX_POST" => "Y",
                        "PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
                        "FORUM_ID" => "1",
                        "URL_TEMPLATES_READ" => "Y",
                        "SHOW_LINK_TO_FORUM" => "Y",
                        "POST_FIRST_MESSAGE" => "Y",
                        "SEF_FOLDER" => "/news/",
                        "SEF_URL_TEMPLATES" => Array(
                            "detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
                            "section" => "#SECTION_CODE#/",
                        ),
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "VARIABLE_ALIASES" => Array(
                            "detail" => Array(),
                            "news" => Array(),
                            "section" => Array(),
                        ),
                        "USE_SHARE" => "N",
                        "SHARE_HIDE" => "Y",
                        "SHARE_TEMPLATE" => "",
                        "SHARE_HANDLERS" => array("delicious", "lj", "twitter"),
                        "SHARE_SHORTEN_URL_LOGIN" => "",
                        "SHARE_SHORTEN_URL_KEY" => "",
                    )
                );?>
            </div>
        </div>
        <div class="main-news__subscribe">
            <?$APPLICATION->includeComponent('custom:form', 'subscribe', [
                'IBLOCK_ID' => '21',
                'PARENT_SECTION_ID' => '',
                'FIELD_CODE' => Array('ID'),
                'PROPERTY_CODE' => Array('EMAIL'),
            ]);?>
        </div>
    </div>
    <div class="results">
        <div class="tabs results__stats">
            <div class="tabs__top">
                <div class="tabs__tab active" data-id="1">ТРАКТОР</div>
                <div class="tabs__tab" data-id="2">МЕТАЛЛУРГ МГ</div>
            </div>
            <div class="tabs__content active" data-id="1">
                <div class="stats-position">
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="12"> 0</div>
                        <div class="stats-list__row-title">место</div>
                    </div>
                </div>
                <div class="stats-list">
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="9"> 0</div>
                        <div class="stats-list__row-title">Очки</div>
                        <div class="stats-list__row-line"><span style="width: 10%"></span></div>
                    </div>
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="50">0</div>
                        <div class="stats-list__row-title">Игр сыграно</div>
                        <div class="stats-list__row-line"><span style="width: 50%"></span></div>
                    </div>
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="38">0</div>
                        <div class="stats-list__row-title">Выиграно</div>
                        <div class="stats-list__row-line"><span style="width: 65%"></span></div>
                    </div>
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="10">0</div>
                        <div class="stats-list__row-title">Проиграно</div>
                        <div class="stats-list__row-line"><span style="width: 10%"></span></div>
                    </div>
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="48">0</div>
                        <div class="stats-list__row-title">Забито</div>
                        <div class="stats-list__row-line"><span style="width: 40%"></span></div>
                    </div>
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="29">0</div>
                        <div class="stats-list__row-title">Пропущено</div>
                        <div class="stats-list__row-line"><span style="width: 30%"></span></div>
                    </div>
                </div>
            </div>
            <div class="tabs__content" data-id="2">
                <div class="stats-position">
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="14"> 0</div>
                        <div class="stats-list__row-title">место</div>
                    </div>
                </div>
                <div class="stats-list">
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="9"> 0</div>
                        <div class="stats-list__row-title">Очки</div>
                        <div class="stats-list__row-line"><span style="width: 10%"></span></div>
                    </div>
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="50">0</div>
                        <div class="stats-list__row-title">Игр сыграно</div>
                        <div class="stats-list__row-line"><span style="width: 50%"></span></div>
                    </div>
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="38">0</div>
                        <div class="stats-list__row-title">Выиграно</div>
                        <div class="stats-list__row-line"><span style="width: 65%"></span></div>
                    </div>
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="10">0</div>
                        <div class="stats-list__row-title">Проиграно</div>
                        <div class="stats-list__row-line"><span style="width: 10%"></span></div>
                    </div>
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="48">0</div>
                        <div class="stats-list__row-title">Забито</div>
                        <div class="stats-list__row-line"><span style="width: 40%"></span></div>
                    </div>
                    <div class="stats-list__row">
                        <div class="stats-list__row-count" data-to="29">0</div>
                        <div class="stats-list__row-title">Пропущено</div>
                        <div class="stats-list__row-line"><span style="width: 30%"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="results__last">
            <div class="last-game">
                <?$APPLICATION->IncludeComponent("bitrix:news.list","last-game",Array(
                        "FILTER_NAME" => "",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "N",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "14",
                        "NEWS_COUNT" => "1",
                        "SORT_BY1" => "PROPERTY_DATE",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "DESC",
                        "FIELD_CODE" => Array("ID"),
                        "PROPERTY_CODE" => Array(
                            'HOCKEY_CLUB_1',
                            'POINTS_HOCKEY_CLUB_1',
                            'HOCKEY_CLUB_2',
                            'POINTS_HOCKEY_CLUB_2',
                            'PLACE',
                            'TIMEZONE',
                            'DATE',
                        ),
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
                        "PARENT_SECTION" => "",
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

    <div class="main-banner">
        <?$APPLICATION->IncludeComponent("bitrix:news.list","banner",Array(
                "FILTER_NAME" => "",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "N",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "13",
                "NEWS_COUNT" => "3",
                "SORT_BY1" => "ID",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "DESC",
                "FIELD_CODE" => Array("ID", "NAME"),
                "PROPERTY_CODE" => Array("DESCRIPTION", "FILE", "LINK"),
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
                "PARENT_SECTION" => "14",
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

