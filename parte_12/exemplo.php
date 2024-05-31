<?php

    require_once 'ClassDAO.php';

    if(isset($_POST['btnSomar'])){
        $numero1 = trim($_POST['vl1']);
        $numero2 = trim($_POST['vl2']);

        $objDAO = new ClassDAO();
        $ret = $objDAO->SomarExercicio($numero1, $numero2);

        if($ret == 0){
            echo 'Preencher todos os campos obrigatórios!';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="exemplo.php" method="POST">
        <label>Digite o Primeiro Valor:</label>
        <input type="text" name="vl1" value="<?= isset($numero1) ? $numero1 : '' ?>">
        <br>
        <label>Digite o Segundo Valor:</label>
        <input type="text" name="vl2" value="<?= isset($numero2) ? $numero2 : '' ?>">
        <br>
        <button name="btnSomar">SOMAR</button>
    </form>
    <?php if(isset($ret) && $ret != '' && $ret != 0){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($ret) ? $ret : '' ?>">
    <?php } ?>
</body>
</html>