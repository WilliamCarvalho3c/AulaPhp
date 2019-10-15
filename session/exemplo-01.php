<?php

//session_start();//inicia a sessão, porém é necessário criar um segundo arquivo para mostrar a sessão
require_once("config.php");

//session_unset($_SESSION["NOME"]);  APAGA A VARIAVEL DE SESSÃO

//SESSION_DESTROY DESTROI A VARIAVEL E REMOVE O USUÁRIO
$_SESSION["NOME"] = "hCODE";


?>