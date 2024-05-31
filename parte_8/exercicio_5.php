<?php
if (isset($_POST['btn_calcular'])) {
    $peso = trim($_POST['peso']);
    $altura = trim($_POST['altura']);


    if ($peso == null || $altura == null) {
        $msgError = '<div style="color: #FF0000;">Preencher os campos obrigatórios!</div>';
    } else {
        $imc = round($peso / ($altura * $altura), 2);

        if ($imc > 0 && $imc <= 20) {
            $status = '<div style="color: #006400;">Você está magro</div>';
        } else if ($imc > 21 && $imc <= 25) {
            $status = '<div style="color: #006400;">Você está no peso ideal</div>';
        } else if ($imc > 26 && $imc <= 30) {
            $status = '<div style="color: #006400;">Você está obeso</div>';
        } else {
            $status = '<div style="color: #006400;">Você está muito obeso</div>';
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
 <form action="exercicio_5.php" method="post">
 <h2>Calcule seu índice de massa corpórea</h2>

<label>Peso</label>
<input name="peso" value="<?= isset($peso) ? $peso : '' ?>">
<label>Altura</label>
<input name="altura" value="<?= isset($altura) ? $altura : '' ?>">

<button name="btn_calcular">Calcular</button>
 </form>
 <?= isset($msgError) ? $msgError : '' ?>
 <?php if (isset($imc) && $imc != null && isset($status) && $status != null) { ?>
 <span>IMC:</span>
<input disabled value="<?= isset($imc) ? $imc : '' ?>">
<?php } ?>
<?= isset($status) ? $status : '' ?>  
</body>
</html>