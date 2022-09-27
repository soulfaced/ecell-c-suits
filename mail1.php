<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'vendor/autoload.php'; 

$mail = new PHPMailer(true); 

try { 
	//$mail->SMTPDebug = 2;									 
	$mail->isSMTP();											 
	$mail->Host	 = 'ssl://sharedlinux.cloudhostdns.net';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'piyushagrawal010@gmail.com';				 
	$mail->Password = 'Agrawal@1998';						 
	$mail->SMTPSecure = 'ssl';							 
	$mail->Port	 = 465; 

	$mail->setFrom('piyushagrawal010@gmail.com', 'Piyush');		 
	$mail->addAddress('1raunakagrawal@gmail.com'); 
	//$mail->addAddress('receiver2@gfg.com', 'Name'); 
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Subject'; 
	$mail->Body = 'HTML message body in <b>bold</b> '; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 

?> 
