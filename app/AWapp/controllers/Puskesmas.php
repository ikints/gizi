<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puskesmas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->is_ps_logged_in();

		//model
		$this->load->model('puskesmas_model');	

		//variable session
		$this->name_member = $this->session->userdata('is_ps_logged_in');	

	}

	//login
	function is_ps_logged_in()
	{
		$is_ps_logged_in = $this->session->userdata('is_ps_logged_in');
		
		if(!isset($is_ps_logged_in) || $is_ps_logged_in != true)
		{
			redirect('login');
		}	
	}

	//logout
	function logout()
	{
		
		$this->session->unset_userdata('is_ps_logged_in');
		redirect('login');
	}
	
	public function index()
	{
		$data['title'] = 'Puskemsmas';
		$data['main_content'] = 'puskesmas/index';
		$data['name'] = $this->name_member["name"];
		$data['date'] = $this->name_member["date"];
		$data['status_login'] = $this->name_member["name"];
		$this->load->view('template/puskesmas/view', $data);
		
	}

	public function puskesmas()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		$data['puskesmas'] = $this->puskesmas_model->puskesmas();		
		$data['main_content'] = 'puskesmas/puskesmas';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function posyandu()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		$data['puskesmas'] = $this->puskesmas_model->puskesmas();
		$data['posyandu'] = $this->puskesmas_model->posyandu();			
		$data['main_content'] = 'puskesmas/posyandu';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function balita()
	{
		$data['title'] = 'Balita';		
		$data['name'] = $this->name_member["name"];
		$data['balita'] = $this->puskesmas_model->balita();
		$data['posyandu'] = $this->puskesmas_model->posyandu();	
		$data['main_content'] = 'puskesmas/balita';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function jadwal()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];		
		$data['jadwal'] = $this->puskesmas_model->jadwal();
		$data['posyandu'] = $this->puskesmas_model->posyandu();
		$data['main_content'] = 'puskesmas/jadwal';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function pengukuran()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		$data['pengukuran'] = $this->puskesmas_model->pengukuran();
		$data['jadwal'] = $this->puskesmas_model->jadwal();	
		$data['balita'] = $this->puskesmas_model->balita();		
		$data['main_content'] = 'puskesmas/pengukuran';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function kader()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];	
		$data['posyandu'] = $this->puskesmas_model->posyandu();	
		$data['kader'] = $this->puskesmas_model->kader();
		$data['main_content'] = 'puskesmas/kader';
		$this->load->view('template/puskesmas/view', $data);
	}
}