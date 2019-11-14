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
		return $this->db->get('bantupanti.penguruspanti');
	}

	public function berdonasi(){
		return $this->db->get('bantupanti.donasi');
	}

	public function kegiatanPanti(){
	
		return $this->db->get('bantupanti.kegiatanpanti');
	}
	public function diary(){
		$query =  $this->db->query("SELECT sap_id, sap.ap_id, ap_nama, isistory, tanggalstory from anakpanti ap left join storyanakpanti sap on ap.ap_id = sap.ap_id");
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

	// public function history($data){
	// 	return $this->db->get('bantupanti.donasi',$data);
	// }

}
