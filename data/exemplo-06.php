<?php

$data = new datetime();

$periodo = new dateinterval("P10D");

echo $data->format("d/m/Y H:i:s");

$data->add($periodo);

echo "<br>";






?>