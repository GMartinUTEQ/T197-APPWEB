<?php
    include("conexion.php");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select idproducto, nombre, precio, marca.marca, talla.talla from producto inner join marca on marca.idmarca = producto.idmarca inner join talla on talla.idtalla = producto.idtalla";
    $result = $conn->query($sql);
    echo "<table><tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Marca</th><th>Talla</th><th>Editar</th></tr>";
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["idproducto"] ."</td><td>". $row["nombre"] ."</td><td>". $row["precio"] ."</td><td>". $row["marca"] ."</td><td>". $row["talla"] ."</td><td><a href='index.php?idpro=" . $row["idproducto"] . "'>Editar</a></td>";
    }
    echo "</table>";
    } else {
        echo "<option>Ninguno</option>";
    }
    $conn->close();
?>