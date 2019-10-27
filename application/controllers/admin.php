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
	
	public function listDonatur(){
		$data['content'] = 'donatur/v_listDonatur';
		$data['data'] = $this->m_donatur->listDonatur()->result();
		$this->load->view('admin/tampilan_utama_admin',$data);  
	}
}

