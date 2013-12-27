<?php
	class Deletestatus extends CI_Controller
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
			$_id=$this->input->post('_id');
			echo 'hi';
			$this->statusmodel->delete($_id);
echo 'hi';
			$this->load->view('privatewallview');
		}
	}
?>
