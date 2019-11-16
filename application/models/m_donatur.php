<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_donatur extends CI_Model 
{	

	public function listDonatur(){
		$hasil = $this->db->get('donatur');
		return $hasil;
	}

	public function listanak(){
		return $this->db->get('anakpanti');
	}

	public function pengurus(){
		return $this->db->get('penguruspanti');
	}

	// public function berdonasi(){
	// 	return $this->db->get('bantupantiar.donasi');
	// }

	public function kegiatanPanti(){
	
		return $this->db->get('kegiatanpanti');
	}
	public function diary(){
		$query =  $this->db->query("SELECT dy.dy_id, dy.ap_id, ap.nama, dy.diary, dy.tanggal from anakpanti ap left join diary dy on ap.ap_id = dy.ap_id");
		return $query;
	}

	// public function simpan_donasi($data,$table){
	// 	return $this->db->insert($table, $data);
	// }
	// public function simpan_donasi($data){
	// 	return $this->db->insert('bantupanti.donasi',$data);
	// }

	public function tambahdonasi($data,$table){
		$query =  $this->db->insert($table, $data);
	}

	public function tambahkomenkegiatan($data,$table){
		$query =  $this->db->insert($table, $data);
	}

	public function history(){
		$query =  $this->db->query("SELECT dn.tanggal, dn.nominal, dn.bukti, dn.keterangan from donatur do inner join donasi_ dn on dn.do_id = do.do_id");
		return $query;
	
	}

}
