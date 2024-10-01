<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //Configurações do servidor
    $mail->SMTPDebug = SMTP::DEBUG_OFF;  // Desative o debug para produção
    $mail->isSMTP(); // Enviar via SMTP
    $mail->Host = gethostbyname('smtp.gmail.com'); // SMTP IPv4
    $mail->SMTPAuth = true;
    $mail->Username = getenv('MAIL_USERNAME'); // Coloque aqui a variável de ambiente
    $mail->Password = getenv('MAIL_PASSWORD'); // Coloque aqui a variável de ambiente
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465; // Porta para TLS implícito (SMTPS)

    //Destinatários
    $mail->setFrom('italocruz544@gmail.com', 'italo');
    $mail->addAddress('italouco10@gmail.com', 'italo');

    //Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Aqui está o assunto';
    $mail->Body    = 'Este é o corpo da mensagem em <b>HTML!</b>';
    $mail->AltBody = 'Este é o corpo em texto simples para clientes de e-mail sem suporte a HTML.';

    //Enviar e verificar
    $mail->send();
    echo 'Mensagem enviada com sucesso!';
} catch (Exception $e) {
    echo "A mensagem não pôde ser enviada. Erro do Mailer: {$mail->ErrorInfo}";
}
