<?php

require_once 'funcaoTotal/funcao11.php';

if (isset($_POST['btnMostrar'])) {
    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $senha = trim($_POST['senha']);
    $repete = trim($_POST['repete']);

    if (!VerificarVazio($nome)  || !VerificarVazio($descricao) || !VerificarVazio($senha) || !VerificarVazio($repete)) {
        $msgError = '- Preencher todos os campos!';
    } else {
        $validacao = true;
        if (!ValidarQtdPalavra($nome, 3)) {
            $msgError = '- Nome deverá conter no mínimo 3 caracteres!';
            $validacao = false;
        }

        if (!ValidarQtdPalavra($descricao, 50)) {
            $msgError = '- Descrição deverá conter no mínimo 50 caracteres!';
            $validacao = false;
        }

        if (!ValidarQtdPalavra($senha, 6)) {
            $msgError = '- Senha deverá conter no mínimo 6 caracteres!';
            $validacao = false;
        } else if (!ValidarPalavrasIguais($senha, $repete)) {
            $msgError = '- Os campos SENHA e REPETIR SENHA deverão ser iguais!';
            $validacao = false;
        }
        if($validacao) {

            $msgError = 'CAMPOS VALIDADOS COM SUCESSO!!!';
        }
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
    <form action="ex1_funcao.php" method="post">
        <label>Nome</label>
        <input name="nome" value="<?= isset($nome) ? $nome : null ?>"><br><br>
        <label>Descrição</label>
        <input name="descricao" value="<?= isset($descricao) ? $descricao : null ?>"><br><br>
        <label>Senha</label>
        <input type=password name="senha" value="<?= isset($senha) ? $senha : null ?>"><br><br>
        <label>Repetir Senha</label>
        <input type=password name="repete" value="<?= isset($repete) ? $repete : null ?>">
        <button name=btnMostrar>Mostrar</button>
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
   
</body>

</html>