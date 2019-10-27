<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnakPanti extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_anakPanti');
        $this->load->helper('url');
	}

	public function listAnak(){
		$data['data'] = $this->m_anakPanti->listAnak()->result();
		$this->load->view('anakPanti/v_listAnakPanti',$data);
	}

	public function listStory(){

		$data['data'] = $this->m_anakPanti->listStory()->result();
		$this->load->view('anakPanti/v_listStory',$data);
	}

	function formStory(){
		$this->load->view('anakPanti/v_formStory');
	}
 
	function tambahStory(){
		$sap_id = $this->input->post('sap_id');
		$ap_id = $this->input->post('ap_id');
		$isistory = $this->input->post('isistory');
		$tanggalstory = $this->input->post('tanggalstory');
		// $ini=$this->m_anakPanti;
		// $data['ini']=$ini->listStory();
		$data = array(
			'sap_id' => $sap_id,
			'ap_id' => $ap_id,
			'isistory' => $isistory,
			'tanggalstory' => $tanggalstory
			);
		$this->m_anakPanti->tambahStory($data,'storyanakpanti');
		redirect('anakPanti/listStory');
	}

	function formAnak(){
		$this->load->view('anakPanti/v_formAnak');
	}

	function tambahAnak(){
		$ap_id = $this->input->post('ap_id');
		$ap_nama = $this->input->post('ap_nama');
		$ap_tempatlahir = $this->input->post('ap_tempatlahir');
		$ap_tanggallahir = $this->input->post('ap_tanggallahir');
		$ap_hobi = $this->input->post('ap_hobi');
		$ap_sekolah = $this->input->post('ap_sekolah');
		$ap_prestasi = $this->input->post('ap_prestasi');
		$ap_foto = $this->input->post('ap_foto');
		$ap_username = $this->input->post('ap_username');
		$ap_password = $this->input->post('ap_password');
		
		$data = array(
			'ap_id' => $ap_id,
			'ap_nama' => $ap_nama,
			'ap_tempatlahir' => $ap_tempatlahir,
			'ap_tanggallahir' => $ap_tanggallahir,
			'ap_hobi' => $ap_hobi,
			'ap_sekolah' => $ap_sekolah,
			'ap_prestasi' => $ap_prestasi,
			'ap_foto' => $ap_foto,
			'ap_username' => $ap_username,
			'ap_password' => $ap_password
			);
		$this->m_anakPanti->tambahAnak($data,'anakpanti');
		redirect('anakPanti/listAnak');
	}

}
