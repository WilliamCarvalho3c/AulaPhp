<?php

class Documento {

	private $numero;

	public function getNumero()
	{

		return $this->numero;

	}
	public function setNumero($n)
	{

		$this->numero = $n;

	}

}

class CPF extends Documento{// extends é uma palavra onde dizemos que a classe CPF é filha da classe documento

	public function Validar():bool
	{

		$numeroCPF = $this-> getNumero();

		//validar CPF

		return true;

	}

}

$doc = new CPF();
$doc->setNumero("468801328-04");
var_dump($doc->validar());
echo "<br/>";
echo $doc->getNumero();







?>