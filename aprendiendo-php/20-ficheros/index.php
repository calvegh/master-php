<?php

/*
//abrir archivo
$archivo = fopen("fichero_texto.txt","a+");

//leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br>";
}

//Escribir

fwrite($archivo,"Ahora si esta funcionando");

//Cerrar archivo
fclose($archivo);
*/

//Copiar
copy("fichero_texto.txt",'fichero_copiado.txt') or die("Error al copiar");

//Renombrar
rename('fichero_copiado.txt','archivito_recopiadito.txt');

//Elimnar
unlink('archivito_recopiadito.txt') or die("Error al borrar");