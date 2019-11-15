<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller {
	public function index(){
		$this->load->view('admin/v_loginadmin');
	}
	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$pass = md5($password);
			$this->load->model('model_login');
			if($this->model_login->admin_login($username,$pass))
			{
				$session_data = array(
					'username' => $username,
					'password' => md5($password),
					'status' => "sudahlogin"
					);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'loginadmin/enter');
			}
			else{
				$this->session->set_flashdata('error','Invalid Username or Password');
				redirect(base_url() . 'loginadmin/index');
			}
		}
		else{
			$this->index();
		}

	}
	
	public function enter(){
  		$username = $this->session->userdata('username');
   		if($username==""){
   		 redirect('loginadmin/index');
   		}
   		else{
    		redirect('admin/dashboard');
  		}
 	}
	
	public function logout(){
		$this->session->sess_destroy(); 
		redirect('logindonatur');
	}

}

?>
