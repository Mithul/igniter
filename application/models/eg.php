<?php
	class Eg extends CI_Model
	{
		function login($username , $password)
		{
			if($username == "Mithul")
				{if($password == "Hello")
					return true;}
			else
				return false;
} 
}
?>
