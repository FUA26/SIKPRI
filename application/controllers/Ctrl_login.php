<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_login extends CI_Controller {
	function index(){
		$this->load->view('v_loginA');
	}
	function admin(){
		$this->load->view('v_loginP');
	}
	function beranda(){
		$this->load->view('v_homeA');
	}
	function berandaP(){
		$this->load->view('v_homeP');	
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('Mdl_anggota');
		$cek1 = $this->Mdl_anggota->cek_anggota($username)->num_rows();
		if ($cek1 >0) {
			$where =array(
				'username' => $username ,
				'password' => md5($password)
			);
			$cek2 = $this->Mdl_anggota->cek_login('anggota',$where)->num_rows();
			if ($cek2 > 0) {
				$anggota = $this->Mdl_anggota->getData('anggota',array('username'=> $username));
				$data_session = array(
					'idUser' => $anggota[0]['idAnggota'],
					'nama' => $anggota[0]['nama'],
					'status' => "login"
				);

				$this->session->set_userdata($data_session);
				redirect(base_url("index.php/Ctrl_login/beranda/".$username));


			}else{
				$this->session->set_flashdata('error','Username dan Password Salah !');
				redirect(base_url("index.php"));
			}



		} else{
			$this->session->set_flashdata('error','Username tidak terdaftar !');
			redirect(base_url("index.php"));
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		$this->load->view('v_loginA');
	}

	public function loginA(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where =array(
			'username' => $username ,
			'password' => $password
		);
		$this->load->model('Mdl_petugas');
		$cek = $this->Mdl_petugas->cek_login('petugas',$where)->num_rows();
		if ($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/Ctrl_login/berandaP/"));
			// echo "berhasil";

		}else{
			$this->session->set_flashdata('error','Username dan Password Salah !');
			redirect(base_url("index.php/Ctrl_login/admin/"));
			// echo "gagal";
		}
	}
	public function logoutA(){
		$this->session->sess_destroy();
		$this->load->view('v_loginP');
	}
}

