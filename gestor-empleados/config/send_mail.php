<?php
// Incluir el archivo autoload de Composer
require '../vendor/autoload.php';

// Importar las clases de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Crear una nueva instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Cambia esto según tu proveedor de correo (ej. smtp.mailtrap.io)
    $mail->SMTPAuth   = true;
    $mail->Username   = 'tuemail@gmail.com'; // Tu correo electrónico
    $mail->Password   = 'tupassword'; // Tu contraseña de correo
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465; // Puerto para SSL

    // Configuración del remitente
    $mail->setFrom('tuemail@gmail.com', 'Tu Nombre');
    $mail->addAddress('destinatario@example.com', 'Destinatario'); // Correo del destinatario

    // Contenido del correo
    $mail->isHTML(true); // Establecer el correo en formato HTML
    $mail->Subject = 'Correo de prueba desde PHP';
    $mail->Body    = 'Este es un mensaje de prueba enviado desde <b>PHPMailer</b>.';
    $mail->AltBody = 'Este es un mensaje de prueba en texto plano.';

    // Enviar el correo
    $mail->send();
    echo 'El correo se ha enviado correctamente.';
} catch (Exception $e) {
    echo "No se pudo enviar el correo. Error: {$mail->ErrorInfo}";
}
?>
