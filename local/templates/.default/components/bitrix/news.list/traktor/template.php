<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<!--<pre><?/*print_r($arResult)*/?></pre>-->

<!--<div class="inner-page">
    <div class="inner-page__title">
        <div class="wrapper">
            <div class="title-block">
                <h1 class="title-block__title">Новости клуба</h1>
                <div class="title-block__crumbs">
                    <div class="bread-crumbs">
                        <a class="bread-crumbs__link" href="/">Трактор</a>
                        <a class="bread-crumbs__link" href="/media">Медиа</a>
                        <span class="bread-crumbs__this">Новости клуба</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-page__content">
        <div class="wrapper">
            <div class="news">
                <div class="news-top">
                    <div class="links__list">
                        <?/*$APPLICATION->IncludeComponent("bitrix:menu","news",Array(
                                "ROOT_MENU_TYPE" => "news",
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
                        );*/?>
                    </div>
                </div>-->
                <div class="news__list">
                    <?
                    // привязка к ID, а не названию, потому что клиент может переименовать раздел
                    switch($arResult['SECTION']['PATH'][0]['ID']):
                        // раздел спонсоры
                        case 27:?>
                            <?foreach ($arResult['BANNERS'] as $banner):?>
                                <?
                                // для появления в режиме правке соответствующих кнопок при наведении на элемент
                                $this->AddEditAction($banner['ID'], $banner['EDIT_LINK'], CIBlock::GetArrayByID($banner["IBLOCK_ID"], "ELEMENT_EDIT"));
                                $this->AddDeleteAction($banner['ID'], $banner['DELETE_LINK'], CIBlock::GetArrayByID($banner["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                ?>
                                <div class="news__banner" id="<?=$this->GetEditAreaId($banner['ID']);?>">
                                    <a class="news__banner-link" href="<?=$banner['LINK'];?>" target="_blank">
                                        <img src="<?=$banner['LOGO']?>" alt=""/>
                                    </a>
                                </div>
                            <?endforeach;
                            break;?>

                        <? // раздел все новости
                        case null:?>
                            <?foreach (array_values($arResult['NEWS']) as $i => $news):?>
                                <?if ($i == 2):?>
                                    <?for ($j = 0; $j < 2; $j++):?>
                                        <?$banner = array_values($arResult['BANNERS'])[$j];
                                        // для появления в режиме правке соответствующих кнопок при наведении на элемент
                                        $this->AddEditAction($banner['ID'], $banner['EDIT_LINK'], CIBlock::GetArrayByID($banner["IBLOCK_ID"], "ELEMENT_EDIT"));
                                        $this->AddDeleteAction($banner['ID'], $banner['DELETE_LINK'], CIBlock::GetArrayByID($banner["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                        ?>
                                        <div class="news__banner" id="<?=$this->GetEditAreaId($banner['ID']);?>">
                                            <a class="news__banner-link" href="<?=$banner['LINK'];?>" target="_blank">
                                                <img src="<?=$banner['LOGO']?>" alt=""/>
                                            </a>
                                        </div>
                                    <?endfor;?>
                                <?endif;?>

                                <?
                                // для появления в режиме правке соответствующих кнопок при наведении на элемент
                                $this->AddEditAction($news['ID'], $news['EDIT_LINK'], CIBlock::GetArrayByID($news["IBLOCK_ID"], "ELEMENT_EDIT"));
                                $this->AddDeleteAction($news['ID'], $news['DELETE_LINK'], CIBlock::GetArrayByID($news["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                ?>
                                <div class="news__item-cont <?if($i == 0 || $i == count($arResult['NEWS'])-1):?> news__item-cont--2 <?endif;?>" id="<?=$this->GetEditAreaId($news['ID']);?>">
                                    <a class="news__item" href="<?=$news['DETAIL_PAGE_URL']?>">
                                        <div class="news__item-img">
                                            <img src="<?=$news['PHOTO']?>" alt=""/>
                                        </div>
                                        <div class="news__item-info">
                                            <div class="news__item-title"><?=$news['NAME']?></div>
                                            <div class="news__item-date"><?=$news['DATE'];?></div>
                                        </div>
                                    </a>
                                </div>
                            <?endforeach;
                            break;?>

                        <? // конкретный раздел
                        default:?>
                            <?foreach (array_values($arResult['NEWS']) as $i => $news):?>
                                <?
                                // для появления в режиме правке соответствующих кнопок при наведении на элемент
                                $this->AddEditAction($news['ID'], $news['EDIT_LINK'], CIBlock::GetArrayByID($news["IBLOCK_ID"], "ELEMENT_EDIT"));
                                $this->AddDeleteAction($news['ID'], $news['DELETE_LINK'], CIBlock::GetArrayByID($news["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                ?>
                                <div class="news__item-cont <?if($i == 0 || $i == count($arResult['NEWS'])-1):?> news__item-cont--2 <?endif;?>" id="<?=$this->GetEditAreaId($news['ID']);?>">
                                    <a class="news__item" href="<?=$news['DETAIL_PAGE_URL']?>">
                                        <div class="news__item-img">
                                            <img src="<?=$news['PHOTO']?>" alt=""/>
                                        </div>
                                        <div class="news__item-info">
                                            <div class="news__item-title"><?=$news['NAME']?></div>
                                            <div class="news__item-date"><?=$news['DATE'];?></div>
                                        </div>
                                    </a>
                                </div>
                            <?endforeach;?>
                    <?endswitch;?>


                </div>
                <div class="paginator" id="pag">
                    <!--<a class="paginator__link-more" href="">Показать еще</a>-->
                    <?=$arResult['NAV_STRING']?>
                </div>
            <!--</div>-->

            <!--<div class="information-bot">-->
                <?ob_start();?>
                    <?$banner = $arResult['BANNERS'][array_key_last($arResult['BANNERS'])];
                    // для появления в режиме правке соответствующих кнопок при наведении на элемент
                    $this->AddEditAction($banner['ID'], $banner['EDIT_LINK'], CIBlock::GetArrayByID($banner["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($banner['ID'], $banner['DELETE_LINK'], CIBlock::GetArrayByID($banner["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="information-bot__item" id="<?=$this->GetEditAreaId($banner['ID']);?>">
                        <div class="information-sponsor">
                            <a class="sponsor__img" href="<?=$banner['LINK'];?>" target="_blank">
                                <img src="<?=$banner['LOGO']?>" alt="<?=$banner['NAME']?> Генеральный спонсор клуба"/>
                            </a>
                        </div>
                    </div>
                <?$APPLICATION->addViewContent('last-sponsor', ob_get_clean())?>

                <!--<div class="information-bot__item">
                    <div class="subscribe-cont">
                        <?/*$APPLICATION->includeComponent('custom:form', 'subscribe', [
                            'IBLOCK_ID' => '20',
                            'PARENT_SECTION_ID' => '',
                            'FIELD_CODE' => Array('ID'),
                            'PROPERTY_CODE' => Array('EMAIL'),
                        ]);*/?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->





