<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anakPanti extends CI_Model 
{	

	public function listAnak(){
		$hasil = $this->db->get('anakpanti');
		return $hasil;
	}

	public function listStory(){
		$query =  $this->db->query("SELECT sap.dy_id, ap.ap_id, sap.ap_id, ap.nama, sap.diary, ap.tanggal from anakpanti ap left join diary sap on ap.ap_id = sap.ap_id");
		return $query;
	}

	public function tambahStory($data,$table){
		$query =  $this->db->insert($table, $data);
	}

	public function tambahAnak($data,$table){
		$query =  $this->db->insert($table, $data);
	}

}
