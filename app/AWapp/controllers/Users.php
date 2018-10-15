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
		$data['kecamatan'] = $this->user_model->kecamatan();			
		$data['main_content'] = 'users/kecamatan';
		$this->load->view('template/user/view', $data);
	}

	public function kelurahan()
	{
		$data['title'] = 'Kelurahan';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['kelurahan'] = $this->user_model->kelurahan();			
		$data['main_content'] = 'users/kelurahan';
		$this->load->view('template/user/view', $data);
	}

	public function add_kecamatan()
	{
		$data = array(
				'kec_kode' 	=> $this->input->post('kec_kode'),
				'kec_nama' 	=> $this->input->post('kec_nama')
			);

		$result = $this->user_model->add_kecamatan($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Kecamatan');
				redirect('users/kecamatan');
			}
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
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['puskesmas'] = $this->user_model->puskesmas();		
		$data['main_content'] = 'users/puskesmas';
		$this->load->view('template/user/view', $data);
	}

	public function add_puskesmas()
	{
		$data = array(
				'kec_id' 	=> $this->input->post('kec_id'),
				'puskesmas_nama' 	=> $this->input->post('puskesmas_nama')
			);

		$result = $this->user_model->add_puskesmas($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Puskesmas');
				redirect('users/puskesmas');
			}
	}

	public function posyandu()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		$data['kelurahan'] = $this->user_model->kelurahan();
		$data['puskesmas'] = $this->user_model->puskesmas();
		$data['posyandu'] = $this->user_model->posyandu();			
		$data['main_content'] = 'users/posyandu';
		$this->load->view('template/user/view', $data);
	}



	public function balita()
	{
		$data['title'] = 'Balita';		
		$data['name'] = $this->name_member["name"];
		$data['balita'] = $this->user_model->balita();
		$data['posyandu'] = $this->user_model->posyandu();
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['kelurahan'] = $this->user_model->kelurahan();			
		$data['main_content'] = 'users/balita';
		$this->load->view('template/user/view', $data);
	}
	public function add_balita()
	{
		$data = array(
				
				'balita_id' 			=> $this->input->post('balita_id'),
				'posyandu_id' 			=> $this->input->post('posyandu_id'),
				'balita_nik' 			=> $this->input->post('balita_nik'),
				'balita_nama' 			=> $this->input->post('balita_nama'),
				'balita_anak_ke' 		=> $this->input->post('balita_anak_ke'),
				'balita_anak_dari' 		=> $this->input->post('balita_anak_dari'),
				'balita_jk' 			=> $this->input->post('balita_jk'),
				'balita_tgl_lahir' 		=> $this->input->post('balita_tgl_lahir'),
				'balita_berat_lahir' 	=> $this->input->post('balita_berat_lahir'),
				'balita_ortu_nama' 		=> $this->input->post('balita_ortu_nama'),
				'balita_ortu_nik' 		=> $this->input->post('balita_ortu_nik'),
				'balita_tlpn' 			=> $this->input->post('balita_tlpn'),
				'balita_alamat' 		=> $this->input->post('balita_alamat'),
				'balita_rt' 			=> $this->input->post('balita_rt'),
				'balita_rw' 			=> $this->input->post('balita_rw'),
				'kel_id' 				=> $this->input->post('kel_id')
			);

		$result = $this->user_model->add_balita($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Data Balita');
				redirect('users/balita');
		}
	}

	public function detail_balita()
	{
		$balita_id = $this->uri->segment(2);

		$data['title'] = 'Balita';		
		$data['name'] = $this->name_member["name"];
		$data['balita'] = $this->user_model->detail_balita($balita_id);		
		$data['main_content'] = 'users/detail_balita';
		$this->load->view('template/user/view', $data);
	}

	public function add_posyandu()
	{
		$data = array(
				'kel_id' 	=> $this->input->post('kel_id'),
				'puskesmas_id' 	=> $this->input->post('puskesmas_id'),
				'posyandu_nama' 	=> $this->input->post('posyandu_nama'),
				'posyandu_alamat' 	=> $this->input->post('posyandu_alamat'),
				'posyandu_rt' 	=> $this->input->post('posyandu_rt'),
				'posyandu_rw' 	=> $this->input->post('posyandu_rw')
			);

		$result = $this->user_model->add_posyandu($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Posyandu');
				redirect('users/posyandu');

			}
	}


	public function jadwal()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];		
		$data['jadwal'] = $this->user_model->jadwal();
		$data['posyandu'] = $this->user_model->posyandu();
		$data['main_content'] = 'users/jadwal';
		$this->load->view('template/user/view', $data);
	}

	public function add_jadwal()
	{

		$jadwal_date = date('Y-m-d', strtotime($this->input->post('jadwal_tgl')));
		$jadwal_tahun = date('Y', strtotime($this->input->post('jadwal_tgl')));
		$jadwal_bulan = date('F', strtotime($this->input->post('jadwal_tgl')));

		$data = array(
				'jadwal_id' 	=> $this->input->post('jadwal_id'),
				'posyandu_id' 	=> $this->input->post('posyandu_id'),
				'jadwal_bulan' 	=> $jadwal_bulan,
				'jadwal_tahun' 	=> $jadwal_tahun,
				'jadwal_tgl' 	=> $jadwal_date,
				'jadwal_waktu' 	=> $this->input->post('jadwal_waktu'),
				'jadwal_kegiatan' 	=> $this->input->post('jadwal_kegiatan'),
			);

		$result = $this->user_model->add_jadwal($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Jadwal');
				redirect('users/jadwal');

			}
	}

	public function pengukuran()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		$data['pengukuran'] = $this->user_model->pengukuran();
		$data['jadwal'] = $this->user_model->jadwal();	
		$data['balita'] = $this->user_model->balita();		
		$data['main_content'] = 'users/pengukuran';
		$this->load->view('template/user/view', $data);
	}

	public function add_pengukuran()
	{
		$data = array(
				'jadwal_id' 	=> $this->input->post('jadwal_id'),
				'balita_id' 	=> $this->input->post('balita_id'),
				'ukur_usia' 	=> $this->input->post('ukur_usia'),
				'ukur_bb' 	=> $this->input->post('ukur_bb'),
				'ukur_tb' 	=> $this->input->post('ukur_tb'),
				'ukur_cara_ukur_tb' 	=> $this->input->post('ukur_cara_ukur_tb'),
				'ukur_vitamin' 	=> $this->input->post('ukur_vitamin'),
				'ukur_pmt_sts' 	=> $this->input->post('ukur_pmt_sts'),
				'ukur_pmt_uraian' 	=> $this->input->post('ukur_pmt_uraian'),
				'ukur_catatan' 	=> $this->input->post('ukur_catatan'),
				'ukur_status_gizi' 	=> $this->input->post('ukur_status_gizi')
			);

		$result = $this->user_model->add_pengukuran($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Pengukuran');
				redirect('users/pengukuran');

			}
	}

	public function detail_pengukuran()
	{
		$ukur_id = $this->uri->segment(2);

		$data['title'] = 'Balita';		
		$data['name'] = $this->name_member["name"];
		$data['pengukuran'] = $this->user_model->detail_pengukuran($ukur_id);		
		$data['main_content'] = 'users/detail_pengukuran';
		$this->load->view('template/user/view', $data);
	}

	public function kader()
	{
		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];	
		$data['posyandu'] = $this->user_model->posyandu();	
		$data['kader'] = $this->user_model->kader();
		$data['main_content'] = 'users/kader';
		$this->load->view('template/user/view', $data);
	}

	public function add_kader()
	{
		$data = array(
				
				'posyandu_id' 	=> $this->input->post('posyandu_id'),
				'kader_nama' 	=> $this->input->post('kader_nama')
			);

		$result = $this->user_model->add_kader($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Kader');
				redirect('users/kader');

			}
	}


}
