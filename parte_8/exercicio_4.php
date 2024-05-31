<?php
if (isset($_POST['btn_calcular'])) {
    $salario = trim($_POST['salario']);
    $aumento = trim($_POST['aumento']);

    if ($salario == null || $aumento == null) {
        $msgError = '<div style color:" #FF0000;">Preencher os campos obrigatórios!</div>';
    } else {
        $percentual = $salario + ($salario * ($aumento / 100));
        $salario_final = $salario + $percentual;
    }
    if ($percentual > 0 && $percentual <= 100) {
        $status = '<div style="color: #FF4500;">Aumento para nível 1</div>';
    } else if ($percentual > 101 && $percentual <= 200) {
        $status = '<div style="color: #006ccd;">Aumento para nível 2</div>';
    } else if ($percentual > 201 && $percentual <= 300) {
        $status = '<div style="color: #006400;">Aumento para nível 3</div>';
    } else if ($percentual > 301 && $percentual <= 400) {
        $status = '<div style="color: #006400;">Aumento para nível 4</div>';
    } else {
        $status = '<div style="color: #006400;">Aumento para nível 5</div>';
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
    <form action="exercicio_4.php" method="post">
        <h1>Calcule seu aumento de salário</h1>

        <label>Salário</label>
        <input name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <label>Aumento</label>
        <input name="aumento" value="<?= isset($aumento) ? $aumento : '' ?>">

        <button name="btn_calcular">Calcular</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
    <?php if (isset($percentual) && $percentual != '' && isset($salario_final) && $salario_final != '' && isset($status) && $status != '') { ?>
        <span>Salário Final:</span>
        <input disabled value="<?= isset($salario_final) ? $salario_final : '' ?>">
        <br>
        <span>Total de percentual:</span>
        <input disabled value="<?= isset($percentual) ? $percentual : '' ?>">
        <br>
        <span>Nível de aumento:</span> <?= isset($status) ? $status : '' ?>
    <?php } ?>
</body>

</html>