<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengurusPanti extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_pengurusPanti');
        $this->load->helper('url');

	}

	public function listPengurus(){
		$data['content'] = 'pengurusPanti/v_listPengurusPanti';
		$data['data'] = $this->m_pengurusPanti->listPengurus()->result();
		$this->load->view('admin/tampilan_utama_admin',$data);
	}
}
