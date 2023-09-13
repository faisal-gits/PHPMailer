<?php
require_once "PHP-class/PHPMailerAutoload.php";

$mail = new PHPMailer;
$mail->setFrom('from@email.com'); // From Email
$mail->addAddress('to@email.com'); // To Email
$mail->Subject = "Email Subject";
$mail->Body = 'Email Body';
$mail->IsSMTP();
$mail->SMTPDebug = 2; // Enable debugging (you can remove this in production)
$mail->SMTPSecure = 'ssl'; // Use 'ssl' or 'tls'
$mail->Host = 'yourhostsite.com'; // Your SMTP server hostname
$mail->SMTPAuth = true;
$mail->Port = 465; // SMTP port for SSL
$mail->Username = 'from@email.com'; // Your Email ID
$mail->Password = "xxxxxxx"; // Your Password
$mail->IsHTML(true);

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>
