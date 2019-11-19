<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anakPanti extends CI_Model 
{	

	public function listAnak(){
		$hasil = $this->db->get('anakpanti');
		return $hasil;
	}

	public function listDiary(){
		$query =  $this->db->query("SELECT sap.dy_id, ap.ap_id, sap.ap_id, ap.nama as anak, sap.diary, ap.tanggal from anakpanti ap left join diary sap on ap.ap_id = sap.ap_id");
		return $query->result();
	}

	public function tambahDiary($data,$table){
		$query =  $this->db->insert($table, $data);
	}

	public function kegiatan_panti(){
		$hasil = $this->db->query("SELECT kp_id, ad.ad_id, pp.nama as pengurus, kp.nama as kegiatan, penjelasan, tanggal from kegiatanpanti kp join admin ad on kp.ad_id = ad.ad_id join penguruspanti pp on ad.pp_id = pp.pp_id");
			return $hasil;
	}


}
