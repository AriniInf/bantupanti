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
      $query = $this->db->get('bantupanti.donatur','');
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
			$query = $this->db->get('bantupanti.admin');
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
      $query = $this->db->get('bantupanti.anakpanti','');
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }
}

?>
