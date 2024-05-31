<?php

require_once 'funcaoTotal/calculo.php';

if (isset($_POST['btnContar'])) {
    $nome = trim($_POST['nome']);

    $sobre = trim($_POST['sobre']);

    $qtd_nome = ContarCaracteres($nome);
    $qtd_sobre = ContarCaracteres($sobre);
    $qtd_total = SomarCaracteresTotal($qtd_nome, $qtd_sobre);
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
    <form action="exemplo_funcao2.php" method="post">
        <label>Nome</label>
        <input name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Sobrenome</label>
        <input name="sobre" value="<?= isset($sobre) ? $sobre : '' ?>">
        <button name="btnContar">Contar Palavras</button>
        <br> <br>
        <label>Quantidade de caracteres NOME</label>
        <input desable value="<?= isset($qtd_nome) ? $qtd_nome : '' ?>"><br>
        <label>Quantidade de caracteres SOBRENOME</label>
        <input desable value="<?= isset($qtd_sobre) ? $qtd_sobre : '' ?>"><br>
        <label>Quantidade Total de caracteres </label>
        <input desable value="<?= isset($qtd_total) ? $qtd_total : '' ?>">

    </form>

</body>

</html>