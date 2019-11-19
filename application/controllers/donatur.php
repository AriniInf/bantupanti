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
		$data['data'] = $this->session->userdata('data')->do_id;
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

	public function kegiatanPanti(){
		$data['content'] = 'donatur/v_kegiatanPanti';
		$data['data'] = $this->m_donatur->kegiatanPanti()->result();
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}

	public function profil(){
		$data['content'] = 'donatur/profil';
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}

	public function history(){
		$flag = 0;	
		$do_id = $this->session->userdata('data')->do_id;

		$data['content'] = 'donatur/v_history';
		$data['data'] = $this->m_donatur->history()->result();
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}

	public function berdonasi(){
		$data['content'] = 'donatur/v_formdonasi';
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}	

	function tambahdonasi(){
		$dn_id = $this->input->post('dn_id');
		$nominal = $this->input->post('nominal');
		$tanggal = $this->input->post('tanggal');
		$bukti = $this->input->post('bukti');
		$keterangan = $this->input->post('keterangan');
		$flag = 0;	
		$do_id = $this->session->userdata('data')->do_id;	
		$data = array(
			
			'dn_id' => $dn_id,
			//'do_id' => $do_id,
			'nominal' => $nominal,
			'tanggal' => $tanggal,
			'flag' => $flag,
			'do_id' => $do_id,
			'keterangan' => $keterangan,
			'bukti' => $bukti
			);
		$this->m_donatur->tambahdonasi($data,'donasi_');
		redirect('donatur/history');
	}

	public function diary(){

		$data['content'] = 'donatur/v_diary';
		$data['data'] = $this->m_donatur->diary()->result();
		$this->load->view('donatur/tampilan_utama_donatur',$data);

		// $data['data'] = $this->m_donatur->diary()->result();
		// $this->load->view('donatur/v_diary',$data);
	}
	public function komenkegiatan(){
		$data['content'] = 'donatur/komenkegiatan';
		$this->load->view('donatur/tampilan_utama_donatur',$data);
	}
	function tambahkomenkegiatan(){
		$do_id = $this->session->userdata('do_id')->do_id;
		$kp_id = $this->session->userdata('kp_id')->kp_id;
		$komen = $this->input->post('komen');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'do_id' => $do_id,
			'kp_id' => $kp_id,
			'komen' => $komen,
			'tanggal' => $tanggal,
		
			);

			if($this->m_donatur->tambahkomenkegiatan($data,'dokomen') == TRUE) {
				$this->session->set_flashdata('tambah', true);
		   }
		   else {
				$this->session->set_flashdata('tambah', false);
		   }
		redirect('donatur/v_diary');
	}
	public function profile(){
		$data['content'] = 'donatur/v_profile';
		$data['data'] = $this->m_donatur->profile()->result();
		$this->load->view('donatur/tampilan_utama_donatur',$data);

	}
	public function editprofile(){
		$this->rules();
		if($this->form)
		$data['content'] = 'donatur/v_editprofile';
		$data['data'] = $this->m_donatur->profile()->result();
		$this->load->view('donatur/tampilan_utama_donatur',$data);

	}
	
	// public function detail($do_id){
	// 	$data['content'] = 'donatur/v_detail';
	// 	$data['data'] = $this->m_donatur->detail($do_id);
	// 	$this->load->view('donatur/tampilan_utama_donatur',$data);

	// }
	
}
