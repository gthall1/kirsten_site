<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$formcontent="First Name: $fname \r\n Last Name: $lname \r\n Email: $email \r\n Subject: $subject  \r\n Message: $message";
$recipient = "kirstensweetland@gmail.com";
$subject = "** Coaching Website Inquiry **";
$mailheader = "From: griff@brodcast.co \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");


header("Location: thanks.html");

?>