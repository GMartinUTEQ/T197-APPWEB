<html>  
    <head>
        <title>Estructuras Repetitivas</title>
    </head>
    <body>
        <a href="index.php">Regresar</a>
        <h1>Ciclo While</h1>
        <?php
            $valor = rand(1, 100);
            $inicio = 1;
            while($inicio <= $valor)
            {
                echo "<h3>$inicio</h3>";
                $inicio ++;
            }
        ?>
    </body>
</html>