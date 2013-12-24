<!DOCTYPE HTML>
<html>
	<head>
	<p align="center">
		<title>K! Students Portal</title>
	</p>
	</head>
	<body>
		<?php echo form_open('Logincheck');?>
		<form name="Login" action="" method="POST">
		<table align="center">
		<tr>
			<td>Username : </td>
			<td><input type="text" align="center" name="user"></td>
		<br>
		</tr>
		<tr>
			<align="centre">
			<td>Password : </td><td><input type="password" align="center" name="password"></td>
			<br>
			<br>
		</tr>
		<tr>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<td><input type="submit" value="Login"></td>
		</tr>
		</table>
		</form>
	</body>
</html>