<?php
class Puskesmas_model extends CI_Model {

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


}