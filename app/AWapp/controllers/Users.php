<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->is_user_logged_in();
	
		//model
		$this->load->model('user_model');

		//variable session
		$this->name_member = $this->session->userdata('is_user_logged_in');

	}

	//login
	function is_user_logged_in()
	{
		$is_user_logged_in = $this->session->userdata('is_user_logged_in');
		
		if(!isset($is_user_logged_in) || $is_user_logged_in != true)
		{
			redirect('login');
		}	
	}


	public function index()
	{
		$data['title'] = 'Page Users Profil';		
		$data['name'] = $this->name_member["name"];
		$data['profil'] = $this->user_model->profil_member();			
		$data['main_content'] = 'users/index';
		$this->load->view('template/user/view', $data);
	}
	
	//logout
	function logout()
	{
		
		$this->session->unset_userdata('is_user_logged_in');
		redirect('login');
	}

	//--------------------------------------------------------CONTENT

	public function kecamatan()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		//$data['profil'] = $this->user_model->profil_member();			
		$data['main_content'] = 'users/kecamatan';
		$this->load->view('template/user/view', $data);
	}

	public function kelurahan()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['kelurahan'] = $this->user_model->kelurahan();			
		$data['main_content'] = 'users/kelurahan';
		$this->load->view('template/user/view', $data);
	}

	public function add_kelurahan()
	{
		$data = array(
				'kec_id' 	=> $this->input->post('kec_id'),
				'kel_kode' 	=> $this->input->post('kel_kode'),
				'kel_nama' 	=> $this->input->post('kel_nama')
			);

		$result = $this->user_model->add_kelurahan($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Kelurahan');
				redirect('users/kelurahan');
			}
	}

	public function puskesmas()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		//$data['profil'] = $this->user_model->profil_member();			
		$data['main_content'] = 'users/puskesmas';
		$this->load->view('template/user/view', $data);
	}

	public function posyandu()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		//$data['profil'] = $this->user_model->profil_member();			
		$data['main_content'] = 'users/posyandu';
		$this->load->view('template/user/view', $data);
	}
}
