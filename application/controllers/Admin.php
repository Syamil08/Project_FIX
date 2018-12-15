<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		if(!userdata()){
			redirect('user/verify');	
		}
	}

	public function index()
	{
		$this->load->model('m_user');

		$petugas 			= $this->m_user->get_all();

		$data['petugas']	= $petugas;

		$this->template_admin->show('admin/index',$data);
	}

	public function add()
	{
		$this->load->model('m_user');

		$petugas			=	$this->m_user->get_all();

		$data['petugas'] 	=	$petugas;

		$this->template_admin->show('admin/tambah',$data);
	}

	public function save()
	{
		$this->load->model('m_user');

		$firstname		= $this->input->post('firstname');
		$lastname 		= $this->input->post('lastname');
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$nohp 			= $this->input->post('nohp');
		$alamat 		= $this->input->post('alamat');
		$role			= 'petugas';
		$status 		= 'active';

		$data 			= [
						'name'		=> $firstname." ".$lastname,
						'username'	=> $username,
						'password'	=> md5($password),
						'role'		=> $role,
						'status' 	=> $status,
						'phone' 	=> $nohp,
						'address' 	=> $alamat
		];

		$save 			= $this->m_user->insert($data);

		redirect('admin');
	}

	public function tampil_petugas()
	{
		$this->load->model('m_user');

		$tampil 			= $this->m_user->get_petugas();

		$data['petugas']	= $tampil;

		$this->template_admin->show('admin/daftar',$data);
	}

	public function edit($id)
	{
		$this->load->model('m_user');

		$data['petugas'] 	= $this->m_user->get($id);

		$this->template_admin->show('admin/edit',$data);
	}
	
	public function update()
	{
		$this->load->model('m_user');

		$id 			= $this->input->post('id');
		$firstname		= $this->input->post('firstname');
		$lastname 		= $this->input->post('lastname');
		$username 		= $this->input->post('username');
		$newpassword 	= $this->input->post('new_password');
		$nohp 			= $this->input->post('nohp');
		$alamat 		= $this->input->post('alamat');
		$role			= 'petugas';
		$status 		= $this->input->post('status');


		$data 	= [
			'name'		=> $firstname." ".$lastname,
			'username'	=> $username,
			'role'		=> $role,
			'status' 	=> $status,
			'phone' 	=> $nohp,
			'address' 	=> $alamat
		];

		if (!empty($newpassword)) {
			$data['password'] = md5($newpassword);
		}

		$save	= $this->m_user->update($data,$id);

		redirect('admin');
	}

	public function delete($id)
	{
		$this->load->model('m_user');

		$delete = $this->m_user->delete($id);

		redirect('admin');
	}

	public function skeyword()
	{
		$this->load->model('m_user');

		$key = $this->input->post('title');

		$data['results'] = $this->m_user->search($key);

		$this->template_admin->show('admin/skeyview',$data);
	}
}

?>