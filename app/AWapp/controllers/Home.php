<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//model
		$this->load->model('home_model');	

		//variable session
		$this->name_member = $this->session->userdata('is_user_logged_in');	

	}
	
	public function index()
	{
		$data['title'] = 'Title';
		$data['main_content'] = 'home/index';
		$data['name'] = $this->name_member["name"];
		$data['date'] = $this->name_member["date"];
		$data['status_login'] = $this->name_member["name"];
		$this->load->view('template/home/view', $data);
		
	}

	public function login()
	{
		$is_user_logged_in = $this->session->userdata('is_user_logged_in'); //variable id login
		if(!isset($is_user_logged_in) || $is_user_logged_in != true) //cek sedang sudah login apa belum
		{
			$data['title'] = 'Login';						
			$data['main_content'] = 'home/login';
			$this->load->view('template/home/view', $data);
		}
		else
		{
			redirect('users');
		}
	}

	//user valid
	function valid_login_users()
	{		
	
		
		$this->form_validation->set_message('required', '<i class="fa fa-times-circle-o"></i> Anda belum memberikan %s '); 
		//------------------Valid
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');		
		
		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Login';						
			$data['main_content'] = 'home/login';
			$this->load->view('home/view', $data);
		}
		else
		{
			
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$date = date('Y-m-d');

						
			$result = $this->home_model->valid_login($username, $password);			
			//
			if ($result) 
			{
				
				foreach ($result as $rows):
				
					$id_user = $rows->ID;
					$username_user = $rows->Username;
					$password_user = $rows->Password;
					$name = $rows->Name;
					$status = $rows->Status;
				
				
				
				if($username_user != $username)
				{
			
					$data['title'] = 'Login';						
					$data['error'] = 'Email Belum Terdaftar '.$username.' atau Belum Terverifikasi';
					$data['main_content'] = 'home/login';
					$this->load->view('home/view', $data);
				}		
				elseif ($password_user != $password) 						
				{

					$data['title'] = 'Login';						
					$data['error'] = 'Password Salah';
					$data['main_content'] = 'home/login';
					$this->load->view('home/view', $data);
				}
				elseif ($status != 'Y') 						
				{

					$data['title'] = 'Login';						
					$data['error'] = 'Email Anda Tidak Terdaftar';
					$data['main_content'] = 'home/login';
					$this->load->view('home/view', $data);

				}						
				elseif ( ($username_user == $username) and ($password_user == $password) and ($status == 'Y') )
				{
					
					$data = array(
						'username_login' => $username_user,
						'name' => $name,	
						'date' => $date,
						'id_user' => $id_user,			
						'is_user_logged_in' => true
					);
					
					$this->session->set_userdata('is_user_logged_in', $data);			
					redirect('users');
				}

				endforeach;
				
			}else {

					$data['title'] = 'Login';						
					$data['error'] = 'Username Belum Terdaftar '.$username.' atau Belum Terverifikasi';
					$data['main_content'] = 'home/login';
					$this->load->view('home/view', $data);
			}
		}
	}

}
