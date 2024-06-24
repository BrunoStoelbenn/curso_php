<!--

    SISTEMA DE RECUPERAÇÃO DE SENHA ATRAVÉS DO EMAIL DO USUÁRIO.
    PARA ESSE SISTEMA FUNCIONAR, VOCÊ PRIMEIRO DEVE INSTALAR O 
    COMPOSER NO COMPUTADOR através do link: https://getcomposer.org/download/.
    CLICAR NO "Composer-Setup.exe".
    DEPOIS, RODAR O COMANDO "composer require sendgrid/sendgrid" no terminal
    do vscode.
    FUNCIONAMENTO DO SISTEMA:
    Um email é enviado ao usuário contendo um link para redefinir a senha.
    O site usado para fazer esse processo é o sendgrid.
    O email precisa estar cadastrado no banco de dados.
    Caso não esteja, o usuário vai ser redirecionado para a página forgot-password
    e terá que informar um email de novo.
-->

<?php

require 'vendor/autoload.php';

use SendGrid\Mail\Mail;

// Obtenha o email do formulário de recuperação de senha
$userEmail = $_POST["email"];

// Gere um token de redefinição de senha
$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);
$expiry = date("Y-m-d H:i:s", time() + 60 * 30);  //  O link de resetar senha terá a validade de 30 minutos.

// Conecte-se ao banco de dados e atualize a tabela de usuários com o token e o prazo de validade
$mysqli = require __DIR__ . "/database.php";
$sql = "UPDATE user SET reset_token_hash = ?, reset_token_expires_at = ? WHERE email = ?";  //  Mudar essa query conforme o seu banco de dados
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $token_hash, $expiry, $userEmail);
$stmt->execute();

// Verifique se o usuário foi encontrado e o token atualizado
if ($mysqli->affected_rows) {
    // Configurar o email
    $email = new Mail();
    $email->setFrom("Your_Email", "Suporte Focel");  //  Aqui é o email que vai enviar a requisição
    $email->setSubject("Password Reset Request");  //  Assunto do email
    $email->addTo($userEmail);  //  email do destinatário que foi pego através de um __$POST["email"] no início do código
    $email->addContent(  //  Conteúdo que vai aparecer no email, nesse caso vai ser "Click here to reset your password"
        "text/html",
        "Click <a href='http://localhost/curso_php/Projeto%20tela%20login%20e%20resetar%20senha/reset-password.php?token=$token'>here</a> to reset your password."
    );

    // Enviar o email
    $sendgrid = new \SendGrid('Your_SendGrid_APIKEY');  //  Chave API do SendGrid

    try {
        $response = $sendgrid->send($email);
        if ($response->statusCode() == 202) {
            echo "Email sent successfully. Please check your inbox.";
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "login.php";
                    }, 4000);
                  </script>';
        } else {
            echo "Failed to send email. Response: " . $response->body();
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "forgot-password.php";
                    }, 4000);
                  </script>';
        }
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
} 
  //  Se o email que o usuário digitou não foi encontrado no banco de dados, é impressa a mensagem "No user found with that email address" e o usuário é redirecionado para a página forgot-password de novo.
else {
    echo "No user found with that email address.";
    echo '<script>
            setTimeout(function() {
                window.location.href = "forgot-password.php";
            }, 4000);
          </script>';
}
?>
