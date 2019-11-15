<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model 
{
	function hapusDonasi($id){
        $this->db->query("delete from donasi where dn_id='".$id."'");
	}

	public function listAllKegiatan(){
		$hasil = $this->db->query("SELECT kp_id, ad.ad_id, nama, namakegiatan, penjelasan, tanggal from kegiatanpanti kp join admin ad on kp.ad_id = ad.ad_id join penguruspanti pp on ad.pp_id = pp.pp_id");
			return $hasil;
	}

	public function listDonatur(){
		$hasil = $this->db->get('donatur');
		return $hasil;
	}

	public function listPengurus()
	{
		$pengurusPanti=$this->db->get("penguruspanti");
		return $pengurusPanti;
	}
	public function listAnak(){
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

	public function nambah_transaksi($tr_id,$keterangan,$nominal,$flag,$tanggal){
		$hasil=$this->db->query("INSERT INTO transaksi (tr_id,keterangan,nominal,flag,tanggal) VALUES ('$tr_id','$keterangan','$nominal','$flag','$tanggal')");
		return $hasil;
	}

	public function pemasukan(){
		$hasil=$this->db->query("SELECT tr_id, keterangan,nominal,flag,tanggal from transaksi where flag = '0'");
    	return $hasil->result() ;
	}

	public function pengeluaran(){
		$hasil=$this->db->query("SELECT tr_id, keterangan,nominal,flag,tanggal from transaksi where flag = '1'");
    	return $hasil->result() ;
	}

	public function donasi(){
		$hasil=$this->db->query("SELECT dn_id, dn.do_id, nama, nominal, tanggal, bukti from donasi dn left join donatur do on do.do_id = dn.do_id");
    	return $hasil->result() ;
	}
}
