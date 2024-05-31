<?php
$inicio = '';
$meio = '';
$fim = '';

if (isset($_POST['btn_verificar'])) {
    $inicio = $_POST['inicio'];
    $meio = $_POST['meio'];
    $fim = $_POST['fim'];

    if (trim($inicio) == '') {
        echo 'Preencher o campo INÍCIO';
    } else if (trim($meio) == '') {
        echo 'Preencher o campo MEIO';
    } else if (trim($fim) == '') {
        echo 'Preencher o campo FIM';
    } else {
        if ($inicio <= $meio && $meio <= $fim) {
            echo 'O número' . $meio . 'está entre' . $inicio . 'e' . $fim;
        }
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
    <form action="operadores_intervalo.php" method="post"></form>
    <label>INÍCIO</label>
    <input type="text" name="inicio" value="<?= $inicio ?>">

    <label>MEIO</label>
    <input type="text" name="meio" value="<?= $meio ?>">

    <label>FIM</label>
    <input type="text" name="fim" value="<?= $fim ?>">

    <button type="btn_verificar">VERIFICAR</button>
</body>

</html>