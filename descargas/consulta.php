<?php

header('Content-type:application/json; charset:utf-8');
include_once "conexion.php";
$objeto = new Conexion();
$conexion= $objeto->Conectar();
//if (isset($_POST["telefono"],$_POST["email"]) and $_POST["telefono"] !="" and $_POST["email"] !=""){
$titular = $_POST["edad_1"];
$conyuge = $_POST["edad_2"];
$hijo1 = $_POST["hijo_1"];
$hijo2 = $_POST["hijo_2"];


// //}

$consultatitular = "SELECT sancor700A, sancor1000Bcc, sancor1500Bcc, sancor800V, sancor1000B, sancor1500B, sancor3000B, sancor3500, sancor4000, sancor4500, sancor5000, sancor6000 FROM precios_sancor WHERE Edad =  '$titular'";
$consultaconyuge = "SELECT sancor700A, sancor1000Bcc, sancor1500Bcc, sancor800V, sancor1000B, sancor1500B, sancor3000B, sancor3500, sancor4000, sancor4500, sancor5000, sancor6000  FROM precios_sancor WHERE Edad =  '$conyuge'";
$consultahijo1 = "SELECT sancor700A, sancor1000Bcc, sancor1500Bcc, sancor800V, sancor1000B, sancor1500B, sancor3000B, sancor3500, sancor4000, sancor4500, sancor5000, sancor6000  FROM precios_sancor WHERE Edad =  '$hijo1'";
$consultahijo2 = "SELECT sancor700A, sancor1000Bcc, sancor1500Bcc, sancor800V, sancor1000B, sancor1500B, sancor3000B, sancor3500, sancor4000, sancor4500, sancor5000, sancor6000  FROM precios_sancor WHERE Edad =  '$hijo2'";

$resultadotitular = $conexion->prepare($consultatitular);
$resultadotitular -> execute();
$datatitular = $resultadotitular->fetchALL(PDO::FETCH_ASSOC);

$resultadoconyuge = $conexion->prepare($consultaconyuge);
$resultadoconyuge -> execute();
$dataconyuge = $resultadoconyuge->fetchALL(PDO::FETCH_ASSOC);


$resultadohijo1 = $conexion->prepare($consultahijo1);
$resultadohijo1 -> execute();
$datahijo1 = $resultadohijo1->fetchALL(PDO::FETCH_ASSOC);

$resultadohijo2 = $conexion->prepare($consultahijo2);
$resultadohijo2 -> execute();
$datahijo2 = $resultadohijo2->fetchALL(PDO::FETCH_ASSOC);



print json_encode([$datahijo1,$datahijo2,$datatitular,$dataconyuge]);





?>