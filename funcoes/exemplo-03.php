<?php

function ola($texto = "mundo", $periodo ){

	return "ola $texto! $periodo <br>";
}

echo ola("ola", "bom dia");
echo ola("", "boa noite");
echo ola("William", "boa tarde");
echo ola("joão", "");
?>