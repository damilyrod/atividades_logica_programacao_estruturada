<?php

function Somar($n1, $n2)
{
    if ($n1 == '' || $n2 == '') {
        return 0;
    } else {
        $soma = $n1 + $n2;
        return $soma;
    }
}

function ContarCaracteres($palavra)
{
    $qtd = strlen($palavra);
    return $qtd;
}

function SomarCaracteresTotal($qtd_nome, $qtd_sobre)
{

    $soma = $qtd_nome + $qtd_sobre;
    return $soma;
}
