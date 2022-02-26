<?php
//get data from form  

$name = $_POST['name'];
$date= $_POST['date'];
$message= $_POST['message'];
$to = "sreejithn875@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  date = " . $date . "\r\n Message =" . $message;
$headers = "From: sreejiththottuvazhiyil@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
