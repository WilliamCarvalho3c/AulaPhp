<?php

class Pessoa{

	public $carro;

	public function ter(){

		return "Eu tenho um ".$this->carro;
	}
}

$prisma = new Pessoa();
$prisma->carro = "Prisma 2011 completo";
echo $prisma->ter();



?>