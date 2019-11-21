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
		$data['data'] = $this->session->userdata('data')->ap_id;
		$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
	}

	public function kegiatan_panti(){
		$data['content'] = 'anakPanti/v_kegiatanPanti';
		$data['data'] = $this->m_anakPanti->kegiatan_panti()->result();
		$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
	}

	
	public function listDiary(){
		$data['content'] = 'anakPanti/v_listStory';
		$data['data'] = $this->m_anakPanti->listDiary();
		$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
	}

	public function listDiarymu(){
		$data['content'] = 'anakPanti/v_listDiarymu';
		$ap_id = $this->session->userdata('data')->ap_id;
		$data['data'] = $this->m_anakPanti->listDiarymu($ap_id);
		$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
	}

	function hapusDiary($id){
		$this->m_anakPanti->hapusDiary($id);
		redirect('anakPanti/listDiary');        
	}

	function formDiary(){
		$data['content'] = 'anakPanti/v_formStory';
		$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
	}
 
	function tambahDiary(){
		$dy_id = $this->input->post('dy_id');
		$ap_id = $this->session->userdata('data')->ap_id;
		$diary = $this->input->post('diary');
		$tanggal = $this->input->post('tanggal');
		// $ini=$this->m_anakPanti;
		// $data['ini']=$ini->listStory();
		$data = array(
			'dy_id' => $dy_id,
			'ap_id' => $ap_id,
			'diary' => $diary,
			'tanggal' => $tanggal
			);
		$this->m_anakPanti->tambahDiary($data,'diary');
		redirect('anakPanti/listDiary');
	}
}
