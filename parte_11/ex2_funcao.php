<?php

require_once 'funcaoTotal/funcao11.php';

if (isset($_POST['btnCalcular'])) {
    $salario = $_POST['salario'];
    $aumento = $_POST['aumento'];

    if ($salario == '' || $aumento == '') {
        $msgError = 'Preencher TODOS os campos!';
    } else {
        $porcentagem = Porcentagem($salario, $aumento);
    } {
        $total = Total($porcentagem, $salario);
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
    <form action="ex2_funcao.php" method="post">
        <label>Digite seu salário:</label>
        <input name="salario" value="<?= isset($salario) ? $salario : '' ?>"><br><br>
        <label>Aumento (em porcentagem sem símbolo)</label>
        <input name="aumento" value="<?= isset($aumento) ? $aumento : '' ?>">
        <button name=btnCalcular>Calcular</button>
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <?php if (isset($salario) && $salario != '' || isset($aumento) && $aumento != '') { ?>
        <hr>
        <strong>Salário:</strong><input disabled value="<?= isset($salario) ? $salario : '' ?>">
        <strong>Aumento:</strong><input disabled value="<?= isset($porcentagem) ? $porcentagem : '' ?>">
        <strong>Total com aumento:</strong><input disabled value="<?= isset($total) ? $total : '' ?>">
    <?php } ?>
</body>

</html>