<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model 
{
	public function listAllDonasi(){
			$hasil = $this->db->query("SELECT dn_id, dn.do_id, do_nama, dn_nominal, dn_tanggal from bantupantiar.donasi dn left join bantupantiar.donatur do on dn.do_id = dn.do_id");
			return $hasil;
	}

	function hapusDonasi($id){
        $this->db->query("delete from bantupantiar.donasi where dn_id='".$id."'");
	}

	public function listAllKegiatan(){
		$hasil = $this->db->query("SELECT kp_id, ad.ad_id, pp_nama, kp_namakegiatan, kp_penjelasan, kp_tanggal from bantupantiar.kegiatanpanti kp join bantupantiar.admin ad on kp.ad_id = ad.ad_id join bantupantiar.penguruspanti pp on ad.pp_id = pp.pp_id");
			return $hasil;
	}

	public function listDonatur(){
		$hasil = $this->db->get('bantupanti.donatur');
		return $hasil;
	}

	public function listPengurus()
	{
		$pengurusPanti=$this->db->get("bantupantiar.penguruspanti");
		return $pengurusPanti;
	}
	public function listanak(){
		return $this->db->get('anakpanti');
	}
	public function tambahAnak($data,$table){
		$query =  $this->db->insert($table, $data);
	}
	
	public function tambahPengurus($data,$table){
		$query =  $this->db->insert($table, $data);
	}
}
