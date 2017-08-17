<?php
require 'PHPMailer/PHPMailerAutoload.php';
//echo !extension_loaded('openssl')?"Not Available":"Available"."<br>";

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
$mail->Host = "smtp.gmail.com"; 
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'username';      // SMTP username
$mail->Password = 'password';                        // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'sanjeet07.kumar07@gmail.com';
$mail->FromName = 'Mailer';
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('sanjeet07.kumar07@gmail.com');               // Name is optional

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>