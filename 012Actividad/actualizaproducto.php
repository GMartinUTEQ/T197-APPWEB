<?php

/* INICIA SEGMENTO PARA SUBIR FOTO */


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) 
{
  if(!unlink($target_file))
  {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
$nombre_archivo = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". $nombre_archivo . " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



/* TERMINA SEGMENTO PARA SUBIR FOTO */

include("conexion.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$idpro = $_REQUEST["idpro"];

$sql = "delete from imagen where idproducto =  " . $idpro;
 //var_dump($_REQUEST);
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='listaprod.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//die(var_dump($_REQUEST));

$sql = "update producto set nombre = '" . $_REQUEST["nompro"] . "', precio = '" . $_REQUEST["preciopro"] . "', idtalla = " . $_REQUEST["talla"] . ", idmarca = " . $_REQUEST["marca"] . "   where idproducto = " . $idpro ;
 //var_dump($_REQUEST);
if ($conn->query($sql) === TRUE) {
  echo "Updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO imagen (idproducto, url)  VALUES ('$idpro', '$nombre_archivo')";
  echo $sql;
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



$conn->close();
?>
