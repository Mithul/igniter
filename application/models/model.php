<?php
	class Model extends CI_Model
	{
		function login($user ,$password)
		{	
			$result=$this->mongo_db->get_where('login', array('username' => $user,'password'=> $password ));
			if($result)
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