<?php

$pelicula = "Batman";

$peliculas = array('Batman',"El señor de los anillos","Spider Man");
$cantantes = ['2pac','drake','Corey Taylor'];

//array asociativo
$personas = array(
    'nombre'=>"Carlos",
    'apellidos'=>"Vega",
    'Equipo'=>"U de Chile"
);
echo $personas['nombre'];

//recorrer con for
echo "<h1>Listado de películas</h1>";
echo "<ul>";
for($i = 0; $i<count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";
echo "<hr>";

//recorrer con foreach
echo "<h1>Listado de cantantes</h1>";
echo "<ul>";
foreach($cantantes as $cantante){
    echo "<li>".$cantante."</li>";
}
echo "</ul>";
echo "<hr>";
//Arrays Multidimensionales
$contactos = array(
    array(
        'nombre'=>"Carlos",
        'apellido'=>"Vega",
        'Equipo'=>"U de Chile",
    ),
    array(
        'nombre'=>"Marmota",
        'apellido'=>"Veraniega",
        'Equipo'=>"Tricolor de Paine",
    ),
    array(
        'nombre'=>"Jaime",
        'apellido'=>"Celedon",
        'Equipo'=>"Ferroviarios",
    )
    );
echo $contactos[1]['Equipo']."<br>";

foreach($contactos as $key=>$contacto){
    var_dump($contacto['nombre']);
    echo "<br>";
}

?>