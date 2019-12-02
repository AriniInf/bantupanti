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
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content'] = 'donatur/view_dashboard';
			$data['data'] = $this->session->userdata('data')->do_id;
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}

	public function listdonatur(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content'] = 'donatur/v_formdonasi';
			$data['data'] = $this->m_donatur->lsitDonatur()->result();
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}
	
	public function listanak(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content'] = 'donatur/v_listanak';
			$data['data'] = $this->m_donatur->listanak()->result();
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}

	public function pengurus(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content'] = 'donatur/v_pengurus';
			$data['data'] = $this->m_donatur->pengurus()->result();
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}

	public function kegiatanPanti(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content'] = 'donatur/v_kegiatanPanti';
			$data['data'] = $this->m_donatur->kegiatanPanti()->result();
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}

	public function profil(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content'] = 'donatur/profil';
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}

	public function history(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$do_id = $this->session->userdata('data')->do_id;
			$data['content'] = 'donatur/v_history';
			$data['data'] = $this->m_donatur->history($do_id)->result();
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}

	public function berdonasi(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content'] = 'donatur/v_formdonasi';
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}	

	function tambahdonasi(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$dn_id = $this->input->post('dn_id');
			$nominal = $this->input->post('nominal');
			$tanggal = $this->input->post('tanggal');
			
			$keterangan = $this->input->post('keterangan');
			$bukti = $_FILES['bukti'];
			$flag = 0;	
			$do_id = $this->session->userdata('data')->do_id;	
			
			if($bukti=''){}else{
				$config['upload_path']='./assets/uploads';
				$config['allowed_types']='jpg|png|jpeg';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('bukti')){
					echo  "Gagal Upload";die();

				}
				else{
					$bukti=$this->upload->data('file_name');
				}
			}
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
			$this->session->set_flashdata('notif','<div class="alert alert-info" role="alert"> Terima Kasih, Anda telah berdonasi <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			
			redirect('donatur/history');
		}
	}

	public function diary(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content'] = 'donatur/v_diary';
			$data['data'] = $this->m_donatur->diary();
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}

	public function komenkegiatan(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content'] = 'donatur/komenkegiatan';
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}
	function tambahkomenkegiatan(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
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
	}

	public function profile(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$do_id = $this->session->userdata('data')->do_id;
			$data['content'] = 'donatur/v_profile';
			$data['data'] = $this->m_donatur->profile($do_id)->result();
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}
	}

	public function editprofile(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content'] = 'donatur/editprofile';
			//$data['data'] = $this->m_donatur->editprofile()->result();
			$this->load->view('donatur/tampilan_utama_donatur',$data);
		}

	}
	function tambahkomen(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$komen = $this->input->post('komen');
			$tanggal = $this->input->post('tanggal');
			
			$flag = 0;	
			$do_id = $this->session->userdata('data')->do_id;	
			$data = array(
				
				
				//'do_id' => $do_id,
				'komen' => $komen,
				'tanggal' => $tanggal,
				'flag' => $flag,
				'do_id' => $do_id,

				);
				if($this->m_donatur->tambahkomen($data,'dokomen') == TRUE) {
					$this->session->set_flashdata('tambah', true);
			}
			else {
					$this->session->set_flashdata('tambah', false);
			}
			redirect('donatur/v_diary');
		}
	}

	public function update_profil(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$do_id = $this->input->post('do_id');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$nama = $this->input->post('nama');
			$telp = $this->input->post('telp');
			$foto =$_FILES['foto'];

			if($foto=''){}else{
				$config['upload_path']='./assets/uploads';
				$config['allowed_types']='jpg|png|jpeg';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){
					echo  "Gagal Upload";die();

				}
				else{
					$foto=$this->upload->data('file_name');
				}
			}
			
			$pekerjaan = $this->input->post('pekerjaan');
			$data = array(
				'do_id'=>$do_id,
				'alamat'=> $alamat,
				'nama'=> $nama,
				'email'=> $email,
				'pekerjaan'=> $pekerjaan,
				'telp'=> $telp,
				'foto'=> $foto
				
			);
			$this->m_donatur->update_profil($data, $do_id);
			
			//var_dump($this->input->post());
			$this->session->set_flashdata('notif','<div class="alert alert-info" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('donatur/profile');
		}
	}

	public function komen(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$kp_id = $this->input->post('kp_id');
			$do_id = $this->session->userdata('data')->do_id;
			$komendo = $this->input->post('komendo');
			$tanggaldo = date("Y/m/d");
			$data = array(
				'kp_id'=>$kp_id,
				'do_id'=>$do_id,
				'komendo'=>$komendo,
				'tanggaldo'=>$tanggaldo
			);
			$this->m_donatur->komen($data, 'dokomen');
			$this->session->set_flashdata('notif_komen','<div class="alert alert-info" role="alert"> Komentar Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//var_dump($this->input->post());
			redirect('donatur/kegiatanPanti');
		}
	}
	
	public function listKomentar($kp_id){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'donatur/v_komen';
			$data['admin'] = $this->m_donatur->listKomentarAdmin($kp_id);
			$data['donatur'] = $this->m_donatur->listKomentarDonatur($kp_id);
			$data['anak'] = $this->m_donatur->listKomentarAnakPanti($kp_id);
			//var_dump($data);
			$this->load->view('donatur/tampilan_utama_donatur', $data);
		  }
	}

}
