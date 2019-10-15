<?php

//$ts = strtotime("2001-09-11");
$ts = strtotime("now"); // é possivel escrever expressões dentro dos parenteses ("+1 day, week, month")

echo date("l, d/n/Y  H:i:s",$ts);

?>