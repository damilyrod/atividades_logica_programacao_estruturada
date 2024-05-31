<?php

    // Operadores Lógicos:
    // || - OU.
    // && - E.
    // ! - NEGAÇÃO.

    //Operadores Relacionais:
    // > - MAIOR.
    // < - MENOR.
    // == - IGUAL.
    // >= - MAIOR IGUAL.
    // <= - MENOR IGUAL.

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $valor1 = trim($_POST['num1']);
        $valor2 = trim($_POST['num2']);

        // Forma genérica de tratamento de dados.
        // if($nome == '' || $valor1 == '' || $valor2 == ''){
        //     echo 'Preencher todos os campos obrigatórios!';
        // }

        // Forma individual de tratamento de dados.
        if($nome == null){
            $msgError = '<div style="color: #FF0000;">Preencher o campo obrigatório Nome!</div>';
        }else if($valor1 == ''){
            $msgError = '<div style="color: #FF0000;">Preencher o campo obrigatório Primeiro Valor!</div>';
        }else if($valor2 == ''){
            $msgError = '<div style="color: #FF0000;">Preencher o campo obrigatório Segundo Valor!</div>';
        }else{
            $resultado = $valor1 + $valor2;

            if($resultado < 20){
                $status = '<div style="color: #006400;">Resultado MENOR que 20!</div>';
            }else if($resultado > 20){
                $status = '<div style="color: #006400;">Resultado MAIOR que 20!</div>';
            }else{
                $status = '<div style="color: #006400;">Resultado IGUAL a 20!</div>';
            }
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
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite o Primeiro Número:</label>
        <input type="text" name="num1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Digite o Segundo Número:</label>
        <input type="text" name="num2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?= isset($status) ? $status : '' ?>
</body>
</html>