<?php
if (isset($_POST['btn_ver'])) {

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $vezes = $_POST['vezes'];

    if ($nome == '' || $idade == '' || !is_numeric($idade) || $vezes == '' || !is_numeric($vezes)) {
        $msgError = 'Preencher todos os campos corretamente!';
    } else {

        for ($i = 1; $i <= $vezes; $i++) {

            echo 'Meu nome é ' . $nome .  ', eu tenho ' . $idade . ' anos de idade.' . '<br>';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>

<body>
    <form action="ex1_nome.php" method="post">
        <label>Seu nome:</label>
        <input name="nome" value="<?= isset($nome) ? $nome : '' ?>"><br>
        <label>Sua idade:</label>
        <input name="idade" value="<?= isset($idade) ? $idade : '' ?>"><br>
        <label>Digite a quantidade de repetições desejada</label>
        <input name="vezes" value="<?= isset($vezes) ? $vezes : '' ?>">
        <button name="btn_ver">Ver</button>
    </form>
    <span style="color: #FF0000;"><?= isset($msgError) ? $msgError : '' ?></span>
</body>

</html>