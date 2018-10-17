<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_anggotaP extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mdl_anggota');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/Ctrl_login/admin"));
		}
	}

	function anggota(){
		$data = $this->Mdl_anggota->getAnggotaA();
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		$this->load->view('v_anggotaA',array('data'=>$data));
	}

	function updateAnggota($id){
		$data = $this->Mdl_anggota->getAnggota($id);
		$this->load->model('Mdl_instansi');
		$data1 = $this->Mdl_instansi->getInstansi();
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		$this->load->view('v_form_updateAnggota',array('data'=>$data, 'data1'=> $data1));
	}

	function Update($id){
		$data = array(
			'idAnggota' => $id,
			'idInstansi' => $_POST['instansi'],
			'nama' => $_POST['nama'],
			'nip' => $_POST['nip'],
			'tanggal_lahir'=> $_POST['tgl'],
			'telpn'=> $_POST['tlpn'],
			'alamat' => $_POST['alamat'],
			'username' => $_POST['Username']
			
		);
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		$res = $this->Mdl_anggota->updateData($id,$data);
		if ($res>=1) {
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_anggotaP/anggota"));
		} else{
			echo "Gagal";
		}
	}

	function addAnggota(){
		// echo "Tambah Anggota";
		$this->load->model('Mdl_instansi');
		$data = $this->Mdl_instansi->getInstansi();
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		$this->load->view('v_form_addAnggota',array('data'=>$data));
	}
	public function anggotaNa()
	{
		$res = $this->Mdl_anggota->getAnggotaNa();
		// echo "<pre>";
		// print_r($res);
		// echo "<pre>";
		$this->load->view('v_anggotaNonaktif',array('data' => $res));
	}

	function Insert(){
		$dataInsert = array(
			'idAnggota' => '',
			'idInstansi' => $_POST['instansi'],
			'nama' => $_POST['nama'],
			'nip' => $_POST['nip'],
			'tanggal_lahir'=> $_POST['tgl'],
			'telpn'=> $_POST['tlpn'],
			'alamat' => $_POST['alamat'],
			'username' => $_POST['Username'],
			'password' => md5($_POST['password']),
			'status_anggota' =>1
		);
		// echo "<pre>";
		// print_r($dataInsert);
		// echo "<pre>";
		$test = $this->Mdl_anggota->cekNonaktif(array('nip' => $_POST['nip']))->num_rows();
		// var_dump($test);
		if ($test == 0) {
			echo "bisa";
			$res2 = $this->Mdl_anggota->insertData('anggota',$dataInsert);
			if ($res2>=1) {
				$aa = $this->Mdl_anggota->getLastid();
				$id = $aa[0]['idAnggota'];
				$this->load->model('Mdl_simpanan');

				date_default_timezone_set("Asia/Jakarta");
				$pokok = 100000;
				$data1 = array(
					'idSimpanan' => '',
					'idAnggota' => $id,
					'tanggal' => date("Y-m-d"),
					'idJenis' => 1,
					'jumlah' => $pokok
				);
				$wajib = 150000;
				$data2 = array(
					'idSimpanan' => '',
					'idAnggota' => $id,
					'tanggal' => date("Y-m-d"),
					'idJenis' => 2,
					'jumlah' => $wajib
				);
				$gertab = 30000;
				$data3 = array(
					'idSimpanan' => '',
					'idAnggota' => $id,
					'tanggal' => date("Y-m-d"),
					'idJenis' => 3,
					'jumlah' => $gertab
				);
				$this->Mdl_simpanan->insertDetailsimpanan($data1);
				$this->Mdl_simpanan->insertDetailsimpanan($data2);
				$this->Mdl_simpanan->insertDetailsimpanan($data3);
				$this->session->set_flashdata('sukses','Data telah ditambahkan');
				redirect(base_url("index.php/Ctrl_anggotaP/anggota"));
			} else{
				echo "berhasil";
				$this->session->set_flashdata('error','Data gagal di tambahkan');
				redirect(base_url("index.php/Ctrl_anggotaP/anggota"));
			}
		} else{
			$this->session->set_flashdata('error','Data terdaftar sebagai anggota aktif atau non aktif');
			redirect(base_url("index.php/Ctrl_anggotaP/addAnggota"));
			// echo "tidak";
		}
		// var_dump($test);

		
	}

	function doAktif($id)
	{
		$res = $this->Mdl_anggota->updateStatus($id,array('status_anggota' => 1));
		if ($res == $res) {
			$this->session->set_flashdata('sukses','Anggota Telah di aktifkan');
			redirect(base_url("index.php/Ctrl_anggotaP/anggotaNa"));
		} else{
			$this->session->set_flashdata('error','Anggota gagal untuk diaktifkan');
			redirect(base_url("index.php/Ctrl_anggotaP/anggotaNa"));
			
		}
	}

	function doNonaktif($id)
	{
		$res = $this->Mdl_anggota->updateStatus($id,array('status_anggota' => 0));
		
		if ($res == $res) {
			$this->session->set_flashdata('sukses','Anggota Telah di Non Aktifkan');
			redirect(base_url("index.php/Ctrl_anggotaP/anggota"));
		} else{
			$this->session->set_flashdata('error','Anggota gagal untuk di Non Aktifkan');
			redirect(base_url("index.php/Ctrl_anggotaP/anggota"));
			
		}
	}
	

	

	

	
	

}

