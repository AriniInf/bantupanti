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
		$data['data'] = $this->m_admin->listAllDonasi()->result();
		$this->load->view('admin/v_listAllDonasi', $data);
	}

	function hapusDonasi($id){
		$this->m_admin->hapusDonasi($id);
		redirect('admin/listAllDonasi');        
	}

	public function dashboard()
	{

		$data['content'] = 'admin/view_dashboard';

		$this->load->view('tampilan_utama',$data);
	}
}

