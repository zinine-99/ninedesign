<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$EmailTo = "sendtoabdulaziz@gmail.com";
$Title = "New Message Received from nine design";

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Title,  $Fields, "From:".$email);

