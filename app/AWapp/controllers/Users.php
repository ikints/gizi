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
		//$data['profil'] = $this->user_model->profil_member();			
		$data['main_content'] = 'users/kelurahan';
		$this->load->view('template/user/view', $data);
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
