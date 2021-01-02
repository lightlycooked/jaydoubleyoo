<?php
$from = 'jw@jaydoubleyoo.com';
$to = 'jw@jaydoubleyoo.com,'; 
$to = 'jwhite@lightlycooked.com,';
$to .= 'jason.a.white@disney.com,';
$to .= 'lightlycooked@hotmail.com,';
$to .= 'lightlycooked_ceo@yahoo.com';
$subject = 'Testing'; //change subject line 
$msg = stripslashes(stripslashes(urldecode($_REQUEST['code'])));

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = $msg;

mail($to, $subject, $message, $headers);
header ("Location: email.php")
?>