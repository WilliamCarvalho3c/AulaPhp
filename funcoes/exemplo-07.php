<?php

function soma(int ...$valores){

	return array_sum($valores);

}

echo soma(2,2);
echo "<br>";
echo soma(25, 35);
echo "<br>";
echo soma(1.2, 1.4);
echo "<br>";

?>