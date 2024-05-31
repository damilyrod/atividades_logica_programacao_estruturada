<?php

require_once 'Classe/ClasseEx.php';

if (isset($_POST['btnConverter'])) {
    $conversao = $_POST['conversao'];
    $valor = trim($_POST['valor']);


    $objconversao = new Conversao();

    $resultado = $objconversao->CalcularTotalConversao($conversao, $valor);

    if ($resultado == 0) {
        echo "Selecionar e/ou preencher os campos!";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>

<body>
    <form action="ex2_poo.php" method="post">
        <label>Escolha o tipo de conversão</label>
        <select name="conversao">
            <option value="">Selecione</option>
            <option value="f1">1 - Fahrenheit para Celsius</option>
            <option value="c2">2 - Celsius para Fahrenheit</option>
        </select>
        <label>Digite o valor desejado</label>
        <input name="valor" value="<?= isset($valor) ? $valor : '' ?>">
        <button name="btnConverter">Converter</button>

    </form>
    <?php if (isset($conversao) && $conversao != '' || isset($valor) && $valor != '') { ?>
        <hr>
        <span><strong>Resultado: </strong>R$ <input disabled value="<?= isset($resultado) ? $resultado : '' ?>"></span>
    <?php } ?>
</body>

</html>