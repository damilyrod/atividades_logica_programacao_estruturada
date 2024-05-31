<?php

require_once 'funcaoTotal/calculo.php';

if (isset($_POST['btnSomar'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if(Somar($n1, $n2) == 0) {
        $msgError = 'Preencher todos os campos!';
    } else {
        $resultado = Somar($n1, $n2);
    }
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="exemplo_funcao.php" method="post">
        <label>Número 1</label>
        <input name="n1" value="<?= isset($n1) ? $n1 : '' ?>">
        <label>Número 2</label>
        <input name="n2" value="<?= isset($n2) ? $n2 : '' ?>">

        <button name="btnSomar">Somar</button>

        <input desable value="<?= isset($resultado) ? $resultado : '' ?>">
    </form>

</body>

</html>