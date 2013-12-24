<?php
		if(isset($_SESSION['usr']))
		{
			$this->load->view('privatewallview');
			exit;
		}
?>
<!DOCTYPE html>
<html lang="en">
	<link href="/igniter/assets/css/bootstrap.css" rel="stylesheet">
	<head>
		<title> Login </title>
		<meta charset="utf-8">
	</head>
	<body color="WHITE">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" float="left">
			<div class="container">
				<div class="navbar-header"> 
        			<a class="navbar-brand" href="http://www.kurukshetra.org.in"><h2>K! Student Portal</h2></a>
   					<div class="container"> 
					<?php echo form_open('newlogincheck');?>
					<form name="Login" action="" method="POST">
					<table align="RIGHT">
					<br>
					<tr>
						<td><font color="WHITE" face="TIMES NEW ROMAN">Username : </font></td>
						<td><font color="WHITE" face="TIMES NEW ROMAN">Password : </font></td>
					</tr>
					<tr>
						<td><input type="TEXT" name="user" id="user" class="form-control" placeholder="Username" required autofocus></td>
						<td><input type="PASSWORD" name="pass" id="pass" class="form-control" placeholder="Password"></td>
						<td>
							&nbsp;&nbsp;&nbsp;
						<button type="submit" class="btn btn-lg btn-primary btn-sm">Login</button>
						</td>
					</tr>
					</table>
					</form>
   					</div>
   				</div>
			</div>
		</div>	
		</body>
	<body>
		<img src="/igniter/assets/images/robot.jpg" width="1400px" height="600px" />
	</body>
</html>
