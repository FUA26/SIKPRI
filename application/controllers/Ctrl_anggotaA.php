<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_anggotaA extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mdl_anggota');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/Ctrl_login/admin"));
		}
	}
	function index(){
		// $id = $this->session->userdata("idUser");
		
		$this->load->view('v_editpassword');
	}
	function updatePassword($id){
		$data = $this->Mdl_anggota->getAnggota($id);
		$update = array(
			'password' => md5($_POST['baru'])
		);
		echo "<pre>";
		print_r($data);
		print_r($update);
		echo "<pre>";
		if (md5($_POST['lama']) === $data[0]['password']) {
			$this->Mdl_anggota->updateData($id,$update);
			$this->session->set_flashdata('sukses','Password berhasil diperbaruhi');
			redirect(base_url("index.php/Ctrl_anggotaA/"));
		} else{
			$this->session->set_flashdata('error','Password lama tidak cocok');
			redirect(base_url("index.php/Ctrl_anggotaA/"));
		}
		
	}

}

