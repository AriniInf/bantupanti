<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anakPanti extends CI_Model 
{	

	public function listAnak(){
		$hasil = $this->db->get('anakpanti');
		return $hasil;
	}

	public function listDiary(){
		$query =  $this->db->query("SELECT sap.dy_id, ap.ap_id, sap.ap_id, ap.nama as anak, sap.diary, ap.tanggal from anakpanti ap right join diary sap on ap.ap_id = sap.ap_id");
		return $query->result();
	}

	public function listDiarymu($id){
		$query =  $this->db->query("SELECT sap.dy_id, ap.ap_id, sap.ap_id, ap.nama as anak, sap.diary, ap.tanggal from anakpanti ap right join diary sap on ap.ap_id = sap.ap_id where sap.ap_id ='".$id."'");
		return $query->result();
	}


	public function tambahDiary($data,$table){
		$query =  $this->db->insert($table, $data);
	}

	public function kegiatan_panti(){
		$hasil = $this->db->query("SELECT kp_id, ad.ad_id, pp.nama as pengurus, kp.nama as kegiatan, penjelasan, tanggal, kp.foto from kegiatanpanti kp join admin ad on kp.ad_id = ad.ad_id join penguruspanti pp on ad.pp_id = pp.pp_id");
			return $hasil;
	}

		function hapusDiary($id){
        $this->db->query("delete from diary where dy_id='".$id."'");
	}
	public function komen($data,$table){
		$query = $this->db->insert($table, $data);
	}
	public function listKomentar($id){
		$hasil = $this->db->query("SELECT ak.kp_id, ad.ad_id, komen, pp.nama as pengurus, ak.tanggal from kegiatanpanti kp join adkomen ak on ak.ad_id = kp.ad_id join admin ad on ak.ad_id = ad.ad_id join penguruspanti pp on ad.pp_id = pp.pp_id where ak.kp_id='".$id."'");
			return $hasil;
	}

}
