<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Disaster extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->model('m_disaster');

		$login = $this->session->userdata('logged_in');

		$data['login'] = $login;

		$disaster 			= $this->m_disaster->get_all();

		$data['disaster']	= $disaster;

		$this->load->view('disaster/index',$data);
	}
	

	public function about()
	{
		$this->load->view('about/index');
	}
}

?>