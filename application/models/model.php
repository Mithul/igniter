<?php
	class Model extends CI_Model
	{
		function login($user ,$password)
		{	
			$result=$this->mongo_db->get_where('user', array('email' => $user,'pass'=> $password ));
			
			echo $user;
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
