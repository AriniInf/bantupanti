<?php
class Model_login extends CI_Model{
    // public function cek_login($username, $password){
    //     $this->db->where("username", $username);
    //     $this->db->where("password", $password);
    //     //konek -db nya
    //     return $this->db->get('bantupanti.donatur');

	// }
	
	function can_login($username,$password)
    {
      $this->db->where('username',$username);
      $this->db->where('password',$password);
      $query = $this->db->get('donatur','');
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
		}
		
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
			$query = $this->db->get('bantupanti2.donatur');
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
			$query = $this->db->get('bantupanti2.anakPanti');
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
		
		

		function ap_login($username,$password)
    {
      $this->db->where('username',$username);
      $this->db->where('password',$password);
      $query = $this->db->get('anakpanti','');
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }
}

?>
