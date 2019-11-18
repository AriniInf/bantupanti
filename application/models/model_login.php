<?php
class Model_login extends CI_Model{
		
		function admin_login($username,$password)
    {
      $this->db->where('username',$username);
      $this->db->where('password',$password);
			$query = $this->db->get('admin');
			$row = $query->row();
      if(isset($row)){
        return array(
					'data' => $row,
					'status' => true
				);
      }
      else{
        return false;
      }
		}
    
    function donatur_login($username,$password)
    {
      $this->db->where('username',$username);
      $this->db->where('password',$password);
			$query = $this->db->get('donatur');
			$row = $query->row();
      if(isset($row)){
        return array(
					'data' => $row,
					'status' => true
				);
      }
      else{
        return false;
      }
    }
    
    function anakPanti_login($username,$password)
    {
      $this->db->where('username',$username);
      $this->db->where('password',$password);
			$query = $this->db->get('anakPanti');
			$row = $query->row();
      if(isset($row)){
        return array(
					'data' => $row,
					'status' => true
				);
      }
      else{
        return false;
      }
		}
		
}
