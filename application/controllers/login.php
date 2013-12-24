<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('eg');
	}
	function index(){
		$u=($this->input->post('username');
		$p=($this->input->post('password');
		$r=$this->eg->login($u,$p);
		if($r)
			this->load->view("welcome.php");
		else
			this->load->view("login.php");
	}
}
?>
