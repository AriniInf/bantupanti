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

	// public function kegiatan_panti(){
	// 	$kp_id = $this->input->post('kp_id');
	// 	$data['content'] = 'anakPanti/v_kegiatanPanti';
	// 	$data['komentar'] = $this->m_anakPanti->listKomentar($kp_id)->result();
	// 	$data['data'] = $this->m_anakPanti->kegiatan_panti()->result();
	// 	$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
	// }
	public function kegiatan_panti(){
		$data['content'] = 'anakPanti/v_kegiatanPanti';
		$data['data'] = $this->m_anakPanti->kegiatanPanti()->result();
		$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
	}

	
	public function listDiary(){
		$data['content'] = 'anakPanti/v_listStory';
		$data['data'] = $this->m_anakPanti->diary();
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

	public function komen(){
		$kp_id = $this->input->post('kp_id');
		$ap_id = $this->session->userdata('data')->ap_id;
		$komen = $this->input->post('komen');
		$tanggal = date("Y/m/d");
		$data = array(
			'kp_id'=>$kp_id,
			'ap_id'=>$ap_id,
			'komen'=>$komen,
			'tanggal'=>$tanggal
		);
		$this->m_anakPanti->komen($data, 'apkomen');
		$this->session->set_flashdata('notif_komen','<div class="alert alert-info" role="alert" style="width:500px"> Komentar Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		//var_dump($this->input->post());
		redirect('anakPanti/kegiatan_panti');
	}

	public function listKomentar(){
		$kp_id = $this->input->post('kp_id');
		$data['content'] = 'anakPanti/kegiatan_panti';
		$data['data'] = $this->m_admin->listKomentar($kp_id)->result();
		$this->load->view('anakPanti/tampilan_utama_anakPanti', $data);
	}

	public function edit_diary(){
		$dy_id = $this->input->post('dy_id');
		$diary = $this->input->post('diary');
		$tanggal = $this->input->post('tanggal');
		$data = array(
			'dy_id'=>$dy_id,
			'tanggal'=> $tanggal,
			'diary'=> $diary
		);
		$this->m_anakPanti->edit_diary($data, $dy_id);
		
		//var_dump($this->input->post());
		$this->session->set_flashdata('notif','<div class="alert alert-info" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('anakPanti/listDiarymu');
	}
}
