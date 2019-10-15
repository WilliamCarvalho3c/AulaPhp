<?php

$qualOSeuSalario = 12000;

$baixo = 1200;
$medio = 2500;
$alto = 5000;



if($qualOSeuSalario < $baixo){

	echo "Salário Ruim";
	
} else if($qualOSeuSalario < $medio) {

	echo "Salário Bom";

} else if ($qualOSeuSalario < $alto){

	echo "Otimo Salário";

} else{

	Echo "Puta Salário";

}




?>