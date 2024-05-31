<?php
if (
    isset($_GET['n1']) && $_GET['n1'] != '' &&
    isset($_GET['n2']) && $_GET['n2'] != '' &&
    isset($_GET['n3']) && $_GET['n3'] != '' &&
    isset($_GET['n4']) && $_GET['n4'] != '' &&
    isset($_GET['n5']) && $_GET['n5'] != ''
) {
    $n1 = trim($_GET['n1']);
    $n2 = trim($_GET['n2']);
    $n3 = trim($_GET['n3']);
    $n4 = trim($_GET['n4']);
    $n5 = trim($_GET['n5']);

    $soma = $n1 + $n2 + $n3;
    $multiplicacao = $n4 * $n5;
    $resultado = $soma / $multiplicacao;

    $impressao = "O resultado foi de $resultado";
} else {
    header("location: dados.php?");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?= isset($impressao) ? $impressao : '' ?>
</body>

</html>