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
    // public function getLoginData($user, $pass){
    //     $u = $user;
    //     $p = MD5($pass);

    //     $query_cekLogin = $this->db->get_where('user', array('username' =>$su, 'password'=>$p));

    //     if(count($query_cekLogin->result())>0){
    //         foreach ($query_cekLogin->result() as $qck){
    //             foreach ($query_cekLogin->result() as $ck){
    //                 $sess_data ['logged_in'] = TRUE;
    //                 $sess_data ['username'] = $ck->username;
    //                 $sess_data ['password'] = $ck->password;
    //                 $this->session->set_userdata($sess_data);
    //             }
    //             redirect('donatur/view_logindonatur');
    //         } 

             
    //     } else{
    //         $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //         Username atau Password salah!
    //        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //          <span aria-hidden="true">&times;</span>
    //        </button>
    //      </div>');
    //         redirect('donatur');
    //     }
    // }
}

?>
