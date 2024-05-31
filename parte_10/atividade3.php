<?php


if (isset($_POST['btn_resultado'])) {

    $total = $_POST['qtd'];


    echo 'Início do laço de repetição<br>';

    for ($i = 0; $i <= $total; $i++) {
        echo 'valor da variável ' . $i . '<br>';
    }
    echo '<br>Aqui acaba!';
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
    <form action="atividade3.php" method="post">
        <label>Informe a quantidade de vezes de repetição que deseja:</label>
        <input name="qtd" value="<?= isset($total) ? $total : null ?>">
        <button name="btn_resultado">Resultado</button>
    </form>
</body>

</html>