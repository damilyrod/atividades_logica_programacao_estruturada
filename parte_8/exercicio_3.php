<?php
if (isset($_POST['btn_calcular'])) {
    $b1 = trim($_POST['b1']);
    $b2 = trim($_POST['b2']);
    $b3 = trim($_POST['b3']);
    $b4 = trim($_POST['b4']);

    if ($b1 == null || $b2 == null || $b3 == null || $b4 == null) {
        $msgError = '<div style="color: #FF0000;">Preencher os campos obrigatórios!</div>';
    } else {
        $resultado = ($b1 + $b2 + $b3 + $b4) / 4;

        if ($resultado < 0) {
            $status = '<div style = "color: #FF0000;">Valor inválido para calcular média</div>';
        } else if ($resultado >= 0 && $resultado <= 39) {
            $status = '<div style = "color: #FF0000;">REPROVADO</div>';
        } else if ($resultado >= 40 && $resultado <= 59) {
            $status = '<div style = "color: #FFA500;">Exame</div>';
        } else {
            $status = '<div style = "color: #006400;">Aprovado</div>';
        }
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

<body style="font-family: Arial, Helvetica, sans-serif;">

    <form action="exercicio_3.php" method="post">
        <h1>Notas Escolares de 2023</h1>
        <label>1º Bimestre</label>
        <input name="b1" value="<?= isset($b1) ? $b1 : '' ?>">
        <label>2º Bimestre</label>
        <input name="b2" value="<?= isset($b2) ? $b2 : '' ?>">
        <label>3º Bimestre</label>
        <input name="b3" value="<?= isset($b3) ? $b3 : '' ?>">
        <label>4º Bimestre</label>
        <input name="b4" value="<?= isset($b4) ? $b4 : '' ?>">

        <button name="btn_calcular">Calcular</button>

    </form>
    <?= isset($msgError) ? $msgError : '' ?>
    <?php if (isset($resultado) && $resultado != '' && isset($status) && $status != '') { ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
        <br>
        <span>Status:</span>
        <?= isset($status) ? $status : '' ?>
    <?php } ?>
</body>

</html>