<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Welcome extends CI_Controller {
	
	function __construct()
 	{
   		parent::__construct();
 	}

	public function index()
	{
		if($this->session->userdata('log'))
		{
			$username=$this->session->userdata('log');
			$data['username']=$username;
			$this->load->view('welcome_message',$data);
		}
		else 
		{
			$this->load->helper(array('form'));
			$data=null;
			if($this->session->userdata('error'))
			{	
				$data['error']=$this->session->userdata('error');
				$this->session->unset_userdata('error');

			}	
			$this->load->view('login_page',$data);
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('log');
		session_destroy();
		redirect('welcome','refresh');
	}
}
