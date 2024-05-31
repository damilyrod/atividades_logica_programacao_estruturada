<?php
if (isset($_POST['btn_mostrar'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $assunto = $_POST['assunto'];
    $email = $_POST['email'];

    echo 'nome' . $nome . '<br>sobrenome' . $sobrenome . '<br>assunto' . $assunto . '<br>email' . $email . '<br>Sua mensagem foi enviada com sucesso';
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
    <form action="ex_3.php" method="post">
        <label for="">Nome</label>
        <input name="nome">
        <br>
        <label for="">Sobrenome</label>
        <input name="sobrenome">
        <br>
        <label for="">Assunto</label>
        <input name="assunto">
        <br>
        <label for="">E-mail</label>
        <input name="email">
        <br>

        <button name="btn_mostrar">Mostrar</button>

    </form>

</body>

</html>