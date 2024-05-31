<?php

// ? - Então - vai depender do lugar em que se encontra
// : - caso contrário...
// null - significa nulo 

$n1 = '';
$n2 = '';
$n3 = '';
$n4 = '';
$n5 = '';
$resultado ='';

if (isset($_POST['btn_calcular'])) {
$n1 = trim($_POST['n1']);
$n2 = trim($_POST['n2']);
$n3 = trim($_POST['n3']);
$n4 = trim($_POST['n4']);
$n5 = trim($_POST['n5']);
$soma = $n1 + $n2 + $n3;
$multiplicacao = $n4 * $n5;
$resultado = $soma / $multiplicacao;
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
    
<form action="ex2_calc_logica.php" method="post">
<label>numero 1</label>
<input type="text" name="n1" value="<?=$n1 ?>">
<br>
<label>numero 2</label>
<input type="text" name="n2" value="<?=$n2 ?>">
<br>
<label>numero 3</label>
<input type="text" name="n3" value="<?=$n3 ?>">
<br>
<label>numero 4</label>
<input type="text" name="n4" value="<?=$n4 ?>">
<br>
<label>numero 5</label>
<input type="text" name="n5" value="<?=$n5 ?>">
<br>

<button name="btn_calcular">calcular</button>
<input disabled value="<?= $resultado?>">
</form>

</body>
</html>