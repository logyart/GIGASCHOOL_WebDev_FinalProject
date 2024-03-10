<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</main>
<footer class="footer">
    <div class="wrapper">
        <div class="footer__top">
            <div class="ft">
                <div class="ft__soc">
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
                <div class="ft__apps">
                    <div class="apps">
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
                                "PARENT_SECTION" => "10",
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
        <div class="footer__mid">
            <div class="f-menu">
                <?$APPLICATION->IncludeComponent("bitrix:menu","bottom",Array(
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
                <div class="f-menu__supports">
                    <div class="sponsors">
                        <div class="sponsors__label">
                            <!--Если поддержка прекратится, можно убрать надпись и элементы-->
                            <?$APPLICATION->IncludeFile(
                                "/.include/footer/support/support.php",
                                Array(),
                                Array(
                                    "MODE" => "text",
                                    "NAME" => "При поддержке:"
                                )
                            );?>
                        </div>
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
                                        "PARENT_SECTION" => "11",
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
            </div>
            <div class="footer__mid-text">
                <div class="copy">
                    <?$APPLICATION->IncludeFile(
                        "/.include/footer/copy/copyright.php",
                        Array(),
                        Array(
                            "MODE" => "text",
                            "NAME" => "Копирайт"
                        )
                    );?> <?$APPLICATION->IncludeFile(
                        "/.include/footer/copy/politics-conf.php",
                        Array(),
                        Array(
                            "MODE" => "html",
                            "NAME" => "Политика конфиденциальности"
                        )
                    );?>
                </div>
                <a class="developer" href="https://www.xpage.ru/" target="_blank">Разработано в Xpage</a>
            </div>
        </div>
        <div class="footer__bot">
            <div class="footer__bot-sponsors">
                <div class="fbs">
                    <div class="fbs__title">Генеральные <br/>партнеры клуба</div>
                        <div class="fbs__list">
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
            <!--.footer__bot-partners-->
            <!--	.fbs-->
            <!--		.fbs__title Партнеры-->
            <!--			br-->
            <!--			| клуба-->
            <!--		.fbs__list-->
            <!--			- for (let i = 0; i < 6; i++)-->
            <!--				a.fbs__list-item(href="#")-->
            <!--					img(src="img/photos/pt-"+i+".svg")-->
            <div class="footer__bot-kpartners">
                <div class="fbs">
                    <div class="fbs__title">
                        Партнеры Чемпионата<br/>
                        <?$APPLICATION->IncludeFile(
                            "/.include/footer/partners-championship/league.php",
                            Array(),
                            Array(
                                "MODE" => "text",
                                "NAME" => "Лига"
                            )
                        );?>сезона<br/>
                        <?$APPLICATION->IncludeFile(
                            "/.include/footer/partners-championship/season.php",
                            Array(),
                            Array(
                                "MODE" => "text",
                                "NAME" => "Сезон (годы)"
                            )
                        );?>
                    </div>
                    <div class="fbs__list">
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
                                "PARENT_SECTION" => "8",
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
    </div>
</footer>
</body>
</html>