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
		$id_user = $this->name_member["id_user"];
		$data['puskesmas'] = $this->puskesmas_model->puskesmas($id_user);		
		$data['main_content'] = 'puskesmas/puskesmas';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function posyandu()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		$id_user = $this->name_member["id_user"];
		$data['posyandu'] = $this->puskesmas_model->posyandu($id_user);			
		$data['main_content'] = 'puskesmas/posyandu';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function balita()
	{
		$data['title'] = 'Balita';		
		$data['name'] = $this->name_member["name"];
		$id_user = $this->name_member["id_user"];
		$data['balita'] = $this->puskesmas_model->balita($id_user);
		$data['main_content'] = 'puskesmas/balita';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function jadwal()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];		
		$id_user = $this->name_member["id_user"];
		$data['jadwal'] = $this->puskesmas_model->jadwal($id_user);
		$data['main_content'] = 'puskesmas/jadwal';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function pengukuran()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		$id_user = $this->name_member["id_user"];
		$data['pengukuran'] = $this->puskesmas_model->pengukuran($id_user);
		$data['main_content'] = 'puskesmas/pengukuran';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function kader()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];	
		$id_user = $this->name_member["id_user"];
		$data['kader'] = $this->puskesmas_model->kader($id_user);
		$data['main_content'] = 'puskesmas/kader';
		$this->load->view('template/puskesmas/view', $data);
	}

	//--------------------------------------------------------LAPORAN

	public function rekap_pb()
	{
		$data['title'] = 'Laporan Rekap PB';		
		$data['name'] = $this->name_member["name"];
		$id_user = $this->name_member["id_user"];
		$data['posyandu'] = $this->puskesmas_model->posyandu($id_user);		
		$data['rekap_pb'] = $this->puskesmas_model->rekap_pb();			
		$data['main_content'] = 'puskesmas/rekap_pb';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function loadDataTableRekapPB()
	{
		$posyandu_id = $this->input->post('posyandu_id');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data['title'] = 'Laporan Rekap PB';
		$data['name'] = $this->name_member["name"];	
		$id_user = $this->name_member["id_user"];
		$data['posyandu'] = $this->puskesmas_model->posyandu($id_user);
		$data['posyandu'] = $this->puskesmas_model->detail_posyandu($posyandu_id);
		$data['bulan'] = $bulan;
		$data['tahun'] = $tahun;	
		$data['rekap_pb'] = $this->puskesmas_model->loadDataTableRekapPB($posyandu_id,$bulan,$tahun);			
		$data['main_content'] = 'puskesmas/rekap_pb_filter';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function resume_kp()
	{
		$data['title'] = 'Laporan Resume KP';		
		$data['name'] = $this->name_member["name"];
		$id_user = $this->name_member["id_user"];
		$data['kelurahan'] = $this->puskesmas_model->kelurahan($id_user);
		$data['resume_kp'] = $this->puskesmas_model->resume_kp();			
		$data['main_content'] = 'puskesmas/resume_kp';
		$this->load->view('template/puskesmas/view', $data);
	}

	public function loadDataTableResumeKP()
	{	
		$kel_id = $this->input->post('kel_id');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$balita_date_entry = $bulan."-".$tahun;

		$data['title'] = 'Laporan Resume KP';		
		$data['name'] = $this->name_member["name"];
		$id_user = $this->name_member["id_user"];
		$data['listkelurahan'] = $this->puskesmas_model->kelurahan($id_user);
		$data['kelurahan'] = $this->puskesmas_model->detail_kelurahan($kel_id);
		$data['bulan'] = $bulan;
		$data['tahun'] = $tahun;
		$data['resume_kp'] = $this->puskesmas_model->loadDataTableResumeKP($kel_id,$balita_date_entry);
		$data['main_content'] = 'puskesmas/resume_kp_filter';
		$this->load->view('template/puskesmas/view', $data);
	}
}