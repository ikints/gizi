<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posyandu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->is_py_logged_in();

		//model
		$this->load->model('posyandu_model');	

		//variable session
		$this->name_member = $this->session->userdata('is_py_logged_in');	

	}

	//login
	function is_py_logged_in()
	{
		$is_py_logged_in = $this->session->userdata('is_py_logged_in');
		
		if(!isset($is_py_logged_in) || $is_py_logged_in != true)
		{
			redirect('login');
		}	
	}

	//logout
	function logout()
	{
		
		$this->session->unset_userdata('is_py_logged_in');
		redirect('login');
	}
	
	public function index()
	{
		$data['title'] = 'Posyandu';
		$data['main_content'] = 'posyandu/index';
		$data['name'] = $this->name_member["name"];
		$data['date'] = $this->name_member["date"];
		$data['status_login'] = $this->name_member["name"];
		$this->load->view('template/posyandu/view', $data);
		
	}

	public function posyandu()
	{
		$data['title'] = 'Posyandu';		
		$data['name'] = $this->name_member["name"];
		$id_user = $this->name_member["id_user"];
		$data['posyandu'] = $this->posyandu_model->posyandu($id_user);			
		$data['main_content'] = 'posyandu/posyandu';
		$this->load->view('template/posyandu/view', $data);
	}

	public function balita()
	{
		$data['title'] = 'Balita';		
		$data['name'] = $this->name_member["name"];
		$id_user = $this->name_member["id_user"];
		$data['balita'] = $this->posyandu_model->balita($id_user);
		$data['main_content'] = 'posyandu/balita';
		$this->load->view('template/posyandu/view', $data);
	}

	public function jadwal()
	{
		$data['title'] = 'Jadwal';		
		$data['name'] = $this->name_member["name"];		
		$id_user = $this->name_member["id_user"];
		$data['jadwal'] = $this->posyandu_model->jadwal($id_user);
		$data['main_content'] = 'posyandu/jadwal';
		$this->load->view('template/posyandu/view', $data);
	}

	public function pengukuran()
	{
		$data['title'] = 'Pengukuran';		
		$data['name'] = $this->name_member["name"];
		$id_user = $this->name_member["id_user"];
		$data['pengukuran'] = $this->posyandu_model->pengukuran($id_user);	
		$data['main_content'] = 'posyandu/pengukuran';
		$this->load->view('template/posyandu/view', $data);
	}

	public function kader()
	{
		$data['title'] = 'Kader';		
		$data['name'] = $this->name_member["name"];	
		$id_user = $this->name_member["id_user"];	
		$data['kader'] = $this->posyandu_model->kader($id_user);
		$data['main_content'] = 'posyandu/kader';
		$this->load->view('template/posyandu/view', $data);
	}
	//--------------------------------------------------------LAPORAN

	public function rekap_pb()
	{
		$data['title'] = 'Laporan Rekap PB';		
		$data['name'] = $this->name_member["name"];
		$data['rekap_pb'] = $this->posyandu_model->rekap_pb();			
		$data['main_content'] = 'posyandu/rekap_pb';
		$this->load->view('template/posyandu/view', $data);
	}

	public function loadDataTableRekapPB()
	{
		$kec_id = $this->input->post('kec_id');
		$kel_id = $this->input->post('kel_id');
		$posyandu_id = $this->input->post('posyandu_id');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data['title'] = 'Laporan Rekap PB';
		$data['name'] = $this->name_member["name"];	
		$data['kecamatan'] = $this->posyandu_model->kecamatan();
		$data['posyandu'] = $this->posyandu_model->detail_posyandu($posyandu_id);
		$data['bulan'] = $bulan;
		$data['tahun'] = $tahun;	
		$data['rekap_pb'] = $this->posyandu_model->loadDataTableRekapPB($kec_id,$kel_id,$posyandu_id,$bulan,$tahun);			
		$data['main_content'] = 'posyandu/rekap_pb_filter';
		$this->load->view('template/posyandu/view', $data);
	}

	public function resume_kp()
	{
		$data['title'] = 'Laporan Resume KP';		
		$data['name'] = $this->name_member["name"];
		$data['resume_kp'] = $this->posyandu_model->resume_kp();			
		$data['main_content'] = 'posyandu/resume_kp';
		$this->load->view('template/posyandu/view', $data);
	}

	public function loadDataTableResumeKP()
	{	
		$kec_id = $this->input->post('kec_id');
		$kel_id = $this->input->post('kel_id');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$balita_date_entry = $bulan."-".$tahun;

		$data['title'] = 'Laporan Resume KP';		
		$data['name'] = $this->name_member["name"];
		$data['kelurahan'] = $this->posyandu_model->detail_kelurahan($kel_id);
		$data['bulan'] = $bulan;
		$data['tahun'] = $tahun;
		$data['resume_kp'] = $this->posyandu_model->loadDataTableResumeKP($kec_id,$kel_id,$balita_date_entry);
		$data['main_content'] = 'posyandu/resume_kp_filter';
		$this->load->view('template/posyandu/view', $data);
	}

}