<html>
    <head>
        <title>Catálogo de productos</title>
    </head>
    <body>
    
        <form action="altaproducto" method="post">
            ID producto:<br/>
            <input type="text" id="idpro" readonly nombre="idpro"/><br/>
            Nombre producto:<br/>
            <input type="text" id="nompro" name="nompro"/><br/>
            Precio producto:<br/>
            <input type="text" id="preciopro" name="preciopro"/><br/>
            Talla:<br/>
            <select id="talla" name="talla">
                <option value="0">==Seleccione una talla==</option>
                <?php
                    include("conexion.php");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "Select * from talla";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["idtalla"] . "'>" . $row["talla"] . "</option>";
                    }
                    } else {
                        echo "<option>Ninguno</option>";
                    }
                    $conn->close();
                ?>
            </select><br/>
            Marca:<br/>
            <select id="marca" name="marca">
            <option value="0">==Seleccione una marca==</option>
                <?php
                    include("conexion.php");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "Select * from marca";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["idmarca"] . "'>" . $row["marca"] . "</option>";
                    }
                    } else {
                        echo "<option>Ninguno</option>";
                    }
                    $conn->close();
                ?>  
            </select><br/>
            <input type="submit" value="Guardar"/>

        </form>
    </body>
</html>