<?php
    if(isset($_REQUEST["usralias"]) && isset($_REQUEST["usrpass"]))
    {
        include("conexion.php");

        if($conn->connect_error)
        {
            echo "Error de conexión." . $conn->connect_error;
            die("Error de conexión." . $conn->connect_error);
        }
        
        $usuario = $_REQUEST["usralias"];
        $password = $_REQUEST["usrpass"];
        $sql = "select * from usuario where alias = '$usuario' and pass = md5('$password');";
       
        $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            echo "Bienvenido, $usuario";
        }
        else
        {
            echo "<h1>Usuario o contraseña incorrectos</h1>";
        }

    }
?>