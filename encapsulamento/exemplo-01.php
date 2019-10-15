<?php

class Pessoa{

	public $nome = "william Carvalho";
	protected $idade = 25;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}

$objeto = new Pessoa();

//echo $objeto->nome; aqui o metodo ira ser acessado pois o dominio é publico
//echo $objeto->idade; quando o dominio for protected o atributo não pode ser acessado de for da classe
//echo $objeto->senha; o mesmo ocorre com o dominio private

$objeto->verDados();//aqui conseguimos acessar as informações pois definimos dentro da classe pessoa o objeto verDados, e este é de dominio publico.

?>