<?php
if (isset($_POST['btn_mostrar'])) {
$nome_da_empresa = $_POST['nome_da_empresa'];
$site = $_POST['site'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$descricao = $_POST['descricao'];

echo 'Nome da empresa' . $nome_da_empresa . '<br>site' . $site . '<br>facebook' . $facebook . '<br>instagram' . $instagram . '<br>descrição' . $descricao;

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
<form action="ex_2.php" method="post">
<label for="">Nome da empresa</label>
<input name="nome_da_empresa">
<br>
<label for="">Site</label>
<input name="site">
<br>
<label for="">Facebook</label>
<input name="facebook">
<br>
<label for="">Instagram</label>
<input name="instagram">
<br>
<label for="">Descrição</label>
<input name="descricao">
<br>

<button name="btn_mostrar">Mostrar</button>


</form>

    
</body>
</html>