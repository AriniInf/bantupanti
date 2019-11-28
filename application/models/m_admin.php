<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model 
{
	function hapusDonasi($id){
        $this->db->query("delete from donasi_ where dn_id='".$id."'");
	}

	public function listAllKegiatan(){
		$hasil = $this->db->query("SELECT kp_id, ad.ad_id, pp.nama as pengurus, kp.nama as kegiatan, penjelasan, tanggal, kp.foto from kegiatanpanti kp join admin ad on kp.ad_id = ad.ad_id join penguruspanti pp on ad.pp_id = pp.pp_id");
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
	function hapusKegiatan($id){
        $this->db->query("delete from kegiatanpanti where kp_id='".$id."'");
	}
	public function tambahPengurus($data,$table){
		$query =  $this->db->insert($table, $data);
	}

	public function nambah_transaksi($tr_id,$ad_id,$keterangan,$nominal,$flag,$tanggal){
		$hasil=$this->db->query("INSERT INTO transaksi (tr_id,ad_id, keterangan,nominal,flag,tanggal) VALUES ('$tr_id','$ad_id','$keterangan','$nominal','$flag','$tanggal')");
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
		$hasil=$this->db->query("SELECT dn_id, dn.do_id, do.nama as pendonatur, nominal, tanggal, bukti from donasi_ dn  join donatur do on do.do_id = dn.do_id where flag = '0'");
    	return $hasil->result() ;
	}
	public function history(){
		$hasil = $this->db->query("SELECT dn_id, dn.do_id, do.nama as pendonatur, nominal, tanggal, bukti , flag from donasi_ dn  join donatur do on do.do_id = dn.do_id where flag = '1'");
		return $hasil->result();
	}

	public function get_id($id){
		$this->db->where('dn_id',$id);
		$query=$this->db->get('donasi_');
		return $query->result();
	  }

	public function updatevalidasi($id){
		$hasil = $this->db->query("UPDATE donasi_ SET flag = '1' WHERE dn_id = '".$id."'");
	  }

	  public function listDiary(){
		$query =  $this->db->query("SELECT sap.dy_id, ap.ap_id, sap.ap_id, ap.nama as anak, sap.diary, ap.tanggal from anakpanti ap right join diary sap on ap.ap_id = sap.ap_id");
		return $query->result();
	}
	function hapusDiary($id){
        $this->db->query("delete from diary where dy_id='".$id."'");
	}

	function ubahkp($data, $id){
		$this->db->where('kp_id',$id);
		$this->db->update('kegiatanpanti', $data);
		return TRUE;
	}
}
