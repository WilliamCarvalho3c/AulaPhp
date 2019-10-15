<?php

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo() :string{

		return $this->Modelo;

	}

	public function setModelo($modelo){

		$this->Modelo = $modelo;

	}

	public function getMotor() :float{

		return $this->motor;

	}

	public function SetMotor($motor){

		$this->Motor = $motor;

	}

	public function getAno() :int {//pega valor

		return $this->ano;

	}

	public function setAno($ano){//muda valor

		$this->Ano = $ano;

	}
	public function exibir(){

		return array(

			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno(),

		);

	}
}


$gol = new Carro();
$gol->setModelo( "Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2018");

var_dump($gol);















?>