<?php

$nome = "William<br>";

function teste() {
	
	global $nome;
	echo $nome;
}

function teste2() {
$nome = "joão<br>";
	echo $nome . " Cristian";
}
teste();
teste2();
?>