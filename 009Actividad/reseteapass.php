<html>
    <head>
        <title>Resetea tu contraseña</title>
    </head>
    <body>
        <form action="reseteapass.php" method="POST">
            <table style="width:50%">
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
                    <td colspan="2">
                        <input type="Submit" value="Resetear" />
                    </td>
               </tr>
            </table>
        </form>
    </body>
</html>
<?php

if(isset($_REQUEST["passuno"]) && isset($_REQUEST["passdos"]))
{
    $pass1 = $_REQUEST["passuno"];
    $pass2 = $_REQUEST["passdos"];

    if(!empty($pass1) && !empty($pass2))
    {
        if($pass1 == $pass2)
        {
            
        }
    }
}

?>