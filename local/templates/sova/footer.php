<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</main>
<div class="booking-modal" id="booking-modal">
    <div class="booking-modal__wrapper">
        <div class="booking-modal__title">Бронирование с помощью администратора</div>
        <div class="booking-modal__text">В текущий момент, забронировать данный зал возможно только с помощью администратора. Свяжитесь с администратором по телефону, либо через социальные сети.</div>
        <div class="booking-modal__row">
            <div class="booking-modal__phone">
                <div class="booking-modal__phone-label">Телефон</div>
                <div class="booking-modal__phone-tel">+ 7 (982) 378 - 25 - 25</div>
            </div>
            <div class="booking-modal__socials"><a class="booking-modal__socials-item" href="#">вконтакте</a></div>
        </div>
        <button class="btn btn--bg booking-modal__btn" data-fancybox-close="data-fancybox-close">Понятно</button>
    </div>
    <button class="booking-modal__close" data-fancybox-close="data-fancybox-close">
        <div class="booking-modal__close-img"></div>
    </button>
</div>
<footer class="footer">
    <div class="wrapper">
        <div class="footer-cont">
            <div class="footer__menu">
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
            </div>
            <div class="footer__logo"><a class="logo" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg"/></a></div>
            <div class="footer__text">
                <div class="copyright">© Фотостудия Фотосова 2020</div><a href="#">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>