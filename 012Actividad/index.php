<html>
    <head>
        <title>Catálogo de productos</title>
    </head>
    <body>
        <?php
            $nomBoton = "Guardar";
            $formAction = "altaproducto.php";
            $id = 0;
            $nombre = "";
            $precio = 0;
            $idtalla = 0;
            $idmarca = 0;
            $imagenurl = "";
            $idimagen = 0;

            

            if(isset($_REQUEST["idpro"]))
            {
                $nomBoton = "Actualizar";
                $formAction = "actualizaproducto.php";
                include("conexion.php");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "Select * from producto left outer join imagen on imagen.idproducto = producto.idproducto where producto.idproducto = " . $_REQUEST["idpro"];
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $id = $row["idproducto"];
                    $nombre = $row["nombre"];
                    $precio = $row["precio"];
                    $idtalla = $row["idtalla"];
                    $idmarca = $row["idmarca"];
                    $imagenurl = $row["url"];
                    $idimagen = $row["idimagen"];
                }
                } else {
                  //   echo "<option>Ninguno</option>";
                }
                $conn->close();

                
            }
        ?>
        <form action="<?=$formAction?>" method="post"  enctype="multipart/form-data">
            ID producto:<br/>
            <input type="text" id="idpro" readonly name="idpro" value="<?=$_REQUEST["idpro"]?>"/><br/>
            Nombre producto:<br/>
            <input type="text" id="nompro" name="nompro" value="<?=$nombre?>"/><br/>
            Precio producto:<br/>
            <input type="text" id="preciopro" name="preciopro" value="<?=$precio?>"/><br/>
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
                        if($idtalla == $row["idtalla"])
                        {
                            echo "<option selected value='" . $row["idtalla"] . "'>" . $row["talla"] . "</option>";
                        }  
                        else
                        {
                            echo "<option value='" . $row["idtalla"] . "'>" . $row["talla"] . "</option>";
                        }
                        
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
                        $selected = "";
                        if($idmarca == $row["idmarca"])
                        {
                            $selected = "selected";
                        }
                        echo "<option $selected value='" . $row["idmarca"] . "'>" . $row["marca"] . "</option>";
                    }
                    } else {
                        echo "<option>Ninguno</option>";
                    }
                    $conn->close();
                ?>  
            </select><br/>
            Seleccionar una imagen:<br/>
            <input type="file" name="fileToUpload" id="fileToUpload"><br/><br/>
            <table>
                
                    <?php 

                    if(isset($imagenurl) && !is_null($imagenurl) && $imagenurl != "")
                    {
                        echo '<tr><td><a href="eliminaimagen.php?idimg=' . $idimagen . '">Eliminar</a></td></tr>';
                        echo '<tr><td><img style="max-height:100px" src="uploads/'. $imagenurl. '" /></td></tr>';
                    }

                   

                    ?>
               
            </table>
            <input type="submit" value="<?=$nomBoton?>"/>

        </form>
    </body>
</html>