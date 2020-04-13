<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author
*/
class Main extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }

	public function index(){
		$this->load->model('Models');
		$data['news']=$this->Models->news();
		$this->load->view('pasien/home', $data);
    }

	public function contact(){
		$this->load->view('pasien/contact');
	}

	public function login(){
		$this->load->view('login');
	}

	public function daftar(){
		$this->load->view('daftar');
	}

	public function actlogin(){
		$username = $this->input->post('username',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($username,$password);
    if($validate->num_rows() > 0){
        $data     = $validate->row_array();
				$id				= $data['id'];
        $name     = $data['nama'];
        $username = $data['username'];
        $level    = $data['level'];
        $sesdata = array(
						'id'				=> $id,
            'username'  => $username,
            'nama'      => $name,
            'level'     => $level,
            'logged_in' => TRUE
        );

            $this->session->set_userdata($sesdata);
						//access login for admin
						if($level === '1'){
							redirect('dashboard/admin');

		        // access login for pasien
		        }elseif($level === '2'){
							$this->session->set_flashdata('berhasil', 'Selamat Datang');
							redirect('dashboard/pasien');

						// access login for dokter
					}elseif($level === '3'){
						$this->session->set_flashdata('berhasil', 'Selamat Datang');
						redirect('dashboard/dokter');

		        // access login for petugas
		        }else{
							$this->session->set_flashdata('berhasil', 'Selamat Datang');
							redirect('dashboard/petugas');
		        }

        }else{
            $this->session->set_flashdata('error', 'Username / Password Yang Anda Masukan Salah');
            redirect('main/login');
        }
	}
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }

		public function detail($id)
		{
			$this->load->model('Models');
			$data['konten']=$this->Models->displayNews($id);
			$data['news']=$this->Models->news();
			$this->load->view('pasien/detailNews',$data);
		}

}
