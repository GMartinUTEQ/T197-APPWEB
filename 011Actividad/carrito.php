<?php
session_start();

echo "<h1>Carrito de compras</h1>";
echo "<table><tr><th>Imagen</th><th>idProducto</th><th>Nombre del producto</th><th>Cantidad</th><th>Importe</th><th>Eliminar</th></tr>";

$total = 0;

foreach($_SESSION["carrito"] as $x => $x_value)
{
    $importe = precioproducto($x);
    echo "<tr><td><img style='max-height:40px' src='" . imagenproducto($x) . "' /></td><td>" . $x . "</td><td>" .  nombreproducto($x) . "</td><td>" . $x_value . "</td><td>" . $importe . "</td><td><a href='eliminacarrito.php?idpro=$x'>Eliminar</a></td></tr>";
    $total += $importe;
}

echo "</table>";
echo "<h3>Total de la compra: " . $total . "</h3>";

function nombreproducto($idpro)
{
    include("conexion.php");

    if($conn->connect_error)
    {
        echo "Error de conexión." . $conn->connect_error;
        die("Error de conexión." . $conn->connect_error);
    }
    $sql = "select * from producto where idproducto = $idpro";
    
    $result = $conn->query($sql);

    if($result->num_rows > 0) //6 
    {
        
        while($row = $result->fetch_assoc()) //6 vueltas
        {
            return $row["nombreproducto"];
        }
        
    }
    else
    {
        echo "{Err:No se encontró nombre de producto}";
    }
}

function precioproducto($idpro)
{
    include("conexion.php");

    if($conn->connect_error)
    {
        echo "Error de conexión." . $conn->connect_error;
        die("Error de conexión." . $conn->connect_error);
    }
    $sql = "select * from producto where idproducto = $idpro";
    
    $result = $conn->query($sql);

    if($result->num_rows > 0) //6 
    {
        
        while($row = $result->fetch_assoc()) //6 vueltas
        {
            return $row["precioproducto"];
        }
        
    }
    else
    {
        echo "{Err:No se encontró nombre de producto}";
    }
}

function imagenproducto($idpro)
{
    include("conexion.php");

    if($conn->connect_error)
    {
        echo "Error de conexión." . $conn->connect_error;
        die("Error de conexión." . $conn->connect_error);
    }
    $sql = "select * from producto where idproducto = $idpro";
    
    $result = $conn->query($sql);

    if($result->num_rows > 0) //6 
    {
        
        while($row = $result->fetch_assoc()) //6 vueltas
        {
            return $row["urlproducto"];
        }
        
    }
    else
    {
        echo "{Err:No se encontró nombre de producto}";
    }
}

?>