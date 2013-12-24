<html lang="en">
 <link href="/igniter/assets/css/bootstrap.css" rel="stylesheet">
<head>
	<meta charset="utf-8">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" float="left">
	<div class="container">
		<div class="navbar-header"> 
        <a class="navbar-brand" href="#"><h3>K! student Portal</h3></a>
   		</div>
   	</div>
</div> 
<br/><br/><br/><br/><br/><br/>
<div class="container">
		<?php echo form_open('logincheck'); ?>
		<?php if(isset($error)){ ?> 
				<div class="alert alert-error">  
  				<a class="close" data-dismiss="alert">×</a>  
  					<strong>Error! </strong><?php echo $error; ?>  
			</div>  
 		<?php } ?>
      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="username" id="password" class="form-control" placeholder="Username" required autofocus>
        <br/>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login/">Sign in</button>
      </form>

</div>
<script src="/igniter/assets/js/jquery.js"></script>  
<script src="/igniter/assets/js/bootstrap-alert.js"></script>  
</body>
</html>
