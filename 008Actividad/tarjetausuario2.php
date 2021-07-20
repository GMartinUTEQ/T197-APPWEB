<?php
    if(isset($_REQUEST["nombre"]) && isset($_REQUEST["nomuser"]) && isset($_REQUEST["estado"]))
    {
        $titulos[] = "Nombre completo:";
        $valores[] = $_REQUEST["nombre"];
        $titulos[] = "Nombre de usuario:";
        $valores[] = $_REQUEST["nomuser"];
        $titulos[] = "Contraseña:";
        $valores[] = "*****";
        $titulos[] = "Sexo:";
        $valores[] = retornasexo($_REQUEST["sexo"]);
        $titulos[] = "Estado:";
        $valores[] = $_REQUEST["estado"];

        echo "<table>";

        // count($valores); 5 - 1 = 4 -->
        for($f = 0; $f <= count($valores) - 1; $f++)
        {
            echo "<tr><td>" . $titulos[$f] . "</td><td>" . $valores[$f] . "</td></tr>";
        }
        echo "</table>";

    }
    else
    {
        if(!isset($_REQUEST["nombre"]))
        {
            echo "<h1>Falta el nombre</h1>";
        }
    } 

    function retornasexo($clavesex)
    {
        $textosexo = "";
        switch($clavesex)
        {
            case "sexh":
                $textosexo = "Hombre";
                break;
            case "sexm":
                $textosexo = "Mujer";
                break;
            case "sexnd":
                $textosexo = "Prefirió no decir";
                break;
        }
        return $textosexo;
    }

?>