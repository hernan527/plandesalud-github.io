<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once ('../../lib/PHPMailer/vendor/autoload.php');
require_once ('../../config.php');

if(empty($_POST))
	return;

$mail = new PHPMailer;
$mail->isSMTP();
$mail->CharSet = 'UTF-8';

$mail->SMTPDebug = 2;
$mail->Host = $host;
$mail->Port = $port;
$mail->SMTPSecure = $encryption;
$mail->SMTPAuth = true;//
$mail->SMTPOptions = array(
	'ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true)
);

$mail->Username = $username;
$mail->Password = $password;
$mail->setFrom($username, 'Cotizar Prepaga');
$mail->addAddress('hernan_pesce@hotmail.com', 'Hernán');
$mail->addReplyTo($email_receive, $name_receive);
$mail->Subject = $suject_contact;

$mail->Body = "<p>Mensaje de prueba</p>"; //cuerpo del mensaje
$mail->AltBody = "mensaje de prueba";
if (!$mail->send()) {
	$arr = array('status' => false, 'message');
} else {
	$arr = array('status' => true);
}
die(json_encode($arr));
