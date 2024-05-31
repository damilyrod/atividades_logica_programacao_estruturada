<?php

    if(isset($_POST['btnEnviar'])){
        $fruta1 = trim($_POST['fruta1']);
        $fruta2 = trim($_POST['fruta2']);
        $fruta3 = trim($_POST['fruta3']);
        $fruta4 = trim($_POST['fruta4']);
        $fruta5 = trim($_POST['fruta5']);

        if($fruta1 == '' || $fruta2 == '' || $fruta3 == '' || $fruta4 == '' || $fruta5 == ''){
            $msgError = 'Preencher todos os campos obrigatórios!';
        }else{

            $frutas = array($fruta1, $fruta2, $fruta3, $fruta4, $fruta5);

            // $frutas = array();

            // $frutas[] = $fruta1; // Posição 0.
            // $frutas[] = $fruta2; // Posição 1.
            // $frutas[] = $fruta3; // Posição 2.
            // $frutas[] = $fruta4; // Posição 3.
            // $frutas[] = $fruta5; // Posição 4.
    

            for($i=0; $i < count($frutas); $i++){
                echo 'A Fruta digitada foi ' . $frutas[$i] . '. Posição Renderizada: ' . $i . '.<br>';
            }

            echo '<hr>';

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
        <label>Digite a Primeira Fruta:</label>
        <input type="text" name="fruta1" placeholder="Digite aqui..." value="<?= isset($fruta1) ? $fruta1 : '' ?>">
        <br>
        <label>Digite a Segunda Fruta:</label>
        <input type="text" name="fruta2" placeholder="Digite aqui..." value="<?= isset($fruta2) ? $fruta2 : '' ?>">
        <br>
        <label>Digite a Terceira Fruta:</label>
        <input type="text" name="fruta3" placeholder="Digite aqui..." value="<?= isset($fruta3) ? $fruta3 : '' ?>">
        <br>
        <label>Digite a Quarta Fruta:</label>
        <input type="text" name="fruta4" placeholder="Digite aqui..." value="<?= isset($fruta4) ? $fruta4 : '' ?>">
        <br>
        <label>Digite a Quinta Fruta:</label>
        <input type="text" name="fruta5" placeholder="Digite aqui..." value="<?= isset($fruta5) ? $fruta5 : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>