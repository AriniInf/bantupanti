<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnakPanti extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_anakPanti');
        $this->load->helper('url');
	}

	public function listAnak(){
		$data['data'] = $this->m_anakPanti->listAnak()->result();
		$this->load->view('anakPanti/v_listAnakPanti',$data);
	}

	public function listStory(){

		$data['data'] = $this->m_anakPanti->listStory()->result();
		$this->load->view('anakPanti/v_listStory',$data);
	}

}
