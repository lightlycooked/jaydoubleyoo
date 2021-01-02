<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML Email Test</title>
<style type="text/css">
body {font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#555; background-color:#DEEFF6; margin:0;}
label {font-weight:bold; margin:0 auto; display:block; width:90%; color:#659DBD; }
form {display:block; margin:0; padding:0; overflow:hidden;}
textarea {-webkit-border-radius:3px; -moz-border-radius:3px;  border-radius:3px; border:1px solid #efefef; background-color:#fff; padding:5px; width:90%; height:150px; margin:0 auto; display:block;}
#container {-webkit-border-radius:5px;-moz-border-radius:5px; border-radius:5px; position:relative; left:0; top:0; margin:0px; padding:0; overflow:hidden; width:500px; height:auto;  -webkit-box-shadow:0 1px 5px #CDDDE4; -moz-box-shadow:0 1px 5px #CDDDE4;box-shadow:0 1px 5px #CDDDE4; background:#fff;}

#submit {display:block; margin:0 auto; background: #a7c7da; border:0 none; background: -moz-linear-gradient(#f4f4f4, #a7c7da);  color:#116296; text-align:center;  border-radius:3px;-webkit-border-radius:3px; -moz-border-radius:20px; padding:4px 15px 5px; font-weight:bold; text-shadow:0 1px 0 #fff; -webkit-text-shadow:0 1px 0 #fff; -moz-text-shadow:0 1px 0 #fff;  box-shadow:0 1px 2px #CDDDE4; -webkit-box-shadow:0 1px 2px #CDDDE4; -moz-box-shadow:0 1px 2px #CDDDE4;}

.message { -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;font-weight:bold; margin:10px auto; overflow:hidden; padding:10px 0; position:relative; width:93%; }

.message p { display:inline-block; float:left; margin:0 0 0 40px; padding:0; width:100%; }

.message.success { background:url("images/success.gif") no-repeat scroll 12px 12px #EDFBD8; border:1px solid #BFDE84; color:#508600; }

.message.errormsg { background:url("images/error.gif") no-repeat scroll 12px 12px #FFECCE; border:1px solid #E9C59B; color:#E3302C; }

.message .close { background:url("images/close.png") no-repeat scroll 0 0 transparent; cursor:pointer; display:block; float:right; height:16px; margin:0 10px 0 0; opacity:0.7; position:absolute; right:0; top:12px; width:16px; }
</style>
</head>

<body>
<div id="container">
<?php

if (isset($_POST['submitted'])) {

// Validate the email address:
	if (!empty($_POST['code'])) {
		$c = $_POST['code'];
	} else {
		$c = FALSE;
echo '<div class="message errormsg"><p>Error!</p></div>';
	}
	
	if ($c) {
	
$from = 'jw@jaydoubleyoo.com';
$to = 'jwhite@lightlycooked.com,';
$to .= 'jason.a.white@disney.com,';
$subject = 'Quantitfied Email Test'; //change subject line 
$msg = stripslashes(stripslashes(urldecode($_REQUEST['code'])));

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
// $message  = '<html><body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">';
$message = $msg;
// $message .= '</body></html>';

mail($to, $subject, $message, $headers);
echo '<div class="message success"><p>Success!</p></div>';
}

}
?>

<form action="index.php" method="post">
<p><label>Enter Email HTML</label></p>
<p><textarea cols="50" rows="10" name="code" ><?php echo $code; ?></textarea></p>
<p><input id="submit" type="submit" value="Send Email" name="submit" /></p>
<input name="submitted" id="submitted" type="hidden" />
</form>

</div>

</body>
</html>