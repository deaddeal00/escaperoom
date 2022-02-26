<?php
if(!empty($_POST["send"])) {
	$name = $_POST["firstName"];
	$name2 = $_POST["secondname"];
	$date = $_POST["date"];
	$time = $_POST["time"];

	$toEmail = "sreejithn875@pgmail.com";
	$mailHeaders = "From: " . $name . "<". $name2 .">\r\n";
	if(mail($toEmail, $date, $time, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>