<?php

$cor= array();

$cor[] = 'azul';
$cor[] = 'amarelo';
$cor[] = 'rosa';
$cor[] = 'verde';
$cor[] = 'branco';

echo 'Total:' . count($cor) . '<br>';

for($i=0; $i < count($cor); $i++){
echo 'A cor armazenada é ' . $cor[$i] . '<br>';
}

?>