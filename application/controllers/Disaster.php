<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Disaster extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('m_disaster');
		$data['disaster'] = $this->m_disaster->get_all();

		$this->load->view('disaster/index',$data);
	}

	public function about()
	{
		$this->load->view('about/index');
	}
}

?>