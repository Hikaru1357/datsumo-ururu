<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require 'form.php';
session_start();
// exit;
$subject = "カスタマーメール";
$body = "ホームページからお問い合わせがありました。";

$body2 = makeBody($form);
if(empty($body2)) {
    header("Location: /datsumo-ururu/otoiawase.php");
    exit;
}
$body .= $body2;

$from = "raamin0908@gmail.com";
$smtp_user = "raamin0908@gmail.com";
$smtp_password = "1997WbMewzjb98";

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $smtp_user;                     // SMTP username
    $mail->Password   = $smtp_password;                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->Encoding = "base64";
    $mail->CharSet = "utf-8";

    //Recipients
    $mail->setFrom('raamin0908@gmail.com');
    $mail->addAddress('raamin0908@gmail.com');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    // $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    $_SESSION = [];
    header("Location:../otoiawase-done.php");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


function makeBody($form) {
    foreach($_REQUEST as $key => $value) {
        if(!empty($value)) {
            $body .= $form[$key]['namejp'] . ":" . $value;
        }
    }
    return $body;
}
