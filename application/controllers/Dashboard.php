<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
	public function admin()
	{
		if($this->session->userdata('level')==='1'){
			$data['page_view'] = 'dashboard';
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}

	}

	public function manageuser()
	{
		if($this->session->userdata('level')==='1'){
			$this->load->model('Models');
			$data['page_view'] = 'admin/manageuser';
			$data['user'] = $this->Models->user();
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}
	}

	public function createUser()
	{
		if($this->session->userdata('level')==='1'){
			$data['page_view'] = 'admin/createuser';
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}
	}

	function createUser_data(){
    $this->load->model('Models');
		$nama       = $this->input->post('nama');
    $username   = $this->input->post('username');
    $alamat     = $this->input->post('alamat');
    $noHp       = $this->input->post('noHp');
    $tgl_lahir  = $this->input->post('tgl_lahir');
    $password   = md5($this->input->post('password'));
    $level      = $this->input->post('level');
    $data = array (
      'nama'      => $nama,
			'username'  => $username,
			'alamat'    => $alamat,
      'noHp'      => $noHp,
      'tgl_lahir' => $tgl_lahir,
			'password'  => $password,
			'level'     => $level,
		);
		$this->Models->createUser_data($data);
    redirect('dashboard/manageuser');
  }

	public function editUser($id)
	{
		if($this->session->userdata('level')==='1'){
			$this->load->model('Models');
			$data['page_view'] = 'admin/edituser';
			$data['user']=$this->Models->update_user($id);
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}
	}

	function editUser_data(){
    $this->load->model('Models');
		$a = $this->input->post('password');
		if($a === null || $a === '' ){
			$id 				= $this->input->post('id');
			$nama       = $this->input->post('nama');
	    $username   = $this->input->post('username');
	    $alamat     = $this->input->post('alamat');
	    $noHp       = $this->input->post('noHp');
	    $tgl_lahir  = $this->input->post('tgl_lahir');
	    $password   = $this->input->post('old_password');
	    $level      = $this->input->post('level');
	    $data = array (
				'nama'      => $nama,
				'username'  => $username,
				'alamat'    => $alamat,
	      'noHp'      => $noHp,
	      'tgl_lahir' => $tgl_lahir,
				'password'  => $password,
				'level'     => $level,
			);
			$this->Models->update_userData($data,$id);
	    redirect('dashboard/manageuser');
		}else{
			$id 				= $this->input->post('id');
			$nama       = $this->input->post('nama');
	    $username   = $this->input->post('username');
	    $alamat     = $this->input->post('alamat');
	    $noHp       = $this->input->post('noHp');
	    $tgl_lahir  = $this->input->post('tgl_lahir');
	    $password   = md5($this->input->post('password'));
	    $level      = $this->input->post('level');
	    $data = array (
	      'nama'      => $nama,
				'username'  => $username,
				'alamat'    => $alamat,
	      'noHp'      => $noHp,
	      'tgl_lahir' => $tgl_lahir,
				'password'  => $password,
				'level'     => $level,
			);
			$this->Models->update_userData($data, $id);
	    redirect('dashboard/manageuser');
		}
  }

	public function delete_user($id)
	{
		$this->load->model('Models');
		$this->Models->hapus_user($id);
		redirect(base_url('dashboard/manageuser'));
	}

	public function news()
	{
		if($this->session->userdata('level')==='1'){
			$this->load->model('Models');
			$data['page_view'] = 'admin/news';
			$data['news'] = $this->Models->news();
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}
	}

	public function createNews()
	{
		if($this->session->userdata('level')==='1'){
			$data['page_view'] = 'admin/createnews';
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}
	}

	public function editNews($id)
	{
		if($this->session->userdata('level')==='1'){
			$this->load->model('Models');
			$data['page_view'] = 'admin/editnews';
			$data['news']=$this->Models->update($id);
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}
	}

	public function tambah_createNews(){
		$this->load->model('Models');
		$judul  = $this->input->post('judul');
		$isi 	  = $this->input->post('isi');

			$config['upload_path']='./assets/photos/news';
			$config['allowed_types']='jpg|gif|png';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "upload gagal"; die();
			}else{
				$data = array(
					'judul' => $judul,
					'isi' => $isi,
					'gambar' => $this->upload->data('file_name')
				);
				$this->Models->insert_news($data);
				redirect(base_url('dashboard/news'));
			}
	}

	public function update_news()
	{
		$this->load->model('Models');
		$id = $this->input->post('id');
		$judul  = $this->input->post('judul');
		$isi 	  = $this->input->post('isi');

			$config['upload_path']='./assets/photos/news';
			$config['allowed_types']='jpg|gif|png';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				$data = array(
					'judul' => $judul,
					'isi' => $isi,
					'gambar' => $this->input->post('old_image')
				);
				$this->Models->update_news($data,$id);
				redirect(base_url('dashboard/news'));
			}else{
				$data = array(
					'judul' => $judul,
					'isi' => $isi,
					'gambar' => $this->upload->data('file_name')
				);
				$this->Models->update_news($data,$id);
				redirect(base_url('dashboard/news'));
			}
	}

	public function delete_news($id)
	{
		$this->load->model('Models');
		$this->Models->hapus_news($id);
		redirect(base_url('dashboard/news'));
	}

	public function pasien()
	{
		if($this->session->userdata('level')==='2'){
			$this->load->model('Models');
			$data['news']=$this->Models->news();
			$this->load->view('pasien/home', $data);
		}else{
			echo "Access Denied";
		}

	}

	public function detail($id)
	{
		$this->load->model('Models');
		$data['konten']=$this->Models->displayNews($id);
		$data['news']=$this->Models->news();
		$this->load->view('pasien/detailNews',$data);
	}

	public function rekamPasien()
	{
		if($this->session->userdata('level')==='2'){
			$this->load->model('Models');
			$data['user']=$this->Models->dataPasien_home();
			$data['rekam']=$this->Models->rekamPasien_home();
			$this->load->view('pasien/rekam',$data);

		}else{
			echo "Access Denied";
		}
	}

	public function dokter()
	{
		if($this->session->userdata('level')==='3'){
			$data['page_view'] = 'dashboard';
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}

	}

	public function managePasien()
	{
		if($this->session->userdata('level')==='3'){
			$this->load->model('Models');
			$data['page_view'] = 'dokter/managePasien';
			$data['user']=$this->Models->dataPasien();
			// var_dump($data);die();
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}
	}

	public function tambahPasien()
	{
		if($this->session->userdata('level')==='3'){
			$this->load->model('Models');
			$data['page_view'] = 'dokter/tambahPasien';
			$data['user']=$this->Models->userPasien();
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}
	}

	public function editPasien($id)
	{
		if($this->session->userdata('level')==='3'){
			$this->load->model('Models');
			$data['page_view'] = 'dokter/editPasien';
			$data['pasien']=$this->Models->edit_pasien($id);
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}
	}

	public function tambahPasien_data(){
    $this->load->model('Models');
		$id_user    = $this->input->post('id_user');
    $riwayat  	= $this->input->post('riwayat');
    $gol_darah  = $this->input->post('gol_darah');
    $pekerjaan  = $this->input->post('pekerjaan');
    $status		  = $this->input->post('status');
    $data = array (
      'id_user'   => $id_user,
			'riwayat'  	=> $riwayat,
			'gol_darah' => $gol_darah,
      'pekerjaan' => $pekerjaan,
      'status' 		=> $status,
		);
		$this->Models->tambahPasien_data($data);
    redirect('dashboard/managePasien');
  }

	public function inputgambar()
	{
		if($this->session->userdata('level')==='3'){
			$this->load->model('Models');
			$data['page_view'] = 'dokter/inputgambar';
			$data['user']=$this->Models->userPasien();
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}
	}

	public function tambah_rekamData(){
		$this->load->model('Models');
		$id_user 			  = $this->input->post('id_user');
		$tgl_konsul 	  = $this->input->post('tgl_konsul');
		$diagosa				= $this->input->post('diagnosa');
		$namaDokter			= $this->session->userdata('nama');

			$config['upload_path']='./assets/photos/rekam';
			$config['allowed_types']='jpg|gif|png|jpeg';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "upload gagal1"; die();
			}else {
				$gambar1 = $this->upload->data('file_name');
			}

			if(!$this->upload->do_upload('gambar2')){
				echo "upload gagal2"; die();
			}else{
				$gambar2 = $this->upload->data('file_name');
			}

			if(!$this->upload->do_upload('gambar3')){
				echo "upload gagal3"; die();
			}else{
				$data = array(
					'id_user'    => $id_user,
					'tgl_konsul' => $tgl_konsul,
					'namaDokter' => $namaDokter,
					'diagnosa'   => $diagosa,
					'gambar'     => $gambar1,
					'gambar2'     => $gambar2,
					'gambar3'     => $this->upload->data('file_name')
				);
				$this->Models->insert_rekamData($data);
				$this->session->set_flashdata('berhasil', 'Input Hasil Berhasil');
				redirect(base_url('dashboard/inputgambar'));
			}
	}

	public function petugas()
	{
		if($this->session->userdata('level')==='4'){
			$data['page_view'] = 'dashboard';
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}

	}

	public function inputdatapasien()
	{
		if($this->session->userdata('level')==='4'){
			$data['page_view'] = 'petugas/inputdatapasien';
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}

	}

	public function inputrekammedis()
	{
		if($this->session->userdata('level')==='4'){
			$data['page_view'] = 'petugas/inputrekammedis';
			$this->load->view('index',$data);
		}else{
			echo "Access Denied";
		}

	}
}
