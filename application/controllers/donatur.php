<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_donatur');
        $this->load->helper('url');
	}

	public function dashboard()
	{
		$data['content'] = 'donatur/view_dashboard';
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}

	public function listdonatur(){
		$data['content'] = 'donatur/v_formdonasi';
        $data['data'] = $this->m_donatur->lsitDonatur()->result();
        $this->load->view('donatur/tampilan_utama_donatur',$data);
        
	}
	
	public function listanak(){
		$data['content'] = 'donatur/v_listanak';
		$data['data'] = $this->m_donatur->listanak()->result();
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}

	public function pengurus(){
		$data['content'] = 'donatur/v_pengurus';
		$data['data'] = $this->m_donatur->pengurus()->result();
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}

	public function berdonasi(){
		$data['content'] = 'donatur/v_formdonasi';
		$data['data'] = $this->m_donatur->berdonasi()->result();
		$this->load->view('donatur/tampilan_utama_donatur',$data);

	}

	public function inputdonasi(){
		//cek
		$nominal = $this->input->post('nominal');
		$tanggal = $this->input->post('tanggal');
		$bukti = $this->input->post('bukti');

		$data = array(
			'nominal' => $nominal,
			'tanggal' => $tanggal,
			'bukti' => $bukti

		);
		$this->m_donatur->simpan_donasi($data);
		redirect('donatur');
		
	}

	// public function inputDonasi(){
	// 	$this->_rules();

	// 	if($this->form_validation->run()== FALSE){
	// 		$this->berdonasi();
	// 	}else{
	// 		$data= array(
	// 		'nominal' =>$this->berdonasi->post('nominal', TRUE),
	// 		'tanggal' =>$this->berdonasi->post('tanggal', TRUE),
	// 		'bukti' =>$this->berdonasi->post('bukti', TRUE),
	// 		);
	// 		$this->m_donatur->berdonasi($data);
	// 		redirect('donatur/formdonasi');
	// 	}

	// }

	public function kegiatanPanti(){
		$data['content'] = 'donatur/v_kegiatanPanti';
		$data['data'] = $this->m_donatur->kegiatanPanti()->result();
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}

	public function profil(){
		$data['content'] = 'donatur/profil';
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}

	
}
