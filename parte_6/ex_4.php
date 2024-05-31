<?php
if (isset($_POST['btn_mostrar'])) {
    $data = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano_atual'];

    echo 'Londrina,' . $data . ' de ' . $mes . ' de ' . $ano;
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
    <form action="ex_4.php" method="post">
        <label for="">Data de hoje</label>
        <input name="dia">
        <label for="">mês atual</label>
        <input name="mes">
        <label for="">ano atual</label>
        <input name="ano_atual">

        <button name=btn_mostrar>Mostar</button>

    </form>

</body>

</html>