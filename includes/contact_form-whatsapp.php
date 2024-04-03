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

require '../PHPmailer/Exception.php';
require '../PHPmailer/PHPMailer.php';
require '../PHPmailer/SMTP.php';

// $Pagina_Origen= $_POST['formulario_pagina'] ?? '';

// $name = $_POST['Name'] ?? '';
// $telefono = $_POST['telefone'] ?? '';
// $sheetRespueta = $_POST['Respuestas Google'] ?? '';



// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     // No se ha enviado el formulario, devuelve una respuesta de error
//     $res = array('status' => false, 'message' => 'No se ha enviado el formulario');
//     echo json_encode($res);
//     exit;
// }

// if (empty($_POST['email'])) {
//     // Falta uno o más campos requeridos, devuelve una respuesta de error
//     $res = array('status' => false, 'message' => 'Por favor, complete todos los campos obligatorios');
//     echo json_encode($res);
//     exit;
// }








// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
  
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
    $mail->setFrom($username, 'Cotizar Prepaga WHATSAPP');
    $mail->addAddress($email_receive, $name_receive);
    $mail->addCC('hernan_pesce@hotmail.com');
    $mail->addBCC('solicitudesdepresupuesto@gmail.com');
    // Contenido del correo electrónicoñ
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo Formulario';

    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    // $message .= "<tr style='background: #eee;'><td><strong>|Nombre|</strong></td><td>" . strip_tags($name) . "</td></tr>";
    // $message .= "<tr><td><strong>|Teléfono|</strong></td><td>" . strip_tags($telefono) . "</td></tr>";
    // $message .= "<tr><td><strong>Formulario Origen</strong></td><td>" . strip_tags($Pagina_Origen) . "</td></tr>";
    // $message .= "<tr><td><strong>Respuestas Forms </strong></td><td>" . strip_tags($sheetRespueta) . "</td></tr>";
    // $message .= "</table>";
    $message .= "</body></html>";

    $mail->Body = $message;

    // Enviar el correo electrónico
    $mail->send();

    $res = array(
        'status' => 'success',
        'message' => 'El mensaje ha sido enviado exitosamente: ');
} catch (Exception $e) {
    $res = array(
        'status' => 'error',
        'message' => 'Error al enviar el mensaje: ' . $mail->ErrorInfo
    );
}


echo json_encode($res);




  