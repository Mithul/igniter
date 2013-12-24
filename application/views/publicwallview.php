<?php
   if(!isset($_SESSION['usr']))
      session_start();
   if(isset($_SESSION['usr']))
      $username=$_SESSION['usr'];
   else
       $username="Anonymous";
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
   						<?php echo form_open('Logout');?>
					<form name="Logout" action="" method="POST">
						<table align="RIGHT">
							<tr>
								<td>
									<br>
								<font face="monotype corsiva" align="right" size="4" color="white">Hi <?php echo $username; ?>,</font>
								</td>
							</tr>
							<tr><td></td></tr>
							<tr>
								<td><button type="submit" class="btn btn-lg btn-default btn-xs">Logout</button></td>
							</tr>
						</table>
					</form>
   					</div> 
   				</div>
   			</div>
   		</div>
   		<div>
   			<br><br><br>
   			<br>
   			<br>

   			<center>
   			<?PHP echo form_open('putstatus'); ?>	
   			<form name="status" action="" method ="post">
   			<table align="center">
   				<tr>
   					<td><br><h3>Enter Your Status Here :</h3>
   				</td>
   				</tr>
   				<tr>
   				<td>
   				<style>
   					textarea 
   					{
    					resize: none;
					    }

					</style>
                     <input Type="text" value=<?php echo $username;?> name="user" hidden />
      					<textarea type="Text" class="form-control" rows="3" cols="100" name="status" required="required"></textarea>
   				</td>
   				<td>
   					&nbsp;&nbsp;&nbsp;&nbsp;
   					<button type="submit" class="btn btn-lg btn-default btn-sm">Post</button>
   				</td>
   				</tr>
   			</table>
   			</form>
   			</center>
   		</div>
   		<br><br>
   	<?php
		$db=new Mongo();
		$query=$db->kdb->post->find()
		$query->sort(array("time" => -1));
		echo '<pre>';
		foreach($query as $current)
		{
			echo '<pre>';
			echo "<b>".$current['username']."</b>"." : ";
			echo $current['status']."\n";
         echo $current['time']."\n";
			echo '</pre>';
		}
		
   ?>
	</body>
</html>	
