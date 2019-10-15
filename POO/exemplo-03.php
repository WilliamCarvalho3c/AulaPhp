<?php

class Pessoa{

	public $nome;

	public function falar(){

		return "meu nome é ".$this->nome;

	}
}

$Franciellen = new Pessoa();
$Franciellen->nome = "Franciellen Carvalho Cardoso";
echo $Franciellen->falar();


?>