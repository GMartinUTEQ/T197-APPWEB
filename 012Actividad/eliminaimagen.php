<?php

include("conexion.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//die(var_dump($_REQUEST));

$sql = "delete from imagen where idimagen =  " . $_REQUEST["idimg"];
 //var_dump($_REQUEST);
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='listaprod.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>