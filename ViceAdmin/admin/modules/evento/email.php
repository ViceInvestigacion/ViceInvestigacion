<?php
require_once "../../../config/PHPMailer/PHPMailerAutoload.php";
$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML();
$mail->Username='riverasantiagobrayan@gmail.com';
$mail->Password='74306051';
$mail->SetFrom('no-reply@howcode.org');
$mail->Subject='Hello World';
$mail->Body='A test email';
$mail->AddAddress('roviseis@gmail.com');
$mail->Send();


?>