<?php

function VerificarVazio($palavra)
{
    if (trim($palavra) == '') {
        return false;
    }
    return true;
}



function ValidarQtdPalavra($palavra, $qtd)
{
    if (strlen($palavra) < $qtd) {
        return false;
    }
    return true;
}

function ValidarPalavrasIguais($palavra1, $palavra2)
{
    if ($palavra1 != $palavra2) {
        return false;
    }
    return true;
}





















function Porcentagem($n1, $n2)
{
    if ($n1 == '' || $n2 == '') {
        return 0;
    } else {
        $porcentagem = ($n1 * ($n2 / 100));

        return $porcentagem;
    }
}

function Total($n1, $porcentagem)
{
    $total = $n1 + $porcentagem;

    return $total;
}

function SomaMultiplica($n1, $n2, $n3, $n4, $n5)
{

    if ($n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '') {
        return 0;
    } else {
        $somamultiplica =  ($n1 + $n2 + $n3) + ($n4 * $n5);
        return $somamultiplica;
    }
}

function SomaMeses($m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10, $m11, $m12)
{
    if ($m1 == '' || $m2 == '' || $m3 == '' || $m4 == '' || $m5 == '' || $m6 == '' || $m7 == '' || $m8 == '' || $m9 == '' || $m10 == '' || $m11 == '' || $m12 == '') {
    } else {
        $soma = $m1 + $m2 + $m3 + $m4 + $m5 + $m6 + $m7 + $m8 + $m9 + $m10 + $m11 + $m12;
        return $soma;
    }
}

function Calcula($p, $v, $q)
{
    if ($v == '' || $q == '') {
    } else {
        $multpli = $v * $q;
        return $multpli;
    }
}

function SomaDivide($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10)
{
    if ($n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '' || $n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '') {
        return 0;
    } else {
        $calcula = ($n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9) / $n10;

        return $calcula;
    }
}
