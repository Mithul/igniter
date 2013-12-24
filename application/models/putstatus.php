<?php
	class Putstatus extends CI_Model
	{
		function index()
		{
			$status=$this->input->post('status');
			echo $status;
		}
	}
?>