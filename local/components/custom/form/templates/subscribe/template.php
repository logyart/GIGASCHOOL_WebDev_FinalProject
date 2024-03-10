<?php

\Bitrix\Main\Loader::includeModule('iblock');
session_start();
$emailField ='EMAIL';
foreach ($arResult['PROPERTIES'] as $property) {
    $pos = strpos('email', strtolower($property));
    if ($pos !== false) {
        $emailField = $property;
        break;
    }
}

if ($_POST['form_id'] == 'subscribe-form') {
    $subscriber = new \CIBlockElement;
    $idSubscriber = $subscriber->add([
        'NAME' => 'Подписчик ' . time(),
        'IBLOCK_ID' => $arResult['IBLOCK_ID'],
        'PROPERTY_VALUES' => [
            $emailField => $_POST['email'],
        ]
    ]);

    if ($idSubscriber === false) {
        var_dump($idSubscriber);
        var_dump($idSubscriber->LAST_ERROR);
        exit();
    }

    $_SESSION['flash'] = 'Вы успешно подписались!';

    LocalRedirect('', false, '301 Moved Permanently');

}
if (isset($_SESSION['flash'])) {?>
    <script type="text/javascript">alert("<?=$_SESSION['flash']?>");</script>
    <?unset($_SESSION['flash']);
}
?>
<?$APPLICATION->IncludeFile(
    "/.include/form/label1/.php",
    Array(),
    Array(
        "MODE" => "text",
        "NAME" => "Название"
    )

);?>
<form action="" method="post">
    <input type="hidden" name="form_id" value="subscribe-form"/>
    <div class="subscribe">
        <div class="subscribe__label">
            <?if(CSite::inDir(SITE_DIR . 'news')):?>
                <?$APPLICATION->IncludeFile(
                    "/.include/form/labels/label2.php",
                    Array(),
                    Array(
                        "MODE" => "html",
                        "NAME" => "Название c переносом для страницы новостей"
                    )
                );?>
            <?else:?>
                <?$APPLICATION->IncludeFile(
                    "/.include/form/labels/label1.php",
                    Array(),
                    Array(
                        "MODE" => "text",
                        "NAME" => "Название"
                    )
                );?>
            <?endif;?>
        </div>
        <div class="subscribe__input">
            <div class="subscribe__input-input">
                <input type="email" name="email" placeholder="Ваш email"/>
                <input type="submit" value="Подписаться"/>
            </div>
            <div class="subscribe__input-text">
                <?$APPLICATION->IncludeFile(
                    "/.include/form/agreement/agree.php",
                    Array(),
                    Array(
                        "MODE" => "text",
                        "NAME" => "Согласие"
                    )
                );?>
            </div>
        </div>
    </div>
</form>