<?php

class Profissao{

	public $cargo;

	public function trabalho(){

		return "Eu trabalho como ".$this->cargo;
	}

}

$william = new Profissao();
$william->cargo = "Estagiario Help desk na empresa tres corações S/A ";
echo $william->trabalho();

?>