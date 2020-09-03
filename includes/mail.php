<?php
$nombre= $_POST['name'];
$email= $_POST['email'];
$mensaje = $_POST['message'];
$headers= "De: ".$nombre."<br>"."Email: ".$email ."<br>"."Mensaje: ".$mensaje ."<br>";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {       
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'cittccp@gmail.com';                     // SMTP username
    $mail->Password   = 'Wacoldo123';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('cittccp@gmail.com', 'El Tronador' );
    $mail->addAddress('cittccp@gmail.com');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contacto El tronador';
    $mail->Body    = $headers;

    $mail->send();
} catch (Exception $e) {
}

$mail = "";
$mail = new PHPMailer(true);
try {
    //Server settings       
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'cittccp@gmail.com';                     // SMTP username
    $mail->Password   = 'Wacoldo123';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, 'Contacto El tronador');
    $mail->addAddress($email);     

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Contacto El tronador';
    $mail->Body    = 'Muchas gracias por comunicarse con nosotros. <br> Personal de nuestro equipo se comunicará contigo en breve<br><br><br><br>Atte '.'<br>El tronador' ;

    $mail->send();
} catch (Exception $e) {   
}

echo "<script>
alert('Mensaje enviado con exito');
window.location= '../index.php'
</script>";
?>