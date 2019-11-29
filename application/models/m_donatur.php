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

	public function kegiatanPanti(){
	
		return $this->db->get('kegiatanpanti');
	}
	public function diary(){
		$query =  $this->db->query("SELECT dy.dy_id, dy.ap_id, ap.nama, dy.diary, dy.tanggal from anakpanti ap left join diary dy on ap.ap_id = dy.ap_id");
		return $query;
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
