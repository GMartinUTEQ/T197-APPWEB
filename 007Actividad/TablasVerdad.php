<html>
    <head>
        <title>Tablas de verdad</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
            <h1>Tablas de Verdad</h1>
        </div>
        <div>
            <table>
                <!-- Como sé cuantas filas y columnas tendrá no necesito PHP para mis encabezados. -->
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>A ^ B</th>
                    <th>A v B</th>
                    <th>!(A ^ B)</th>
                    <th>!(A v B)</th>
                </tr>
                <?php
                    for($f = 1; $f <= 4; $f++)
                    {
                        echo "<tr>";
                            
                            $A = false;
                            $B = false;
                            
                            switch ($f) {
                                case 1:
                                    $A = true;
                                    $B = true; 
                                    
                                    break;
                                case 2:
                                    $A = true;
                                    $B = false; 
                                    
                                    break;
                                case 3:
                                    $A = false;
                                    $B = true;   
                                    break;
                            }
                            $ResAnd = $A && $B;
                            $ResOr = $A || $B;
                            $ResNegAnd = !$ResAnd;
                            $ResNegOr = !$ResOr;

                            echo "<td>$A</td><td>$B</td><td>" . $ResAnd . "</td><td>" . $ResOr . "</td><td>" . $ResNegAnd . "</td><td>" . $ResNegOr . "</td>";
                            /*1er vuelta
                            $f = 2;
                            $A = V
                            $B = F
                            $ResAnd = F; Y 
                            $ResOr = V; O
                            $ResNegAnd = V;
                            $ResNegOr = !F;
                            */
                            
                        
                        echo "</tr>";
                    }
                    
                ?>
            </table>
        </div>
    </body>
</html>