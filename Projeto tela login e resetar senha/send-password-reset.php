<?php

require 'vendor/autoload.php';

use SendGrid\Mail\Mail;

// Obtenha o email do formulário de recuperação de senha
$userEmail = $_POST["email"];

// Gere um token de redefinição de senha
$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);
$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

// Conecte-se ao banco de dados e atualize a tabela de usuários com o token e o prazo de validade
$mysqli = require __DIR__ . "/database.php";
$sql = "UPDATE user SET reset_token_hash = ?, reset_token_expires_at = ? WHERE email = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $token_hash, $expiry, $userEmail);
$stmt->execute();

// Verifique se o usuário foi encontrado e o token atualizado
if ($mysqli->affected_rows) {
    // Configurar o email
    $email = new Mail();
    $email->setFrom("YOUR_EMAIL", "Your App Name");
    $email->setSubject("Password Reset Request");
    $email->addTo($userEmail);
    $email->addContent(
        "text/html",
        "Click <a href='http://yourdomain.com/reset-password.php?token=$token'>here</a> to reset your password."
    );

    // Enviar o email

    $sendgrid = new \SendGrid('YOUR_SENDRID_API_KEY');

    try {
        $response = $sendgrid->send($email);
        print_r($response); // Printar a resposta completa do SendGrid
        if ($response->statusCode() == 202) {
            echo "Email sent successfully. Please check your inbox.";
        } else {
            echo "Failed to send email. Response: " . $response->body();
        }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
} else {
    echo "No user found with that email address.";
}

?>
