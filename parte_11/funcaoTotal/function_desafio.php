<?php

function Ganhos($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10, $n11, $n12)
{
    if ($n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '' || $n6 == '' || $n7 == '' || $n8 == '' || $n9 == '' || $n10 == '' || $n11 == '' || $n12 == '') {
        return 0;
    } else {
        $resultado_ganhos = $n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10 + $n11 + $n12;
        return $resultado_ganhos;
    }
}
function Percas($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12)
{
    if ($p1 == '' || $p2 == '' || $p3 == '' || $p4 == '' || $p5 == '' || $p6 == '' || $p7 == '' || $p8 == '' || $p9 == '' || $p10 == '' || $p11 == '' || $p12 == '') {
        return 0;
    } {
        $resultado_perca = $p1 + $p2 + $p3 + $p4 + $p5 + $p6 + $p7 + $p8 + $p9 + $p10 + $p11 + $p12;
        return $resultado_perca;
    }
}

function LucroReal(
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
) {
    $resultado_ganhos = $n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10 + $n11 + $n12;
    $resultado_perca = $p1 + $p2 + $p3 + $p4 + $p5 + $p6 + $p7 + $p8 + $p9 + $p10 + $p11 + $p12;
    $lucroRealAnual = $resultado_ganhos - $resultado_perca;

    return $lucroRealAnual;
}

function LucroRealMensal(
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
) {
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

    $lucroMensal = array($resultado_jan, $resultado_fev, $resultado_mar, $resultado_abr, $resultado_mai, $resultado_jun, $resultado_jul, $resultado_ago, $resultado_set, $resultado_out, $resultado_nov, $resultado_dez);
    return $lucroMensal;
}