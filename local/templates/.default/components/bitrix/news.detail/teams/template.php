<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$APPLICATION->SetTitle($arResult['NAME']);?>

<!--<pre><?/*print_r(CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID'])->GetNext())*/?></pre>-->

<div class="inner-page__content">
    <div class="wrapper">
        <div class="team-one">
            <div class="team__top">
                <a class="back-link" href="<?=$_SERVER['HTTP_REFERER']?>">Назад</a>
            </div>
            <?
            $player = $arResult['PLAYER'];
            // для появления в режиме правке соответствующих кнопок при наведении на элемент
            $this->AddEditAction($player['ID'], $player['EDIT_LINK'], CIBlock::GetArrayByID($player["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($player['ID'], $player['DELETE_LINK'], CIBlock::GetArrayByID($player["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="team-row__list" id="<?=$this->GetEditAreaId($player['ID']);?>">
                <div class="team-row__item" data-number="<?=$player['NUMBER']?>">
                    <div class="tr-item--left">
                        <div class="tr-item__info">
                            <div class="tr-item__title"><?=$player['SURNAME']?><br> <?=$player['NAME']?></div>
                            <div class="tr-item__subtitle">Родился <?=$player['BIRTH']?><br> в <?=$player['COUNTRY']?></div>
                            <div class="tr-item__statistic">
                                <div class="statistic__list">
                                    <?foreach ($player['STATS'] as $stats):?>
                                        <div class="statistic__item">
                                            <div class="statistic__item-progress"><span style="width: 49%"></span></div>
                                            <div class="statistic__item-number"><?=$stats['VALUE']?></div>
                                            <div class="statistic__item-text"><?=$stats['NAME']?></div>
                                        </div>
                                    <?endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tr-item--right">
                        <figure class="tr-item__img">
                            <img src="<?=$player['PHOTO']?>"/>
                        </figure>
                        <div class="tr-item__number"><?=$player['NUMBER']?></div>
                    </div>
                </div>
            </div>
            <div class="player-info">
                <div class="parameter">
                    <?foreach ($player['PARAMS'] as $param):?>
                        <div class="parameter__item">
                            <div class="label"><?=$param['NAME']?></div>
                            <div class="text"><?=$param['VALUE']?></div>
                        </div>
                    <?endforeach;?>
                </div>
                <div class="player-history">
                    <?foreach ($player['HISTORY'] as $divName => $history):?>
                        <div class="ph-item ph-item--<?=strtolower($divName)?>">
                            <div class="label"><?=$history['NAME']?></div>
                            <div class="text"><?=$history['VALUE']?></div>
                        </div>
                    <?endforeach;?>

                    <div class="player-sharing"><span>Поделиться</span>
                        <div class="ya-share ya-share--page ya-share2 ya-share2_inited">
                            <div class="ya-share2__container ya-share2__container_size_m">
                                <ul class="ya-share2__list ya-share2__list_direction_horizontal">
                                    <li class="ya-share2__item ya-share2__item_service_vkontakte">
                                        <a class="ya-share2__link" href="" rel="nofollow noopener" target="_blank" title="ВКонтакте">
                                            <span class="ya-share2__badge">
                                                <span class="ya-share2__icon"></span>
                                            </span>
                                            <span class="ya-share2__title">ВКонтакте</span>
                                        </a>
                                    </li>
                                    <li class="ya-share2__item ya-share2__item_service_facebook">
                                        <a class="ya-share2__link" href="" rel="nofollow noopener" target="_blank" title="Facebook">
                                            <span class="ya-share2__badge">
                                                <span class="ya-share2__icon"></span>
                                            </span>
                                            <span class="ya-share2__title">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="ya-share2__item ya-share2__item_service_odnoklassniki">
                                        <a class="ya-share2__link" href="" rel="nofollow noopener" target="_blank" title="Одноклассники">
                                            <span class="ya-share2__badge">
                                                <span class="ya-share2__icon"></span>
                                            </span>
                                            <span class="ya-share2__title">Одноклассники</span>
                                        </a>
                                    </li>
                                    <li class="ya-share2__item ya-share2__item_service_twitter">
                                        <a class="ya-share2__link" href="" rel="nofollow noopener" target="_blank" title="Twitter">
                                            <span class="ya-share2__badge">
                                                <span class="ya-share2__icon"></span>
                                            </span>
                                            <span class="ya-share2__title">Twitter</span>
                                        </a>
                                    </li>
                                    <li class="ya-share2__item ya-share2__item_service_telegram">
                                        <a class="ya-share2__link" href="" rel="nofollow" target="_blank" title="Telegram">
                                            <span class="ya-share2__badge">
                                                <span class="ya-share2__icon"></span>
                                            </span>
                                            <span class="ya-share2__title">Telegram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sliders-tab">
            <div class="sliders-tab__top">
                <div class="sliders-tab__title">
                    <div class="title active" data-id="news">Последние новости</div>
                </div>
                <div class="sliders-tab__arrow">
                    <div class="swiper-button swiper-button-prev"></div>
                    <div class="swiper-button swiper-button-next"></div>
                </div>
            </div>
            <div class="sliders-tab__sliders">
                <div class="slider news active" id="news">
                    <div class="swiper-list">
                        <div class="swiper-wrapper">
                            <?$APPLICATION->IncludeComponent("bitrix:news","last-news",Array(
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "SEF_MODE" => "Y",
                                    "AJAX_MODE" => "N",
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => "16",
                                    "NEWS_COUNT" => "4",
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
                                    "LIST_FIELD_CODE" => Array("ID", "NAME", "DATE_CREATE"),
                                    "LIST_PROPERTY_CODE" => Array("PHOTO"),
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
                </div>
            </div>
        </div>
        <div class="sliders-tab">
            <div class="sliders-tab__top">
                <div class="sliders-tab__title">
                    <div class="title active" data-id="player">Другие <?=$player['ROLE']['PLURAL']?></div>
                </div>
                <div class="sliders-tab__arrow">
                    <div class="swiper-button swiper-button-prev"></div>
                    <div class="swiper-button swiper-button-next"></div>
                </div>
            </div>
            <div class="sliders-tab__sliders">
                <div class="slider player active" id="player">
                    <div class="swiper-list">
                        <div class="swiper-wrapper">
                            <?// когда подключал через компонент news, то страница падала из-за ошибки по памяти?>
                            <?$res = \CIBlockELement::GetList(
                                [],
                                [
                                    '!ID' => $arResult['PLAYER']['ID'],
                                    'SECTION_ID' => $arResult['PLAYER']['TEAM_ID'],
                                    'PROPERTY_ROLE_VALUE' => $arResult['PLAYER']['ROLE']['SINGULAR'],
                                ]
                            );
                            while ($player = $res->GetNextElement()):?>
                                <div class="swiper-slide">
                                    <div class="slider__slide">
                                        <a class="player__slide" href="<?=$player->GetFields()['DETAIL_PAGE_URL']?>/">
                                            <div class="player__slide-img">
                                                <img src="<?=CFile::GetPath($player->GetProperties()['PHOTO']['VALUE'])?>" alt="<?$player->GetFields()['NAME']?>"/>
                                                <div class="tr-item__number"><?=$player->GetProperties()['NUMBER']['VALUE']?></div>
                                            </div>
                                            <div class="player__slide-title">
                                                <?=$player->GetFields()['NAME']?>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?endwhile?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
