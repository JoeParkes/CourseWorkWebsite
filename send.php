<?php

$name = $_POST['email'];
$name = $_POST['drop'];
$name = $_POST['message']

$to = "joeparkes@hotmail.com";
$subject = "Email Request from site user of joeparkes.com"
$body = "This is an automated message, don't reply to this message. \n \n $request";

mail($to,$subject,$body);

echo "Message Sent, <a href='index.html'> Click here </a> to visit the homepage";