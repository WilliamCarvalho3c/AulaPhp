<?php

class endereco{
	
	private $logradouro;
	private $numero;
	private $cep;

	public function __construct($a, $b, $c){// o __construct é um metodo magico é usado quando voce quer substituir os "set"

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cep = $c;


	}


}

$meuEndereco = new endereco("viela parnaiba", "36 casa 2", "07170-530");

var_dump($meuEndereco);


?>