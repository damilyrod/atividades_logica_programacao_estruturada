<?php
if (isset($_POST['btn_calcular'])) {
    $nome = trim($_POST['nome']);
    $investimento = trim($_POST['investimento']);
    $situacao = trim(strtoupper($_POST['situacao']));
    $banco = trim(strtoupper($_POST['banco']));

    if ($nome == null || $investimento == null) {
        $msgError = '<div style="color: #FF0000;">Preencher todos os campos obrigatórios!</div>';
    } else if ($situacao == null || ($situacao != 'G' && $situacao != 'P')) {
        $msgError = '<div style="color: #FF0000;">Preencher a sigla correta!</div>';
    } else if ($banco == null || ($banco != 'SA' && $banco != 'IT' && $banco != 'SI')) {
        $msgError = '<div style="color: #FF0000;">Preencher a sigla correta!</div>';
    }else{
        header("location: ex2_mostrarinvestimento.php?nome=$nome&investimento=$investimento&situacao=$situacao&banco=$banco");
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegar investimento</title>
</head>

<body>
    <form action="ex2_pegarinvestimento.php" method="post">
        <label>Nome:</label>
        <input name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br> <br>
        <label>Valor do investimento:</label>
        <input name="investimento" value="<?= isset($investimento) ? $investimento : '' ?>">
        <br> <br>
        <h3>Para ganhos digite a sigla G e para perdas digite a sigla P</h3>
        <label>Situação do investimento (sigla):</label>
        <input name="situacao" value="<?= isset($situacao) ? $situacao : '' ?>">
        <br> <br>
        <h3>Para bancos use umas das siglas: IT(Itaú), SI(Sicredi) ou SA(Santander)</h3>
        <label>Banco escolhido (sigla):</label>
        <input name="banco" value="<?= isset($banco) ? $banco : '' ?>">
        <button name="btn_calcular">Calcular</button>
    </form>
    <?= isset($msgError) ? $msgError : null ?>
</body>

</html>