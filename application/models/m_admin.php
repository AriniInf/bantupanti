<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model 
{
	public function listAllDonasi(){
			$hasil = $this->db->query("SELECT dn_id, dn.do_id, do_nama, dn_nominal, dn_tanggal from donasi dn left join donatur do on dn.do_id = dn.do_id");
			return $hasil;
	}

	function hapusDonasi($id){
        $this->db->query("delete from donasi where dn_id='".$id."'");
	}
}
