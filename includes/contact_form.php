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

$Operadora = $_POST['Operadora'] ?? '';
$idCapitas = $_POST['idCapitas'] ?? '';
$edad_1 = $_POST['edad_1'] ?? '';
$edad_2 = $_POST['edad_2'] ?? '';
$hijos_num = $_POST['hijos_num'] ?? '';
$poseeOS = $_POST['poseeOS'] ?? '';
$cualOS = $_POST['cualOS'] ?? '';
$sueldo = $_POST['sueldo'] ?? '';
$categoriaMono = $_POST['categoriaMono'] ?? '';
$aportantesMono = $_POST['aportantesMono'] ?? '';
$name = $_POST['Name'] ?? '';
$prefijo = $_POST['Prefijo'] ?? '';
$telefono = $_POST['Telefone'] ?? '';
$email = $_POST['email'] ?? '';;




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
    $message .= "<tr style='background: #eee;'><td><strong>|Nombre|</strong></td><td>" . strip_tags($name) . "</td></tr>";
    $message .= "<tr style='background: #eee;'><td><strong>Empresa Seleccionada:</strong></td><td>" . strip_tags($Operadora) . "</td></tr>";
    $message .= "<tr><td><strong>Grupo Familiar</strong></td><td>" . strip_tags($idCapitas) . "</td></tr>";
    $message .= "<tr><td><strong>Edad Titular</strong></td><td>" . strip_tags($edad_1) . "</td></tr>";
    $message .= "<tr><td><strong>Edad Pareja</strong></td><td>" . strip_tags($edad_2) . "</td></tr>";
    $message .= "<tr><td><strong>Edad/es hijo/s</strong></td><td>" . strip_tags($hijos_num) . "</td></tr>";
    $message .= "<tr><td><strong>|Teléfono|</strong></td><td>" . strip_tags($telefono) . "</td></tr>";
    $message .= "<tr><td><strong>|Email|</strong></td><td>" . strip_tags($email) . "</td></tr>";
    $message .= "<tr><td><strong>Tipo asociado</strong></td><td>" . strip_tags($poseeOS) . "</td></tr>";
    $message .= "<tr><td><strong>Tipo NOGRAV</strong></td><td>" . strip_tags($cualOS) . "</td></tr>";
    $message .= "<tr><td><strong>Sueldo Bruto</strong></td><td>" . strip_tags($sueldo) . "</td></tr>";
    $message .= "<tr><td><strong>Categoria Monotributo</strong></td><td>" . strip_tags($categoriaMono) . "</td></tr>";
    $message .= "<tr><td><strong># aportantes Monotributo</strong></td><td>" . strip_tags($aportantesMono) . "</td></tr>";
    $message .= "<tr><td><strong>Formulario Origen</strong></td><td>" . strip_tags($prefijo) . "</td></tr>";

    $message .= "</table>";
    $message .= "</body></html>";

    $mail->Body = $message;

    // Enviar el correo electrónico
    $mail->send();

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


// ...

// Obtén los datos adicionales para los mensajes
// $additionalData1 = $_POST['additionalData1'];
// $additionalData2 = $_POST['additionalData2'];

// // Construye los mensajes adicionales
// $message2 = '<html><body>';
// $message2 .= '<h1>Mensaje adicional 1</h1>';
// $message2 .= '<p>' . $additionalData1 . '</p>';
// $message2 .= '</body></html>';

// $message3 = '<html><body>';
// $message3 .= '<h1>Mensaje adicional 2</h1>';
// $message3 .= '<p>' . $additionalData2 . '</p>';
// $message3 .= '</body></html>';

// try {
    // ...

    // Enviar el correo principal
    // $mail->send();

    // Crear una nueva instancia de PHPMailer para enviar el mensaje adicional 1
    // $mail2 = new PHPMailer(true);
    // Configurar el servidor SMTP y otros ajustes para el mensaje adicional 1
    // ...

    // $mail2->isHTML(true);
    // $mail2->Subject = 'Asunto del mensaje adicional 1';
    // $mail2->Body = $message2;
    // Configurar los destinatarios y enviar el mensaje adicional 1
    // ...

    // $mail2->send();

    // Crear una nueva instancia de PHPMailer para enviar el mensaje adicional 2
    // $mail3 = new PHPMailer(true);
    // Configurar el servidor SMTP y otros ajustes para el mensaje adicional 2
    // ...

    // $mail3->isHTML(true);
    // $mail3->Subject = 'Asunto del mensaje adicional 2';
    // $mail3->Body = $message3;
    // Configurar los destinatarios y enviar el mensaje adicional 2
    // ...

    // $mail3->send();

    // ...

// } catch (Exception $e) {
    // Manejo de errores
    // ...
// }

  