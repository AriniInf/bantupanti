<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index(){
		$this->load->view('register');
	}
	public function masuk(){

	

		if(isset($_POST['register'])){
			$this->form_validation->set_rules('username', 'required');

			if($this->form_validation->run() == FALSE){
				if($this->form_validation->run() == TRUE){
					echo 'form validated';


					$data = array(
						'do_id' => $_POST['do_id'],
						'nama' => $_POST['nama'],
						'email' => $_POST['email'],
						'alamat' => $_POST['alamat'],
						'pekerjaan' => $_POST['pekerjaan'],
						'telp' => $_POST['telp'],
						'username' => $_POST['username'],
						'password' => md5($_POST['password']),
					);
					if($this->model_register->register($data,'donatur') == TRUE) {
						$this->session->set_flashdata('tambah', true);
				   }
				   else {
						$this->session->set_flashdata('tambah', false);
				   }
				redirect('donatur/dashboard');
	

		}
		$this->load->view('register');
		}//redirect('donatur/dashboard');
		
	}
}
}

