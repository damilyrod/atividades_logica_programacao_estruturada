<?php

require_once 'Classe/Calculo.php';

if (isset($_POST['btnCalcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $objcalculo = new Calculo();
    $total = $objcalculo->SomarCalculo($n1, $n2, $n3);
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
    <form action="exemplo_poo.php" method="post">
        <label>Número</label>
        <input name="n1" value="<?= isset($n1) ? $n1 : '' ?>">
        <label>Número</label>
        <input name="n2" value="<?= isset($n2) ? $n2 : '' ?>">
        <label>Número</label>
        <input name="n3" value="<?= isset($n3) ? $n3 : '' ?>">
        <button name="btnCalcular">Calcular</button>
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <?php if (isset($n1) && $n1 != '' || isset($n2) && $n2 != '' || isset($n3) && $n3 != '') { ?>
        <hr>
        <strong>Total:</strong><input disabled value="<?= isset($total) ? $total : '' ?>">
    <?php } ?>
</body>

</html>