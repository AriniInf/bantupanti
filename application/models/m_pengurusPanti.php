<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengurusPanti extends CI_Model 
{	
	public function listPengurus()
	{
		$pengurusPanti=$this->db->get("penguruspanti");
		return $pengurusPanti;
	}
}
