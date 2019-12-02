<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnakPanti extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_anakPanti');
        $this->load->helper('url');
	}

	public function dashboard()
	{
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'anakPanti/v_dashboard';
			$data['data'] = $this->session->userdata('data')->ap_id;
			$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
		}
	}

	public function kegiatan_panti(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'anakPanti/v_kegiatanPanti';
			$data['data'] = $this->m_anakPanti->kegiatanPanti()->result();
			$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
		  }
	}

	
	public function listDiary(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'anakPanti/v_listStory';
			$data['data'] = $this->m_anakPanti->diary();
			$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
		  }
	}

	public function listDiarymu(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'anakPanti/v_listDiarymu';
			$ap_id = $this->session->userdata('data')->ap_id;
			$data['data'] = $this->m_anakPanti->listDiarymu($ap_id);
			$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
		  }
	}

	function hapusDiary($id){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$this->m_anakPanti->hapusDiary($id);
			redirect('anakPanti/listDiary'); 
		  }       
	}

	function formDiary(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'anakPanti/v_formStory';
			$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
		  }
	}
 
	function tambahDiary(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$dy_id = $this->input->post('dy_id');
			$ap_id = $this->session->userdata('data')->ap_id;
			$diary = $this->input->post('diary');
			$tanggal = $this->input->post('tanggal');
			// $ini=$this->m_anakPanti;
			// $data['ini']=$ini->listStory();
			$data = array(
				'dy_id' => $dy_id,
				'ap_id' => $ap_id,
				'diary' => $diary,
				'tanggal' => $tanggal
				);
			$this->m_anakPanti->tambahDiary($data,'diary');
			redirect('anakPanti/listDiary');
		  }
	}

	public function komen(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$kp_id = $this->input->post('kp_id');
			$ap_id = $this->session->userdata('data')->ap_id;
			$komen = $this->input->post('komen');
			$tanggal = date("Y/m/d");
			$data = array(
				'kp_id'=>$kp_id,
				'ap_id'=>$ap_id,
				'komen'=>$komen,
				'tanggal'=>$tanggal
			);
			$this->m_anakPanti->komen($data, 'apkomen');
			$this->session->set_flashdata('notif_komen','<div class="alert alert-info" role="alert" style="width:500px"> Komentar Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//var_dump($this->input->post());
			redirect('anakPanti/kegiatan_panti');
		}
	}

	public function listKomentar(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$kp_id = $this->input->post('kp_id');
			$data['content'] = 'anakPanti/kegiatan_panti';
			$data['data'] = $this->m_anakPanti->listKomentar($kp_id)->result();
			$this->load->view('anakPanti/tampilan_utama_anakPanti', $data);
		  }
	}

	public function edit_diary(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$dy_id = $this->input->post('dy_id');
			$diary = $this->input->post('diary');
			$tanggal = $this->input->post('tanggal');
			$data = array(
				'dy_id'=>$dy_id,
				'tanggal'=> $tanggal,
				'diary'=> $diary
			);
			$this->m_anakPanti->edit_diary($data, $dy_id);
			
			//var_dump($this->input->post());
			$this->session->set_flashdata('notif','<div class="alert alert-info" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('anakPanti/listDiarymu');
		}
	}
	public function profile(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$ap_id = $this->session->userdata('data')->ap_id;
			$data['content'] = 'anakPanti/v_profile';
			$data['data'] = $this->m_anakPanti->profile($ap_id)->result();
			$this->load->view('anakPanti/tampilan_utama_anakPanti',$data);
		}
	}

	public function update_profil(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$ap_id = $this->input->post('ap_id');
			$nama = $this->input->post('nama');
			$tanggal = $this->input->post('tanggal');
			$tempatlahir = $this->input->post('tempatlahir');
			$hobi = $this->input->post('hobi');
			$sekolah = $this->input->post('sekolah');
			$prestasi = $this->input->post('prestasi');
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
			
			
			$data = array(
				'ap_id'=>$ap_id,
				'nama'=> $nama,
				'tanggal'=> $tanggal,
				'tempatlahir'=> $tempatlahir,
				'hobi'=> $hobi,
				'sekolah'=> $sekolah,
				'prestasi'=> $prestasi,
				'foto'=>$foto,
				
			);
			$this->m_anakPanti->update_profil($data, $ap_id);
			
			//var_dump($this->input->post());
			$this->session->set_flashdata('notif','<div class="alert alert-info" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('anakPanti/profile');
		}
	}


	public function lihat_komen($id){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$data['content']='anakPanti/v_komen';
			$id = $this->input->post('ap_id');
			$data['komen'] = $this->m_anakPanti->listKomentar($id);
			$this->load->view('anakPanti/tampilan_utama_anakPanti', $data);
		}
	}

	public function ubahkp(){
		$username = $this->session->userdata('data');
		if($username==""){
			$this->load->view('donatur/view_logindonatur');
		}
		else{
			$kp_id = $this->input->post('kp_id');
			$penjelasan = $this->input->post('penjelasan');
			$tanggal = $this->input->post('tanggal');
			$nama = $this->input->post('nama');
			$data = array(
				'kp_id'=>$kp_id,
				'tanggal'=> $tanggal,
				'nama'=> $nama,
				'penjelasan'=> $penjelasan
			);
			$this->m_admin->ubahkp($data, $kp_id);
			
			//var_dump($this->input->post());
			$this->session->set_flashdata('notif','<div class="alert alert-info" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('anakPanti/kegiatan_panti');
		}
	}

}

