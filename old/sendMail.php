<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
$data = json_decode(file_get_contents('php://input'), true);
// print_r($data);

$name = $data['name'];
$email = $data['email'];
$mob_no = $data['mob_no'];
$start_date = $data['start_date'];
$end_date = $data['end_date'];

$message = [];


use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rapiduplifter@gmail.com';                     //SMTP username
    $mail->Password   = 'mK3O30DoIL3cc';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('rapiduplifter@gmail.com', 'Rapid Uplifter');
    $mail->addAddress($email);     //Add a recipient
    // $mail->addAddress('rapiduplifter@gmail.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('rapiduplifter@gmail.com');
    $mail->addBCC('rapiduplifter@gmail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML

    $mail->Subject = 'Rapid Uplifter Avail this offer !!!';

    $mail->Body    = '<div style="padding:10px;border:2px solid green;margin:10px;width:300px;text-align:center">';
    $mail->Body    .= '<p style="padding: 10px;text-align:center;color:green;background-color:#ffbb99;"><b>Rapid Uplifter - Availing Offer!!!</b></p>';
    $mail->Body    .= '<div style="text-align:justify;">';
    $mail->Body    .= '<b style="padding:10px;">Name&emsp;&emsp;&emsp;:</b>&nbsp;<span>' . $name . '</span><br>';
    $mail->Body    .= '<b style="padding:10px;">Email&nbsp;&emsp;&emsp;&emsp;:</b>&nbsp;<span>' . $email . '</span><br>';
    $mail->Body    .= '<b style="padding:10px;">Mobile&nbsp;&nbsp;&nbsp;&emsp;&emsp;:</b>&nbsp;<span>' . $mob_no . '</span><br>';
    $mail->Body    .= '<b style="padding:10px;">Start Date&nbsp;&emsp;:</b>&nbsp;<span>' . $start_date . '</span><br>';
    $mail->Body    .= '<b style="padding:10px;">End Date&nbsp;&nbsp;&nbsp;&emsp;:</b>&nbsp;<span>' . $end_date . '</span><br>';
    $mail->Body    .= '</div>';
    $mail->Body    .= '</div>';

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    // echo 'Message has been sent';
    array_push($message, (object) [
        'message' => 'Message has been sent',
        'status' => 'success',
    ]);
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    array_push($message, (object) [
        'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}",
        'status' => 'error',
    ]);
}

echo json_encode($message);
