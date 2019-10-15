<?php

class Carro{

	private $Modelo;
	private $Motor;
	private $Ano;


	public function getModelo(){

		return $this->Modelo;

	}

	public function setModelo($modelo){

		$this->Modelo = $modelo;

	}

	public function getMotor(){

		return $this->Motor;
	}

	public function setMotor($motor){

		$this->Motor = $motor;
	}

	public function getAno(){

		return $this->Ano;

	}

	public function setAno($ano){

		$this->Ano = $ano;

	}

	public function exibir(){

		return array(
		"Modelo"=> getModelo(),
		"Motor"=> getMotor(),
		"Ano do carro"=> getAno(),
	);

}

}

//aqui se usa setModelo pois o "set" muda o "get" pega a informação
$prisma = new Carro();
$prisma->setModelo("Prisma LT");
$prisma->setMotor( "1.4 Flex");
$prisma->setAno( "2019");

print_r($prisma);
?>