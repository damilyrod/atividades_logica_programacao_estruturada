<?php
if (isset($_POST['btn_calcular'])) {
    $salario = trim($_POST['salario']);

    if ($salario == null) {
        $msgError = '<div style color:" #FF0000;">Preencher os campos obrigatórios!</div>';
    } else {
        $resultado1 =  $salario * (15 / 100);
        $resultado2 =  $salario * (18 / 100);
        $resultado3 = $resultado1 + $resultado2;
        $resultado4 = $resultado3 + $salario;
    }
    if ($resultado3 > 0 && $resultado3 <= 100) {
        $status = '<div style="color: #006400;">Aumento ruim</div>';
    } else if ($resultado3 > 101 && $resultado3 <= 200) {
        $status = '<div style="color: #006400;">Aumento razoavél</div>';
    } else if ($resultado3 > 201 && $resultado3 <= 300) {
        $status = '<div style="color: #006400;">Aumento bom</div>';
    } else if ($resultado3 > 301 && $resultado3 <= 400) {
        $status = '<div style="color: #006400;">Aumento ótimo</div>';
    } else {
        $status = '<div style="color: #006400;">Aumento excelente!</div>';
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
    <form action="exercicio_6.php" method="POST">
        <label>Salário</label>
        <input name="salario" value="<?= isset($salario) ? $salario : '' ?>">

        <button name="btn_calcular">Calcular</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
    <?php if (isset($resultado1) && $resultado1 != '' && isset($resultado2) && $resultado2 != '' && isset($resultado3) && $resultado3 != '' && isset($status) && $status) { ?>
        <span>Salário com aumento:</span>
        <input disabled value="<?= isset($resultado1) ? $resultado1 : '' ?>">
        <input disabled value="<?= isset($resultado2) ? $resultado2 : '' ?>">
        <input disabled value="<?= isset($resultado3) ? $resultado3 : '' ?>">
        <input disabled value="<?= isset($resultado4) ? $resultado4 : '' ?>">
    <?php } ?>
    <?= isset($status) ? $status : '' ?>

</body>

</html>