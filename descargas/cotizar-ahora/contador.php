<?php
// CONEXION MYSQL
$host_db = "localhost";
$mysqli = new mysqli('localhost', 'plan_herny', 'O^pBowA*78Jz!@J4', 'plan_contador_db');

// $mysqli = new mysqli('localhost', 'root', '', 'basededatos');

if ($mysqli->connect_errno) {
    echo "Error al conectar a MySQL: " . $mysqli->connect_error;
    exit();
} else {
    echo "Conexión exitosa a la base de datos MySQL.<br>";
}

$mysqli->set_charset("utf8");

/
  $query = "INSERT INTO contador (ip, host, navegador, ciudad, pais, cp, latitud, longitud, time, fecha, usuario, web, pagina, type) 
  VALUES ('ssssssssss', 'ddddddddddddd', 'ddddddd', 'dddd', 'ddddd', '333', '3333', '33333', 'dbdasfbef', NOW(),'33333', '33333', '33333', '0')";

if ($mysqli->query($query)) {
  echo "Registro insertado correctamente.";
} else {
  echo "Error al insertar el registro: " . $mysqli->error;
}


// 
// Cierra la conexión
$mysqli->close();
?>