<?php
// Importar las clases de PHPMailer al espacio de nombres global
// Estas deben estar al comienzo del script, no dentro de una función
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Cargar el autoloader de Composer
// require '../vendor/autoload.php';
require_once('../config.php');

// use PHPMailer\PHPMailer\PHPMailer;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$Pagina_y_Formulario = $_POST['formulario_pagina'] ?? '';
$Prepaga_Elegida = $_POST['Operadora'] ?? '';
$Grupo_Familiar = $_POST['idCapitas'] ?? '';
$Edad_Titular = $_POST['edad_1'] ?? '';
$Edad_Pareja = $_POST['edad_2'] ?? '';
$Edades_Hijos = $_POST['hijos_num'] ?? '';
$Tipo_Asociado = $_POST['poseeOS'] ?? '';
$Sueldo = $_POST['sueldo'] ?? '';
$Nombre = $_POST['Name'] ?? '';
$Telefono = $_POST['telefone'] ?? '';
$email = $_POST['email'] ?? '';  

// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     // No se ha enviado el formulario, devuelve una respuesta de error
//     $response = array('status' => false, 'message' => 'No se ha enviado el formulario');
//     echo json_encode($response);
//     exit;
// }

// if (empty($_POST['email'])) {
//     // Falta uno o más campos requeridos, devuelve una respuesta de error
//     $response = array('status' => false, 'message' => 'Por favor, complete todos los campos obligatorios');
//     echo json_encode($response);
//     exit;
// }







// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    function googleForm() {
        // https://docs.google.com/forms/d/e/1FAIpQLSf4MN3ugd5iBpbCEPDTsZmoEu-3TkGCl1jbzRzLXYUjmh-d_Q/viewform?usp=sf_link
        $url = 'https://docs.google.com/forms/d/e/1FAIpQLSf4MN3ugd5iBpbCEPDTsZmoEu-3TkGCl1jbzRzLXYUjmh-d_Q/formResponse';
          // Obtener datos del formulario
          $Pagina_y_Formulario = $_POST['formulario_pagina'] ?? '';
$Prepaga_Elegida = $_POST['Operadora'] ?? '';
$Grupo_Familiar = $_POST['idCapitas'] ?? '';
$Edad_Titular = $_POST['edad_1'] ?? '';
$Edad_Pareja = $_POST['edad_2'] ?? '';
$Edades_Hijos = $_POST['hijos_num'] ?? '';
$Tipo_Asociado = $_POST['poseeOS'] ?? '';
$Sueldo = $_POST['sueldo'] ?? '';
$Nombre = $_POST['Name'] ?? '';
$Telefono = $_POST['telefone'] ?? '';
$email = $_POST['email'] ?? ''; 
        
       
      
          
          
                 $data = array(
           
                    'entry.1259887500' => $Pagina_y_Formulario, // bien
                    'entry.509298976' => $Prepaga_Elegida, // bien
                    'entry.852545261' => $Grupo_Familiar, // bien
                    'entry.644853920' => $Edad_Titular, // bien
                    'entry.1485126801' => $Edad_Pareja, // bien
                    'entry.1389285715' => $Edades_Hijos, // bien
                    'entry.235749358' => $Tipo_Asociado, // bien
                    'entry.1032602369' => $Sueldo, // bien
                    'entry.25389516' => $Nombre, // Bien
                    'entry.382410717' => $Telefono, // bien
                    'entry.278791754' => $email // bien
          );
      
      
          $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
    
        if ($result !== false) {
            // La solicitud se realizó correctamente
            echo 'Success';
        } else {
            // Ocurrió un error al realizar la solicitud
            echo 'Error';
        }
    }
    // googleForm();
    // Configuración del servidor SMTP
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = $host;
    $mail->SMTPAuth = true;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->SMTPSecure = $encryption;
    $mail->Port = $port;
    $mail->SMTPOptions = array(
        'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true)
    );

    // Remitente y destinatario
    $mail->setFrom($username, 'Cotizar Prepaga');
    $mail->addAddress($email_receive, $name_receive);
    $mail->addCC('hernan_pesce@hotmail.com');
    $mail->addBCC('solicitudesdepresupuesto@gmail.com');
    // Contenido del correo electrónicoñ
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo Formulario';

    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>|Nombre|</strong></td><td>" . strip_tags($Nombre) . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td><strong>Pagina y Formulario:</strong></td><td>" . strip_tags($Pagina_y_Formulario) . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td><strong>Empresa Seleccionada:</strong></td><td>" . strip_tags($Prepaga_Elegida) . "</td></tr>";
    $message .= "<tr><td><strong>Grupo Familiar</strong></td><td>" . strip_tags($Grupo_Familiar) . "</td></tr>";
    $message .= "<tr><td><strong>Edad Titular</strong></td><td>" . strip_tags($Edad_Titular) . "</td></tr>";
    $message .= "<tr><td><strong>Edad Pareja</strong></td><td>" . strip_tags($Edad_Pareja) . "</td></tr>";
    $message .= "<tr><td><strong>Edad/es hijo/s</strong></td><td>" . strip_tags($Edades_Hijos) . "</td></tr>";
    $message .= "<tr><td><strong>|Teléfono|</strong></td><td>" . strip_tags($Telefono) . "</td></tr>";
    $message .= "<tr><td><strong>|Email|</strong></td><td>" . strip_tags($email) . "</td></tr>";
    $message .= "<tr><td><strong>Tipo asociado</strong></td><td>" . strip_tags($Tipo_Asociado) . "</td></tr>";
    $message .= "<tr><td><strong>Sueldo Bruto</strong></td><td>" . strip_tags($Sueldo) . "</td></tr>";
   

    $message .= "</table>";
    $message .= "
</body></html>";

    $mail->Body = $message;

    // Enviar el correo electrónico
    // $mail->send();

    $response = array(
        'status' => 'success',
        'message' => 'El mensaje ha sido enviado exitosamente: ');
} catch (Exception $e) {
    $response = array(
        'status' => 'error',
        'message' => 'Error al enviar el mensaje: ' . $mail->ErrorInfo
    );
}


echo json_encode($response);

