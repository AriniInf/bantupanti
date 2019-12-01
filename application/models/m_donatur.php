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
		$hasil = $this->db->query("SELECT kp_id, ad.ad_id, pp.nama as pengurus, kp.nama, penjelasan, tanggal, kp.foto from kegiatanpanti kp join admin ad on kp.ad_id = ad.ad_id join penguruspanti pp on ad.pp_id = pp.pp_id");
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
}
?>
