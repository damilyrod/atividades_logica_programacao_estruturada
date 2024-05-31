<?php
if (
    isset($_GET['nome']) && $_GET['nome'] != null &&
    isset($_GET['investimento']) && $_GET['investimento'] != null &&
    isset($_GET['situacao']) && $_GET['situacao'] != null &&
    isset($_GET['banco']) && $_GET['banco'] != null
){
    $nome = trim($_GET['nome']);
    $investimento = trim($_GET['investimento']);
    $situacao = trim($_GET['situacao']);
    $banco = trim($_GET['banco']);

    if($situacao == 'G'){
        $operacao = ($investimento + ($investimento * 3 / 100));
        $tipo = 'ganho';
    }else if ($situacao == 'P'){
        $operacao = ($investimento - ($investimento * 5 / 100));
        $tipo = 'perca';   
    }
// condição lógica para manipulação de texto (ao invés de )
    if($banco == 'SA'){
        $bancoEscolhido = 'Santander';
    } else if ($banco == 'IT'){
        $bancoEscolhido = 'Itaú';
    }else if ($banco = 'SI'){
        $bancoEscolhido = 'Sicredi';
    }
    $impressao =  "$nome, seu valor de investimento foi de R$$investimento, a sigla de sua remuneração escolhida foi $tipo. O Banco escolhido foi o $bancoEscolhido e o resultado é de R$$operacao.";


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
<?= isset($impressao) ? ($impressao): '' ?>
</body>

</html>