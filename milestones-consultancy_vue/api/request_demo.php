<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST,OPTIONS');

header("Access-Control-Allow-Headers:Origin, X-Requested-With,Content-Type, Accept");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    // Takes raw data from the request
    $json = file_get_contents('php://input');

    // Converts it into a PHP object
    $data = json_decode($json);
    var_dump($data);
    //code...
    //Server settings
    $names = htmlspecialchars($data->name);
    $from = htmlspecialchars($data->email);
    $subject = htmlspecialchars($data->subject);
    $message = htmlspecialchars($data->message);
    $phone_number= htmlspecialchars($data->mobile);
    $date = htmlspecialchars($data->date);

     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'mail.ezenfinancials.com';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'enquiry@ezenfinancials.com';                     //SMTP username
     $mail->Password   = 'Shifu123#@!';                               //SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
     
     $body = $message."<br>". "<strong>Suggested Date</strong>: ".$date."<br><strong>Contact Number: </strong>".$phone_number;
     //Recipients
     $mail->setFrom($from, $names);
     #$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
     #$mail->addAddress('ellen@example.com');               //Name is optional
     $mail->addReplyTo($from, $names);
     $mail->addCC('cynthia.njoki@ezenfinancials.com');
     $mail->addCC('patricia.njeri@ezenfinancials.com');
     $mail->addBCC('info@ezenfinancials.com',"Enquiry");
 
     //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
 
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = "Demo Request From ".$names;
     $mail->Body    = $body;
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
     $mail->send();
     echo 'Message has been sent';
} catch (\Throwable $th) {
    //throw $th;
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}