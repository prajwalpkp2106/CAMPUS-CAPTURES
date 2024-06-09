<?php
$receiver = "$email";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, there...This is a test email send from Localhost.";
$sender = "From:campuscaptureshelp@gmail.com";

if(mail($receiver, $subject, $body, $sender)){//php function send mail 
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>