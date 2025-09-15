<?php

// Obtener el contenido actual de datoscompletos.json
$datoscompletos_json = file_get_contents('datoscompletos.json');

// Decodificar el JSON en un array asociativo
$datoscompletos = json_decode($datoscompletos_json, true);

// Verificar si $datoscompletos es null
if ($datoscompletos === null) {
    // Si $datoscompletos es null, no hay registros, entonces el total de visitas es 0
    $total_visits = 1;
} else {
    // Si $datoscompletos no es null, contar el total de visitas
    $total_visits = count($datoscompletos);
}

$current_date = date("Y-m-d");

// // Contar las visitas de hoy
// Contar las visitas de hoy
$daily_visits = 1;
if ($datoscompletos !== null) {
    foreach ($datoscompletos as $registro) {
        $registro_date = substr($registro['fecha'], 0, 10); // Obtener solo la parte de la fecha
        if ($registro_date == $current_date) {
            $daily_visits++;
        }
    }
}


// // Actualizar contador.json con los valores obtenidos
// Actualizar contador.json con los valores obtenidos
$contador_data = array(
    'visitas' => $total_visits,
    // 'daily_visits' => $daily_visits
);

$contador_json = json_encode($contador_data);
file_put_contents('contador.json', $contador_json);


// // Continuar con el resto de tu código para almacenar los datos de los visitantes en datoscompletos.json

// // FUNCIONES
function get_real_ip(){
    if (isset($_SERVER["HTTP_CLIENT_IP"])){
        return $_SERVER["HTTP_CLIENT_IP"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED"])){
        return $_SERVER["HTTP_X_FORWARDED"];
    } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])){
        return $_SERVER["HTTP_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_FORWARDED"])){
        return $_SERVER["HTTP_FORWARDED"];
    } else{
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
// // FIN FUNCIONES

$ipadress   = get_real_ip();
$hostname   = gethostbyaddr($ipadress);
$useragent  = $_SERVER['HTTP_USER_AGENT'];
$keyweb     = $_POST['key'];
$web        = obtenerdominio($_POST['web']);
$pagina     = obtenerpagina($_POST['web']);
$usuario    = $_POST['usuario'];
$type       = intval($_POST['type']); /*0 entrada, 1 salida*/

// // Obtener información geográfica de la IP
$str_datos  = file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=45abd2951ee0a74973b579544185c02820ca02a4a692f615786a68d9e7e8903a&ip=".$ipadress."&format=json");
// $str_datos  = file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=45abd2951ee0a74973b579544185c02820ca02a4a692f615786a68d9e7e8903a&ip=169.150.196.84&format=json");

$datos      = json_decode($str_datos,true);
$ciudad     = $datos["cityName"];
$pais       = $datos["countryName"];
$cp         = $datos["zipCode"];
$latitud    = $datos["latitude"];
$longitud   = $datos["longitude"];
$time       = $datos["timeZone"];

// Crear un arreglo asociativo con los valores
$registro = array(
    'ip' => $ipadress,
    'hostname' => $hostname,
    'useragent' => $useragent,
    'keyweb' => $keyweb,
    'web' => $web,
    'pagina' => $pagina,
    'usuario' => $usuario,
    'type' => $type,
    'ciudad' => $ciudad,
    'pais' => $pais,
    'cp' => $cp,
    'latitud' => $latitud,
    'longitud' => $longitud,
    'time' => $time,
    'fecha' => date("Y-m-d H:i:s")
);

// $registro = array(
//     'ip' => "ipadress",
//     'hostname' => "hostname",
//     'useragent' => "useragent",
//     'keyweb' => "keyweb",
//     'web' => "web",
//     'pagina' => "pagina",
//     'usuario' => "usuario",
//     'type' => "type",
//     'ciudad' => "ciudad",
//     'pais' => "pais",
//     'cp' => "cp",
//     'latitud' => "latitud",
//     'longitud' => "longitud",
//     'time' => "time",
//     'fecha' => date("Y-m-d H:i:s")
// );
// Leer el contenido actual del archivo
$file = 'datoscompletos.json';
$current_data = file_get_contents($file);

// Decodificar el JSON existente en un array asociativo
$current_array = json_decode($current_data, true);

// Verificar si $current_array es null
if ($current_array === null) {
    // Si $current_array es null, no hay registros, inicializar un nuevo array vacío
    $current_array = [];
}

// Agregar el nuevo registro al array
$current_array[] = $registro;

// Convertir el array a JSON
$json_registro = json_encode($current_array);

// Escribir el JSON actualizado en el archivo
file_put_contents($file, $json_registro);


?>
