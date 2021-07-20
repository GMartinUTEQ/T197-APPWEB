<?php
session_start();

if(isset($_REQUEST["idpro"]))
{
    unset($_SESSION["carrito"][$_REQUEST["idpro"]]);
}
echo "<script>window.location.href='carrito.php'</script>";

?>