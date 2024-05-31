<?php
if (
    isset($_GET['nome']) && $_GET['nome'] != null && 
    isset($_GET['sobrenome']) && $_GET['sobrenome'] != null
    ){

$nome_usuario = $_GET['nome'];
$sobrenome_usuario = $_GET['sobrenome'];

$nomecompleto = $nome_usuario .' '. $sobrenome_usuario;


} else {
    header('location: pegar_dados.php');
    // se acontecer de alterar ou remover a url ou chave, será direcionado para a primeira página onde foi preenchida.
    exit;
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
<label>Nome Completo: <?= $nomecompleto?></label>    
</body>
</html>


