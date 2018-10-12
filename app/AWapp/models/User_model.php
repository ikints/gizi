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
				d.kel_id,
				d.kec_id

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


	 function  rev_date($tgl){
			$t=explode("/",$tgl);
			$tanggal  =  $t[2];
			$bulan    =  $t[1];
			$tahun    =  $t[0];
			return  $tahun.'/'.$bulan.'/'.$tanggal;

        }

    //tambah kader
	function add_kader($data)
		{					
			$insert = $this->db->insert('kader', $data);
			return $insert;						
		}

	//kader
function kader()
	{					
			$q = $this->db->select('

				a.kader_id,
				b.posyandu_nama,
				a.kader_nama

			')
			
			->from('kader a')
			->join('posyandu b','a.posyandu_id=b.posyandu_id');
			$result = $q->get()->result();
			return $result;
		}

}