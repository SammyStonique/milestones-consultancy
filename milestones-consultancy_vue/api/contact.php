<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
error_reporting(1);
require_once('cors.php');
require_once ('mail-config.php');

// reference PHPPEAR
set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . 
"/php" . PATH_SEPARATOR . get_include_path());
require_once "Mail.php";


// grap data from payload and initialize vars
$json = file_get_contents('php://input');
$data = json_decode($json);


$names = htmlspecialchars($data->name);
$from = htmlspecialchars($data->email);
$phone_number = htmlspecialchars($data->phone_number);
$message = htmlspecialchars($data->message);
$subject = "Client Request";
$email_body = $message."\nContact me through".$phone_number."\n\n\nKind Regards\n".$names;

// split the fullname into parts
$names_arr = explode(" ", $names);

$headers = array('From' => $names_arr[0], 'To' => $to, 'Subject' => $subject,'Cc'=> $bcc,'Reply-To' => $from);


$smtp = Mail::factory('smtp', array ('host' => $host, 
				'port' => $port, 'auth' => true, 'username' => $username, 
				'password' => $password, 'HTML' => true));
				// 'secure' => $secure,

$mail = $smtp->send($receipient, $headers, $email_body);

if(PEAR::isError($mail)) {
	echo "Error sending your message. Please try again!";
	// .$mail->getMessage();
	// echo json_encode(array("error" => $error));
	
}
else{
	echo "Message successfuly sent";

	$Response = "No-Reply";

	$response_body = "Hello ".$names.",".
					"\nYour request was well received".
                    "\nWe will get back to you ASAP".
					"\n\nFrom Us".
					"\nMilestones Consultancy";
	$header = array ('From' => "Milestones Consultancy<".$to.">", 'To' => $from, 'Subject' => $Response, 'Reply-To' => $to);

    $auto_respond = $smtp->send($from, $header, $response_body);
    

	if(PEAR::isError($auto_respond)){
		// echo "unable to auto-respond because: " . $auto_respond->getMessage();
        
	}
	else
	{
        // echo "message successfully sent!";
	}
}
?>