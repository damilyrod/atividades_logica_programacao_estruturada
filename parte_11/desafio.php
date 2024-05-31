<?php

// unidade de medida rem
// 1 rem é igual a 16 pixall
//esta unidade de medida é excelente para trabalhar com responsividade
require_once 'funcaoTotal/function_desafio.php';

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

    if (Ganhos($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10, $n11, $n12) == 0) {
        echo 'Preencher os campos obrigatórios!';
    } else if (Percas($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12) == 0);
    echo 'Preencher os campos obrigatórios!';



    $resultado1 = Ganhos($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10, $n11, $n12);
    $resultado2 = Percas($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12);
    $resultado3 = LucroReal(
        $n1,
        $n2,
        $n3,
        $n4,
        $n5,
        $n6,
        $n7,
        $n8,
        $n9,
        $n10,
        $n11,
        $n12,
        $p1,
        $p2,
        $p3,
        $p4,
        $p5,
        $p6,
        $p7,
        $p8,
        $p9,
        $p10,
        $p11,
        $p12
    );

    $resultado4 = LucroRealMensal(
        $n1,
        $n2,
        $n3,
        $n4,
        $n5,
        $n6,
        $n7,
        $n8,
        $n9,
        $n10,
        $n11,
        $n12,
        $p1,
        $p2,
        $p3,
        $p4,
        $p5,
        $p6,
        $p7,
        $p8,
        $p9,
        $p10,
        $p11,
        $p12
    );
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-resultado4
    <meta name=" viewport" content="width=device-width, initial-scale=1.0">
    <title>Ead</title>
    <link rel="stylesheet" href="style.css">
</head>
<h1>Misericórdia</h1>

<body>
    <form action="desafio.php" method="post">
        <label>Ganho de janeiro</label>
        <input type="text" name="n1" value="<?= isset($n1) ? number_format($n1, 2, ',', '.') : null ?>">
        <label>Perca de janeiro</label>
        <input type="text" name="p1" value="<?= isset($p1) ? number_format($p1, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[0], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de fevereiro</label>
        <input type="text" name="n2" value="<?= isset($n2) ? number_format($n2, 2, ',', '.') : null ?>">
        <label>Perca de fevereiro</label>
        <input type="text" name="p2" value="<?= isset($p2) ? number_format($p2, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[1], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de março</label>
        <input type="text" name="n3" value="<?= isset($n3) ? number_format($n3, 2, ',', '.') : null ?>">
        <label>Perca de março</label>
        <input type="text" name="p3" value="<?= isset($p3) ? number_format($p3, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[2], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de abril</label>
        <input type="text" name="n4" value="<?= isset($n4) ? number_format($n4, 2, ',', '.') : null ?>">
        <label>Perca de abril</label>
        <input type="text" name="p4" value="<?= isset($p4) ? number_format($p4, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[3], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de maio</label>
        <input type="text" name="n5" value="<?= isset($n5) ? number_format($n5, 2, ',', '.') : null ?>">
        <label>Perca de maio</label>
        <input type="text" name="p5" value="<?= isset($p5) ? number_format($p5, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[4], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de junho</label>
        <input type=" text" name="n6" value="<?= isset($n6) ? number_format($n6, 2, ',', '.') : null ?>">
        <label>Perca de junho</label>
        <input type=" text" name="p6" value="<?= isset($p6) ? number_format($p6, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[5], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de julho</label>
        <input type=" text" name="n7" value="<?= isset($n7) ? number_format($n7, 2, ',', '.') : null ?>">
        <label>Perca de julho</label>
        <input type="text" name="p7" value="<?= isset($p7) ? number_format($p7, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[6], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de agosto</label>
        <input type="text" name="n8" value="<?= isset($n8) ? number_format($n8, 2, ',', '.') : null ?>">
        <label>Perca de agosto</label>
        <input type="text" name="p8" value="<?= isset($p8) ? number_format($p8, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[7], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de setembro</label>
        <input type="text" name="n9" value="<?= isset($n9) ? number_format($n9, 2, ',', '.') : null ?>">
        <label>Perca de setembro</label>
        <input type="text" name="p9" value="<?= isset($p9) ? number_format($p9, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[8], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de outubro</label>
        <input type="text" name="n10" value="<?= isset($n10) ? number_format($n10, 2, ',', '.') : null ?>">
        <label>Perca de outubro</label>
        <input type="text" name="p10" value="<?= isset($p10) ? number_format($p10, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[9], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de novembro</label>
        <input type="text" name="n11" value="<?= isset($n11) ? number_format($n11, 2, ',', '.') : null ?>">
        <label>Perca de novembro</label>
        <input type="text" name="p11" value="<?= isset($p11) ? number_format($p11, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[10], 2, ',', '.') : null ?>">
        <br><br>

        <label>Ganho de dezembro</label>
        <input type="text" name="n12" value="<?= isset($n12) ? number_format($n12, 2, ',', '.') : null ?>">
        <label>Perca de dezembro</label>
        <input type="text" name="p12" value="<?= isset($p12) ? number_format($p12, 2, ',', '.') : null ?>">
        <label>Total de lucro no mês</label>
        <input disabled value="<?= isset($resultado4) ? number_format($resultado4[11], 2, ',', '.') : null ?>">
        <br><br>

        <label>Total de ganho do ano:</label>

        <input disabled value="<?= isset($resultado1) ? number_format($resultado1, 2, ',', '.') : null ?>">

        <label>Total de perca do ano:</label>

        <input disabled value="<?= isset($resultado2) ? number_format($resultado2, 2, ',', '.') : null ?>">
        <br>
        <hr>
        <label>Total de lucro do ano:</label>

        <input disabled value="<?= isset($resultado3) ? number_format($resultado3, 2, ',', '.') : null ?>">
        <br>
        <button name="btn_calcular">calcular</button>
    </form>
</body>

</html>