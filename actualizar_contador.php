<?php

// Ruta del archivo JSON
$archivo_json = "contador.json";

// Verifica si se envió un valor para las visitas
if (isset($_GET['visitas'])) {
    // Obtiene el número de visitas enviado
    $visitas_nuevas = intval($_GET['visitas']);

    // Lee el contenido actual del archivo JSON
    $contenido_json = file_get_contents($archivo_json);

    // Decodifica el JSON en un array asociativo
    $data = json_decode($contenido_json, true);

    // Verifica si se pudo decodificar correctamente el JSON
    if ($data !== null) {
        // Obtiene el valor actual de visitas
        $visitas_actuales = isset($data['visitas']) ? intval($data['visitas']) : 0;

        // Suma las visitas nuevas al valor actual
        $visitas_totales = $visitas_actuales + $visitas_nuevas;

        // Actualiza el array con el nuevo valor de visitas
        $data['visitas'] = $visitas_totales;

        // Codifica el array en formato JSON
        $data_json = json_encode($data);

        // Escribe el JSON en el archivo
        file_put_contents($archivo_json, $data_json);
    } else {
        echo "Error: No se pudo decodificar el archivo JSON.";
    }
}

?>
