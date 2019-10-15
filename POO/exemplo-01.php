<?php
// Criando uma Classe
class Pessoa{

	public $nome;//criando atributo

	public function falar(){//criando o metodo, por que é uma função dentro de uma classe.

		return "O meu nome é ".$this->nome;// $this-> vem no lugar do "$" para chamar a variavel

	}

}

$william = new Pessoa();
$william->nome = "William Carvalho";
echo $william->falar();



?>