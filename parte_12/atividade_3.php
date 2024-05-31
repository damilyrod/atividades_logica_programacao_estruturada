<?php

    require_once 'ClassDAO.php';

    if(isset($_POST['btnCalcular'])){
        $meses = $_POST['meses'];
        $ganhos = trim($_POST['ganhos']);
        $lucro = trim($_POST['lucro']);
        $perda = trim($_POST['perda']);

        $objDAO = new ClassDAO();
        $ret = $objDAO->CalcularSalario($meses, $ganhos, $lucro, $perda);

        if($ret == 0){
            $msgError = '<span style="color: red;">Preencher todos os campos Obrigatórios!</span>';
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
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_3.php" method="POST">
        <label>Digite a quantidade de Meses:</label>
        <input type="number" name="meses" value="<?= isset($meses) ? $meses : '' ?>">
        <br>
        <label>Digite seus Ganhos:</label>
        <input type="text" name="ganhos" value="<?= isset($ganhos) ? $ganhos : '' ?>">
        <br>
        <label>Digite o Lucro:</label>
        <input type="text" name="lucro" value="<?= isset($lucro) ? $lucro : '' ?>">
        <br>
        <label>Digite a Perda:</label>
        <input type="text" name="perda" value="<?= isset($perda) ? $perda : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
    <?php if(isset($ret) && $ret != '' && $ret != 0): ?>
        <strong>Resultado Final:</strong>
        <input disabled value="R$ <?= isset($ret) ? number_format($ret, 2, ',', '.') : '' ?>">
    <?php endif; ?>
</body>
</html>