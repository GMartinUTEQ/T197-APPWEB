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
        echo "<table><tr><th>ID</th><th>Usuario</th><th>Fecha Ult. Cambio</th><th>Eliminar</th><th>Cambiar contraseña</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
            echo "<tr><td>" . $row["idusuario"] . "</td><td>" . $row["alias"] . "</td><td>" . $row["ultcambio"] . "</td><td><a href='borrarusuario.php?idusuario=" . $row["idusuario"] . "'><img style='max-height:30px;' src='imgs/eliminar.png'/></a></td><td><a href='reseteapass.php?alias=" .$row["alias"] . "'><img style='max-height:30px;' src='imgs/actualizar.png'/></a></td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "<h1>No se encontraron datos</h1>";
    }

    
?>