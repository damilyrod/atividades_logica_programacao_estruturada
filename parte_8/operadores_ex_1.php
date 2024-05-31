<?php

//operadores logicos:
// || - ou
// && - e
// | - negação

//operadores relacionais:
// > maior
// < menor
// == igual
// >= maior igual
// <= menor igual

//forma genérica de tratamento de dados
// if($nome == '' || $valor1 == || $valor2 ==''){
//echo "preencher todos os campos obrigatórios;
//}

//forma individual de tratamento de dados
// if
// else if
// paraa ajudar o usuário


if (isset($_POST['btn_verificar'])) {
    $numero = $_POST['numero'];
    

    if (trim($numero) == '') {
        echo 'Preencher o campo número';
    } else if ($numero > 100) {
        echo 'O número ' . $numero . ' é maior que 100';
    } else if ($numero == 100) {
        echo 'O número ' . $numero . ' é igual a 100';
    } else {
        echo 'O número ' . $numero . ' é menor que 100';
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
    <form action="operadores_ex_1.php" method="post">
        <label>Número digitado:</label>
        <input type="text" name="numero">
        <button name="btn_verificar">Verificar</button>
    </form>
</body>

</html>