<?php

require_once 'Classe/ClasseEx.php';

if (isset($_POST['btnCalcular'])) {
    $qtd = $_POST['qtd'];
    $media = trim($_POST['media']);
    $lucro = trim($_POST['lucro']);
    $perda = trim($_POST['perda']);


    $objTotal = new CalculoGanhosPerdas();
    $resultado = $objTotal->CalcularTotal($lucro, $perda, $qtd, $media);

    if ($resultado == 0) {
        echo "Preencher os campos!";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>

<body>
    <form action="ex3_poo.php" method="post">
        <label>Quantidade de meses de trabalho</label>
        <input type="number" name="qtd" value=" <?= isset($qtd) ? $qtd : '' ?>">
        <label>Ganho médio mensal</label>
        <input name="media" value=" <?= isset($media) ? $media : '' ?>">
        <label>Percentual (%) de Lucro Total</label>
        <input name="lucro" value=" <?= isset($lucro) ? $lucro : '' ?>">
        <label>Percentual (%) de Perda Total</label>
        <input name="perda" value=" <?= isset($perda) ? $perda : '' ?>">
        <button name=btnCalcular>Calcular</button>

    </form>
    <?php if(isset($resultado) && $resultado != '' && $resultado != 0): ?>
        <strong>Resultado Final:</strong>
        <input disabled value="R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?>">
    <?php endif; ?>
</body>

</html>