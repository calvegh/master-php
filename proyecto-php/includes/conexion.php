<?php

// Conectarse a la base de datos
$server = "localhost";
$username = 'postgres';
$password = 'wolneslerbla';
$database = 'blog';
$db = pg_connect("host=$server dbname=$database user=$username password=$password");

$stat = pg_connection_status($db);
  if ($stat === PGSQL_CONNECTION_OK) {
      // echo 'Estado de la conexión ok <br>';
  } else {
      echo 'No se ha podido conectar <br>';
      
  }    

  //Iniciar la sesión
  session_start();