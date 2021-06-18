<?php 
    session_start();
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
        
        $_SESSION["Usuario"] = $usuario;
        $sql = "select * from usuario where alias = '$usuario'";
       
        $result = $conn->query($sql);

        if($result->num_rows > 0)
        {
            $sql = "select * from usuario where alias = '$usuario' and pass = md5('$password');";
            if($result->num_rows > 0)
            {
                echo "<script>alert('Bienvenido $usuario');window.location.href='dashboard.php'</script>";
            }
            else
            {
                echo "<h1>Usuario o contraseña incorrectos</h1>";
            }
        }
        else
        {
            echo "<h1>Usuario o contraseña incorrectos</h1>";
        }

    }
?>