<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anakPanti extends CI_Model 
{	

	public function listAnak(){
		$hasil = $this->db->get('anakpanti');
		return $hasil;
	}

	public function listStory(){
		$query =  $this->db->query("SELECT sap_id, sap.ap_id, ap_nama, isistory, tanggalstory from anakpanti ap left join storyanakpanti sap on ap.ap_id = sap.ap_id");
		return $query;
	}

	public function tambahStory($data,$table){
		$query =  $this->db->insert($table, $data);
	}

	public function tambahAnak($data,$table){
		$query =  $this->db->insert($table, $data);
	}

}
