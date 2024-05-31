<?php

//tipo array =  uma forma de salvar varias informações de uma vez só;

//laço de repetição = renderiza uma parte do código automaticamente de forma repetida;

// 1ª forma de trabalhar com variavel de tipo array!


//1ª forma de trabalhar com variável tipo Array

if (isset($_POST['btn_resultado'])) {

    $total = $_POST['qtd'];

    echo 'Início do laço de repetição<br><br>';

    for ($i = 0; $i <= $total; $i++) {
        echo 'valor da variável ' . $i . '<br>';
    }

    echo '<br><br>Aqui acaba!';
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
    <form action="exemplo_lacorepeticao.php" method="post">
        <label>Informe a quantidade de vezes de repetição</label>
        <input name="qtd" value="<?= isset($total) ? $total : null ?>">
        <button name="btn_resultado">Resultado</button>
    </form>
</body>

</html>