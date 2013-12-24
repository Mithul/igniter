<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
<?php
echo 'enter';
echo form_open('login')?>
</head>
<body>
<form>
Email:
<input type="text" method="POST" id="username" name="usr_email"  />
Password:
<input type="password" id="password" name="usr_password" />  
<input  name="submitForm" id="submitForm" type="submit" value="Login" />
</form>
</body>
</html>
