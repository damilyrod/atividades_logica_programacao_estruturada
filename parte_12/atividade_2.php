<?php

    require_once 'ClassDAO.php';

    $unidadeMedida = '';

    if(isset($_POST['btnCalcular'])){
        $unidadeMedida = $_POST['medida'];
        $temperatura = $_POST['temp'];

        $objDAO = new ClassDAO();
        $ret = $objDAO->Conversao($unidadeMedida, $temperatura);

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
    <title>Atividade 2</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_2.php" method="POST">
        <label>Selecione a Unidade de Medida:</label>
        <select name="medida">
            <option value="">Selecione</option>
            <option value="1" <?= $unidadeMedida == 1 ? 'selected' : '' ?>>Celsius -> Fahrenheit</option>
            <option value="2" <?= $unidadeMedida == 2 ? 'selected' : '' ?>>Fahrenheit -> Celsius</option>
        </select>
        <br>
        <label>Digite a Temperatura:</label>
        <input type="number" name="temp" value="<?= isset($temperatura) ? $temperatura : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
    <?php if(isset($ret) && $ret != '' && $ret != 0): ?>
        <strong>Resultado Final:</strong>
        <input disabled value="<?= isset($ret) ? $ret : '' ?>">
    <?php endif; ?>
</body>
</html>