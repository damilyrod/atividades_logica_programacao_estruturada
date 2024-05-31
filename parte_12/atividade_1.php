<?php

    require_once 'ClassDAO.php';

    $combustivel = '';

    if(isset($_POST['btnCalcular'])){
        $combustivel = $_POST['combustivel'];
        $litro = $_POST['quantidade'];

        $objDAO = new ClassDAO();
        $ret = $objDAO->CalcularCombustivel($combustivel, $litro);

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
    <title>Atividade 1</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_1.php" method="POST">
        <label>Selecione o Tipo do Combustível:</label>
        <select name="combustivel">
            <option value="">Selecione</option>
            <option value="1" <?= $combustivel == 1 ? 'selected' : '' ?>>Etanol</option>
            <option value="2" <?= $combustivel == 2 ? 'selected' : '' ?>>Gasolina</option>
            <option value="3" <?= $combustivel == 3 ? 'selected' : '' ?>>Diesel</option>
        </select>
        <br>
        <label>Digite a Quantidade:</label>
        <input type="number" name="quantidade" value="<?= isset($litro) ? $litro : '' ?>">
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