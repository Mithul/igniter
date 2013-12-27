<?php
	class Putstatus extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('statusmodel');
		}
		function index()
		{
			if(!isset($_SESSION['usr']))
			{
				session_start();
			}
			$status=$this->input->post('status');
			$username=$this->input->post('user');
			echo '</pre>';
			$_SESSION['usr']=$username;
			$this->statusmodel->input($status,$username);
			$this->load->view('privatewallview');
		}
	}
?>
