<?php
if (isset($_POST['btn_calcular'])) {
    $cam1 = trim($_POST['cam1']);
    $cam2 = trim($_POST['cam2']);
    $cam3 = trim($_POST['cam3']);

    if ($cam1 == null || $cam2 == null || $cam3 == null) {
        $msgError = '<div style="color: #FF0000;">Preencher os campos obrigatórios!</div>';
    } else {
        $resultado = $cam2 / 2;
        if ($resultado >= $cam1 && $resultado <= $cam3) {
            $status = '<div style = "color: #006400;">Resultado está entre o campo 1 e o campo 3</div>';
        } else {
            $status = '<div style = "color: #006400;">Resultado não está entre o campo 1 e o campo 3</div>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="exercicio_2.php" method="post">
        <label>campo 1</label>
        <input name="cam1" value="<?= isset($cam1) ? $cam1 : '' ?>">
        <br>
        <label>campo 2</label>
        <input name="cam2" value="<?= isset($cam2) ? $cam2 : '' ?>">
        <br>
        <label>campo 3</label>
        <input name="cam3" value="<?= isset($cam3) ? $cam3 : '' ?>">>
        <br>
        <button name="btn_calcular">Calcular</button>



    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>

</body>

</html>