<?php
	class Frontpagemodel extends CI_Model
	{
		function login($user ,$password)
		{
			if($user=="Pradeep" && $password=="123")
			{
				return True;
			}
			else
			{
				return False;
			}
		}
	}
?>