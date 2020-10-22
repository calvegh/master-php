<?php

for($i=1;$i<=10;$i++){
    echo "Tabla del ".$i;
    echo "<table border=1>
            <tr>
                <td>Tabla</td>
                <td>Multiplicacion</td>
                <td>Resultado</td>
            </tr>";
    for($j=1;$j<=10;$j++){
    echo "<tr>
            <td>$i</td>
            <td>$j</td>
            <td>".($i*$j)."</td>
            </tr>";}
        
    echo "</table>";
    
}
echo "<table border=1><tr><td>hola</td><td>chao</td></tr></table>";

?>