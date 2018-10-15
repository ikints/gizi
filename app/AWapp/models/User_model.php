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
			->join('posyandu b','b.posyandu_id = a.posyandu_id');
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

//Pengukuran
function detail_pengukuran($ukur_id)
	{					
			$q = $this->db->select('

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

}