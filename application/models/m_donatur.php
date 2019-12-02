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


	public function kegiatanpanti(){
		
		$hasil = $this->db->query("SELECT kp_id, ad.ad_id, pp.nama as pengurus, kp.nama as kegiatan, penjelasan, tanggal, kp.foto from kegiatanpanti kp join admin ad on kp.ad_id = ad.ad_id join penguruspanti pp on ad.pp_id = pp.pp_id");
		return $hasil;
	}
	
	
	public function diary(){
		$query =  $this->db->query("SELECT sap.dy_id, ap.ap_id, sap.ap_id, ap.nama as anak, sap.diary, ap.tanggal from anakpanti ap right join diary sap on ap.ap_id = sap.ap_id");
		return $query->result();
	}


	public function tambahdonasi($data,$table){
		$query = $this->db->insert($table, $data);
	}
	public function tambahkomen($data,$table){
		$query = $this->db->insert($table, $data);
	}

	public function history($id){
		$query =  $this->db->query("SELECT do.nama, dn.tanggal, dn.nominal, dn.bukti, dn.keterangan from donatur do inner join donasi_ dn on dn.do_id = do.do_id where dn.do_id = '".$id."'");
		return $query;
	
	}
	public function profile($do_id){
	
		$query = $this->db->query("SELECT * FROM donatur where do_id='".$do_id."'");
		return $query; 
	}

	public function register($data,$table){
		$query = $this->db->insert($table, $data);
	}

	function update_profil($data, $id){
		$this->db->where('do_id',$id);
		$this->db->update('donatur', $data);
		return TRUE;
	}

	public function komen($data,$table){
		$query = $this->db->insert($table, $data);
	}

	public function listKomentar($id){
		$hasil = $this->db->query("SELECT ak.komen, ak.tanggal, dk.komen, dk.tanggal, pk.komen, pk.tanggal from adkomen ak, dokomen dk, apkomen pk, kegiatanpanti kp where ak.kp_id = kp.kp_id OR dk.kp_id=kp.kp_id OR pk.kp_id=kp.kp_id");
			return $hasil->result();
	}

	function ubahkp($data, $id){
		$this->db->where('kp_id',$id);
		$this->db->update('kegiatanpanti', $data);
		return TRUE;
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
}
?>
