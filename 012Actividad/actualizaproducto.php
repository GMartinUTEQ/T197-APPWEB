<?php

include("conexion.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//die(var_dump($_REQUEST));

$sql = "update producto set nombre = '" . $_REQUEST["nompro"] . "', precio = '" . $_REQUEST["preciopro"] . "', idtalla = " . $_REQUEST["talla"] . ", idmarca = " . $_REQUEST["marca"] . "   where idproducto = " . $_REQUEST["idpro"] ;
 //var_dump($_REQUEST);
if ($conn->query($sql) === TRUE) {
  echo "Updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
