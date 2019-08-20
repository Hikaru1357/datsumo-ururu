<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require 'form.php';
session_start();
$subject = "カスタマーメール11111";
$body = "ホームページからお問い合わせがありました。";

$body2 = makeBody($form);
if(empty($body2)) {
    header("Location: ./../otoiawase.php");
    exit;
}
$body .= $body2;
//アカウントを変更したいときはここをいじる
$from = "datsumousalon.ururu358@gmail.com";
$smtp_user = "datsumousalon.ururu358@gmail.com";
$smtp_password = "Ururu0315";

// datsumousalon.ururu358@gmail.com
// Ururu0315
//------------------------------------

// raamin0908@gmail.com
// 1997WbMewzjb98

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
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
    $mail->setFrom($smtp_user);
    $mail->addAddress($smtp_user);     // Add a recipient
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
    header("Location:./../otoiawase-done.php");

} catch (Exception $e) {
    header("Location:./../otoiawase.php");
}


function makeBody($form) {
    foreach($_REQUEST as $key => $value) {
        if(!empty($value)) {
            $body .= $form[$key]['namejp'] . " : " . $value . "\r\n";
        }
    }
    return $body;
}
