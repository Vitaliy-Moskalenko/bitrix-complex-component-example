<? if(!empty($arResult["GROUP"])) { ?>

    <h1><?= $arResult["GROUP"]["NAME"] ?></h1>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DATE</th>
                <th scope="col">ACTIVE</th>
                <th scope="col">SORT</th>
                <th scope="col">IS_SYSTEM</th>
                <th scope="col">ANONYMOUS</th>
                <th scope="col">NAME</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

        <?foreach($arResult["GROUP"] as $arItem):?>
           <td><?= $arItem ?></td>
        <?endforeach;?>

        </tbody>
    </table>

<? } else { ?>
      <h1>Группа не найдена!</h1>
<? } ?>


