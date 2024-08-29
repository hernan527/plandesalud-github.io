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

$Pagina_y_Formulario = $_POST['formulario_pagina'];
$Nombre = $_POST['Name'];
$Telefono = $_POST['telefone'];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // No se ha enviado el formulario, devuelve una respuesta de error
    $response = array('status' => false, 'message' => 'No se ha enviado el formulario');
    echo json_encode($response);
    exit;
}

// if (empty($_POST['email'])) {
//     // Falta uno o más campos requeridos, devuelve una respuesta de error
//     $response = array('status' => false, 'message' => 'Por favor, complete todos los campos obligatorios');
//     echo json_encode($response);
//     exit;
// }







// Crear una instancia de PHPMailer
//$mail = new PHPMailer(true);

try {
    function googleForm() {
        // https://docs.google.com/forms/d/e/1FAIpQLSf4MN3ugd5iBpbCEPDTsZmoEu-3TkGCl1jbzRzLXYUjmh-d_Q/viewform?usp=sf_link
        $url = 'https://docs.google.com/forms/d/e/1FAIpQLSf4MN3ugd5iBpbCEPDTsZmoEu-3TkGCl1jbzRzLXYUjmh-d_Q/formResponse';
          // Obtener datos del formulario
          $Pagina_y_Formulario = $_POST['formulario_pagina'];
          $Nombre = $_POST['Name'];
          $Telefono = $_POST['telefone'];
       
      
          
          
                 $data = array(
           
                    'entry.1259887500' => $Pagina_y_Formulario, // bien
                    'entry.25389516' => $Nombre, // Bien
                    'entry.382410717' => $Telefono, // bien
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
    googleForm();
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
    $message .= "<tr><td><strong>|Teléfono|</strong></td><td>" . strip_tags($Telefono) . "</td></tr>";
   

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

