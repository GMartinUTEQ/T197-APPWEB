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
                <option value="1">Chica</option>
                <option value="2">Mediana</option>
            </select><br/>
            Marca:<br/>
            <select id="marca" name="marca">
                <option value="1">American Eagle</option>
                <option value="2">GAP</option>
            </select><br/>
            <input type="submit" value="Guardar"/>

        </form>
    </body>
</html>