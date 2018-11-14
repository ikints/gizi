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

	public function edit_kecamatan()
	{
		$kec_id = $this->uri->segment(2);

		$data['title'] = 'Kecamatan';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->edit_kecamatan($kec_id);		
		$data['main_content'] = 'users/edit_kecamatan';
		$this->load->view('template/user/view', $data);
	}

	public function post_edit_kecamatan()
	{
		$kec_id = $this->input->post('kec_id');
		$data = array(
												
				'kec_nama' => $this->input->post('kec_nama')
							
			);

		$this->user_model->post_edit_kecamatan($kec_id,$data);	
		$this->session->set_flashdata('msg','Update Berhasil');	
		redirect('kecamatan');
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

	public function edit_kelurahan()
	{
		$kel_id = $this->uri->segment(2);

		$data['title'] = 'Kelurahan';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['kelurahan'] = $this->user_model->edit_kelurahan($kel_id);		
		$data['main_content'] = 'users/edit_kelurahan';
		$this->load->view('template/user/view', $data);
	}

	public function post_edit_kelurahan()
	{
		$kel_id = $this->input->post('kel_id');
		$data = array(
				
				'kec_id' => $this->input->post('kec_id'),								
				'kel_kode' => $this->input->post('kel_kode'),
				'kel_nama' => $this->input->post('kel_nama')
							
			);

		$this->user_model->post_edit_kelurahan($kel_id,$data);	
		$this->session->set_flashdata('msg','Update Berhasil');	
		redirect('kelurahan');
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
				redirect('kecamatan');
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
				redirect('kelurahan');
			}
	}

	public function puskesmas()
	{
		$data['title'] = 'Puskesmas';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['puskesmas'] = $this->user_model->puskesmas();		
		$data['main_content'] = 'users/puskesmas';
		$this->load->view('template/user/view', $data);
	}

	public function edit_puskesmas()
	{
		$puskesmas_id = $this->uri->segment(2);

		$data['title'] = 'Edit Puskesmas';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['puskesmas'] = $this->user_model->edit_puskesmas($puskesmas_id);		
		$data['main_content'] = 'users/edit_puskesmas';
		$this->load->view('template/user/view', $data);
	}

	public function add_puskesmas()
	{
		$data = array(
				'kec_id' 	=> $this->input->post('kec_id'),
				'puskesmas_nama' 	=> $this->input->post('puskesmas_nama')
			);

		$result = $this->user_model->add_puskesmas($data);

		//add akun puskesmas
		$data_l_puskesmas = array(
				'id_user' 		=> $result,
				'name' 	=> $this->input->post('puskesmas_nama'),
				'username' 	=> $this->input->post('username'),
				'password' 	=> md5($this->input->post('password')),
				'level' 	=> '2'
			);
		$result_l_puskesmas = $this->user_model->add_users($data_l_puskesmas);

		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Puskesmas');
				redirect('puskesmas');
			}
	}

	public function post_edit_puskesmas()
	{
		$puskesmas_id = $this->input->post('puskesmas_id');
		$data = array(
				
				'kec_id' => $this->input->post('kec_id'),								
				'puskesmas_nama' => $this->input->post('puskesmas_nama')
							
			);

		$this->user_model->post_edit_puskesmas($puskesmas_id,$data);	
		$this->session->set_flashdata('msg','Update Berhasil');	
		redirect('puskesmas');
	}

	public function posyandu()
	{
		$data['title'] = 'Posyandu';		
		$data['name'] = $this->name_member["name"];
		$data['kelurahan'] = $this->user_model->kelurahan();
		$data['puskesmas'] = $this->user_model->puskesmas();
		$data['posyandu'] = $this->user_model->posyandu();			
		$data['main_content'] = 'users/posyandu';
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

		//add akun posyandu
		$data_l_posyandu = array(
				'id_user' 		=> $result,
				'name' 	=> $this->input->post('posyandu_nama'),
				'username' 	=> $this->input->post('username'),
				'password' 	=> md5($this->input->post('password')),
				'level' 	=> '3'
			);
		$result_l_posyandu = $this->user_model->add_users($data_l_posyandu);

		
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Posyandu');
				redirect('posyandu');

			}
	}

	public function edit_posyandu()
	{
		$posyandu_id = $this->uri->segment(2);

		$data['title'] = 'Edit Posyandu';		
		$data['name'] = $this->name_member["name"];
		$data['kelurahan'] = $this->user_model->kelurahan();
		$data['puskesmas'] = $this->user_model->puskesmas();
		$data['posyandu'] = $this->user_model->edit_posyandu($posyandu_id);		
		$data['main_content'] = 'users/edit_posyandu';
		$this->load->view('template/user/view', $data);
	}

	public function post_edit_posyandu()
	{
		$posyandu_id = $this->input->post('posyandu_id');
		$data = array(
				
				'kel_id' => $this->input->post('kel_id'),								
				'puskesmas_id' => $this->input->post('puskesmas_id'),
				'posyandu_nama' => $this->input->post('posyandu_nama'),
				'posyandu_alamat' => $this->input->post('posyandu_alamat'),
				'posyandu_rt' => $this->input->post('posyandu_rt'),
				'posyandu_rw' => $this->input->post('posyandu_rw')
							
			);

		$this->user_model->post_edit_posyandu($posyandu_id,$data);	
		$this->session->set_flashdata('msg','Update Berhasil');	
		redirect('posyandu');
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

	public function edit_balita()
	{
		$balita_id = $this->uri->segment(3);

		$data['title'] = 'Balita';		
		$data['name'] = $this->name_member["name"];
		$data['posyandu'] = $this->user_model->posyandu();
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['kelurahan'] = $this->user_model->kelurahan();
		$data['balita'] = $this->user_model->edit_balita($balita_id);		
		$data['main_content'] = 'users/edit_balita';
		$this->load->view('template/user/view', $data);
	}

	public function post_edit_balita()
	{
		$balita_id = $this->input->post('balita_id');

		$data = array(
				
				'posyandu_id' 			=> $this->input->post('posyandu_id'),
				'balita_nik' 			=> $this->input->post('balita_nik'),
				'balita_nama' 			=> $this->input->post('balita_nama'),
				'balita_anak_ke' 		=> $this->input->post('balita_anak_ke'),
				'balita_anak_dari' 		=> $this->input->post('balita_anak_dari'),
				'balita_jk' 			=> $this->input->post('balita_jk'),
				'balita_tgl_lahir' 		=> date('Y-m-d', strtotime($this->input->post('balita_tgl_lahir'))),
				'balita_berat_lahir' 	=> $this->input->post('balita_berat_lahir'),
				'balita_ortu_nama' 		=> $this->input->post('balita_ortu_nama'),
				'balita_ortu_nik' 		=> $this->input->post('balita_ortu_nik'),
				'balita_tlpn' 			=> $this->input->post('balita_tlpn'),
				'balita_alamat' 		=> $this->input->post('balita_alamat'),
				'balita_rt' 			=> $this->input->post('balita_rt'),
				'balita_rw' 			=> $this->input->post('balita_rw'),
				'balita_date_entry' 	=> date('Y-m-d'),
				'kel_id' 				=> $this->input->post('kel_id')
							
			);

		$this->user_model->post_edit_balita($balita_id,$data);	
		$this->session->set_flashdata('msg','Update Berhasil');	
		redirect('balita');
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
				'balita_tgl_lahir' 		=> date('Y-m-d', strtotime($this->input->post('balita_tgl_lahir'))),
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
				redirect('balita');
		}
	}

	public function delete_balita()
	{
		$balita_id = $this->input->post('balita_id');
		//hapus
		$this->user_model->delete_balita($balita_id);	
		$this->session->set_flashdata('msg','Hapus Berhasil');							
		redirect('balita');			
	
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

	public function grafik_balita()
	{
		$balita_id = $this->uri->segment(3);

		$data['title'] = 'Balita';		
		$data['name'] = $this->name_member["name"];
		$data['balita'] = $this->user_model->detail_balita($balita_id);	
		$data['grafik'] = $this->user_model->grafik_balita($balita_id);		
		$data['main_content'] = 'users/grafik_balita';
		$this->load->view('template/user/view', $data);
	}


	public function jadwal()
	{
		$data['title'] = 'Jadwal';		
		$data['name'] = $this->name_member["name"];		
		$data['jadwal'] = $this->user_model->jadwal();
		$data['posyandu'] = $this->user_model->posyandu();
		$data['main_content'] = 'users/jadwal';
		$this->load->view('template/user/view', $data);
	}

	public function edit_jadwal()
	{
		$jadwal_id = $this->uri->segment(2);

		$data['title'] = 'Edit Jadwal';		
		$data['name'] = $this->name_member["name"];
		$data['posyandu'] = $this->user_model->posyandu();
		$data['jadwal'] = $this->user_model->edit_jadwal($jadwal_id);		
		$data['main_content'] = 'users/edit_jadwal';
		$this->load->view('template/user/view', $data);
	}

	public function post_edit_jadwal()
	{
		$jadwal_id = $this->input->post('jadwal_id');
		$jadwal_date = date('Y-m-d', strtotime($this->input->post('jadwal_tgl')));
		$jadwal_tahun = date('Y', strtotime($this->input->post('jadwal_tgl')));
		$jadwal_bulan = date('F', strtotime($this->input->post('jadwal_tgl')));

		$data = array(
				
				'posyandu_id' 	=> $this->input->post('posyandu_id'),
				'jadwal_bulan' 	=> $jadwal_bulan,
				'jadwal_tahun' 	=> $jadwal_tahun,
				'jadwal_tgl' 	=> $jadwal_date,
				'jadwal_waktu' 	=> $this->input->post('jadwal_waktu'),
				'jadwal_kegiatan' 	=> $this->input->post('jadwal_kegiatan')
							
			);

		$this->user_model->post_edit_jadwal($jadwal_id,$data);	
		$this->session->set_flashdata('msg','Update Berhasil');	
		redirect('jadwal');
	}

	public function add_jadwal()
	{

		$jadwal_date = date('Y-m-d', strtotime($this->input->post('jadwal_tgl')));
		$jadwal_tahun = date('Y', strtotime($this->input->post('jadwal_tgl')));
		$jadwal_bulan = date('m', strtotime($this->input->post('jadwal_tgl')));

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
				redirect('jadwal');

			}
	}

	public function delete_jadwal()
	{
		$jadwal_id = $this->input->post('jadwal_id');
		//hapus
		$this->user_model->delete_jadwal($jadwal_id);	
		$this->session->set_flashdata('msg','Hapus Berhasil');							
		redirect('jadwal');			
	
	}

	public function pengukuran()
	{
		$data['title'] = 'Pengukuran';		
		$data['name'] = $this->name_member["name"];
		$data['pengukuran'] = $this->user_model->pengukuran();
		$data['jadwal'] = $this->user_model->jadwal();	
		$data['balita'] = $this->user_model->balita();		
		$data['main_content'] = 'users/pengukuran';
		$this->load->view('template/user/view', $data);
	}

	public function edit_pengukuran()
	{
		$ukur_id = $this->uri->segment(3);
		$data['title'] = 'Edit Pengukuran';		
		$data['name'] = $this->name_member["name"];
		$data['jadwal'] = $this->user_model->jadwal();	
		$data['balita'] = $this->user_model->balita();	
		$data['pengukuran'] = $this->user_model->edit_pengukuran($ukur_id);		
		$data['main_content'] = 'users/edit_pengukuran';
		$this->load->view('template/user/view', $data);
	}

	public function post_edit_pengukuran()
	{
		$ukur_id 			= $this->input->post('ukur_id');
		$jadwal_id	 		= $this->input->post('jadwal_id');
		$balita_id	 		= $this->input->post('balita_id');
		$ukur_bb	 		= $this->input->post('ukur_bb');
		$ukur_tb	 		= $this->input->post('ukur_tb');
		$ukur_cara_ukur_tb	= $this->input->post('ukur_cara_ukur_tb');
		$ukur_vitamin	 	= $this->input->post('ukur_vitamin');
		$ukur_pmt_sts	 	= $this->input->post('ukur_pmt_sts');
		$ukur_pmt_uraian	= $this->input->post('ukur_pmt_uraian');
		$ukur_catatan	 	= $this->input->post('ukur_catatan');
		$ukur_status_gizi	= $this->input->post('ukur_status_gizi');
		
				
		//cek tgl pengukuran
		$result_jadwal = $this->user_model->tgl_jadwal($jadwal_id);

		foreach($result_jadwal as $row) :

			//$jadwal_tgl = date('Y-m-d', strtotime($row->jadwal_tgl));
			$date_jadwal = new DateTime($row->jadwal_tgl);

		endforeach;

		//check tanggal kelahiran balita
		$result_balita = $this->user_model->balita_usia($balita_id);

		foreach($result_balita as $rows) :

			$tgl_lahir = date('Y-m-d', strtotime($rows->balita_tgl_lahir));
			$date_lahir = new DateTime($tgl_lahir);
			$interval_usia = date_diff($date_lahir, $date_jadwal);
			$usia = $interval_usia->m + ($interval_usia->y * 12);

		endforeach;

		$data = array(
				'jadwal_id' 		=> $jadwal_id,
				'balita_id' 		=> $balita_id,
				'ukur_usia' 		=> $usia,
				'ukur_bb' 			=> $ukur_bb,
				'ukur_tb' 			=> $ukur_tb,
				'ukur_cara_ukur_tb' => $ukur_cara_ukur_tb,
				'ukur_vitamin' 		=> $ukur_vitamin,
				'ukur_pmt_sts' 		=> $ukur_pmt_sts,
				'ukur_pmt_uraian' 	=> $ukur_pmt_uraian,
				'ukur_catatan' 		=> $ukur_catatan,
				'ukur_status_gizi' 	=> $ukur_status_gizi
			);

		$this->user_model->post_edit_pengukuran($ukur_id,$data);	
		$this->session->set_flashdata('msg','Update Berhasil');	
		redirect('pengukuran');
	}

	public function add_pengukuran()
	{	

		$jadwal_id	 		= $this->input->post('jadwal_id');
		$balita_id	 		= $this->input->post('balita_id');
		$ukur_bb	 		= $this->input->post('ukur_bb');
		$ukur_tb	 		= $this->input->post('ukur_tb');
		$ukur_cara_ukur_tb	= $this->input->post('ukur_cara_ukur_tb');
		$ukur_vitamin	 	= $this->input->post('ukur_vitamin');
		$ukur_pmt_sts	 	= $this->input->post('ukur_pmt_sts');
		$ukur_pmt_uraian	= $this->input->post('ukur_pmt_uraian');
		$ukur_catatan	 	= $this->input->post('ukur_catatan');
		$ukur_status_gizi	= $this->input->post('ukur_status_gizi');
		
				
		//cek tgl pengukuran
		$result_jadwal = $this->user_model->tgl_jadwal($jadwal_id);

		foreach($result_jadwal as $row) :

			//$jadwal_tgl = date('Y-m-d', strtotime($row->jadwal_tgl));
			$date_jadwal = new DateTime($row->jadwal_tgl);

		endforeach;

		//check tanggal kelahiran balita
		$result_balita = $this->user_model->balita_usia($balita_id);

		foreach($result_balita as $rows) :

			$tgl_lahir = date('Y-m-d', strtotime($rows->balita_tgl_lahir));
			$date_lahir = new DateTime($tgl_lahir);
			$interval_usia = date_diff($date_lahir, $date_jadwal);
			$usia = $interval_usia->m + ($interval_usia->y * 12);

		endforeach;

		$data = array(
				'jadwal_id' 		=> $jadwal_id,
				'balita_id' 		=> $balita_id,
				'ukur_usia' 		=> $usia,
				'ukur_bb' 			=> $ukur_bb,
				'ukur_tb' 			=> $ukur_tb,
				'ukur_cara_ukur_tb' => $ukur_cara_ukur_tb,
				'ukur_vitamin' 		=> $ukur_vitamin,
				'ukur_pmt_sts' 		=> $ukur_pmt_sts,
				'ukur_pmt_uraian' 	=> $ukur_pmt_uraian,
				'ukur_catatan' 		=> $ukur_catatan,
				'ukur_status_gizi' 	=> $ukur_status_gizi
			);

		$result = $this->user_model->add_pengukuran($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Pengukuran');
				redirect('pengukuran');
			}
		}

	

	public function detail_pengukuran()
	{
		$ukur_id = $this->uri->segment(2);

		$data['title'] = 'Detail Pengukuran';		
		$data['name'] = $this->name_member["name"];
		$data['pengukuran'] = $this->user_model->detail_pengukuran($ukur_id);		
		$data['main_content'] = 'users/detail_pengukuran';
		$this->load->view('template/user/view', $data);
	}

	public function delete_pengukuran()
	{
		$ukur_id = $this->input->post('ukur_id');
		//hapus
		$this->user_model->delete_pengukuran($ukur_id);	
		$this->session->set_flashdata('msg','Hapus Berhasil');							
		redirect('pengukuran');			
	
	}

	public function kader()
	{
		$data['title'] = 'Kader';		
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
				redirect('kader');

			}
	}

	//-------------------------------------------------------Laporan

	//Kelurahan
	public function getKelurahan()
	{	
		$kec_id = $this->input->post('kec_id');

		$result = $this->user_model->getKelurahan($kec_id);
		if (count($result) > 0) {
			foreach ($result AS $rows):
				echo '<option value="'.$rows->kel_id.'">'.$rows->kel_nama.'</option>';
			endforeach;
		}
	}
	
	//Kelurahan
	public function getPosyandu()
	{	
		$kel_id = $this->input->post('kel_id');

		$result = $this->user_model->getPosyandu($kel_id);
		if (count($result) > 0) {
			foreach ($result AS $rows):
				echo '<option value="'.$rows->posyandu_id.'">'.$rows->posyandu_nama.'</option>';
			endforeach;
		}
	}

	//--------------------------------------------------------LAPORAN

	public function rekap_pb()
	{
		$data['title'] = 'Laporan Rekap PB';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['rekap_pb'] = $this->user_model->rekap_pb();			
		$data['main_content'] = 'users/rekap_pb';
		$this->load->view('template/user/view', $data);
	}

	public function loadDataTableRekapPB()
	{
		$kec_id = $this->input->post('kec_id');
		$kel_id = $this->input->post('kel_id');
		$posyandu_id = $this->input->post('posyandu_id');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data['title'] = 'Laporan Rekap Pengukuran Balita';
		$data['name'] = $this->name_member["name"];	
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['posyandu'] = $this->user_model->detail_posyandu($posyandu_id);
		$data['bulan'] = $bulan;
		$data['tahun'] = $tahun;	
		$data['rekap_pb'] = $this->user_model->loadDataTableRekapPB($kec_id,$kel_id,$posyandu_id,$bulan,$tahun);			
		$data['main_content'] = 'users/rekap_pb_filter';
		$this->load->view('template/user/view', $data);
	}

	public function grafik_pb()
	{
		$data['title'] = 'Laporan Grafik Pengukuran Balita';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['grafik_pb'] = $this->user_model->grafik_pb();			
		$data['main_content'] = 'users/grafik_pb';
		$this->load->view('template/user/view', $data);
	}

	public function resume_kp()
	{
		$data['title'] = 'Laporan Resume KP';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['resume_kp'] = $this->user_model->resume_kp();			
		$data['main_content'] = 'users/resume_kp';
		$this->load->view('template/user/view', $data);
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
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['kelurahan'] = $this->user_model->detail_kelurahan($kel_id);
		$data['bulan'] = $bulan;
		$data['tahun'] = $tahun;
		$data['resume_kp'] = $this->user_model->loadDataTableResumeKP($kec_id,$kel_id,$balita_date_entry);
		$data['main_content'] = 'users/resume_kp_filter';
		$this->load->view('template/user/view', $data);
	}

	public function edit_kader()
	{
		$kader_id = $this->uri->segment(2);

		$data['title'] = 'Edit Kader';		
		$data['name'] = $this->name_member["name"];
		$data['posyandu'] = $this->user_model->posyandu();
		$data['kader'] = $this->user_model->edit_kader($kader_id);		
		$data['main_content'] = 'users/edit_kader';
		$this->load->view('template/user/view', $data);
	}

	public function post_edit_kader()
	{
		$kader_id = $this->input->post('kader_id');
		

		$data = array(
				
				'posyandu_id' 	=> $this->input->post('posyandu_id'),
				'kader_nama' 	=> $this->input->post('kader_nama')
							
			);

		$this->user_model->post_edit_kader($kader_id,$data);	
		$this->session->set_flashdata('msg','Update Berhasil');	
		redirect('kader');
	}

	public function delete_kader()
	{
		$kader_id = $this->input->post('kader_id');
		//hapus
		$this->user_model->delete_kader($kader_id);	
		$this->session->set_flashdata('msg','Hapus Berhasil');							
		redirect('kader');			
	
	}

	public function delete_kecamatan()
	{
		$kec_id = $this->input->post('kec_id');
		//hapus
		$this->user_model->delete_kecamatan($kec_id);	
		$this->session->set_flashdata('msg','Hapus Berhasil');							
		redirect('kecamatan');			
	
	}

	public function delete_kelurahan()
	{
		$kel_id = $this->input->post('kel_id');
		//hapus
		$this->user_model->delete_kelurahan($kel_id);	
		$this->session->set_flashdata('msg','Hapus Berhasil');							
		redirect('kelurahan');			
	
	}

	public function delete_puskesmas()
	{
		$puskesmas_id = $this->input->post('puskesmas_id');
		//hapus
		$this->user_model->delete_puskesmas($puskesmas_id);	
		$this->session->set_flashdata('msg','Hapus Berhasil');							
		redirect('puskesmas');			
	
	}

	public function delete_posyandu()
	{
		$posyandu_id = $this->input->post('posyandu_id');
		//hapus
		$this->user_model->delete_posyandu($posyandu_id);	
		$this->session->set_flashdata('msg','Hapus Berhasil');							
		redirect('posyandu');			
	
	}

	public function penyuluhan()
	{
		$data['title'] = 'Laporan Penyuluhan';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['rekap_pb'] = $this->user_model->rekap_pb();			
		$data['main_content'] = 'users/penyuluhan';
		$this->load->view('template/user/view', $data);
	}

	public function loadDataTablePenyuluhan()
	{
		$kec_id = $this->input->post('kec_id');
		$kel_id = $this->input->post('kel_id');
		$posyandu_id = $this->input->post('posyandu_id');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data['title'] = 'Laporan Penyuluhan';
		$data['name'] = $this->name_member["name"];	
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['posyandu'] = $this->user_model->detail_posyandu($posyandu_id);
		$data['bulan'] = $bulan;
		$data['tahun'] = $tahun;	
		$data['rekap_pb'] = $this->user_model->loadDataTablePenyuluhan($kec_id,$kel_id,$posyandu_id,$bulan,$tahun);			
		$data['main_content'] = 'users/rekap_penyuluhan_filter';
		$this->load->view('template/user/view', $data);
	}

	public function jb_ukur_bulan_ini()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];	
		$data['jb_ukur_bulan_ini'] = $this->user_model->jb_ukur_bulan_ini();
		$data['jb_ukur_bulan_ini_data'] = $this->user_model->jb_ukur_bulan_ini_data();
		$data_timbang_balita = $this->user_model->jb_ukur_bulan_ini_data();
		foreach($data_timbang_balita as $rows):
			$balita_id = ($rows->balita_id.",");
		endforeach;
		$data['balita'] = $this->user_model->balita_data($balita_id);	
		$data['main_content'] = 'users/jb_ukur_bulan_ini';
		$this->load->view('template/user/view', $data);
	}

	public function jb_kms()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];	
		$data['jb_kms'] = $this->user_model->jb_kms();	
		$data['main_content'] = 'users/jb_kms';
		$this->load->view('template/user/view', $data);
	}

	public function jb_naik_bb()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];	
		$data['jb_naik_bb'] = $this->user_model->jb_naik_bb();	
		$data['main_content'] = 'users/jb_naik_bb';
		$this->load->view('template/user/view', $data);
	}

	public function jb_tidak_naik_bb()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];		
		$data['jb_tidak_naik_bb'] = $this->user_model->jb_tidak_naik_bb();
		$data['main_content'] = 'users/jb_tidak_naik_bb';
		$this->load->view('template/user/view', $data);
	}

	public function jb_abses_bulan_lalu()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];		
		$data['jb_abses_bulan_lalu'] = $this->user_model->jb_abses_bulan_lalu();
		$data['main_content'] = 'users/jb_abses_bulan_lalu';
		$this->load->view('template/user/view', $data);
	}

	public function jb_pertama()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];	
		$data['jb_pertama'] = $this->user_model->jb_pertama();	
		$data['main_content'] = 'users/jb_pertama';
		$this->load->view('template/user/view', $data);
	}

	public function jb_ditimbang()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];		
		$data['jb_ditimbang'] = $this->user_model->jb_ditimbang();
		$data['main_content'] = 'users/jb_ditimbang';
		$this->load->view('template/user/view', $data);
	}

	public function jb_absen_bulan_ini()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];	
		$data['jb_absen_bulan_ini'] = $this->user_model->jb_absen_bulan_ini();	
		$data['main_content'] = 'users/jb_absen_bulan_ini';
		$this->load->view('template/user/view', $data);
	}

	public function jb_vitamin()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];	
		$data['jb_vitamin'] = $this->user_model->jb_vitamin();	
		$data['main_content'] = 'users/jb_vitamin';
		$this->load->view('template/user/view', $data);
	}

	public function jb_asi_eksklusif()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];	
		$data['jb_asi_eksklusif'] = $this->user_model->jb_asi_eksklusif();	
		$data['main_content'] = 'users/jb_asi_eksklusif';
		$this->load->view('template/user/view', $data);
	}


	public function jb_lulus_asi_eksklusif()
	{
		$data['title'] = 'Laporan Lulus ASI Ekslusif';		
		$data['name'] = $this->name_member["name"];		
		$data['jb_lulus_asi_eksklusif'] = $this->user_model->jb_lulus_asi_eksklusif();
		$data['main_content'] = 'users/jb_lulus_asi_eksklusif';
		$this->load->view('template/user/view', $data);
	}

	public function jb_gakin()
	{
		$data['title'] = 'Laporan GAKIN';		
		$data['name'] = $this->name_member["name"];		
		$data['jb_gakin'] = $this->user_model->jb_gakin();
		$data['main_content'] = 'users/jb_gakin';
		$this->load->view('template/user/view', $data);
	}

	public function jb_gizi()
	{
		$data['title'] = 'Laporan GIZI';		
		$data['name'] = $this->name_member["name"];		
		$data['jb_gizi'] = $this->user_model->jb_gizi();
		$data['main_content'] = 'users/jb_gizi';
		$this->load->view('template/user/view', $data);
	}

	public function jb_status_gizi()
	{
		$data['title'] = 'Laporan Jumlah Status Gizi';		
		$data['name'] = $this->name_member["name"];		
		$data['jb_status_gizi'] = $this->user_model->jb_status_gizi();
		$data['main_content'] = 'users/jb_status_gizi';
		$this->load->view('template/user/view', $data);
	}

	public function jb_gizi_buruk()
	{
		$data['title'] = 'Laporan Jumlah Gizi Buruk';		
		$data['name'] = $this->name_member["name"];		
		$data['jb_gizi_buruk'] = $this->user_model->jb_gizi_buruk();
		$data['main_content'] = 'users/jb_gizi_buruk';
		$this->load->view('template/user/view', $data);
	}

	public function jb_oralit()
	{
		$data['title'] = 'Laporan Jumlah Pemberian Oralit';		
		$data['name'] = $this->name_member["name"];		
		$data['jb_oralit'] = $this->user_model->jb_oralit();
		$data['main_content'] = 'users/jb_oralit';
		$this->load->view('template/user/view', $data);
	}

	public function jb_kematian()
	{
		$data['title'] = 'Laporan Jumlah Kematian';		
		$data['name'] = $this->name_member["name"];		
		$data['jb_kematian'] = $this->user_model->jb_kematian();
		$data['jb_kematian_data'] = $this->user_model->jb_kematian_data();
		$data_kematian_balita = $this->user_model->jb_kematian_data();
		foreach($data_kematian_balita as $rows):
			$balita_id = ($rows->balita_id.",");
		endforeach;
		
		//print($balita_id);
		$data['balita'] = $this->user_model->balita_data($balita_id);
		$data['main_content'] = 'users/jb_kematian';
		$this->load->view('template/user/view', $data);
	}

	public function add_kematian()
	{	
		$balita_id = $this->input->post('balita_id');
		$kematian_tgl = date('Y-m-d', strtotime($this->input->post('kematian_tgl')));
		//check tanggal kelahiran balita
		$result_balita = $this->user_model->balita_usia($balita_id);

		foreach($result_balita as $rows) :

			$tgl_lahir = date('Y-m-d', strtotime($rows->balita_tgl_lahir));
			$date_lahir = new DateTime($tgl_lahir);
			$date_kematian = new DateTime($kematian_tgl);
			$interval_kematian = date_diff($date_lahir, $date_kematian);
			$kematian_usia = $interval_kematian->m + ($interval_kematian->y * 12);

		endforeach;

		$data = array(
				'balita_id' 	=> $this->input->post('balita_id'),
				'kematian_tgl' 	=> $kematian_tgl,
				'kematian_usia' 	=> $kematian_usia
			);

		$result = $this->user_model->add_kematian($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Kematian');
				redirect('jb_kematian');
			}
		}

	public function persediaan_bahan()
	{
		$data['title'] = 'Laporan Persediaan';		
		$data['name'] = $this->name_member["name"];
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['rekap_pb'] = $this->user_model->rekap_pb();			
		$data['main_content'] = 'users/persediaan';
		$this->load->view('template/user/view', $data);
	}

	public function loadDataTablePersediaan()
	{
		$kec_id = $this->input->post('kec_id');
		$kel_id = $this->input->post('kel_id');
		$posyandu_id = $this->input->post('posyandu_id');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data['title'] = 'Laporan Persediaan';
		$data['name'] = $this->name_member["name"];	
		$data['kecamatan'] = $this->user_model->kecamatan();
		$data['posyandu'] = $this->user_model->detail_posyandu($posyandu_id);
		$data['bulan'] = $bulan;
		$data['tahun'] = $tahun;	
		$data['rekap_pb'] = $this->user_model->loadDataTablePersediaan($kec_id,$kel_id,$posyandu_id,$bulan,$tahun);			
		$data['main_content'] = 'users/rekap_persediaan_filter';
		$this->load->view('template/user/view', $data);
	}


	public function add_timbang_bln_ini()
	{	
		$balita_id = $this->input->post('balita_id');
		$timbang_tgl = date('Y-m-d', strtotime($this->input->post('timbang_tgl')));
		

		$data = array(
				'balita_id' 	=> $this->input->post('balita_id'),
				'timbang_tgl' 	=> $timbang_tgl
			);

		$result = $this->user_model->add_timbang_bln_ini($data);
		if ($result) 
			{	
				$this->session->set_flashdata('msg','Tambah Timbang');
				redirect('jb_ukur_bulan_ini');
			}
		}

}
