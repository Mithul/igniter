<?php
	class statusmodel extends CI_Model
	{
		function input($status,$username)
		{
			$date= new MongoDate();
			$this->mongo_db->insert('post',array('username' => $username,'status' => $status ,'time'=> $date));
		}
		function delete($_id)
		{
			echo $_id;
$mongo = new Mongo();
$db = $mongo->kdb; 
$co = $db->post;
$co->remove(array('_id' => new MongoId($_id)), array("safe" => true));

/*$db = $this->mongo_db; 
$co = $db->post;
$co->remove(array('_id' => new MongoId($_id)), array("safe" => true));

			#$this->mongo_db->post->remove(array('_id' => new MongoId($_id)), true);
 $id = new MongoId($_id);
   $this->mongo_db->where->(array('_id'=> $id))->delete('post');*/
		}
	}	
?>
