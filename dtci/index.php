<?php
$to = 'jw@jaydoubleyoo.com,'; 
$to .= 'jason.a.white@disney.com';
$from = 'jw@jaydoubleyoo.com'; 
 
$subject = "Quantified Email Test"; 
 
$htmlContent = file_get_contents("new.html");

 
// Set content-type header for sending HTML email  

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}
?>