
<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer\PHPMailer\PHPMailer();

// SMTP Configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'muhammadbilalellahi@gmail.com';
$mail->Password = 'NotUsingRightNow';

// Email content
$mail->setFrom($email, 'Your Name');
$mail->addAddress('muhammadbilalellahi@gmail.com', 'Recipient Name');
$mail->Subject = 'New Form Submission';
$mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

if ($mail->send()) {
    echo 'OK';
} else {
    echo 'Error';
}
