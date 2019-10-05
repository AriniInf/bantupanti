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
		$data['data'] = $this->m_donatur->listDonatur()->result();
		$this->load->view('donatur/v_listDonatur',$data);  
	}

	

	
}
