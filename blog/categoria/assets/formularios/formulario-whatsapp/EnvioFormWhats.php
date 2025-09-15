<?php
header("Access-Control-Allow-Origin: *");


require_once 'twilio-php/src/Twilio/autoload.php';
use Twilio\Rest\Client;

// Datos del formulario
$nombre = $_POST['nome'];
$Prefijo = $_POST['Prefijo'];
$telefono = $_POST['telefone'];

// Configuración de Twilio
$sid = 'AC5cc7c1c2d93929186eef47579e8cae63';
$token = '5632642d720cd0acfd33783f311d277b';
$from = 'whatsapp:+13203616338'; // Este es el número de Twilio que enviará el mensaje, se obtiene desde el panel de Twilio
$to = "whatsapp:+{$Prefijo}{$telefono}";

// Mensaje a enviar
$message = "Hola {$nombre}, gracias por cotizar con nosotros.";

// Envío del mensaje
$client = new Client($sid, $token);
$message = $client->messages->create($to, array('from' => $from, 'body' => $message));
?>
