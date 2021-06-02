<?php

    if(isset($_REQUEST["nombre"]) && isset($_REQUEST["nomuser"]) && isset($_REQUEST["estado"]))
    {
        echo "<table>";
        echo "<tr><td>Nombre completo:</td><td>" . $_REQUEST["nombre"] . "</td></tr>";
        echo "<tr><td>Nombre de usuario:</td><td>" . $_REQUEST["nomuser"] . "</td></tr>";
        echo "<tr><td>Contraseña:</td><td>******</td></tr>";
        echo "<tr><td>Sexo:</td><td>" . $_REQUEST["sexo"] . "</td></tr>";
        echo "<tr><td>Estado de nacimiento</td><td>" . $_REQUEST["estado"] . "</td></tr>";
        echo "</table>";

    }
    else
    {
        if(!isset($_REQUEST["nombre"]))
        {
            echo "<h1>Falta el nombre</h1>";
        }
    } 

?>