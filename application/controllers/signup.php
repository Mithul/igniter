<?php

class Signup extends CI_Controller{
    
	function __construct(){
	parent::__construct();
	$this->load->model('signupmodel');
	}
	function index(){

	if($_POST['email']==$_POST['reemail'] && $_POST['pass']==$_POST['repass'])
	{
		$this->signupmodel->inse($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['pass'],$_POST['sex'],$_POST['day'],$_POST['month'],$_POST['year']);
		$this->load->view('login.php');
	}
	else
	{
	$this->load->view('login.php');
	}
	}
}
?>