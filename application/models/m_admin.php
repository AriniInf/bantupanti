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
		$hasil = $this->db->query("SELECT kp_id, ad_id, kp_namakegiatan, kp_penjelasan, kp_tanggal from kegiatanpanti");
			return $hasil;
	}
		
}
