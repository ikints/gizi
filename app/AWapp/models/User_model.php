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
//kecamatan
function kecamatan()
	{					
			$q = $this->db->select('

				a.kec_id as kec_id,			
				a.kec_kode as kec_kode,
				a.kec_nama as kec_nama

			')
			
			->from('kecamatan a');
			
			
			$result = $q->get()->result();
			return $result;					
	}
//Kelurahan
function kelurahan()
	{					
			$q = $this->db->select('

				a.kel_id as kel_id,			
				a.kel_kode as kel_kode,
				a.kel_nama as kel_nama,
				b.kec_nama as kec_nama

			')
			
			->from('kelurahan a')
			->join('kecamatan b','b.kec_id = a.kec_id');
			
			
			$result = $q->get()->result();
			return $result;					
	}	
//tambah kelurahan
function add_kelurahan($data)
	{					
		$insert = $this->db->insert('kelurahan', $data);
		return $insert;						
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

				d.balita_id,
				d.posyandu_id,
				d.balita_nik,
				d.balita_nama,
				d.balita_anak_ke,
				d.balita_anak_dari,
				d.balita_jk,
				d.balita_tgl_lahir,
				d.balita_berat_lahir,
				d.balita_ortu_nama,
				d.balita_ortu_nik,
				d.balita_tlpn,
				d.balita_alamat,
				d.balita_rt,
				d.balita_rw,
				d.kel_id

			')
			
			->from('balita d');
			$result = $q->get()->result();
			return $result;
		}
//Puskesmas
function puskesmas()
	{					
			$q = $this->db->select('

				a.puskesmas_id as puskesmas_id,			
				a.puskesmas_nama as puskesmas_nama,
				b.kec_nama as kec_nama

			')
			
			->from('puskesmas a')
			->join('kecamatan b','b.kec_id = a.kec_id');
			
			
			$result = $q->get()->result();
			return $result;					
	}


		

//tambah puskesmas
function add_puskesmas($data)
	{					
		$insert = $this->db->insert('puskesmas', $data);
		return $insert;						
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
				c.puskesmas_nama as puskesmas_nama


			')
			
			->from('posyandu a')
			->join('kelurahan b','b.kel_id = a.kel_id')
			->join('puskesmas c','c.puskesmas_id = a.puskesmas_id');


			
			$result = $q->get()->result();
			return $result;					
	}


//tambah posyandu
function add_posyandu($data)
	{					
		$insert = $this->db->insert('posyandu', $data);
		return $insert;						
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

//tambah jadwal
function add_jadwal($data)
	{					
		$insert = $this->db->insert('jadwal', $data);
		return $insert;						
	}

//Pengukuran
function pengukuran()
	{					
			$q = $this->db->select('

				a.ukur_usia as ukur_usia,
				b.jadwal_tgl as jadwal_tgl,
				c.balita_nama as balita_nama
				
			')
			
			->from('pengukuran a')
			->join('jadwal b','b.jadwal_id = a.jadwal_id')
			->join('balita c','c.balita_id = a.balita_id');


			
			$result = $q->get()->result();
			return $result;					
	}

//tambah pengukuran
function add_pengukuran($data)
	{					
		$insert = $this->db->insert('pengukuran', $data);
		return $insert;						
	}

}