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

				a.posyandu_id as pposyandu_id,			
				a.posyandu_nama as posyandu_nama

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

}