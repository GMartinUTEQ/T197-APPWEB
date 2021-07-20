<?php

include("conexion.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO producto (nombre, precio, idmarca, idtalla) VALUES ('".$_REQUEST["nompro"]."', ". $_REQUEST["preciopro"] .", '". $_REQUEST["marca"] ."', '" . $_REQUEST["talla"] . "')";
 var_dump($_REQUEST);
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
