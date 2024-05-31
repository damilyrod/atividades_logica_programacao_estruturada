<?php

require_once 'funcaoTotal/funcao11.php';

if (isset($_POST['btnCalcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];

    if ($n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '') {
        $msgError = 'Preencher TODOS os campos!';
    } else {
        $total = SomaMultiplica($n1, $n2, $n3, $n4, $n5);
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ex3_funcao.php" method="post">
        <label>Primeiro Número</label>
        <input name="n1" value="<?= isset($n1) ? $n1 : '' ?>">
        <br><br>
        <label>Segundo Número</label>
        <input name="n2" value="<?= isset($n2) ? $n2 : '' ?>">
        <br><br>
        <label>Terceiro Número</label>
        <input name="n3" value="<?= isset($n3) ? $n3 : '' ?>">
        <br><br>
        <label>Quarto Número</label>
        <input name="n4" value="<?= isset($n4) ? $n4 : '' ?>">
        <br><br>
        <label>Quinto Número</label>
        <input name="n5" value="<?= isset($n5) ? $n5 : '' ?>">
        <button name="btnCalcular">Calcular</button>

    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <?php if (isset($n1) && $n1 != '' || isset($n2) && $n2 != '' || isset($n3) && $n3 != '' || isset($n4) && $n4 != '' || isset($n5) && $n5 != '') { ?>
        <hr>
        <strong>Total:</strong><input disabled value="<?= isset($total) ? $total : '' ?>">
    <?php } ?>
</body>

</html>