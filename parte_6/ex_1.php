<?php
if (isset($_POST['btn_mostrar'])) {
    $nome_do_prato = $_POST['nome_do_prato'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $ingredientes = $_POST['ingredientes'];

    echo 'nome do prato ' . $nome_do_prato . '<br>descricao ' . $descricao . '<br>preço ' . $preco . '<br>ingredientes ' . $ingredientes;
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ex_1.php" method="post">
        <label for="">Nome do prato</label>
        <input name="nome_do_prato">
        <br>
        <label for="">Descrição</label>
        <input name="descricao">
        <br>
        <label for="">Preço</label>
        <input name="preco">
        <br>
        <label for="">Ingredientes</label>
        <input name="ingredientes">
        <br>
        <button name=btn_mostrar>Mostar</button>

    </form>
</body>

</html>