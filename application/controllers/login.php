<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$this->load->view('donatur/view_logindonatur');
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
			$validateAdminLogin = $this->model_login->admin_login($username,$pass);
			$validateDonaturLogin = $this->model_login->donatur_login($username,$pass);
			$validateAnakPantiLogin = $this->model_login->anakPanti_login($username,$pass);
			if($validateAdminLogin['status'] === true){	
				$session_data = array(
					'data' => $validateAdminLogin['data'],
					'status' => $validateAdminLogin['status']
					);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'login/masuk');
			}
			else if($validateDonaturLogin['status'] === true)
			{
				$session_data = array(
					'data' => $validateDonaturLogin['data'],
					'status' => $validateDonaturLogin['status']
					);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'login/enter');
			}

			else if($validateAnakPantiLogin['status']===true){
				$session_data = array(
					'data' => $validateAnakPantiLogin['data'],
					'status' => $validateAnakPantiLogin['status']
					);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'login/permisi');
			}
			else{
				$this->session->set_flashdata('error','Invalid Username or Password');
				redirect(base_url() . 'login/index');
			}
		}

		else{
			$this->index();
		}
	}

	public function enter(){
  		$username = $this->session->userdata('data');
   		if($username==""){
   		 redirect('login/index');
   		}
   		else{
    		redirect('donatur/dashboard');
  		}
	 }

	 public function masuk(){
		$data['user'] = $this->session->userdata('data');
		if($data == ""){
		  redirect('login/index');
		}else{
		  redirect('admin/dashboard');
		}
   }
   public function permisi(){
	$username = $this->session->userdata('data');
	 if($username==""){
	  	redirect('login/index');
	 }
	 else{
	  	redirect('anakPanti/dashboard');
		}
	}
	public function logout(){
		$this->session->unset_userdata('data'); 
		redirect('login');
	}

}


