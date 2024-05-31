<?php

require_once 'Classe/Calculo.php';

if (isset($_POST['btnCalcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operacao = $_POST['operacao'];

    $objcalculo = new Calculo();
    $resultado = $objcalculo->CalcularCalculadora($n1, $n2, $operacao);
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
    <form action="calculadora_poo.php" method="post">
        <label>Primeiro Número</label>
        <input name="n1" value="<?= isset($n1) ? $n1 : '' ?>">
        <select name="operacao">
            <option value="x">Multiplicar</option>
            <option value="/">Dividir</option>
            <option value="+">Somar</option>
            <option value="-">Subtrair</option>
        </select>
        <label>Segundo Número</label>
        <input name="n2" value="<?= isset($n2) ? $n2 : '' ?>">


        <button name="btnCalcular">Calcular</button>


    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <?php if (isset($n1) && $n1 != '' || isset($n2) && $n2 != '') { ?>
        <hr>
        <strong>Resultado:</strong><input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>
</body>

</html>