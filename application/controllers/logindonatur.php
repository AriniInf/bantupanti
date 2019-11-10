<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$this->load->view('donatur/view_logindonatur');
	}
	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username',['required'=> 'Username wajib diisi!']);
		$this->form_validation->set_rules('password','Password',['required'=> 'Password wajib diisi!']);
		if($this->form_validation->run()== FALSE){ 
            $this->load->view('donatur/view_logindonatur');}
            
            else{
			$username=$this->input->post('username');
            $password=$this->input->post('password');
            
            $user =$username;
            $pass =MD5($password);

            $cek= $this->login_model->cek_login($user, $pass);
			//$this->load->model('model_login');

			if($cek -> num_rows() >0)
			{
                    foreach ($cek -> result() as $ck){
                        $sess_data['username'] = $ck->username;
                        $sess_data['email'] = $ck->email;


                        $this ->session->set_userdata($sess_data);
                    }
				
			    redirect('donatur/dashboard');
			    }
			else{
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password salah!
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>');
               redirect('logindonatur');
			    }
		    }
    
	}
	
	public function logout(){
		$this->session->sess_destroy(); 
		redirect('logindonatur');
	}

}

?>