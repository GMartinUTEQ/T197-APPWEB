<?php
session_start();

if(isset($_REQUEST["cantpro"]) && isset($_REQUEST["idpro"]))
{
    $_SESSION["carrito"] = array($_REQUEST["idpro"]=>$_REQUEST["cantpro"]);
}

var_dump($_SESSION["carrito"]);
?>