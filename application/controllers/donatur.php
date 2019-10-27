<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_donatur');
        $this->load->helper('url');
	}

	public function listDonatur(){
		$data['content'] = 'donatur/v_listDonatur';
		$data['data'] = $this->m_donatur->listDonatur()->result();
		$this->load->view('admin/tampilan_utama_admin',$data);  
	}

	public function dashboard()
	{

		$data['content'] = 'donatur/view_dashboard';
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}

	
}
