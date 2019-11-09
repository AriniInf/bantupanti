<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_admin');
        $this->load->helper('url');
	}

	public function listAllDonasi(){
		$data['content'] = 'admin/v_listAllDonasi';
		$data['data'] = $this->m_admin->listAllDonasi()->result();
		$this->load->view('admin/tampilan_utama_admin', $data);
	}

	function hapusDonasi($id){
		$this->m_admin->hapusDonasi($id);
		redirect('admin/listAllDonasi');        
	}

	public function listAllKegiatan(){
		$data['content'] = 'admin/v_kegiatanPanti';
		$data['data'] = $this->m_admin->listAllKegiatan()->result();
		$this->load->view('admin/tampilan_utama_admin', $data);
	}

	public function rekapPengeluaran(){
		$data['content'] = 'admin/v_pengeluaran';
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	public function dashboard()
	{

		$data['content'] = 'admin/view_dashboard';
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	function formAnak(){
		$data['content']='admin/v_formAnak';
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	public function listdonatur(){
		$data['content'] = 'admin/v_listDonatur';
        $data['data'] = $this->m_admin->listDonatur()->result();
        $this->load->view('admin/tampilan_utama_admin',$data);
        
	}

	public function listPengurus(){
		$data['content'] = 'admin/v_pengurusPanti';
		$data['data'] = $this->m_admin->listPengurus()->result();
		$this->load->view('admin/tampilan_utama_admin',$data);
	}
	
	public function listanak(){
		$data['content'] = 'admin/v_listanak';
		$data['data'] = $this->m_admin->listanak()->result();
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	function formPengurus(){
		$data['content']='admin/v_formPengurusPanti';
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	function formPengeluaran(){
		$data['content']='admin/v_formPengeluaran';
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	function formPemasukan(){
		$data['content']='admin/v_formPemasukan';
		$this->load->view('admin/tampilan_utama_admin',$data);
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
		redirect('admin/listAnak');
	}
}

