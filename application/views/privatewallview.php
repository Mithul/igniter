<?php
   if(!isset($_SESSION['usr']))
      session_start();
   if(isset($_SESSION['usr']))
{
      $username=$_SESSION['usr'];
}
   else
       $username="Anonymous";
?>
<!DOCTYPE html>
<html lang="en">
	<link href="/igniter/assets/css/bootstrap.css" rel="stylesheet">
	<head>
		<title><?php echo $username; ?></title>
		<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="/igniter/assets/css/bootstrap.css"/>
<script type="text/javascript" src="/igniter/assets/js/bootstrap.min	.js"></script>
<script type="text/javascript">
    //<![CDATA[

    var tabLinks = new Array();
    var contentDivs = new Array();

    function init() {

      // Grab the tab links and content divs from the page
      var tabListItems = document.getElementById('tabs').childNodes;
      for ( var i = 0; i < tabListItems.length; i++ ) {
        if ( tabListItems[i].nodeName == "LI" ) {
          var tabLink = getFirstChildWithTagName( tabListItems[i], 'A' );
          var id = getHash( tabLink.getAttribute('href') );
          tabLinks[id] = tabLink;
          contentDivs[id] = document.getElementById( id );
        }
      }

      // Assign onclick events to the tab links, and
      // highlight the first tab
      var i = 0;

      for ( var id in tabLinks ) {
        tabLinks[id].onclick = showTab;
        tabLinks[id].onfocus = function() { this.blur() };
        if ( i == 0 ) tabLinks[id].className = 'selected';
        i++;
      }

      // Hide all content divs except the first
      var i = 0;

      for ( var id in contentDivs ) {
        if ( i != 0 ) contentDivs[id].className = 'tabContent hide';
        i++;
      }
    }

    function showTab() {
      var selectedId = getHash( this.getAttribute('href') );

      // Highlight the selected tab, and dim all others.
      // Also show the selected content div, and hide all others.
      for ( var id in contentDivs ) {
        if ( id == selectedId ) {
          tabLinks[id].className = 'selected';
          contentDivs[id].className = 'tabContent';
        } else {
          tabLinks[id].className = '';
          contentDivs[id].className = 'tabContent hide';
        }
      }

      // Stop the browser following the link
      return false;
    }

    function getFirstChildWithTagName( element, tagName ) {
      for ( var i = 0; i < element.childNodes.length; i++ ) {
        if ( element.childNodes[i].nodeName == tagName ) return element.childNodes[i];
      }
    }

    function getHash( url ) {
      var hashPos = url.lastIndexOf ( '#' );
      return url.substring( hashPos + 1 );
    }

$(function(){

    $(".dropdown-toggle").dropdown();

});  
 
    //]]>
    </script>
   </head>
	<body color="WHITE" onload="init()">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="navbar-inner">
<div class="container">
        			<a class="navbar-brand" href="http://www.kurukshetra.org.in"><h2>K! Student Portal</h2></a>

			<ul id="tabs" class="nav pull-left">
            			<li><a href="#about">My Status</a></li>
            			<li><a href="#general">Public Status</a></li>
            		</ul>
<!--              
<ul class="nav pull-right">
<li><font face="monotype corsiva" align="right" size="4" color="white">Hi <?php echo $username; ?></font></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a  href="welcome/logout">Logout &raquo;</a></li>
</ul>
</li>
</ul>
//-->

   						<div class="pull-right" >
						<table align="RIGHT">
							<tr>
								<td>
									<br>
								<font face="monotype corsiva" align="right" size="4" color="white">Hi <?php echo $username; ?>,</font>
								</td>
							</tr>
							<tr><td></td></tr>
							<tr>
								<td><a class="btn btn-primary btn-lg" role="button" href="welcome/logout">Logout &raquo;</a></p>
							</tr>
						</table>
   					</div>

   				</div>
   			</div>

   		</div>
   		<div>
   			<br><br><br>
   			<br>
   			<br>
            &nbsp;&nbsp;&nbsp;
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
         
      <div class="tabContent" id="about">
      <div>
         <?php
         
         $db = new Mongo();
         $query = $this->mongo_db->get_where('post',array('username'=>$_SESSION['usr']));
	$query=array_reverse($query);
         echo '<pre>';
         foreach ($query as $current)
         {
              echo "<b>".$current['username']."</b>"." : ";
            echo $current['status']."\n";
?>
<?PHP echo form_open('deletestatus'); ?>
<form name="status" action="" method ="post">
<input Type="text" value=<?php echo $current['_id'];?> name="_id" hidden />
<button type="submit" class="btn btn-lg btn-default btn-sm">Delete</button>
</form>
<?php
		date_default_timezone_set('UTC');
            echo date('h:i:s m/d/y ',$current['time']->sec);
            echo "<br>\n";
         }
         echo '</pre>';
         ?>
      </div>
    </div>
      <div class="tabCon tent" id="general">
      <div>
   	<?php
		$db=new Mongo();
		$query=$db->kdb->post->find();
		$query->sort(array("time" => -1));
		echo '<pre>';
		foreach($query as $current)
		{
			//echo '<pre>';
			echo "<b>".$current['username']."</b>"." : ";
			echo $current['status']."\n";
date_default_timezone_set('UTC');
         echo date('h:i:s m/d/y ',$current['time']->sec);
         echo "<br>\n";
			//echo '</pre>';
      }
      echo '</pre>';
   ?>
   </div>
   </div>
   <script src="/igniter/assets/js/jquery.js"></script>  
   <script src="/igniter/assets/js/bootstrap-alert.js"></script>  
	</body>
</html>	
