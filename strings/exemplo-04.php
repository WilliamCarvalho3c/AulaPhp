<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

//strpos procura um palavra entre outras palavras e retorna o indice de onde a palavra começa
$q = strpos($frase, $palavra);

//substr nos retorna precisamente até em que parte da frase queremos exebir.
$texto = substr($frase,0,$q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);






?>