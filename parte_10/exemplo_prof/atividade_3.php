<?php

    if(isset($_POST['btnExecutar'])){
        $numero = $_POST['numero'];

        if($numero == ''){
            $msgError = 'Peencher o campo Número!';
        }else{
            echo '=== INÍCIO DA RENDERIZAÇÃO DO LAÇO DE REPETIÇÃO! ======================<p>';

            for($i=1; $i <= $numero; $i++){
                echo 'O número digitado foi: ' . $numero . ' - Linha Renderizada: ' . $i . '.<br>';
            }

            echo '</p>=== FIM DA RENDERIZAÇÃO DO LAÇO DE REPETIÇÃO! ======================<hr>';
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
        <label>Digite um número qualquer para renderização do Laço de Repetição:</label>
        <input type="number" name="numero" placeholder="Digite aqui..." value="<?= isset($numero) ? $numero : '' ?>">
        <button name="btnExecutar">EXECUTAR</button>
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>