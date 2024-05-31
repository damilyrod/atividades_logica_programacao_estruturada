<?php

if (isset($_POST['btn_calcular'])) {
    $nome = trim($_POST['nome']);
    $peso = trim($_POST['peso']);
    $altura = trim($_POST['altura']);

    if ($nome == '' || $peso == '' || $altura == '') {
        $msgError = '<div style="color: #FF0000;">Preencher todos os campos obrigatórios!</div>';
      } else {
        header("location: ex1_md_imc.php?nome=$nome&peso=$peso&altura=$altura");
        exit;
      }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegar dados</title>
</head>

<body>
    <form action="ex1_pd_imc.php" method="post">
        <label>Nome:</label>
        <input name="nome" value="<?= isset($nome) ? $nome : null ?>">
        <label>Peso:</label>
        <input name="peso" value="<?= isset($peso) ? $peso : null ?>">
        <label>Altura:</label>
        <input name="altura" value="<?= isset($altura) ? $altura : null ?>">
        <button name="btn_calcular">Calcular</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
</body>

</html>