<?php
    
    include("conexion.php");

    if($conn->connect_error)
    {
        echo "Error de conexión." . $conn->connect_error;
        die("Error de conexión." . $conn->connect_error);
    }
    
    
    $sql = "select * from usuario";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        echo "<table><tr><th>ID</th><th>Usuario</th><th>Fecha Ult. Cambio</th></tr>";
        while($row = $result->fetch_assoc())
        {
            echo "<tr><td>" . $row["idusuario"] . "</td><td>" . $row["alias"] . "</td><td>" . $row["ultcambio"] . "</td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "<h1>No se encontraron datos</h1>";
    }

    
?>