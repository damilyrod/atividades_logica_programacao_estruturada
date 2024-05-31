<?php
if (
    isset($_GET['nome']) && $_GET['nome'] != null &&
    isset($_GET['peso']) && $_GET['peso'] != null &&
    isset($_GET['altura']) && $_GET['altura'] != null

) {
    $nome = $_GET['nome'];
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

    $imc = round($peso / ($altura * $altura), 2);

//if($imc < 0){
    // $classificacao = 'IMC não encontrado'
// }

    if ($imc > 0 && $imc <= 20) {
        $classificacao = '<div>Você está magro</div>';
    } else if ($imc > 21 && $imc <= 25) {
        $classificacao = '<div>Você está no peso ideal</div>';
    } else if ($imc > 26 && $imc <= 30) {
        $classificacao = '<div>Você está obeso</div>';
    } else {
        $classificacao = '<div>Você está muito obeso</div>';
    }

    $resultado = $nome . '' . '<br>' . $imc . '' . '<br>' . $classificacao;
} else {
    header("location:ex1_pd_imc.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar dados</title>
</head>

<body>
    <?= isset($resultado) ? $resultado : '' ?>


</body>

</html>