<?php

class Pessoa{

	public $nome = "william Carvalho";//todo mundo ver esse atributo
	protected $idade = 25;// é acessado dentro das demais classes e classes extendidas
	private $senha = "123456";// so é acessado dentro da classe

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}

class programador extends Pessoa{

public function verDados(){

		echo get_class($this) . "<br/>";// serve para ver qual classe estavamos vendo

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";// neste objeto não é possivel acessar esta atributo uma vez que o metodo private só é acessado dentro da classe mae/pai.
	}



}

$objeto = new Programador();//aqui o objeto é instanciado.

//echo $objeto->nome; aqui o metodo ira ser acessado pois o dominio é publico
//echo $objeto->idade; quando o dominio for protected o atributo não pode ser acessado de for da classe
//echo $objeto->senha; o mesmo ocorre com o dominio private

$objeto->verDados();//aqui conseguimos acessar as informações pois definimos dentro da classe pessoa o objeto verDados, e este é de dominio publico.

?>