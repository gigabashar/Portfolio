<?php
if(!isset($_POST['sumbit'])) {
    echo "error, you need to submit the form";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

// Validate first
if(empty($name)|| empty($visitor_email)){
    echo "Name and email are mandatory";
    exit;
}

$email_form = "basharuligiga@gmail.com";
$email_subject = "Email from portfolio website";
$email_body = "email address : $visitor_email\n".
              "Here is the message: \n $message".

$to = "basharuligiga@gmail.com";
$headers = "From: $email_from \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers)
or die ("Error");

echo "Message sent";


?>