<?php
// error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
// error_reporting(1);
require_once('cors.php');
require_once ('mail-config.php');

// reference PHPPEAR
set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . 
"/php" . PATH_SEPARATOR . get_include_path());
require_once "Mail.php";


// grap data from payload and initialize vars
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);

//Server settings
$names = htmlspecialchars($data->name);
$from = htmlspecialchars($data->email);
$subject = htmlspecialchars($data->subject);
$message = htmlspecialchars($data->message);
$phone_number= htmlspecialchars($data->mobile);
$date = htmlspecialchars($data->date);
$subject = "Demo Request";

$actual_date = date('d M Y h:i', strtotime($date));

$email_body = $names." would like to request for a demo on ".$actual_date.".".
"\n\nFor any enquiry reach ".$names." though this number: ".$phone_number.".".
"\n\n\nNote: ".$message.
"\n\nThank you.";

$names_arr = explode(" ", $names);

$headers = array('From' => $names_arr[0], 'To' => $to, 'Subject' => $subject,'Cc'=> $bcc,'Reply-To' => $from);


$smtp = Mail::factory('smtp', array ('host' => $host, 
				'port' => $port, 'auth' => true, 'username' => $username, 
				'password' => $password, 'secure' => $secure, 'HTML' => true));


$mail = $smtp->send($receipient, $headers, $email_body);

if(PEAR::isError($mail)) {
	echo "Error sending your message. Please try again!";
}
else{
	echo "Message successfuly sent";

	$Response = "Your Request Was Received";

	$response_body = "Hello ".$names.",".
					"\nYour request was well received".
                    "\nWe will get back to you ASAP".
					"\n\nFrom Us".
					"\nEzen Partners Team";
	$header = array ('From' => "Ezen Partners Ltd<".$to.">", 'To' => $from, 'Subject' => $Response, 'Reply-To' => $to);

    $auto_respond = $smtp->send($from, $header, $response_body);
    

	if(PEAR::isError($auto_respond)){
	// 	echo "unable to auto-respond because: " . $auto_respond->getMessage();
	}
	else
	{
        // echo "message successfully sent!";
	}
}
?>