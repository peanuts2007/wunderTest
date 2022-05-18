<?php

$response = '';

if (isset( $_POST['name'],$_POST['surname'],$_POST['email'],$_POST['message'] )) {
	

    $name  = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to      = 'wian.bouwer@cartrack.com';
	$from    = $email;
	
	$subject = 'Email has been sent ';
	
	$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'Return-Path: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
	
	ob_start();
	include 'email-template.php';
	$email_template = ob_get_clean();
	
	if (mail($to, $subject, $email_template, $headers)) {
		
		$response = '<h3>Thank You!</h3><p>With your help, we can improve our services for all our trusted members.</p>';		
	} else {
		
		
		$response = '<h3>Error!</h3><p>Message could not be sent! Please check your mail server settings!</a>';
	}
}

?>
