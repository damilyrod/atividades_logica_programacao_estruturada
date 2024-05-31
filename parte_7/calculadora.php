<?php

//ltrim: remove o excesso de espaço a esquerda do campo que estiver sendo tratado;
//rtrim: remove o excesso de espaço a direita do campo que estiver sendo tratado;
//trim: ltrim: remove o excesso de espaço a esquerda e esquerda (ambos) do campo que estiver sendo tratado.
//variavel de tipo global

require_once 'funcao/calculo.php';

if (isset($_POST['btn_calcular'])) {
    $numero1 = trim($_POST['n1']);
    $numero2 = trim($_POST['n2']);
    

    $soma = Somar($numero1, $numero2);
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
    <form action="calculadora.php" method="post">
        <label>Número 1</label>
        <input type="text" name="n1" value="<?= isset($numero1) ? $numero1 : '' ?>">
        <label>Número 2</label>
        <input type="text" name="n2" value="<?= isset($numero2) ? $numero2 : '' ?>">
        <br>
        
        <button name="btn_calcular">Calcular</button>

    </form>
    <span>Resultado</span>
    <input disabled value="<?= isset($soma) ? $soma : null ?>">

</body>

</html>