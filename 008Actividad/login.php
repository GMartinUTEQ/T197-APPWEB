<html>
    <head>
        <title>Login</title>
        <meta charset="utf8" />
    </head>
    <body>
        <div style="text-align:center;">
            <form action="valida.php" method="post" style="width:50%;display:block;">
                <table style="display:block;">
                    <tr>
                        <td>
                            Nombre de usuario:
                        </td>
                        <td>
                            <input type="text" name="usrname" id="usrname" placeholder="Nombre de usuario." />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contraseña:
                        </td>
                        <td>
                            <input type="password" name="usrpass" id="usrpass" placeholder="Contraseña"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Validar"/>
                        </td>
                        
                    </tr>
                </table>    
            </form>
            <a href="resetpass.php">Olvidé mi contraseña, resetear</a>
        </div>
    </body>
</html>