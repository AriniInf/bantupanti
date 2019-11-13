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
		$hasil = $this->db->query("SELECT kp_id, ad.ad_id, nama, namakegiatan, penjelasan, tanggal from bantupanti.kegiatanpanti kp join bantupanti.admin ad on kp.ad_id = ad.ad_id join bantupanti.penguruspanti pp on ad.pp_id = pp.pp_id");
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
	public function tambah_kegiatan($data,$table){
		$query = $this->db->insert($table, $data);
	}
	
	public function tambahPengurus($data,$table){
		$query =  $this->db->insert($table, $data);
	}

	public function tambahPemasukan($data,$table){
		$query = $this->db->insert($table,$data);
	}
	public function nambah_pemasukan($tr_id,$keterangan,$nominal,$flag,$tanggal){
		$hasil=$this->db->query("INSERT INTO bantupanti.transaksi (tr_id,keterangan,nominal,flag,tanggal) VALUES ('$tr_id','$keterangan','$nominal','$flag','$tanggal')");
		return $hasil;
	}

	public function pemasukan(){
		$hasil=$this->db->query("SELECT tr_id, keterangan,nominal,flag,tanggal from bantupanti.transaksi where flag = '0'");
    	return $hasil->result() ;
	}

	public function donasi(){
		$hasil=$this->db->query("SELECT dn_id, dn.do_id, do_nama, dn_nominal, dn_tanggal, dn_bukti from bantupantiar.donasi dn left join bantupantiar.donatur do on do.do_id = dn.do_id");
    	return $hasil->result() ;
	}
}
