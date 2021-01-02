<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML Email Test</title>
<style type="text/css">
body {font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#555; background-color:#fdfdfd; margin:0; padding:25px 0 0 100px;}
label {font-weight:bold; margin:0 0 5px; display:inline-block;}
textarea {-webkit-border-radius:3px; -moz-border-radius:3px;  border-radius:3px; -webkit-box-shadow: #666 0px 0px 5px; border:1px solid #d3d3d3; background-color:#fff; padding:5px;}
</style>
</head>

<body>
<p>&nbsp;</p>
<form action="process.php" method="post">
<p><label>Enter Email HTML</label><br />
<textarea cols="50" rows="10" name="code" ><?php echo $code; ?></textarea></p>
<p><input type="submit" value="submit" name="submit" /></p>
</form>
</body>
</html>