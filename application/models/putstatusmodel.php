<?php
	class Putstatusmodel extends CI_Model
	{
		function input($status,$username)
		{
			$date= new MongoDate();
			$this->mongo_db->insert('post',array('username' => $username,'status' => $status ,'time'=> $date));
		}
	}
?>