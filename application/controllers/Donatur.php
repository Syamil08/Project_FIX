<?php


class Donatur extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$login = $this->session->userdata('logged_in');

		$data['login'] = $login;

		$this->template_donatur->show('donatur/index',$data);
	}


}

?>