<?php
if (isset($_POST['btn_calcular'])) {
    $campo_1 = trim($_POST['campo_1']);
    $campo_2 = trim($_POST['campo_2']);
    $campo_3 = trim($_POST['campo_3']);
    $campo_4 = trim($_POST['campo_4']);
    $campo_5 = trim($_POST['campo_5']);

    if ($campo_1 == null || $campo_2 == null || $campo_3 == null || $campo_4 == null || $campo_5 == null) {
        $msgError = '<div style="color: #FF0000;">Preencher os campos obrigatórios!</div>';
    } else {
        $multiplicacao1 = $campo_1 * 2;
        $multiplicacao2 = $campo_2 * 2;
        $adicao = $campo_3 + $campo_4 + $campo_5;
        $resultado = $multiplicacao1 + $multiplicacao2 + $adicao;

        if ($resultado > 100) {
            $status = '<div style = "color: #006400;">Resultado maior que 100</div>';
        } else if ($resultado < 100) {
            $status = '<div style = "color: #006400;">Resultado menor que 100</div>';
        } else {
            $status = '<div style = "color: #006400;">Resultado igual 100</div>';
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

<body>
    <form action="exercicio_1.php" method="post">
        <label>campo 1</label>
        <input name="campo_1" value="<?= isset($campo_1) ? $campo_1 : '' ?>">
        <br>
        <label>campo 2</label>
        <input name="campo_2" value="<?= isset($campo_2) ? $campo_2 : '' ?>">
        <br>
        <label>campo 3</label>
        <input name="campo_3" value="<?= isset($campo_3) ? $campo_3 : '' ?>">
        <br>
        <label>campo 4</label>
        <input name="campo_4" value="<?= isset($campo_4) ? $campo_4 : '' ?>">
        <br>
        <label>campo 5</label>
        <input name="campo_5" value="<?= isset($campo_5) ? $campo_5 : '' ?>">
        <br>
        <button name="btn_calcular">calcular</button>



    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
</body>

</html>