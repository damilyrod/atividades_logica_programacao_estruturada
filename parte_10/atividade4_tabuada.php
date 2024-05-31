<?php
if (isset($_POST['btn_exibir'])) {

    $tabuada = $_POST['tabuada'];

    if($tabuada == ''){
        $msgError = 'Selecione uma Tabuada!';
    } else{
        for($i=0; $i <= 10; $i++){
            echo $tabuada . 'X' . $i . '=' . ($tabuada * $i) . '<br>';
        }
        echo '<hr>';
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4 Array e Laço</title>
</head>

<body>
    <form action="atividade4_tabuada.php" method="post">
        <label for="">Selecione a tabuada desejada:</label>
        <select name="tabuada">
            <option value="">Selecione</option>
            <option value="1"<?= $tabuada == 1 ? 'selected' : '' ?>>tabuada do 1</option>
            <option value="2" <?= $tabuada == 2 ? 'selected' : '' ?>>tabuada do 2</option>
            <option value="3" <?= $tabuada == 3 ? 'selected' : '' ?>>tabuada do 3</option>
            <option value="4" <?= $tabuada == 4 ? 'selected' : '' ?>>tabuada do 4</option>
            <option value="5" <?= $tabuada == 5 ? 'selected' : '' ?>>tabuada do 5</option>
            <option value="6" <?= $tabuada == 6 ? 'selected' : '' ?>>tabuada do 6</option>
            <option value="7" <?= $tabuada == 7 ? 'selected' : '' ?>>tabuada do 7</option>
            <option value="8" <?= $tabuada == 8 ? 'selected' : '' ?>>tabuada do 8</option>
            <option value="9" <?= $tabuada == 9 ? 'selected' : '' ?>>tabuada do 9</option>
            <option value="10" <?= $tabuada == 10 ? 'selected' : '' ?>>tabuada do 10</option>
        </select>
        <br>
        <button name=btn_exibir>Exibir</button>
    </form>
</body>

</html>