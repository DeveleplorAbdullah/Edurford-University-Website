<?php
if(!empty($_POST["send"])) {
	$userName = $_POST["name"];
  $userEmail = $_POST["email"];
	$userSubject = $_POST["subject"];
	$userMessage = $_POST["message"];
	$toEmail = "abdullahuseynli12@gmail.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n User Subject: ". $userSubject  . 
	"\r\n User Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>