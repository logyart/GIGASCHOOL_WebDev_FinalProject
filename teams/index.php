<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Трактор - команды");

$teams = CIBlockSection::GetList (
    Array("ID" => "ASC"),
    Array("IBLOCK_ID" => 17),
    false,
    Array('ID', 'NAME', 'CODE')
);


$isDetailPage = true;
while($team = $teams->GetNext())
{
    if (CSite::inDir('/teams/' . $team['CODE'] . '/index.php')
        || CSite::inDir('/teams/' . $team['CODE'] . '/?role='))
    {
        $isDetailPage = false;
        break;
    }
}

parse_str(parse_url($APPLICATION->GetCurUri(), PHP_URL_QUERY), $params);
$id = preg_replace("/[^0-9]/", '', $params['role']);
$GLOBALS['arrFilter'] = array("=PROPERTY_ROLE" => $id);
?>

<?if (CSite::inDir('/teams/index.php')):?>
    <div class="wrapper">
        <div class="head__wrap">
            <nav class="head__menu">
                <ul class="h-menu">
                    <?$APPLICATION->IncludeComponent("bitrix:menu","top",Array(
                            "ROOT_MENU_TYPE" => "child",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "Y",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "N",
                            "MENU_CACHE_GET_VARS" => "",
                            "CACHE_SELECTED_ITEMS" => "Y"
                        )
                    );?>
                </ul>
            </nav>
        </div>
    </div>
<?else:?>
    <div class="inner-page">
        <div class="inner-page__title">
            <div class="wrapper">
                <div class="title-block">
                    <h1 class="title-block__title">Первая тренировка «<?=$APPLICATION->showViewContent('team-name')?>» на льду</h1>
                    <div class="title-block__crumbs">
                        <div class="bread-crumbs">
                            <a class="bread-crumbs__link" href="/">Трактор</a>
                            <a class="bread-crumbs__link" href="/media">Медиа</a>
                            <span class="bread-crumbs__this">Трактор tv</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-page__content">
            <div class="wrapper">
                <div class="team">
                    <?if (!$isDetailPage):?>
                        <div class="team__top">
                            <div class="team-sort">
                                <?$APPLICATION->IncludeComponent("bitrix:menu","roles",Array(
                                        "ROOT_MENU_TYPE" => "roles",
                                        "MAX_LEVEL" => "1",
                                        "CHILD_MENU_TYPE" => "",
                                        "USE_EXT" => "Y",
                                        "DELAY" => "N",
                                        "ALLOW_MULTI_SELECT" => "Y",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_USE_GROUPS" => "N",
                                        "MENU_CACHE_GET_VARS" => ""
                                    )
                                );?>
                            </div>
                            <div class="type">
                                <div class="type__item type__item--plate"></div>
                                <div class="type__item type__item--row active"></div>
                            </div>
                        </div>
                    <?endif;?>
                    <div class="team-row__list">
                        <?$APPLICATION->IncludeComponent("bitrix:news","teams",Array(
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "SEF_MODE" => "Y",
                                "AJAX_MODE" => "N",
                                "IBLOCK_TYPE" => "content",
                                "IBLOCK_ID" => "17",
                                "NEWS_COUNT" => "20",
                                "USE_SEARCH" => "Y",
                                "USE_RSS" => "Y",
                                "USE_RATING" => "N",
                                "USE_CATEGORIES" => "Y",
                                "USE_REVIEW" => "Y",
                                "USE_FILTER" => "Y",
                                "SORT_BY1" => "property_MATCHES",
                                "SORT_ORDER1" => "DESC",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER2" => "DESC",
                                "CHECK_DATES" => "Y",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "LIST_FIELD_CODE" => Array("ID", "NAME", "IBLOCK_SECTION_ID"),
                                "LIST_PROPERTY_CODE" => Array(
                                    "PHOTO",
                                    "BIRTH",
                                    "COUNTRY",
                                    "MATCHES",
                                    "POINTS",
                                    "PENALTY",
                                    "POWERS",
                                    "THROW",
                                    "NUMBER",
                                    "ROLE"
                                ),
                                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "META_KEYWORDS" => "-",
                                "META_DESCRIPTION" => "-",
                                "BROWSER_TITLE" => "-",
                                "DETAIL_SET_CANONICAL_URL" => "Y",
                                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "DETAIL_FIELD_CODE" => Array("ID", "NAME", "IBLOCK_SECTION_ID"),
                                "DETAIL_PROPERTY_CODE" => Array(
                                    "PHOTO",
                                    "BIRTH",
                                    "COUNTRY",
                                    "MATCHES",
                                    "POINTS",
                                    "PENALTY",
                                    "POWERS",
                                    "THROW",
                                    "HEIGHT",
                                    "WEIGHT",
                                    "GRIP",
                                    "DRAFT",
                                    "ACHIEVE",
                                    "CAREER",
                                    "BIOGRAPHY",
                                    "ROLE",
                                    "NUMBER",
                                ),
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
                                "SHOW_404" => "Y",
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
                                "FILTER_NAME" => "arrFilter",
                                "FILTER_FIELD_CODE" => Array(),
                                "FILTER_PROPERTY_CODE" => Array("ROLE"),
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
                                "SEF_FOLDER" => "/teams/",
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
            </div>
        </div>
    </div>
<?endif?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
