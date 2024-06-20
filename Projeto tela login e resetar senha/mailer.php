<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/vendor/autoload.php";

$mail = new PHPMailer(true);

// Configuração do servidor SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; // Servidor SMTP do Gmail
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->Username = "your-email@gmail.com"; // Seu endereço de email Gmail
$mail->Password = "your-email-password"; // Sua senha de email Gmail

// Ativar debug para desenvolvimento
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

// Definindo o formato HTML para o email
$mail->isHTML(true);

return $mail;
