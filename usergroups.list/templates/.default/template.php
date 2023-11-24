<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
// $currDir = (CMain::IsHTTPS() ? "https://" : "http://").SITE_SERVER_NAME.$APPLICATION->GetCurDir();
$currDir = $APPLICATION->GetCurDir();

?>

<h1><?= $arParams["GROUP_LIST_HEADER"] ?></h1>

<table class="table">
    <thead class="table table-striped table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">ACTIVE</th>
            <th scope="col">LINK</th>
        </tr>
    </thead>
    <tbody>

    <?foreach($arResult["ITEMS"] as $arItem):?>
        <tr>
            <th scope="row"><?= $arItem["ID"] ?></th>
            <td><?= $arItem["NAME"] ?></td>
            <td><?= $arItem["ACTIVE"] ?></td>
            <td><a href="<?= $currDir.$arItem["ID"] ?>">Подробнее</a></td>
        </tr>
    <?endforeach;?>

    </tbody>
</table>


