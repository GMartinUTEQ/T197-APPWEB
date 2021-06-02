<?php

    if(isset($_REQUEST["passuno"]) && isset($_REQUEST["passdos"]))
    {
        $pass1 = $_REQUEST["passuno"];
        $pass2 = $_REQUEST["passdos"];
        $usralias = $_REQUEST["usralias"];

        if(!empty($pass1) && !empty($pass2))
        {
            if($pass1 == $pass2)
            {

                include("conexion.php");
                
                if($conn->connect_error)
                {
                    echo "Error de conexión a MySQL";
                    die("");
                }
                Echo ="Aqui si";
                $sql = "insert into usuario(nombre, pass) values('$usralias', '$pass1');";
                $echo $sql;
                if($conn->query($sql) === TRUE)
                {
                    echo "<h1>Usuario creado exitosamente, </h1><a href='index.php'>inicie sesión</a>";
                }
                else
                {
                    echo "<h1>Error al crear el usuario</h1>";
                }
            }
        }
    }
?>