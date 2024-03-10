<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="contacts-cont">
        <div class="wrapper">
          <div class="contacts">
            <address class="contacts-address">
              <div class="ca__label">Адрес</div>
              <div class="ca__text">
                <?$APPLICATION->IncludeFile(
                    "/.include/contacts/adress.php",
                    Array(),
                    Array(
                        "MODE" => "html",
                        "NAME" => "Адрес"
                    )

                );?>
              </div>


              <div class="ca__label">Телефон</div>
              <div class="ca__text">
                  <?$APPLICATION->IncludeFile(
                      "/.include/contacts/phone.php",
                      Array(),
                      Array(
                          "MODE" => "html",
                          "NAME" => "Телефон"
                      )

                  );?>
              </div>
              <ul class="socials">
                  <?$APPLICATION->IncludeComponent("bitrix:news.list","socials-dark",Array(
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
                          "PROPERTY_CODE" => Array("LINK", "ICON_DARK"),
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

              </ul>
              <a class="btn btn--border fancybox" href="">задать вопрос</a>
            </address>
            <div class="contacts-map"><img src="<?=SITE_TEMPLATE_PATH?>/img/photo/map.jpg"/></div>
          </div>
        </div>
      </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
