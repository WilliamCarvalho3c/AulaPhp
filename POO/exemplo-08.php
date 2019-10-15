<?php
//eu consigo alterar o tipo de dado "cash" colocando :float :int no "get"
class Casa{

	private $Rua;
	private $Num;
	private $Cep;

	public function getRua() :string{

		return $this->Rua;

	}

	public function setRua($rua){

		$this->Rua = $rua;

	}

	public function getNum():int{

		return $this->Num;

	}

	public function setNum($num){

		$this->Num = $num;

	}

	public function getCep() :int{

		return $this->Cep;

	}

	public function setCep($cep){

		$this->Cep = $cep;

	}

	public function exibir(){

		return array(
			"Rua"=> getRua(),
			"Numero"=>getNum(),
			"CEP"=>getCep(),

		);

	}

}

$house = new Casa();
$house->setRua("Viela Parnaiba");
$house->setNum("36 casa 1");
$house->setCep("07170-530");

print_r($house);




















?>