<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Page\Asset;
IncludeTemplateLangFile(__FILE__);

if (\CSite::inDir(SITE_DIR . 'index.php')) {
    $APPLICATION->addViewContent('body-classes', ' main');

}
else {
    $APPLICATION->addViewContent('body-classes', ' inner');
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title><?$APPLICATION->showTitle();?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css"/>
    <?$APPLICATION->ShowHead();?>
    <?
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/vendors.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/base.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/xpage.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/common.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");
    ?>
</head>
<body class="<?$APPLICATION->showViewContent('body-classes');?> loading">
<?$APPLICATION->ShowPanel();?>
<div class="mobile-menu-cont">
    <div class="mobile-menu">
        <div class="mobile-menu__top">
            <div class="burger"><span></span></div>
            <div class="burger-text">Закрыть меню</div>
        </div>
        <ul class="main-nav">
            <li class="main-nav__item main-nav__item--hassubmenu"><a class="main-nav__link" href="#">Аренда зала</a>
                <div class="submenu">
                    <div class="submenu__list">
                        <div class="submenu__item"> <a class="submenu__link" href="#">Аренда зала</a></div>
                        <div class="submenu__item"> <a class="submenu__link" href="#">Аренда зала со штатным фотографом</a></div>
                        <div class="submenu__item"> <a class="submenu__link" href="#">Проведение мероприятий </a></div>
                    </div>
                </div>
            </li>
            <li class="main-nav__item"><a class="main-nav__link" href="#">Проведение мероприятий</a></li>
            <li class="main-nav__item"><a class="main-nav__link" href="#">Залы</a></li>
            <li class="main-nav__item"><a class="main-nav__link" href="#">Портфолио</a></li>
            <li class="main-nav__item"><a class="main-nav__link" href="#">Оборудование</a></li>
            <li class="main-nav__item"><a class="main-nav__link" href="#">Медиа</a></li>
            <li class="main-nav__item"><a class="main-nav__link" href="#">Контакты</a></li>
        </ul>
        <div class="mobile-menu__contacts"><a class="tel" href="tel:+79823782525">8-982-378-2525</a>
            <p>ул. Свободы 2, корп. 5, оф. 7.26</p>
        </div>
        <ul class="socials">
            <li class="socials__item"><a class="socials__link" href="#"><img class="socials__ico" src="<?=SITE_TEMPLATE_PATH?>/img/ico-inst-2.svg"/><span>instagram</span></a></li>
            <li class="socials__item"><a class="socials__link" href="#"><img class="socials__ico" src="<?=SITE_TEMPLATE_PATH?>/img/ico-vk-2.svg"/><span>Вконтакте</span></a></li>
        </ul>
        <div class="mobile-menu__copy">© Фотостудия Фотосова 2020</div><a class="mobile-menu__politic" href="">Политика конфиденциальности</a>
    </div>
</div>
<div class="head-fixed">
    <div class="wrapper">
        <div class="head-fixed-cont">
            <div class="head-fixed__menu">
                <div class="burger"><span></span></div><span>меню</span>
            </div>
            <div class="head-fixed__contacts">
                <a class="tel" href="tel:+79823782525">8-982-378-2525</a>
                <p>ул. Свободы 2, корп. 5, оф. 7.26</p>
                <ul class="socials">
                    <li class="socials__item"><a class="socials__link" href="#"><img class="socials__ico" src="<?=SITE_TEMPLATE_PATH?>/img/ico-inst.svg"/></a></li>
                    <li class="socials__item"><a class="socials__link" href="#"><img class="socials__ico" src="<?=SITE_TEMPLATE_PATH?>/img/ico-vk.svg"/></a></li>
                </ul>
            </div><a class="head-fixed__btn" href="#">Забронировать</a>
        </div>
    </div>
</div>

<?if (!\CSite::inDir(SITE_DIR . 'index.php')):?>
    <div class="top-block">
        <?$APPLICATION->showViewContent('main-header')?>
        <div class="top-block__banner"><img src="<?=SITE_TEMPLATE_PATH?>/img/photo/banner-top.jpg"/></div>
        <div class="top-block__menu">
            <div class="wrapper">
                <div class="top-block__menu-cont">
                    <?$APPLICATION->IncludeComponent("bitrix:menu","top",Array(
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

                    <a class="top-block__menu-btn" href="#">Забронировать</a>
                </div>
            </div>
        </div>
    </div>
    <div class="title-block">
    <? if (\CSite::inDir(SITE_DIR . 'halls/hall')):?>
        <div class="wrapper">
            <div class="title-block__title">
                <h1>Аренда<br> оборудование для<br> фото/видеосъемок</h1>
            </div>
            <div class="title-block__text">
                <div class="tb-text tb-text--2">
                    <p>У нас вы можете воспользоваться профессиональным фото/видео оборудованием. Часть оборудования имеется в залах и предоставляется бесплатно. Некоторым оборудованием можно воспользоваться лишь после согласования с администратором. Некоторое оборудование предоставляется платно, после внесения оплаты за аренду выбранного оборудования, согласовывается с администратор.</p>
                </div>
                <div class="more-text">Подробнее</div>
            </div>
        </div>
        <? elseif (\CSite::inDir(SITE_DIR . 'halls')):?>
            <div class="wrapper">
                <div class="title-block__title">
                    <h1>Аренда зала<br> под фотосессию<br> и мастер классы</h1>
                </div>
                <div class="title-block__text">
                    <div class="tb-text tb-text--2">
                        <p>Вы можете арендовать зал с хорошим оборудованием. В зале вас ждёт красивый интерьер. В некоторых залах присутствуют сменные фоны. Вы можете выбирать необходимый текстиль. Удобный процесс бронирования зала. Для подтверждения бронирования вам необходимо внести предоплату за аренду зала. Также, при необходимости, вы можете забронировать гримерную комнату. Наши гримерки очень светлые (в них хорошее освещение) и в них удобные кресла. Если вам необходим фотограф, то можете забронировать зал со штатным фотографом.</p>
                        <p>Наши залы подходят для портретной фотографии, предметной фотографии, семейной съемки, детской съемки и фешн съемки. В каждом зала присутствует профессиональное световое оборудование. Многие декорации в залах мобильные, это необходимо, чтобы вы смогли сделать кадры с лучшей композицией. В залах присутствуют большие окна предоставляющие естественный свет. Также в залах вы можете проводить мероприятия. Во всех залах имеется звуковое оборудование на котором вы можете включить любимые звуковые композиции.</p>
                    </div>
                    <div class="more-text">Подробнее</div>
                </div>
            </div>

        <? else: ?>
            <div class="wrapper">
                <div class="title-block__title"><a class="title-block__link-back" href="#">Назад</a>
                    <h1><?$APPLICATION->showTitle(false);?></h1>
                </div>
            </div>
        <?endif;?>
    </div>
<?endif;?>
<main id="content">
    <?if (\CSite::inDir(SITE_DIR . 'index.php')):?>
    <div class="top-block">
        <?$APPLICATION->showViewContent('main-header')?>
    <?endif;?>

<?ob_start();?>
<header class="main-header">
    <div class="wrapper">
        <div class="main-header-cont">
            <div class="main-header__soc">
                <?$APPLICATION->IncludeComponent("bitrix:news.list","socials",Array(
                    "FILTER_NAME" => "",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "9",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FIELD_CODE" => Array("ID", "NAME"),
                    "PROPERTY_CODE" => Array("LINK", "ICON"),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
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
            <div class="main-header__logo"><a class="logo" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg"/></a></div>
            <div class="main-header__contacts"><a class="main-header__tel" href="tel:+79823782525">8-982-378-2525</a>
                <div>
                    <?$APPLICATION->IncludeFile(
                        "/.include/header/adress.php",
                        Array(),
                        Array(
                            "MODE" => "html",
                            "NAME" => "Адрес"
                        )

                    );?>
                </div>
            </div>
            <div class="burger"><span></span></div>
        </div>
    </div>
</header>
<?$APPLICATION->addViewContent('main-header', ob_get_clean());?>

