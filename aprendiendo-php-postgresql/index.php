<?php

// Conectarse a la base de datos
$
$db = pg_connect("host=localhost dbname=phppostgresql user=postgres password=wolneslerbla");

//
$stat = pg_connection_status($conexion);
  if ($stat === PGSQL_CONNECTION_OK) {
      echo 'Estado de la conexión ok <br>';
  } else {
      echo 'No se ha podido conectar <br>';
  }    

// Consulta que falla
$res = pg_query($conexion, "select * from notas");
while ($row = pg_fetch_row($res)) {
    echo "<h2>".$row[1].'</h2>';
    echo $row[2].'<br>';
  }

$sql = "INSERT INTO notas VALUES (3,'Nota desde PHP','Esto es una nota de PHP','red')";
$insert = pg_query($conexion, $sql);

echo pg_last_error($conexion);