<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/Exception.php';
require './phpmailer/PHPMailer.php';
require './phpmailer/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->SMTPDebug = 4;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; 
$mail->Host = 'mail.example.co.ke'; //eg stmp.gmail.com for gmail emails
$mail->Port = 465;  
$mail->Username = 'email_sending_message@gmail.com'; 
$mail->Password = 'password to the email';   

$path = 'path to attachment';  //if there is any attachment( picture or document)
$mail->AddAttachment($path);

$mail->IsHTML(true);
$mail->setFrom("kwanza@gmail.com", "Sender Name"); // eg kwanza@gmail.com, Kwanza
$mail->addAddress('');  //email to receive the message
$mail->AddReplyTo(""); //email where a reply can be sent
$mail->isHTML(true);
$mail->Subject = "email subject";
$mail->Body = "email body";
	
	if(!$mail->Send())
	{
		echo "
			<script>alert('Please try Later, Error Occured while Processing...!')
			</script>
				";	
	}
	else 
	{
		echo "
			<script>alert('email has been sent!')
			</script>
				";  		
	}
?>