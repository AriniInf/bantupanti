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
		return $this->db->get('bantupanti.penguruspanti');
	}

	public function berdonasi(){
		return $this->db->get('bantupanti.donasi');
	}

	public function kegiatanPanti(){
		return $this->db->get('bantupanti.kegiatanpanti');
	}

}
