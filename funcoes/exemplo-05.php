<?php

$a = 10;
//quando existe o & passagem de parametro por referencia
function trocaValor(&$b){

	$b += 50;
	return $b;
}

echo trocaValor($a);
echo "<br>";

echo trocaValor($a);
echo "<br>";

echo ($a);
?>