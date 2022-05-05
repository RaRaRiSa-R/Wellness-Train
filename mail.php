<?php
//get data from form  
$name = $_POST['yourname'];
$email= $_POST['email'];
$message= $_POST['wid'];
$to = "itsabtu.rs@gmail.com";
$subject = "Mail From ".$name;
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
// $headers = "From: noreply@yoursite.com" . "\r\n" .
// "CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt);
}
//redirect
//header("Location:thankyou.html");
?>