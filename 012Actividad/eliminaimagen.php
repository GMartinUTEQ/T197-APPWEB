<?php

include("conexion.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "select * from imagen where idimagen = " . $_REQUEST["idimg"];
$imagenurl = "";
//echo $sql . "<br/>";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    //echo "numrows>0<br/>";
    while($row = $result->fetch_assoc()) 
    {
        $imagenurl = $row["url"];
        //echo $imagenurl;
    }
}
if(file_exists("uploads/".$imagenurl))
{
    //echo "Si Existe<br/>";
    if(!unlink("uploads/".$imagenurl))
    {
        echo "Error<br/>";
    }
}
else
{
    //echo "no existe" . "uploads/".$imagenurl . "<br/>";
}
$sql = "delete from imagen where idimagen =  " . $_REQUEST["idimg"];
 //var_dump($_REQUEST);
if ($conn->query($sql) === TRUE) {
    eecho "<script>window.location.href='listaprod.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>