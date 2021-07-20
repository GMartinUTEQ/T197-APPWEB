<html>  
    <head>
        <title>TABLAS DE MULTIPLICAR</title>
    </head>
    <body>
        <a href="index.php">Regresar</a>
        <h1>Tablas de multiplicar</h1>
        <?php
            $inicio = rand(1, 10); // = 3
            $anchocol = $inicio * 10;
            
            echo "<h1>TABLAS DE MULTIPLICAR</h1><h3>Hasta el $inicio";
            echo "<table width='100%;'>";
            echo "<tr>";

           

            $booleano = true;
            $booleano2 = false;

            //$cuentatit = 2  ;  4 <= 3 NO
            for($cuentatit = 1; $cuentatit <= $inicio; $cuentatit++)
            {
                echo "<th style='width:$anchocol; border-width:1pt;border-style:solid; color:white;background-color:black;text-align:center;'>Tabla del: " . $cuentatit . "</th>";
            }
            echo "</tr>";
            //$i = 3;  3 <= 10 SI
            for($i = 1; $i <= 10; $i++)
            {
                echo "<tr>";
                //$n = 3 ;   3 <= 3

                for($n = 1; $n <= $inicio; $n++)
                {  
                    
                        echo "<td style='width:$anchocol; border-width:1pt;border-style:solid;text-align:center;'>$n x $i = " . $i * $n . "</td>";
                   
                }
                echo "</tr>";
            }
            echo "</table>"
        ?>
    </body>
</html>