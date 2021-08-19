<?php
//get data from form  
// $name = $_POST['name'];
$email= $_POST['email'];
// $message= $_POST['message'];
// $to = "brandon@kahengroup.com";
$to = "marko@atakinteractive.com";
$subject = "Mail From website";
"\r\n  Email = " . $email .
$headers = "From: noreply@hwisexpert.com/" . "\r\n" .
// "CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject);
}
//redirect
header("Location:thankyou.html");
?>