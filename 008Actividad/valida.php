<?php
    if(isset($_REQUEST["usrname"]) && isset($_REQUEST["usrpass"]))
    {
        if($_REQUEST["usrname"] == "gabriel")
        {
            if($_REQUEST["usrpass"] == "uteq2021")
            {
                echo "<center><h1>BIENVENIDO!! </h1></center>";
            }
            else
            {
                echo "<center><h3>Contrasña incorrecta, favor de validar. </h3></center>";
            }
        }
        else
        {
            echo "<center><h3>Nombre de usuario incorrecto, favor de validar. </h3></center>";
        }
    }
?>

