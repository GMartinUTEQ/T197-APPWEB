<?php
session_start();

if(isset($_REQUEST["cantpro"]) && isset($_REQUEST["idpro"]))
{
    $_SESSION["carrito"] += array($_REQUEST["idpro"]=>$_REQUEST["cantpro"]);
}

$_SESSION['CarritoCount'] = count($_SESSION["carrito"]);

echo "<script>window.location.href='index.php'</script>";
?>