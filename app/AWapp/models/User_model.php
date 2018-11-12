<?php
class User_model extends CI_Model {

//profil member
function profil_member()
	{
		$is_user_logged_in = $this->session->userdata('is_user_logged_in');
		if ($is_user_logged_in)
		{
			$set_data = $this->session->userdata('is_user_logged_in');
			$data['session_id'] = $set_data['username_login'];
						
			
			$q = $this->db->select('

			a.id_user as ID,			
			a.name as name

			')
			
			->from('users a')	
			->where('a.username', $data['session_id']);
			
			
			$result = $q->get()->result();
			return $result;
		}

	}

//tambah users
function add_users($data_l_puskesmas)
	{					
		$insert = $this->db->insert('users', $data_l_puskesmas);
		return $insert;						
	}

//kecamatan
function kecamatan()
	{					
			$q = $this->db->select('

				a.kec_id as kec_id,			
				a.kec_kode as kec_kode,
				a.kec_nama as kec_nama,

				IFNULL(b.j_kel,0) as jumlah_kel

			')
			
			->from('kecamatan a')

			->join('(SELECT b.kec_id,
					      count(*) as j_kel
					    from kelurahan b
					    group by b.kec_id) b', 'b.kec_id = a.kec_id', 'left');

			
			
			$result = $q->get()->result();
			return $result;					
	}

function edit_kecamatan($kec_id)
	{
			$q = $this->db->select('

				a.kec_id as kec_id,			
				a.kec_kode as kec_kode,
				a.kec_nama as kec_nama

			')
			
			->from('kecamatan a')
			->where('a.kec_id', $kec_id);
			
			
			$result = $q->get()->result();
			return $result;	
	}

function post_edit_kecamatan($kec_id,$data)
	{
		$this->db->where('kec_id', $kec_id);
		$this->db->update('kecamatan', $data);									
	}

//Kelurahan
function kelurahan()
	{					
			$q = $this->db->select('

				a.kel_id as kel_id,			
				a.kel_kode as kel_kode,
				a.kel_nama as kel_nama,
				b.kec_nama as kec_nama,
				IFNULL(c.j_kel,0) as jumlah_kelurahan

			')
			
			->from('kelurahan a')
			->join('kecamatan b','b.kec_id = a.kec_id')
			->join('(SELECT c.kel_id,
					      count(*) as j_kel
					    from posyandu c
					    group by c.kel_id) c', 'c.kel_id = a.kel_id', 'left');
			
			
			$result = $q->get()->result();
			return $result;					
	}	

function edit_kelurahan($kel_id)
	{
			$q = $this->db->select('

				a.kel_id as kel_id,	
				a.kec_id as kec_id,		
				a.kel_kode as kel_kode,
				a.kel_nama as kel_nama

			')
			
			->from('kelurahan a')
			->where('a.kel_id', $kel_id);
			
			
			$result = $q->get()->result();
			return $result;	
	}

function post_edit_kelurahan($kel_id,$data)
	{
		$this->db->where('kel_id', $kel_id);
		$this->db->update('kelurahan', $data);									
	}

//tambah kelurahan
function add_kelurahan($data)
	{					
		$insert = $this->db->insert('kelurahan', $data);
		return $insert;						
	}

//detail kelurahan
function detail_kelurahan($kel_id)
	{					
			$q = $this->db->select('

				a.kel_id as kel_id,			
				a.kel_kode as kel_kode,
				a.kel_nama as kel_nama,
				b.kec_nama as kec_nama

			')
			
			->from('kelurahan a')
			->join('kecamatan b','b.kec_id = a.kec_id')
			->where('a.kel_id', $kel_id);


			
			$result = $q->get()->result();
			return $result;					
	}

	//tambah kecamatan
function add_kecamatan($data)
	{					
		$insert = $this->db->insert('kecamatan', $data);
		return $insert;						
	}

	//tambah balita
function add_balita($data)
	{					
		$insert = $this->db->insert('balita', $data);
		return $insert;						
	}

//balita
function balita()
	{					
			$q = $this->db->select('

				a.balita_id,
				a.posyandu_id,
				a.balita_nik,
				a.balita_nama,
				a.balita_anak_ke,
				a.balita_anak_dari,
				a.balita_jk,
				a.balita_tgl_lahir,
				a.balita_berat_lahir,
				a.balita_ortu_nama,
				a.balita_ortu_nik,
				a.balita_tlpn,
				a.balita_alamat,
				a.balita_rt,
				a.balita_rw,
				a.kel_id,
				IFNULL(c.j_balita,0) as jumlah_balita,

			')
			
			->from('balita a')
			->join('posyandu b','b.posyandu_id = a.posyandu_id')
			->join('(SELECT c.balita_id,
					      count(*) as j_balita
					    from pengukuran c
					    group by c.balita_id) c', 'c.balita_id = a.balita_id', 'left');
			$result = $q->get()->result();
			return $result;
		}

function post_edit_balita($balita_id,$data)
	{
		$this->db->where('balita_id', $balita_id);
		$this->db->update('balita', $data);									
	}
//update ukur status
function balita_update($data_ukur, $balita_id)
	{
		$this->db->where('balita_id', $balita_id);
		$this->db->update('balita', $data_ukur);									
	}

function edit_balita($balita_id)
	{
			$q = $this->db->select('

				a.balita_id,
				a.posyandu_id,
				a.balita_nik,
				a.balita_nama,
				a.balita_anak_ke,
				a.balita_anak_dari,
				a.balita_jk,
				a.balita_tgl_lahir,
				a.balita_berat_lahir,
				a.balita_ortu_nama,
				a.balita_ortu_nik,
				a.balita_tlpn,
				a.balita_alamat,
				a.balita_rt,
				a.balita_rw,
				a.kel_id
				
			')
			
			->from('balita a')
			->join('posyandu b','b.posyandu_id = a.posyandu_id')
			->where('a.balita_id', $balita_id);
			
			$result = $q->get()->result();
			return $result;	
	}

//detail balita
function detail_balita($balita_id)
	{					
			$q = $this->db->select('

				a.balita_id,
				a.posyandu_id,
				a.balita_nik,
				a.balita_nama,
				a.balita_anak_ke,
				a.balita_anak_dari,
				a.balita_jk,
				a.balita_tgl_lahir,
				a.balita_berat_lahir,
				a.balita_ortu_nama,
				a.balita_ortu_nik,
				a.balita_tlpn,
				a.balita_alamat,
				a.balita_rt,
				a.balita_rw,
				a.kel_id,
				b.posyandu_nama

			')
			
			->from('balita a')
			->join('posyandu b','b.posyandu_id = a.posyandu_id')
			->where('a.balita_id', $balita_id);
			$result = $q->get()->result();
			return $result;
		}

//grafik balita
function grafik_balita($balita_id)
	{					
			$q = $this->db->select('

				a.balita_id as balita_id,
				a.balita_nama as balita_nama,
				a.balita_jk as balita_jk,
				b.ukur_usia as ukur_usia,
				b.ukur_bb as ukur_bb

			')
			
			->from('balita a')
			->join('pengukuran b','b.balita_id = a.balita_id')
			->where('a.balita_id', $balita_id);
			$result = $q->get()->result();
			return $result;
		}

//delete balita
function delete_balita($balita_id)
	{
		$this->db->delete('balita', array('balita_id' => $balita_id));
		return true;								
	}

//Puskesmas
function puskesmas()
	{					
			$q = $this->db->select('

				a.puskesmas_id as puskesmas_id,			
				a.puskesmas_nama as puskesmas_nama,
				b.kec_nama as kec_nama,
				IFNULL(c.j_puskesmas,0) as jumlah_puskesmas

			')
			
			->from('puskesmas a')
			->join('kecamatan b','b.kec_id = a.kec_id')
			->join('(SELECT c.puskesmas_id,
					      count(*) as j_puskesmas
					    from posyandu c
					    group by c.puskesmas_id) c', 'c.puskesmas_id = a.puskesmas_id', 'left');
			
			
			$result = $q->get()->result();
			return $result;					
	}

function edit_puskesmas($puskesmas_id)
	{
			$q = $this->db->select('

				a.puskesmas_id as puskesmas_id,			
				a.puskesmas_nama as puskesmas_nama,
				a.kec_id as kec_id

			')
			
			->from('puskesmas a')
			->where('a.puskesmas_id', $puskesmas_id);
			
			
			$result = $q->get()->result();
			return $result;	
	}
		
function post_edit_puskesmas($puskesmas_id,$data)
	{
		$this->db->where('puskesmas_id', $puskesmas_id);
		$this->db->update('puskesmas', $data);									
	}

//tambah puskesmas
function add_puskesmas($data)
	{					
		$insert = $this->db->insert('puskesmas', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;								
	}

//Posyandu
function posyandu()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw,
				b.kel_nama as kel_nama,
				c.puskesmas_nama as puskesmas_nama,
				IFNULL(c.j_posyandu,0)as jumlah_posyandu


			')
			
			->from('posyandu a')
			->join('kelurahan b','b.kel_id = a.kel_id')
			->join('puskesmas c','c.puskesmas_id = a.puskesmas_id')
			->join('(SELECT c.posyandu_id,
					      count(*) as j_posyandu
					    from balita c
					    group by c.posyandu_id) c', 'c.posyandu_id = a.posyandu_id', 'left');


			
			$result = $q->get()->result();
			return $result;					
	}

function detail_posyandu($posyandu_id)
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw,
				b.kel_nama as kel_nama,
				c.puskesmas_nama as puskesmas_nama


			')
			
			->from('posyandu a')
			->join('kelurahan b','b.kel_id = a.kel_id')
			->join('puskesmas c','c.puskesmas_id = a.puskesmas_id')
			->where('a.posyandu_id', $posyandu_id);


			
			$result = $q->get()->result();
			return $result;					
	}

function edit_posyandu($posyandu_id)
	{
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,
				a.kel_id as kel_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw,
				b.kel_nama as kel_nama,
				c.puskesmas_nama as puskesmas_nama

			')
			
			->from('posyandu a')
			->join('kelurahan b','b.kel_id = a.kel_id')
			->join('puskesmas c','c.puskesmas_id = a.puskesmas_id')
			->where('a.posyandu_id', $posyandu_id);
			
			
			$result = $q->get()->result();
			return $result;	
	}

function post_edit_posyandu($posyandu_id,$data)
	{
		$this->db->where('posyandu_id', $posyandu_id);
		$this->db->update('posyandu', $data);									
	}


//tambah posyandu
function add_posyandu($data)
	{					
		$insert = $this->db->insert('posyandu', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;					
	}


//Jadwal
function jadwal()
	{					
			$q = $this->db->select('

				a.jadwal_id as jadwal_id,		
				a.jadwal_bulan as jadwal_bulan,
				a.jadwal_tahun as jadwal_tahun,
				a.jadwal_tgl as jadwal_tgl,
				a.jadwal_waktu as jadwal_waktu,
				a.jadwal_kegiatan as jadwal_kegiatan,
				b.posyandu_nama as posyandu_nama
				
			')
			
			->from('jadwal a')
			->join('posyandu b','b.posyandu_id = a.posyandu_id');


			
			$result = $q->get()->result();
			return $result;					
	}

function edit_jadwal($jadwal_id)
	{
			$q = $this->db->select('

				a.jadwal_id as jadwal_id,	
				a.posyandu_id as posyandu_id,	
				a.jadwal_bulan as jadwal_bulan,
				a.jadwal_tahun as jadwal_tahun,
				a.jadwal_tgl as jadwal_tgl,
				a.jadwal_waktu as jadwal_waktu,
				a.jadwal_kegiatan as jadwal_kegiatan,
				b.posyandu_nama as posyandu_nama
				
			')
			
			->from('jadwal a')
			->join('posyandu b','b.posyandu_id = a.posyandu_id')
			->where('a.jadwal_id', $jadwal_id);
			
			$result = $q->get()->result();
			return $result;	
	}

function post_edit_jadwal($jadwal_id,$data)
	{
		$this->db->where('jadwal_id', $jadwal_id);
		$this->db->update('jadwal', $data);									
	}

//tambah jadwal
function add_jadwal($data)
	{					
		$insert = $this->db->insert('jadwal', $data);
		return $insert;						
	}

//delete jadwal
function delete_jadwal($jadwal_id)
	{
		$this->db->delete('jadwal', array('jadwal_id' => $jadwal_id));
		return true;								
	}


//Pengukuran
function pengukuran()
	{					
			$q = $this->db->select('

				a.ukur_id as ukur_id,
				a.ukur_usia as ukur_usia,
				b.jadwal_tgl as jadwal_tgl,
				c.balita_nama as balita_nama,
				d.posyandu_nama as posyandu_nama
				
			')
			
			->from('pengukuran a')
			->join('jadwal b','b.jadwal_id = a.jadwal_id')
			->join('balita c','c.balita_id = a.balita_id')
			->join('posyandu d','d.posyandu_id = c.posyandu_id');


			
			$result = $q->get()->result();
			return $result;					
	}

function edit_pengukuran($ukur_id)
	{
			$q = $this->db->select('

				a.ukur_id as ukur_id,
				a.jadwal_id as jadwal_id,
				a.balita_id as balita_id,
				a.ukur_usia as ukur_usia,
				a.ukur_bb as ukur_bb,
				a.ukur_tb as ukur_tb,
				a.ukur_cara_ukur_tb as ukur_cara_ukur_tb,
				a.ukur_vitamin as ukur_vitamin,
				a.ukur_pmt_sts as ukur_pmt_sts,
				a.ukur_pmt_uraian as ukur_pmt_uraian,
				a.ukur_catatan as ukur_catatan,
				a.ukur_status_gizi as ukur_status_gizi

			')
			
			->from('pengukuran a')
			->where('a.ukur_id', $ukur_id);
			
			$result = $q->get()->result();
			return $result;	
	}

function post_edit_pengukuran($ukur_id,$data)
	{
		$this->db->where('ukur_id', $ukur_id);
		$this->db->update('pengukuran', $data);									
	}

//Pengukuran
function detail_pengukuran($ukur_id)
	{					
			$q = $this->db->select('

				a.ukur_id as ukur_id,
				a.ukur_usia as ukur_usia,
				a.ukur_bb as ukur_bb,
				a.ukur_tb as ukur_tb,
				a.ukur_cara_ukur_tb as ukur_cara_ukur_tb,
				a.ukur_vitamin as ukur_vitamin,
				a.ukur_pmt_sts as ukur_pmt_sts,
				a.ukur_pmt_uraian as ukur_pmt_uraian,
				a.ukur_catatan as ukur_catatan,
				a.ukur_status_gizi as ukur_status_gizi,
				b.jadwal_tgl as jadwal_tgl,
				c.balita_nama as balita_nama,
				c.balita_nama,
				c.balita_anak_ke,
				c.balita_anak_dari,
				c.balita_jk,
				c.balita_tgl_lahir,
				c.balita_berat_lahir,
				c.balita_ortu_nama,
				c.balita_ortu_nik,
				c.balita_tlpn,
				c.balita_alamat,
				c.balita_rt,
				c.balita_rw,
				d.posyandu_nama as posyandu_nama
				
			')
			
			->from('pengukuran a')
			->join('jadwal b','b.jadwal_id = a.jadwal_id')
			->join('balita c','c.balita_id = a.balita_id')
			->join('posyandu d','d.posyandu_id = c.posyandu_id')
			->where('a.ukur_id', $ukur_id);
			
			$result = $q->get()->result();
			return $result;					
	}

//tambah pengukuran
function add_pengukuran($data)
	{					
		$insert = $this->db->insert('pengukuran', $data);
		return $insert;						
	}

//delete pengukuran
function delete_pengukuran($ukur_id)
	{
		$this->db->delete('pengukuran', array('ukur_id' => $ukur_id));
		return true;								
	}

//kader
function kader()
	{					
			$q = $this->db->select('

				a.kader_id as kader_id,
				a.kader_nama as kader_nama,
				b.posyandu_nama as posyandu_nama
				
			')
			
			->from('kader a')
			->join('posyandu b','b.posyandu_id = a.posyandu_id');
			
			$result = $q->get()->result();
			return $result;					
	}

//tambah kader
function add_kader($data)
	{					
		$insert = $this->db->insert('kader', $data);
		return $insert;						
	}


//--------------------------------------------------------LAPORAN
//kelurahan
function getKelurahan($kec_id)
	{		

		$q = $this->db->select('
				a.kel_id as kel_id,			
				a.kel_nama as kel_nama
			')
			
			->from('kelurahan a')
			->where('a.kec_id', $kec_id)
			;			
				
			$result = $q->get()->result();
			return $result;
				
	}

//posyandu
function getPosyandu($kel_id)
	{		

		$q = $this->db->select('
				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama
			')
			
			->from('posyandu a')
			->where('a.kel_id', $kel_id)
			;			
				
			$result = $q->get()->result();
			return $result;
				
	}

function rekap_pb()
	{					

		$q = $this->db->select('

				a.ukur_id as ukur_id,
				a.ukur_usia as ukur_usia,
				a.ukur_bb as ukur_bb,
				a.ukur_tb as ukur_tb,
				b.jadwal_tgl as jadwal_tgl,
				c.balita_nama as balita_nama,
				c.balita_ortu_nama as balita_ortu_nama,
				c.balita_alamat as balita_alamat,
				d.posyandu_nama as posyandu_nama
				
			')
			
			->from('pengukuran a')
			->join('jadwal b','b.jadwal_id = a.jadwal_id')
			->join('balita c','c.balita_id = a.balita_id')
			->join('posyandu d','d.posyandu_id = c.posyandu_id');	

		$result = $q->get()->result();
		return $result;				
	}

function loadDataTableRekapPB($kec_id,$kel_id,$posyandu_id,$bulan,$tahun)
	{					

		$q = $this->db->select('

				a.ukur_id as ukur_id,
				a.ukur_usia as ukur_usia,
				a.ukur_bb as ukur_bb,
				a.ukur_tb as ukur_tb,
				b.jadwal_tgl as jadwal_tgl,
				c.balita_nama as balita_nama,
				c.balita_ortu_nama as balita_ortu_nama,
				c.balita_alamat as balita_alamat,
				d.posyandu_nama as posyandu_nama
				
			')
			
			->from('pengukuran a')
			->join('jadwal b','b.jadwal_id = a.jadwal_id')
			->join('balita c','c.balita_id = a.balita_id')
			->join('posyandu d','d.posyandu_id = c.posyandu_id')
			->join('kelurahan e','e.kel_id = d.kel_id')
			->where('e.kec_id',$kec_id)
			->where('e.kel_id',$kel_id)
			->where('d.posyandu_id',$posyandu_id)
			->where('b.jadwal_bulan',$bulan)
			->where('b.jadwal_tahun',$tahun);	

		$result = $q->get()->result();
		return $result;				
	}

function grafik_pb()
	{					

		$q = $this->db->select('

				a.ukur_id as ukur_id,
				a.ukur_usia as ukur_usia,
				a.ukur_bb as ukur_bb,
				a.ukur_tb as ukur_tb,
				b.balita_nama as balita_nama,
				b.balita_ortu_nama as balita_ortu_nama,
				b.balita_alamat as balita_alamat
				
			')
			
			->from('pengukuran a')
			->join('balita b','b.balita_id = a.balita_id');	

		$result = $q->get()->result();
		return $result;				
	}

function resume_kp()
	{					

		$q = $this->db->select('

				a.posyandu_id as posyandu_id,
				a.posyandu_nama as posyandu_nama,
				Sum( Case 
				            When (b.balita_jk = "L") Then 1
				            Else 0 End ) as jumlah_laki,
				Sum( Case 
				            When (b.balita_jk = "P") Then 1
				            Else 0 End ) as jumlah_perempuan,
				
			')
			
			->from('posyandu a')
			->join('balita b','b.posyandu_id = a.posyandu_id');

		$result = $q->get()->result();
		return $result;					
	}

function loadDataTableResumeKP($kec_id,$kel_id,$balita_date_entry)
	{					

		$q = $this->db->select('

				a.posyandu_id as posyandu_id,
				a.posyandu_nama as posyandu_nama,
				Sum( Case 
				            When (b.balita_jk = "L") Then 1
				            Else 0 End ) as jumlah_laki,
				Sum( Case 
				            When (b.balita_jk = "P") Then 1
				            Else 0 End ) as jumlah_perempuan,
				
			')
			
			->from('posyandu a')
			->join('balita b','b.posyandu_id = a.posyandu_id')
			->join('kelurahan c','c.kel_id = b.kel_id')
			->where('c.kec_id',$kec_id)
			->where('c.kel_id',$kel_id)
			->where("DATE_FORMAT(b.balita_date_entry, '%m-%Y') = ", $balita_date_entry);

		$result = $q->get()->result();
		return $result;					
	}

	//detail_kader
	function edit_kader($kader_id)
	{					
			$q = $this->db->select('
				a.posyandu_id,
				a.kader_id as kader_id,
				a.kader_nama as kader_nama,
				b.posyandu_nama as posyandu_nama
				
			')
			
			->from('kader a')
			->join('posyandu b','b.posyandu_id = a.posyandu_id')
			->where('a.kader_id',$kader_id);
			
			$result = $q->get()->result();
			return $result;					
	}

	function post_edit_kader($kader_id,$data)
	{
		$this->db->where('kader_id', $kader_id);
		$this->db->update('kader', $data);									
	}

	//delete kader
	function delete_kader($kader_id)
	{
		$this->db->delete('kader', array('kader_id' => $kader_id));
		return true;								
	}

	//delete kecamatan
	function delete_kecamatan($kec_id)
	{
		$this->db->delete('kecamatan', array('kec_id' => $kec_id));
		return true;								
	}

	//delete kelurahan
	function delete_kelurahan($kel_id)
	{
		$this->db->delete('kelurahan', array('kel_id' => $kel_id));
		return true;								
	}

	//delete puskesmas
	function delete_puskesmas($puskesmas_id)
	{
		$this->db->delete('puskesmas', array('puskesmas_id' => $puskesmas_id));
		return true;								
	}

	//delete posyandu
	function delete_posyandu($posyandu_id)
	{
		$this->db->delete('posyandu', array('posyandu_id' => $posyandu_id));
		return true;								
	}

	function loadDataTablePenyuluhan($kec_id,$kel_id,$posyandu_id,$bulan,$tahun)
	{					

		$q = $this->db->select('

				a.ukur_id as ukur_id,
				a.ukur_usia as ukur_usia,
				a.ukur_bb as ukur_bb,
				a.ukur_tb as ukur_tb,
				b.jadwal_tgl as jadwal_tgl,
				c.balita_nama as balita_nama,
				c.balita_ortu_nama as balita_ortu_nama,
				c.balita_alamat as balita_alamat,
				d.posyandu_nama as posyandu_nama
				
			')
			
			->from('pengukuran a')
			->join('jadwal b','b.jadwal_id = a.jadwal_id')
			->join('balita c','c.balita_id = a.balita_id')
			->join('posyandu d','d.posyandu_id = c.posyandu_id')
			->join('kelurahan e','e.kel_id = d.kel_id')
			->where('e.kec_id',$kec_id)
			->where('e.kel_id',$kel_id)
			->where('d.posyandu_id',$posyandu_id)
			->where('b.jadwal_bulan',$bulan)
			->where('b.jadwal_tahun',$tahun);	

		$result = $q->get()->result();
		return $result;				
	}


//---------------------------------------------------LAPORAN
function jb_kematian()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function balita_data($balita_id)
	{					
			$q = $this->db->select('

				a.balita_id,
				a.balita_nama

			')
			
			->from('balita a')
			->where_not_in('a.balita_id', $balita_id);;
			$result = $q->get()->result();
			return $result;
		}

function jb_kematian_data()
	{					
			$q = $this->db->select('

				a.kematian_id as kematian_id,
				a.kematian_tgl as kematian_tgl,
				a.kematian_usia as kematian_usia,
				b.balita_id as balita_id,
				b.balita_nama as balita_nama,
				b.balita_tgl_lahir as balita_tgl_lahir

			')
			
			->from('kematian a')
			->join('balita b', 'b.balita_id = a.balita_id');


			
			$result = $q->get()->result();
			return $result;					
	}

function balita_usia($balita_id)
	{					
			$q = $this->db->select('

				a.balita_id as balita_id,
				a.balita_tgl_lahir as balita_tgl_lahir,

			')
			
			->from('balita a')
			->where('a.balita_id', $balita_id);
			$result = $q->get()->result();
			return $result;
		}

function add_kematian($data)
	{					
		$insert = $this->db->insert('kematian', $data);
		return $insert;						
	}

function jb_oralit()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_gizi_buruk()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_status_gizi()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_gizi()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_gakin()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_lulus_asi_eksklusif()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_asi_eksklusif()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_vitamin()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_absen_bulan_ini()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_ditimbang()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_pertama()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_abses_bulan_lalu()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_tidak_naik_bb()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_naik_bb()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_kms()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw


			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}

function jb_ukur_bulan_ini()
	{					
			$q = $this->db->select('

				a.posyandu_id as posyandu_id,			
				a.posyandu_nama as posyandu_nama,
				a.posyandu_alamat as posyandu_alamat,
				a.posyandu_rt as posyandu_rt,
				a.posyandu_rw as posyandu_rw

			')
			
			->from('posyandu a');


			
			$result = $q->get()->result();
			return $result;					
	}														



}