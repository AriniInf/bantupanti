<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_pengurusPanti');
        $this->load->helper('url');

	}

	public function index(){
		$this->load->view('profil');
	}
}
