<?php

require_once 'Classe/ClasseEx.php';


if (isset($_POST['btn_calcular'])) {
    $combustivel = $_POST['combustivel'];
    $qtdlitro = $_POST['qtdlitro'];


    $objcombustivel = new Combustivel();

    $resultado = $objcombustivel->CalcularTotalLitros($combustivel, $qtdlitro);

    if ($resultado == 0) {
        $msgError = 'Selecionar e/ou preencher os campos!';
    }
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>

<body>
    <form action="ex1_poo.php" method="post">
        <label>Tipo de Combustível</label>
        <select name="combustivel">
            <option value="">Selecione</option>
            <option value="n1">1 - Etanol</option>
            <option value="n2">2 - Gasolina</option>
        </select>
        <label>Quantidade de litros</label>
        <input type="number" name="qtdlitro" value="<?= isset($qtdlitro) ? $qtdlitro : '' ?>">
        <button name="btn_calcular">Calcular</button>

    </form>
    <?= isset($msgError) ? $msgError : '' ?>
    <?php if(isset($resultado) && $resultado != '' && $resultado != 0): ?>
        <strong>Resultado Final:</strong>
        <input disabled value="R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?>">
    <?php endif; ?>

</body>

</html>