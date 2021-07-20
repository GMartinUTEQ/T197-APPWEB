<html>
    <head>
        <title>Registro</title>
    </head>
    <body>
        <h3>Registra tus datos</h3>
        <form action="tarjetausuario2.php"  methodo="get">
            <table>
                <tr>
                    <td>
                        Nombre completo:
                    </td>
                    <td>
                        <input type="text" name="nombre" id="nombre"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nombre de usuario:
                    </td>
                    <td>
                        <input type="text" name="nomuser" id="nomuser" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Contraseña:
                    </td>
                    <td>
                        <input type="password" name="passuser" id="passuser" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Sexo:
                    </td>
                    <td>
                        Hombre:<input type="radio" id="sexo" name="sexo" value="sexh"/>
                        Mujer:<input type="radio" id="sexo" name="sexo" value="sexm"/>
                        Prefiero no decir:<input type="radio" id="sexo" name="sexo" value="sexnd"/>
                         
                    </td>
                </tr>
                <tr>
                    <td>
                        Estado de Nacimiento:
                    </td>
                    <td>
                        <select name="estado" id="estado">
                            <option value="queretaro">Querétaro</option>
                            <option value="yucatan">Yucatan</option>
                            <option value="guanajuato">Guanajuato</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"> 
                        <input type="submit" value="Registrar"/>
                    </td>
                    
                </tr>
            </table>
        </form>
    </body>
</html>