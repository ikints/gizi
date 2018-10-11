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
				a.kel_id,
				a.kec_id

			')
			
			->from('balita a');
			
			
			$result = $q->get()->result();
			return $result;					
	}


	function posyandu()
	{					
			$q = $this->db->select('

				a.posyandu_id,
				a.kel_id,
				a.puskesmas_id,
				a.posyandu_nama,
				a.posyandu_alamat,
				a.posyandu_rt,
				a.posyandu_rw

			')
			
			->from('posyandu a');
			
			
			$result = $q->get()->result();
			return $result;					
	}

}