<?php

require_once 'funcaoTotal/funcao11.php';

if (isset($_POST['btn_calcular'])) {
    $janeiro = $_POST['janeiro'];
    $fevereiro = $_POST['fevereiro'];
    $marco = $_POST['marco'];
    $abril = $_POST['abril'];
    $maio = $_POST['maio'];
    $junho = $_POST['junho'];
    $julho = $_POST['julho'];
    $agosto = $_POST['agosto'];
    $setembro = $_POST['setembro'];
    $outubro = $_POST['outubro'];
    $novembro = $_POST['novembro'];
    $dezembro = $_POST['dezembro'];

    if (
        $janeiro == '' || $fevereiro == '' || $marco == '' || $abril == '' || $maio == '' || $junho == '' || $julho == '' ||
        $agosto == '' || $setembro == '' || $outubro == '' || $novembro == '' || $dezembro == ''
    ) {
        $msgError = 'Preencha todos os campos!';
    } else {
        $soma = SomaMeses($janeiro, $fevereiro, $marco, $abril, $maio, $junho, $julho, $agosto, $setembro, $outubro, $novembro, $dezembro);
    }
}


?>


<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Meus Ganhos</title>
    <h1>Ganhos durante o ano de 2023</h1>
    <h3>Preencha seus ganhos aqui!</h3>
</head>

<body>

    <form action="ex4_funcao.php" method="post">
        <label>Ganhos em Janeiro</label>
        <input type="text" name="janeiro" value="<?= isset($janeiro) ? $janeiro : '' ?>">
        <label>Ganhos em Fevereiro</label>
        <input type="text" name="fevereiro" value="<?= isset($fevereiro) ? $fevereiro : '' ?>">
        <label>Ganhos em Março</label>
        <input type="text" name="marco" value="<?= isset($marco) ? $marco : '' ?>">
        <br><br>
        <label>Ganhos em Abril</label>
        <input type="text" name="abril" value="<?= isset($abril) ? $abril : '' ?>">
        <label>Ganhos em Maio</label>
        <input type="text" name="maio" value="<?= isset($maio) ? $maio : '' ?>">
        <label>Ganhos em Junho</label>
        <input type="text" name="junho" value="<?= isset($junho) ? $junho : '' ?>">
        <br><br>
        <label>Ganhos em Julho</label>
        <input type="text" name="julho" value="<?= isset($julho) ? $julho : '' ?>">
        <label>Ganhos em Agosto</label>
        <input type="text" name="agosto" value="<?= isset($agosto) ? $agosto : '' ?>">
        <label>Ganhos em Setembro</label>
        <input type="text" name="setembro" value="<?= isset($setembro) ? $setembro : '' ?>">
        <br><br>
        <label>Ganhos em Outubro</label>
        <input type="text" name="outubro" value="<?= isset($outubro)  ? $outubro : '' ?>">
        <label>Ganhos em Novembro</label>
        <input type="text" name="novembro" value="<?= isset($novembro) ? $novembro : '' ?>">
        <label>Ganhos em Dezembro</label>
        <input type="text" name="dezembro" value="<?= isset($dezembro) ? $dezembro : '' ?>">
        <br><br>
        <button name="btn_calcular" id="btn_calcular">Calcular</button>

    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <?php if (
        isset($janeiro) && $janeiro != '' || isset($fevereiro) && $fevereiro != '' || isset($marco) && $marco != '' ||
        isset($abril) && $abril != '' || isset($maio) && $maio != '' || isset($junho) && $junho != '' || isset($julho) && $julho != ''
        || isset($agosto) && $agosto != '' || isset($setembro) && $setembro != '' || isset($outubro) && $outubro != '' ||
        isset($novembro) && $novembro != '' || isset($dezembro) && $dezembro != ''
    ) { ?>
        <hr>
        <strong>Total:</strong><input disabled value="<?= isset($soma) ? $soma : '' ?>">
    <?php } ?>


</body>

</html>