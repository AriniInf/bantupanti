<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->library('pdf');
		$this->load->model('m_admin');
        $this->load->helper('url');
	}

	public function listAllDonasi(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'admin/v_listAllDonasi';
			$data['data'] = $this->m_admin->listAllDonasi()->result();
			$this->load->view('admin/tampilan_utama_admin', $data);
		}
	}

	function hapusDonasi($id){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$this->m_admin->hapusDonasi($id);
			redirect('admin/donasi');   
		}     
	}

	public function listAllKegiatan(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$kp_id = $this->input->post('kp_id');
			$data['content'] = 'admin/v_kegiatanPanti';
			$data['data'] = $this->m_admin->listAllKegiatan()->result();
			$this->load->view('admin/tampilan_utama_admin', $data);
		  }
	}

	function formKegiatan(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content']='admin/v_tambahkegiatan';
			$this->load->view('admin/tampilan_utama_admin',$data);
		  }
	}
	public function tambah_kegiatan(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$kp_id = $this->input->post('kp_id');
			$ad_id = $this->session->userdata('data')->ad_id;
			$nama = $this->input->post('nama');
			$penjelasan = $this->input->post('penjelasan');
			$tanggal = $this->input->post('tanggal');
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
				'kp_id' => $kp_id,
				'ad_id' => $ad_id,
				'nama' => $nama,
				'penjelasan' => $penjelasan,
				'tanggal' => $tanggal,
				'foto' => $foto,
				);
			$this->m_admin->tambah_kegiatan($data,'kegiatanpanti');
			redirect('admin/listAllKegiatan');
		}
	}

	function hapusKegiatan($id){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$this->m_admin->hapusKegiatan($id);
			redirect('admin/listAllKegiatan');    
		}    
	}

	public function dashboard()
	{
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'admin/view_dashboard';
			//$data['data'] = $this->session->userdata('data')->ad_id;
			$this->load->view('admin/tampilan_utama_admin', $data);
		}
	}

	function formAnak(){
		$data['content']='admin/v_formAnak';
		$this->load->view('admin/tampilan_utama_admin',$data);
	}

	public function listdonatur(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'admin/v_listDonatur';
			$data['data'] = $this->m_admin->listDonatur()->result();
			$this->load->view('admin/tampilan_utama_admin',$data);
		}    
	}

	public function listPengurus(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'admin/v_pengurusPanti';
			$data['data'] = $this->m_admin->listPengurus()->result();
			$this->load->view('admin/tampilan_utama_admin',$data);
		}
	}
	
	public function listAnak(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'admin/v_listanak';
			$data['data'] = $this->m_admin->listanak()->result();
			$this->load->view('admin/tampilan_utama_admin',$data);
		}
	}

	function formPengeluaran(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content']='admin/v_formPengeluaran';
			$this->load->view('admin/tampilan_utama_admin',$data);
		}
	}

	function formPemasukan(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content']='admin/v_formPemasukan';
			$this->load->view('admin/tampilan_utama_admin',$data);
		}
	}

	function tambahAnak(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$ap_id = $this->input->post('ap_id');
			$nama = $this->input->post('nama');
			$tempatlahir = $this->input->post('tempatlahir');
			$tanggal = $this->input->post('tanggal');
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
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			
			$data = array(
				'ap_id' => $ap_id,
				'nama' => $nama,
				'tempatlahir' => $tempatlahir,
				'tanggal' => $tanggal,
				'hobi' => $hobi,
				'sekolah' => $sekolah,
				'prestasi' => $prestasi,
				'foto' => $foto,
				'username' => $username,
				'password' => $password
				);

			$this->m_admin->tambahAnak($data,'anakpanti');
			$this->session->set_flashdata('notif','<div class="alert alert-info" role="alert"> Data Anak Panti Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/listAnak');
		}
	}

	
	function formPengurus(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content']='admin/v_formPengurusPanti';
			$this->load->view('admin/tampilan_utama_admin',$data);
		}
	}

	function tambahPengurus(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$pp_id = $this->input->post('pp_id');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$jabatan = $this->input->post('jabatan');
			$email = $this->input->post('email');
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
			
			$data = array(
				'pp_id' => $pp_id,
				'nama' => $nama,
				'alamat' => $alamat,
				'jabatan' => $jabatan,
				'email' => $email,
				'telp' => $telp,
				'foto' => $foto,
				);

			if($this->m_admin->tambahPengurus($data,'penguruspanti') == TRUE) {
				$this->session->set_flashdata('tambah', true);
			}
			else {
				$this->session->set_flashdata('tambah', false);
			}
			
			redirect('admin/listPengurus');
		}
	}

	public function tambah_pemasukan(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$tr_id=$this->input->post('tr_id');
			$ad_id = $this->session->userdata('data')->ad_id;
			$keterangan=$this->input->post('keterangan');
			$flag=0;
			$nominal=$this->input->post('nominal');
			$tanggal=$this->input->post('tanggal');
			
			$data_update=array(
				"tr_id"=>$tr_id,
				"ad_id"=>$ad_id,
				"keterangan"=>$keterangan,
				"nominal"=>$nominal,
				"tanggal"=>$tanggal,
				"flag"=>$flag
			);
			$this->m_admin->nambah_transaksi($tr_id,$ad_id,$keterangan,$nominal,$flag,$tanggal);
			redirect('admin/pemasukan');
		}
	}

	public function pemasukan(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'admin/v_pemasukan';
			$data['data'] = $this->m_admin->pemasukan();
			$this->load->view('admin/tampilan_utama_admin',$data);
		  }
	}

	public function tambah_pengeluaran(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$tr_id=$this->input->post('tr_id');
			$ad_id = $this->session->userdata('data')->ad_id;
			$keterangan=$this->input->post('keterangan');
			$flag=1;
			$nominal=$this->input->post('nominal');
			$tanggal=$this->input->post('tanggal');
			
			$data_update=array(
				"tr_id"=>$tr_id,
				"ad_id"=>$ad_id,
				"keterangan"=>$keterangan,
				"nominal"=>$nominal,
				"tanggal"=>$tanggal,
				"flag"=>$flag
			);
			$this->m_admin->nambah_transaksi($tr_id,$ad_id,$keterangan,$nominal,$flag,$tanggal);
			$this->session->set_flashdata('notif','<div class="alert alert-info" role="alert"> Data pengeluaran Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/pengeluaran');
		  }
	}

	public function pengeluaran(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'admin/v_pengeluaran';
			$data['data'] = $this->m_admin->pengeluaran();
			$this->load->view('admin/tampilan_utama_admin',$data);
		  }
	}

	public function donasi(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'admin/v_donasi';
			$data['data'] = $this->m_admin->donasi();
			$this->load->view('admin/tampilan_utama_admin',$data);
		  }
	}

	public function updatevalidasi(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{	
			$dn_id=$this->input->post('dn_id');
			$data_update=array(
				"dn_id"=>$dn_id,
			);

			$this->m_admin->updatevalidasi($dn_id);
			var_dump($this->input->post());
			redirect('admin/history');
		}
	}

	public function history(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'admin/v_history';
			$data['data'] = $this->m_admin->history();
			$this->load->view('admin/tampilan_utama_admin',$data);
		  }
	}

	public function laporan(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content']='admin/v_laporan';
			$data['pengeluaran'] = $this->m_admin->pengeluaran();
			$data['total_peng'] = $this->m_admin->total_pengeluaran();
			$data['pemasukan'] = $this->m_admin->pemasukan();
			$data['total_pem'] = $this->m_admin->total_pemasukan();
			$this->load->view('admin/tampilan_utama_admin',$data);
		}
	}


	public function listDiary(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'anakPanti/v_listStory';
			$data['data'] = $this->m_admin->listDiary();
			$this->load->view('admin/tampilan_utama_admin',$data);
		  }
	}
	function hapusDiary($id){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$this->m_admin->hapusDiary($id);
			redirect('admin/listDiary');   
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
			redirect('admin/listAllKegiatan');
		}
	}

	public function komen(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$kp_id = $this->input->post('kp_id');
			$ad_id = $this->session->userdata('data')->ad_id;
			$komenad = $this->input->post('komenad');
			$tanggalad = date("Y/m/d");
			$data = array(
				'kp_id'=>$kp_id,
				'ad_id'=>$ad_id,
				'komenad'=>$komenad,
				'tanggalad'=>$tanggalad
			);
			$this->m_admin->komen($data, 'adkomen');
			$this->session->set_flashdata('notif_komen','<div class="alert alert-info" role="alert"> Komentar Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/listAllKegiatan');
		}
	}

	public function listKomentar($kp_id){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content'] = 'admin/v_komen';
			$data['admin'] = $this->m_admin->listKomentarAdmin($kp_id);
			$data['donatur'] = $this->m_admin->listKomentarDonatur($kp_id);
			$data['anak'] = $this->m_admin->listKomentarAnakPanti($kp_id);
			//var_dump($data);
			$this->load->view('admin/tampilan_utama_admin', $data);
		  }
	}

	public function view_print(){
		$username = $this->session->userdata('data');
		if($username==""){
	   		$this->load->view('donatur/view_logindonatur');
	  	}
	  	else{
			$data['content']='admin/view_print';
			$data['pengeluaran'] = $this->m_admin->pengeluaran();
			$data['total_peng'] = $this->m_admin->total_pengeluaran();
			$data['pemasukan'] = $this->m_admin->pemasukan();
			$data['total_pem'] = $this->m_admin->total_pemasukan();
			$this->load->view('admin/tampilan_utama_admin_print',$data);
		  }
	}
}


