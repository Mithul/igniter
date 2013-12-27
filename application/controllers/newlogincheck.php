<?php
	class Newlogincheck extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model');
		}
		function index()
		{
			$username=$this->input->post("user");
			$password=$this->input->post("pass");
			$result=$this->model->login($username,$password);
			if(!isset($_SESSION['usr']))
			{
				session_start();
			}
			$_SESSION['usr']=$username;
			if($result)
			{
				$_SESSION['usr']=$username;
				$_SESSION['pass']=$password;
				$this->load->view('privatewallview');

			}
			else
			{	
				
				#echo 'try';
				header('Location: ../');
				#redirect('welcome') 
				#$this->load->view('login.php');
			}
		}
	}
?>
