<html>
    <head>
        <title>Reset Password</title>
    </head>
    <body>
        <h3>Resetea tu password</h3>
        <form action="resetpass.php" methodo="post">
            Escribe tu nuevo password<br/>
            <input type="password" name="passuno" id="passuno"  placeholder="Escribe tu contraseña"/><br/>
            Confirma tu contraseña<br/>
            <input type="password" name="passdos" id="passdos" placeholder="Confirma tu contraseña"/><br/>
            <input type="submit" value="Confirmar"/>
        </form>
    </body>
</html>
<?php
   
    if(isset($_REQUEST["passuno"]) && isset($_REQUEST["passdos"]))
    {
        if($_REQUEST["passuno"] == $_REQUEST["passdos"])
        {
            if(strlen($_REQUEST["passuno"]) >= 8)
            {
                echo "<h2 style='color:darkgreen'>Contraseña cambiada correctamente</h2>";
            }
            else
            {
                echo "<h2 style='color:red'>El largo de la contraseña no es válido. Mínimo 8 caractéres</h2>";
            }
        }
        else
        {
            echo "<h2 style='color:red'>Las contraseñas no coinciden.</h2>";
        }
    }
?>