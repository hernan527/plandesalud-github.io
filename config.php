<?php
/**
 * Puede aquí establecer los parametros para el envio de emails
 */

//El servidor de email
$host = "smtp-mail.outlook.com";

//El servidor de email
// $host = "vmi598549.contaboserver.net";

//La encriptación a usar tls o ssl
$encryption = 'tls';

//puerto del protocolo SMTP, gmail usa el 587
$port = 587;

//El usuario de autentificación
$username = "hernan_pesce@hotmail.com";

//La contraseña de autentificación
$password = 'Dilema2570$';

//El usuario de autentificación
// $username = "formulario@queplan.ar";

//La contraseña de autentificación
// $password = 'claveformulario8083';

//El email que recibe los mensajes
$email_receive = "hernan527@gmail.com";

//Nombre quien persona o empresa que reecibe
$name_receive = "solicitudes de presupuesto";

//El email que recibe los mensajes
$bcc_email = "solicitudesdepresupuesto@gmail.com";

//Asunto para el formulario de contacto
$suject_contact = "Solicitud de cotizacion";

//El asunto del mensaje para el usuario que solicita cotización
$suject_contact_user = 'Solicitud recibida';

//Asunto para el formulario de llamada
$suject_call = "Solicitud de llamada";

return [
	"host" => $host,
	"encryption" => $encryption,
	"port" => $port,
	"username" => $username,
	"password" => $password,
	"emails_receive" => $email_receive,
	'name_receive' => $name_receive,
	'bcc_email' => $bcc_email,
	"suject_contact" => $suject_contact,
	"suject_call" => $suject_call,
	"suject_contact_user" => $suject_contact_user
];




