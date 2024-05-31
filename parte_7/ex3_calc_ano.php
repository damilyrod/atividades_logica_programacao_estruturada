<?php

// unidade de medida rem
// 1 rem é igual a 16 pixall
//esta unidade de medida é excelente para trabalhar com responsividade


if (isset($_POST['btn_calcular'])) {
    $n1 = trim($_POST['n1']);
    $n2 = trim($_POST['n2']);
    $n3 = trim($_POST['n3']);
    $n4 = trim($_POST['n4']);
    $n5 = trim($_POST['n5']);
    $n6 = trim($_POST['n6']);
    $n7 = trim($_POST['n7']);
    $n8 = trim($_POST['n8']);
    $n9 = trim($_POST['n9']);
    $n10 = trim($_POST['n10']);
    $n11 = trim($_POST['n11']);
    $n12 = trim($_POST['n12']);
    $p1 = trim($_POST['p1']);
    $p2 = trim($_POST['p2']);
    $p3 = trim($_POST['p3']);
    $p4 = trim($_POST['p4']);
    $p5 = trim($_POST['p5']);
    $p6 = trim($_POST['p6']);
    $p7 = trim($_POST['p7']);
    $p8 = trim($_POST['p8']);
    $p9 = trim($_POST['p9']);
    $p10 = trim($_POST['p10']);
    $p11 = trim($_POST['p11']);
    $p12 = trim($_POST['p12']);

    $resultado_ganho = $n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10 + $n11 + $n12;
    $resultado_perca = $p1 + $p2 + $p3 + $p4 + $p5 + $p6 + $p7 + $p8 + $p9 + $p10 + $p11 + $p12;
    $resultado_lucro = $resultado_ganho - $resultado_perca;
    $resultado_jan = $n1 - $p1;
    $resultado_fev = $n2 - $p2;
    $resultado_mar = $n3 - $p3;
    $resultado_abr = $n4 - $p4;
    $resultado_mai = $n5 - $p5;
    $resultado_jun = $n6 - $p6;
    $resultado_jul = $n7 - $p7;
    $resultado_ago = $n8 - $p8;
    $resultado_set = $n9 - $p9;
    $resultado_out = $n10 - $p10;
    $resultado_nov = $n11 - $p11;
    $resultado_dez = $n12 - $p12;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ead</title>
    <link rel="stylesheet" href="style.css">
</head>
<h1>misericórdia</h1>
<body>
    <form action="ex3_calc_ano.php" method="post">
        <label>Ganho de janeiro</label>
        <input type="text" name="n1" value="<?= isset($n1) ? $n1 : null ?>">
        <label>Perca de janeiro</label>
        <input type="text" name="p1" value="<?= isset($p1) ? $p1 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_jan) ? $resultado_jan : null ?>">
        <br>

        <label>Ganho de fevereiro</label>
        <input type="text" name="n2" value="<?= isset($n2) ? $n2 : null ?>">
        <label>Perca de fevereiro</label>
        <input type="text" name="p2" value="<?= isset($p2) ? $p2 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_fev) ? $resultado_fev : null ?>">
        <br>

        <label>Ganho de março</label>
        <input type="text" name="n3" value="<?= isset($n3) ? $n3 : null ?>">
        <label>Perca de março</label>
        <input type="text" name="p3" value="<?= isset($p3) ? $p3 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_mar) ? $resultado_mar : null ?>">
        <br>

        <label>Ganho de abril</label>
        <input type="text" name="n4" value="<?= isset($n4) ? $n4 : null ?>">
        <label>Perca de abril</label>
        <input type="text" name="p4" value="<?= isset($p4) ? $p4 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_abr) ? $resultado_abr : null ?>">
        <br>

        <label>Ganho de maio</label>
        <input type="text" name="n5" value="<?= isset($n5) ? $n5 : null ?>">
        <label>Perca de maio</label>
        <input type="text" name="p5" value="<?= isset($p5) ? $p5 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_mai) ? $resultado_mai : null ?>">
        <br>

        <label>Ganho de junho</label>
        <input type=" text" name="n6" value="<?= isset($n6) ? $n6 : null ?>">
        <label>Perca de junho</label>
        <input type=" text" name="p6" value="<?= isset($p6) ? $p6 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_jun) ? $resultado_jun : null ?>">
        <br>

        <label>Ganho de julho</label>
        <input type=" text" name="n7" value="<?= isset($n7) ? $n7 : null ?>">
        <label>Perca de julho</label>
        <input type="text" name="p7" value="<?= isset($p7) ? $p7 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_jul) ? $resultado_jul : null ?>">
        <br>

        <label>Ganho de agosto</label>
        <input type="text" name="n8" value="<?= isset($n8) ? $n8 : null ?>">
        <label>Perca de agosto</label>
        <input type="text" name="p8" value="<?= isset($p9) ? $p9 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_ago) ? $resultado_ago : null ?>">
        <br>

        <label>Ganho de setembro</label>
        <input type="text" name="n9" value="<?= isset($n9) ? $n9 : null ?>">
        <label>Perca de setembro</label>
        <input type="text" name="p9" value="<?= isset($p9) ? $p9 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_set) ? $resultado_set : null ?>">
        <br>

        <label>Ganho de outubro</label>
        <input type="text" name="n10" value="<?= isset($n10) ? $n10 : null ?>">
        <label>Perca de outubro</label>
        <input type="text" name="p10" value="<?= isset($p10) ? $p10 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_out) ? $resultado_out : null ?>">
        <br>

        <label>Ganho de novembro</label>
        <input type="text" name="n11" value="<?= isset($n11) ? $n11 : null ?>">
        <label>Perca de novembro</label>
        <input type="text" name="p11" value="<?= isset($p11) ? $p11 : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_nov) ? $resultado_nov : null ?>">
        <br>

        <label>Ganho de dezembro</label>
        <input type="text" name="n12" value="<?= isset($n12) ? $n12: null ?>">
        <label>Perca de dezembro</label>
        <input type="text" name="p12" value="<?= isset($p12) ? $p12 : null?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado_dez) ? $resultado_dez: null?>">
        <br>

        <label>Total de ganho do ano:</label>

        <input disabled value="<?= isset($resultado_ganho) ? $resultado_ganho : null ?>">

        <label>Total de perca do ano:</label>

        <input disabled value="<?= isset($resultado_perca) ? $resultado_perca : null?>">
        <br>
        <hr>
        <label>Total de lucro do ano:</label>

        <input disabled value="<?= isset($resultado_lucro) ? $resultado_lucro : null ?>">
        <br>
        <button name="btn_calcular">calcular</button>
    </form>
</body>

</html>