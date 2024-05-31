<?php

if (isset($_POST['btn_con'])) {

    $fruta1 = trim($_POST['f1']);
    $fruta2 = trim($_POST['f2']);
    $fruta3 = trim($_POST['f3']);
    $fruta4 = trim($_POST['f4']);
    $fruta5 = trim($_POST['f5']);

    if ($fruta1 == '' || $fruta2 == '' || $fruta3 == '' || $fruta4 == '' || $fruta5 == '') {
        $msgError = 'Preencher todos os campos corretamente!';
    } else {

        $frutaTotal = array();

        $frutaTotal[] = $fruta1;
        $frutaTotal[] = $fruta2;
        $frutaTotal[] = $fruta3;
        $frutaTotal[] = $fruta4;
        $frutaTotal[] = $fruta5;

        for ($i = 0; $i < count($frutaTotal); $i++) {
            echo '<pre>';
            echo 'A fruta guardada na posição ' . $i . ' é ' . $frutaTotal[$i] . '<br>';
            echo '</pre>';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
</head>

<body>
    <form action="atividade2_frutas.php" method="post">
        <h3>Digite 5 frutas de sua preferência.</h3>
        <label>fruta</label>
        <input name="f1" value="<?= isset($fruta1) ? $fruta1 : '' ?>">
        <br><br>
        <label>fruta</label>
        <input name="f2" value="<?= isset($fruta2) ? $fruta2 : '' ?>">
        <br><br>
        <label>fruta</label>
        <input name="f3" value="<?= isset($fruta3) ? $fruta3 : '' ?>">
        <br><br>
        <label>fruta</label>
        <input name="f4" value="<?= isset($fruta4) ? $fruta4 : '' ?>">
        <br><br>
        <label>fruta</label>
        <input name="f5" value="<?= isset($fruta5) ? $fruta5 : '' ?>">
        <button name="btn_con">Confirmar</button>
    </form>
    <span style="color: #FF0000;"><?= isset($msgError) ? $msgError : '' ?></span>
</body>

</html>