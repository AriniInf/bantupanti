<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index(){
		$this->load->view('view_register');
	}
	public function masuk(){
		redirect('donatur/dashboard');
	}
}
