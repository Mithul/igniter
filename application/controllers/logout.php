<?php
	class Logout extends CI_Controller
	{
		function index()
		{
			session_unset();
			if(isset($_SESSION['usr']))
				session_destroy();
			$this->load->view('Front Page View.php');
		}
	}
?>