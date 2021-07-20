<html>  
    <head>
        <title>Estructuras Repetitivas</title>
    </head>
    <body>
        <a href="index.php">Regresar</a>
        <h1>Dias transcurridos.</h1>
        <?php
            $inicio = date("d");
            while($inicio >= 1)
            {
                echo "<h3>$inicio</h3>";
                $inicio --;
            }
        ?>
    </body>
</html>