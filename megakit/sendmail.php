<?php
require 'PHPMailer-5.2.26/class.phpmailer.php';
require 'PHPMailer-5.2.26/PHPMailerAutoload.php';

// Fetching data that is entered by the user
$email = 'adriannava11.11.11@gmail.com';
$password = '';
$to_id = 'adriannava11.11.11@gmail.com';
$message = 'este es un msj';
$subject ='este es el asunto';

// Configuring SMTP server settings
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;

// Email Sending Details
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);

// Success or Failure
if (!$mail->send()) {
	$error = "Mailer Error: " . $mail->ErrorInfo;
	echo '<p id="para">'.$error.'</p>';
}
else {
	echo '<p id="para">Message sent!</p>';
}

?>