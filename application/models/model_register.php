<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model 
{	

    public function register($data,$table){
		$query = $this->db->insert($table, $data);
	}

}


?>