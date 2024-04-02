<?php
// CONEXION MYSQL
$host_db = "localhost";
// $mysqli = new mysqli('localhost', 'plan_herny', 'HK8csm-msf!8J6tv', 'plan_contador_db');

$mysqli = new mysqli('localhost', 'root', '', 'basededatos');

if ($mysqli->connect_errno) {
    echo "Error al conectar a MySQL: " . $mysqli->connect_error;
    exit();
} else {
    echo "Conexión exitosa a la base de datos MySQL.<br>";
}

$mysqli->set_charset("utf8");

// FUNCIONES
function get_real_ip(){
  if (isset($_SERVER["HTTP_CLIENT_IP"])){
    return $_SERVER["HTTP_CLIENT_IP"];
  }elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
    return $_SERVER["HTTP_X_FORWARDED_FOR"];
  }elseif (isset($_SERVER["HTTP_X_FORWARDED"])){
    return $_SERVER["HTTP_X_FORWARDED"];
  }elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])){
    return $_SERVER["HTTP_FORWARDED_FOR"];
  }elseif (isset($_SERVER["HTTP_FORWARDED"])){
    return $_SERVER["HTTP_FORWARDED"];
  }else{
    return $_SERVER["REMOTE_ADDR"];
  }
}
function obtenerdominio($dominio){
  $dominio = trim($dominio);
  $dominio = str_replace(array("http://", "www."),'',$dominio);
  $dominio = explode("/", $dominio);
  $dominio = $dominio[0];
  return $dominio;
}
function obtenerpagina($dominio){
  $dominio = explode("/",$dominio);
  return end($dominio);
}
// FIN FUNCIONES

$ipadress   = get_real_ip();
$hostname   = gethostbyaddr($ipadress);
$useragent  = $_SERVER['HTTP_USER_AGENT'];
$keyweb     = $_POST['key'];
$web        = obtenerdominio($_POST['web']);
$pagina     = obtenerpagina($_POST['web']);
$usuario    = $_POST['usuario'];
$type       = intval($_POST['type']);/*0 entrada, 1 salida*/
  $str_datos  = file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=45abd2951ee0a74973b579544185c02820ca02a4a692f615786a68d9e7e8903a&ip=169.150.196.84&format=json");

// $str_datos  = file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=45abd2951ee0a74973b579544185c02820ca02a4a692f615786a68d9e7e8903a&ip=".$ipadress."&format=json");
    $datos      = json_decode($str_datos,true);
    $ciudad     = $datos["cityName"];
    $pais       = $datos["countryName"];
    $cp         = $datos["zipCode"];
    $latitud    = $datos["latitude"];
    $longitud   = $datos["longitude"];
    $time       = $datos["timeZone"];

    $query = "INSERT INTO contador (ip, host, navegador, ciudad, pais, cp, latitud, longitud, time, fecha, usuario, web, pagina, type) 
    VALUES ('$ipadress', '$hostname', '$useragent', '$ciudad', '$pais', '$cp', '$latitud', '$longitud', '$time', NOW(),'$usuario', '$web', '$pagina', '0')";

if ($mysqli->query($query)) {
  echo "Registro insertado correctamente.";
} else {
  echo "Error al insertar el registro: " . $mysqli->error;
}









$query_total_visits = "SELECT COUNT(*) AS total_visits FROM contador WHERE web = '$web'";
$result_total_visits = $mysqli->query($query_total_visits);
$row_total_visits = $result_total_visits->fetch_assoc();
$total_visits = $row_total_visits['total_visits'];
echo "Total de visitas: " . $total_visits . "<br>";

$current_date = date("y-m-d");
$query_daily_visits = "SELECT COUNT(*) AS daily_visits FROM contador WHERE web = '$web' AND DATE(fecha) = '$current_date'";
$result_daily_visits = $mysqli->query($query_daily_visits);
$row_daily_visits = $result_daily_visits->fetch_assoc();
$daily_visits = $row_daily_visits['daily_visits'];
echo "Total de visitas hoy: " . $daily_visits . "<br>";

// Crear un arreglo asociativo con los valores
$data = array(
  'visitas' => $total_visits,
  'daily_visits' => $daily_visits
);

// Convertir el arreglo a JSON
$json_data = json_encode($data);

// Escribir el JSON en un archivo
$file = 'contador.json';
file_put_contents($file, $json_data);



// 
// Cierra la conexión
$mysqli->close();
?>