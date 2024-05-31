<?php
if (isset($_POST['btn_calcular'])) {
    $n1 = trim($_POST['n1']);
    $n2 = trim($_POST['n2']);
    $n3 = trim($_POST['n3']);
    $n4 = trim($_POST['n4']);
    $n5 = trim($_POST['n5']);

    if ($n1 == null || $n2 == null || $n3 == null || $n4 == null || $n5 == null) {
        $msgError = '<div style="color: #FF0000;">Preencher todos os campos obrigatórios!</div>';
    } else {
        header("location:resultado.php?n1=$n1&n2=$n2&n3=$n3&n4=$n4&n5=$n5");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegar dados</title>
</head>

<body>
    <form action="dados.php" method="post">
        <label>Número 1</label>
        <input name="n1" value="<?= isset($n1) ? $n1 : '' ?>">
        <br> <br>
        <label>Número 2</label>
        <input name="n2" value="<?= isset($n2) ? $n2 : '' ?>">
        <br> <br>
        <label>Número 3</label>
        <input name="n3" value="<?= isset($n3) ? $n3 : '' ?>">
        <br> <br>
        <label>Número 4</label>
        <input name="n4" value="<?= isset($n4) ? $n4 : '' ?>">
        <br> <br>
        <label>Número 5</label>
        <input name="n5" value="<?= isset($n5) ? $n5 : '' ?>">
        <br> <br>
        <button name=btn_calcular>Calcular</button>
    </form>
    <?= isset($msgError) ? $msgError : null ?>
</body>

</html>