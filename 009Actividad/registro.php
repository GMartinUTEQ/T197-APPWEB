<html>
    <head>
        <title>Registro</title>
    </head>
    <body>
        <form action="nuevousuario.php" method="POST">
            <table style="width:50%;">
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="usralias" id="usralias" /></td>
                </tr>
                <tr>
                    <td>
                        Escriba una nueva contraseña:
                    </td>
                    <td>
                        <input type="password" name="passuno" />
                    </td>
               </tr>
               <tr>
                    <td>
                        Repita la nueva contraseña:
                    </td>
                    <td>
                        <input type="password" name="passdos" />
                    </td>
               </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Crear usuario"/></td>
                </tr>
               
            </table>
        </form>
    </body>
</html>