<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct() {
		parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('model_register');
	}

	public function index() {
		$this->form_validation->set_rules('nama', 'NAME','required');
		$this->form_validation->set_rules('username', 'USERNAME','required');
		$this->form_validation->set_rules('email','EMAIL','required|valid_email');
		$this->form_validation->set_rules('password','PASSWORD','required');
		$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		}else{
			$do_id = $this->input->post('do_id');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$username = $this->input->post('username');
			$pekerjaan = $this->input->post('pekerjaan');
			$password = md5($this->input->post('password'));
			$data = array(
				'do_id' => $do_id,
				'nama' => $nama,
				'alamat' => $alamat,
				'email' => $email,
				'telp' => $telp,
				'username' => $username,				
				'pekerjaan' => $pekerjaan,
				'password' => $password,			
			);
			$this->model_register->register($data, 'donatur');
			$this->session->set_flashdata('notif','<div class="alert alert-info" role="alert" style="width:500px"> Donatur Berhasil Mendaftar, Silahkan Login untuk masuk ke sistem <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('login');
		}
	}
}

