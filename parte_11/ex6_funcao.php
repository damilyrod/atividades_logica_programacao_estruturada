<?php

require_once 'funcaoTotal/funcao11.php';

if (isset($_POST['btnCalcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $n6 = $_POST['n6'];
    $n7 = $_POST['n7'];
    $n8 = $_POST['n8'];
    $n9 = $_POST['n9'];
    $n10 = $_POST['n10'];

    if ($n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '' || $n6 == '' || $n7 == '' || $n8 == '' || $n9 == '' || $n10 == '') {
        $msgError = 'Preencher TODOS os campos!';
    } else {
        $total = SomaDivide($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10);
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
    <form action="ex6_funcao.php" method="post">
        <label>Número</label>
        <input name="n1" value="<?= isset($n1) ? $n1 : '' ?>">
        <label>Número</label>
        <input name="n2" value="<?= isset($n2) ? $n2 : '' ?>"><br><br>
        <label>Número</label>
        <input name="n3" value="<?= isset($n3) ? $n3 : '' ?>">
        <label>Número</label>
        <input name="n4" value="<?= isset($n4) ? $n4 : '' ?>"><br><br>
        <label>Número</label>
        <input name="n5" value="<?= isset($n5) ? $n5 : '' ?>">
        <label>Número</label>
        <input name="n6" value="<?= isset($n6) ? $n6 : '' ?>"><br><br>
        <label>Número</label>
        <input name="n7" value="<?= isset($n7) ? $n7 : '' ?>">
        <label>Número</label>
        <input name="n8" value="<?= isset($n8) ? $n8 : '' ?>"><br><br>
        <label>Número</label>
        <input name="n9" value="<?= isset($n9) ? $n9 : '' ?>">
        <label>Número</label>
        <input name="n10" value="<?= isset($n10) ? $n10 : '' ?>"><br><br>
        <button name="btnCalcular">Calcular</button>


    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <?php if (isset($n1) && $n1 != '' || isset($n2) && $n2 != '' || isset($n3) && $n3 != '' || isset($n4) && $n4 != '' || isset($n5) && $n5 != '' || 
    isset($n6) && $n6 != '' || isset($n7) && $n7 != '' || isset($n8) && $n8 != '' || isset($n9) && $n9 != '' || isset($n10) && $n10 != '') { ?>
        <hr>
        <strong>Total:</strong><input disabled value="<?= isset($total) ? $total : '' ?>">
    <?php } ?>
</body>

</html>