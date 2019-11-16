<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnakPanti extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_anakPanti');
        $this->load->helper('url');
	}

	public function dashboard()
	{
		$data['content'] = 'anakPanti/v_dashboard';
		$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
	}
	public function listAnak(){
		$data['content'] = 'anakPanti/v_listAnakPanti';
		$data['data'] = $this->m_anakPanti->listAnak()->result();
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	public function listStory(){

		$data['data'] = $this->m_anakPanti->listStory()->result();
		$this->load->view('anakPanti/v_listStory',$data);
	}

	function formStory(){
		$this->load->view('anakPanti/v_formStory');
	}
 
	function tambahStory(){
		$dy_id = $this->input->post('dy_id');
		$ap_id = $this->input->post('ap_id');
		$isistory = $this->input->post('diary');
		$tanggalstory = $this->input->post('tanggal');
		// $ini=$this->m_anakPanti;
		// $data['ini']=$ini->listStory();
		$data = array(
			'dy_id' => $dy_id,
			'ap_id' => $ap_id,
			'diary' => $diary,
			'tanggal' => $tanggal
			);
		$this->m_anakPanti->tambahStory($data,'storyanakpanti');
		redirect('anakPanti/listStory');
	}

	function formAnak(){
		$this->load->view('anakPanti/v_formAnak');
	}

	function tambahAnak(){
		$ap_id = $this->input->post('ap_id');
		$nama = $this->input->post('nama');
		$tempatlahir = $this->input->post('tempatlahir');
		$tanggallahir = $this->input->post('tanggal');
		$hobi = $this->input->post('hobi');
		$sekolah = $this->input->post('sekolah');
		$prestasi = $this->input->post('prestasi');
		$foto = $this->input->post('foto');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			'ap_id' => $ap_id,
			'nama' => $nama,
			'tempatlahir' => $tempatlahir,
			'tanggal' => $tanggal,
			'hobi' => $hobi,
			'sekolah' => $sekolah,
			'prestasi' => $prestasi,
			'foto' => $foto,
			'username' => $username,
			'password' => $password
			);
		$this->m_anakPanti->tambahAnak($data,'anakpanti');
		redirect('anakPanti/listAnak');
	}

}
