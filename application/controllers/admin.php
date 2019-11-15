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
		redirect('admin/donasi');        
	}

	public function listAllKegiatan(){
		$data['content'] = 'admin/v_kegiatanPanti';
		$data['data'] = $this->m_admin->listAllKegiatan()->result();
		$this->load->view('admin/tampilan_utama_admin', $data);
	}

	function formKegiatan(){
		$data['content']='admin/v_tambahkegiatan';
		$this->load->view('admin/tampilan_utama_admin',$data);
	}
	public function tambah_kegiatan(){
		$kp_id = $this->input->post('kp_id');
		$ad_id = $this->session->userdata('data')->ad_id;
		$namakegiatan = $this->input->post('namakegiatan');
		$penjelasan = $this->input->post('penjelasan');
		$tanggal = $this->input->post('tanggal');
		
		$data = array(
			'kp_id' => $kp_id,
			'ad_id' => $ad_id,
			'namakegiatan' => $namakegiatan,
			'penjelasan' => $penjelasan,
			'tanggal' => $tanggal,
			);
		$this->m_admin->tambah_kegiatan($data,'bantupanti.kegiatanpanti');
		redirect('admin/listAllKegiatan');
	}

	public function dashboard()
	{
		$data['content'] = 'admin/view_dashboard';
		$data['user_data'] = $this->session->userdata('data');
		$this->load->view('admin/tampilan_utama_admin', $data);
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
	
	public function listAnak(){
		$data['content'] = 'admin/v_listanak';
		$data['data'] = $this->m_admin->listanak()->result();
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

			if($this->m_anakPanti->tambahAnak($data,'anakpanti') == TRUE) {
				$this->session->set_flashdata('tambah', true);
		   }
		   else {
				$this->session->set_flashdata('tambah', false);
		   }
		redirect('admin/listAnak');
	}

	
	function formPengurus(){
		$data['content']='admin/v_formPengurusPanti';
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	function tambahPengurus(){
		$pp_id = $this->input->post('pp_id');
		$pp_nama = $this->input->post('pp_nama');
		$pp_alamat = $this->input->post('pp_alamat');
		$pp_jabatan = $this->input->post('pp_jabatan');
		$pp_email = $this->input->post('pp_email');
		$pp_telf = $this->input->post('pp_telf');
		$pp_foto = $this->input->post('pp_foto');
		
		$data = array(
			'pp_id' => $pp_id,
			'pp_nama' => $pp_nama,
			'pp_alamat' => $pp_alamat,
			'pp_jabatan' => $pp_jabatan,
			'pp_email' => $pp_email,
			'pp_telf' => $pp_telf,
			'pp_foto' => $pp_foto,
			);

		if($this->m_admin->tambahPengurus($data,'bantupantiar.penguruspanti') == TRUE) {
			$this->session->set_flashdata('tambah', true);
		}
		else {
			$this->session->set_flashdata('tambah', false);
		}
		
		redirect('admin/listPengurus');
	}
	public function tambah_pemasukan(){
		$tr_id=$this->input->post('tr_id');
		$keterangan=$this->input->post('keterangan');
		$flag=0;
		$nominal=$this->input->post('nominal');
		$tanggal=$this->input->post('tanggal');
		
		$data_update=array(
			"tr_id"=>$tr_id,
			"keterangan"=>$keterangan,
			"nominal"=>$nominal,
			"tanggal"=>$tanggal,
			"flag"=>$flag
		);
		$this->m_admin->nambah_transaksi($tr_id,$keterangan,$nominal,$flag,$tanggal);
		redirect('admin/pemasukan');
	}

	public function pemasukan(){
		$data['content'] = 'admin/v_pemasukan';
		$data['data'] = $this->m_admin->pemasukan();
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	public function tambah_pengeluaran(){
		$tr_id=$this->input->post('tr_id');
		$keterangan=$this->input->post('keterangan');
		$flag=1;
		$nominal=$this->input->post('nominal');
		$tanggal=$this->input->post('tanggal');
		
		$data_update=array(
			"tr_id"=>$tr_id,
			"keterangan"=>$keterangan,
			"nominal"=>$nominal,
			"tanggal"=>$tanggal,
			"flag"=>$flag
		);
		$this->m_admin->nambah_transaksi($tr_id,$keterangan,$nominal,$flag,$tanggal);
		redirect('admin/pengeluaran');
	}

	public function pengeluaran(){
		$data['content'] = 'admin/v_pengeluaran';
		$data['data'] = $this->m_admin->pengeluaran();
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	public function donasi(){
		$data['content'] = 'admin/v_donasi';
		$data['data'] = $this->m_admin->donasi();
		$this->load->view('admin/tampilan_utama_admin',$data);
	}
}

