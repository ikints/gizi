<?php
class Puskesmas_model extends CI_Model {

//Puskesmas
function puskesmas($id_user)
	{					
			$q = $this->db->select('

				a.puskesmas_id as puskesmas_id,			
				a.puskesmas_nama as puskesmas_nama,
				b.kec_nama as kec_nama

			')
			
			->from('puskesmas a')
			->join('kecamatan b','b.kec_id = a.kec_id')
			->where('a.puskesmas_id', $id_user);
			
			
			$result = $q->get()->result();
			return $result;					
	}

//Posyandu
function posyandu($id_user)
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
			->join('puskesmas d','d.puskesmas_id = a.puskesmas_id')
			->where('d.puskesmas_id', $id_user);


			
			$result = $q->get()->result();
			return $result;					
	}

//balita
function balita($id_user)
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
					    group by c.balita_id) c', 'c.balita_id = a.balita_id', 'left')
			->join('puskesmas c','c.puskesmas_id = b.puskesmas_id')
			->where('c.puskesmas_id', $id_user);
			$result = $q->get()->result();
			return $result;
		}

//Jadwal
function jadwal($id_user)
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
			->join('posyandu b','b.posyandu_id = a.posyandu_id')
			->join('puskesmas c','c.puskesmas_id = b.puskesmas_id')
			->where('c.puskesmas_id', $id_user);


			
			$result = $q->get()->result();
			return $result;					
	}

//Pengukuran
function pengukuran($id_user)
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
			->join('posyandu d','d.posyandu_id = c.posyandu_id')
			->join('puskesmas e','e.puskesmas_id = d.puskesmas_id')
			->where('e.puskesmas_id', $id_user);


			
			$result = $q->get()->result();
			return $result;					
	}

//kader
function kader($id_user)
	{					
			$q = $this->db->select('

				a.kader_id as kader_id,
				a.kader_nama as kader_nama,
				b.posyandu_nama as posyandu_nama
				
			')
			
			->from('kader a')
			->join('posyandu b','b.posyandu_id = a.posyandu_id')
			->join('puskesmas c','c.puskesmas_id = b.puskesmas_id')
			->where('c.puskesmas_id', $id_user);
			
			$result = $q->get()->result();
			return $result;					
	}

//--------------------------------------------------------LAPORAN
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

//Kelurahan
function kelurahan($id_user)
	{					
			$q = $this->db->select('

				a.kel_id as kel_id,			
				a.kel_kode as kel_kode,
				a.kel_nama as kel_nama

			')
			
			->from('kelurahan a')
			->join('kecamatan b','b.kec_id = a.kec_id')
			->join('puskesmas c','c.kec_id = a.kec_id')
			->where('c.puskesmas_id', $id_user);
			
			$result = $q->get()->result();
			return $result;					
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

function loadDataTableRekapPB($posyandu_id,$bulan,$tahun)
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
			->where('d.posyandu_id',$posyandu_id)
			->where('b.jadwal_bulan',$bulan)
			->where('b.jadwal_tahun',$tahun);	

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

function loadDataTableResumeKP($kel_id,$balita_date_entry)
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
			->where('c.kel_id',$kel_id)
			->where("DATE_FORMAT(b.balita_date_entry, '%m-%Y') = ", $balita_date_entry);

		$result = $q->get()->result();
		return $result;					
	}


}