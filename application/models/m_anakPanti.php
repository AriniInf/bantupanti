<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anakPanti extends CI_Model 
{	

	public function listAnak(){
		$hasil = $this->db->get('anakpanti');
		return $hasil;
	}

	public function diary(){
		$query =  $this->db->query("SELECT sap.dy_id, ap.ap_id, sap.ap_id, ap.nama as anak, sap.diary, ap.tanggal from anakpanti ap right join diary sap on ap.ap_id = sap.ap_id");
		return $query->result();
	}

	public function listDiarymu($id){
		$query =  $this->db->query("SELECT sap.dy_id, ap.ap_id, sap.ap_id, ap.nama as anak, sap.diary, ap.tanggal from anakpanti ap right join diary sap on ap.ap_id = sap.ap_id where sap.ap_id ='".$id."'");
		return $query->result();
	}

	function edit_diary($data, $id){
		$this->db->where('dy_id',$id);
		$this->db->update('diary', $data);
		return TRUE;
	}

	public function tambahDiary($data,$table){
		$query =  $this->db->insert($table, $data);
	}

	public function kegiatanpanti(){
		
			$hasil = $this->db->query("SELECT kp_id, ad.ad_id, pp.nama as pengurus, kp.nama as kegiatan, penjelasan, tanggal, kp.foto from kegiatanpanti kp join admin ad on kp.ad_id = ad.ad_id join penguruspanti pp on ad.pp_id = pp.pp_id");
				return $hasil;
		
	}
	
		function hapusDiary($id){
        $this->db->query("delete from diary where dy_id='".$id."'");
	}


	public function profile($ap_id){
	
		$query = $this->db->query("SELECT * FROM anakpanti where ap_id='".$ap_id."'");
		return $query; 
	}



	function update_profil($data, $id){
		$this->db->where('ap_id',$id);
		$this->db->update('anakpanti', $data);
		return TRUE;
	}

	public function komen($data,$table){
		$query = $this->db->insert($table, $data);
	}
	public function listKomentarAdmin($id){
		$hasil = $this->db->query("SELECT DISTINCT(ak.kp_id), ad.ad_id, komenad, pp.nama as pengurus, tanggalad from kegiatanpanti kp join adkomen ak on ak.ad_id = kp.ad_id join admin ad on ak.ad_id = ad.ad_id join penguruspanti pp on ad.pp_id = pp.pp_id where ak.kp_id='".$id."'");
		return $hasil->result();
	}

	public function listKomentarAnakPanti($id){
		$hasil = $this->db->query("SELECT DISTINCT(ak.kp_id), ap.ap_id, komenap, ap.nama as anak, tanggalap from apkomen ak join anakpanti ap on ak.ap_id = ap.ap_id where ak.kp_id='".$id."'");
		return $hasil->result();
	}

	public function listKomentarDonatur($id){
		$hasil = $this->db->query("SELECT DISTINCT(ak.kp_id), da.do_id, komendo, da.nama as donatur, tanggaldo from dokomen ak join donatur da on ak.do_id = da.do_id where ak.kp_id='".$id."'");
		return $hasil->result();
	}

	function ubahkp($data, $id){
		$this->db->where('kp_id',$id);
		$this->db->update('kegiatanpanti', $data);
		return TRUE;
	}


}
