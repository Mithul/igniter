<?php
	class Logincheck extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model');
		}
		function index()
		{
			$username=$this->input->post("user");
			$password=$this->input->post("password");
			$result=$this->model->login($username,$password);
			if($result)
			{
				$this->load->view('welcome.php');

			}
			else
			{	
				echo "Not Found";
			}
		}
	}
?>