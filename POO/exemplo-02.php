<?php

class Pessoa{

	public $nome;

	public function falar(){

		return "O meu nome é ".$this->nome;


	}
}

$william = new Pessoa();
$william->nome = "William Carvalho Coelho";
echo $william->falar();




?>