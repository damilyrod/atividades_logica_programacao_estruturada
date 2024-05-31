<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $sobre = trim($_POST['sobre']);
        $idade = $_POST['idade'];
        $numero = $_POST['numero'];

        if($nome == '' || $sobre == '' || $idade == '' || $numero == ''){
            $msgError = 'Preencher todos os campos Obrigatórios!';
        }else{

            for($i=1; $i <= $numero; $i++){
                echo 'Meu nome é ' . $nome . ' ' . $sobre . ' e tenho ' . $idade . ' anos de idade. Número digitado: ' . $numero . ' - Posição Renderizada: ' . $i . '.<br>';
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
    <title>Atividade 1</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_1.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" placeholder="Digite aqui..." value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite seu Sobrenome:</label>
        <input type="text" name="sobre" placeholder="Digite aqui..." value="<?= isset($sobre) ? $sobre : '' ?>">
        <br>
        <label>Digite sua Idade:</label>
        <input type="number" name="idade" placeholder="Digite aqui..." value="<?= isset($idade) ? $idade : '' ?>">
        <br>
        <label>Digite um número qualquer:</label>
        <input type="number" name="numero" placeholder="Digite aqui..." value="<?= isset($numero) ? $numero : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>