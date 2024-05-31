<?php

require_once 'funcaoTotal/funcao11.php';

if (isset($_POST['btnCalcular'])) {
    $produto = trim($_POST['produto']);
    $valor = $_POST['valor'];
    $qtd = $_POST['qtd'];

    if ($produto == '' || $valor == '' || $qtd == '') {
        $msgError = 'Preencha todos os campos, please!';
    } else {
        $total = Calcula($produto, $valor, $qtd);
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
    <form action="ex5_funcao.php" method="post">
        <label>Produto:</label>
        <input name="produto" value="<?= isset($produto) ? $produto : '' ?>">
        <label>Valor unitário:</label>
        <input name="valor" value="<?= isset($valor) ? $valor : '' ?>">
        <label>Quantidade comprada:</label>
        <input type= "number" name="qtd" value="<?= isset($qtd) ? $qtd : '' ?>">
        <button name="btnCalcular">Calcular</button>

    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <?php if (isset($produto) && $produto != '' || isset($valor) && $valor != '' || isset($qtd) && $qtd != '') { ?>
        <hr>
        <strong>Total:</strong><input disabled value="<?= isset($total) ? $total : '' ?>">
    <?php } ?>
</body>

</html>