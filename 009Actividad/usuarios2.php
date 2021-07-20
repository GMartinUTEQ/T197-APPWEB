<html>
    <head>
        <title>Catálogo de usuarios</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" ></script>
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>Catálogo de usuarios</h1>
            <p>Sistema de administración X</p>
        </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="">Menú</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Cerrar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a href="reseteapass.php" class="nav-link">Resetear Contraseña</a>
                    </li>
                    <li class="nav-item">
                        <a href="registro.php" class="nav-link">Crear usuario</a>
                    </li>
                </ul>
            <div>
        </nav>

        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-2" >
                </div>
                <div class="col-sm-8" >
                    <h2>Lista de usuarios en el sistema al día de hoy</h2>
                    <?php
    
                        include("conexion.php");

                        if($conn->connect_error)
                        {
                            echo "Error de conexión." . $conn->connect_error;
                            die("Error de conexión." . $conn->connect_error);
                        }
                        $sql = "select * from usuario";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0) //6 
                        {
                            echo "<div style='overflow-x: auto;
                            white-space: nowrap;'><table class='table table-dark table-hover text-center'><tr><th>ID</th><th>Usuario</th><th>Fecha Ult. Cambio</th><th>Eliminar</th><th>Cambiar contraseña</th></tr>";
                            while($row = $result->fetch_assoc()) //6 vueltas
                            {
                                echo "<tr>
                                        <td>" . $row["idusuario"] . "</td>
                                        <td>" . $row["alias"] . "</td>
                                        <td>" . $row["ultcambio"] . "</td>
                                        <td><a href='borrarusuario.php?idusuario=" . $row["idusuario"] . "'><img style='max-height:30px;' src='imgs/eliminar.png'/></a></td>
                                        <td><a href='reseteapass.php?alias=" .$row["alias"] . "'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                    </tr>";
                            }
                            echo "</table><div><br/>";
                        }
                        else
                        {
                            echo "<h1>No se encontraron datos</h1>";
                        }
                    ?>
                </div>
                <div class="col-sm-2" >
                </div>

                
            </div>
        </div>

        <div class="jumbotron text-center" style="margin-bottom:0">
            <a href="http://google.com">Todos los derechos reservados @T197</a>
        </div>
    </body>
</html>