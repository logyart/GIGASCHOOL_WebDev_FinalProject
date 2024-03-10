<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Page\Asset;
IncludeTemplateLangFile(__FILE__);
\CModule::IncludeModule('iblock');
if (\CSite::inDir(SITE_DIR . 'index.php')) {
    $APPLICATION->addViewContent('body-classes', ' main');

}
else {
    $APPLICATION->addViewContent('body-classes', ' inner');
}
// у страницы новостей должен быть inner loading
// у детальной страницы новостей должен быть inner loading smoll-title bc-move
// у 404 должен быть inner loading page-404
// у team-row и team-one, coach-old и coach-all должен быть inner loading smoll-title
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title><?=$APPLICATION->showTitle();?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1"/>
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico" type="image/x-icon"/>
    <?$APPLICATION->ShowHead();
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/vendors.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/base.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/xpage.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/common.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main-page.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");
    ?>
</head>
<body class="<?$APPLICATION->showViewContent('body-classes');?> loaded ">
<?$APPLICATION->ShowPanel();?>
<div id="n_menu_bl" class="s_khl_menu_n_menu_bl"></div>
<script async src="//www.khl.ru/nav/js/scripts.php?type=mhl&lang=ru"></script>
<div class="popup-search-cont">
    <div class="popup-search">
        <div class="popup-search__close"></div>
        <form action="">
            <div class="popup-search__input">
                <input type="search" placeholder="Поиск по сайту"/>
                <input type="submit" value="Найти"/>
            </div>
        </form>
    </div>
</div>
<header class="head">
    <div class="wrapper">
        <div class="head__wrap">
            <nav class="head__menu">
                <ul class="h-menu">
                    <?$APPLICATION->IncludeComponent("bitrix:menu","top",Array(
                            "ROOT_MENU_TYPE" => "top",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "Y",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => ""
                        )
                    );?>
                </ul>
            </nav>
            <div class="head__center-btns">
                <div class="head__search">
                    <a class="search-link" href=""></a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="popup-menu__container">
    <div class="popup-menu">
        <?$APPLICATION->IncludeComponent("bitrix:menu","aside",Array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "2",
                "CHILD_MENU_TYPE" => "child",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => ""
            )
        );?>
        <div class="popup-menu__soc popup-menu__soc--mobile">
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
        <div class="popup-menu__sponsors">
            <div class="sponsors">
                <div class="sponsors__label">Генеральные спонсоры клуба:</div>
                <div class="sponsors__list">
                    <div class="s-list">
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
                                "PROPERTY_CODE" => Array("LOGO", "LINK"),
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
                                "PARENT_SECTION" => "7",
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
        </div>
        <div class="popup-menu__clubs popup-menu__clubs--mobile">
            <div class="clubs">
                <div class="clubs__links">
                    <a class="clubs__link" href="/">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/photos/club-1.png" alt=""/>
                    </a>
                    <a class="clubs__link" href="/">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/photos/club-2.png" alt=""/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="fancybox btn--search-error" href="#123"><span>Нашли ошибку?</span></a>
<main id="content">
    <?if(\CSite::inDir(SITE_DIR . 'index.php')):?>
        <aside class="main-aside">
            <a class="main-aside__logo" href="/">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg"/>
            </a>
            <a class="main-aside__partner-mobile" href="#">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/partner.png"/>
            </a>
            <!--.main-aside__beta-->
            <!--	.beta Beta-->
            <!--	.beta__text Рады приветствоввать вас на новом сайте ХК Трактор!<br> Мы продолжаем работать над его улучшением. Если вы нашли ошибку или неточность, сообщите нам об этом, пожалуйста.-->
            <div class="main-aside__burger">
                <div class="burger"><span></span></div>
            </div>
            <div class="main-aside__soc">
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
        </aside>
    <?else:?>
        <aside class="main-aside">
            <a class="main-aside__logo" href="/">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg"/>
            </a>
            <div class="main-aside__btn">
                <a class="default-btn" href="/">
                    <span class="default-btn__text">Билеты</span>
                </a>
            </div>
            <div class="main-aside__burger">
                <div class="burger"><span></span></div>
                <div class="main-aside__burger-text">Меню</div>
            </div>
        </aside>
    <?endif?>



