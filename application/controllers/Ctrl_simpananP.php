<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_simpananP extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mdl_simpanan');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/Ctrl_login/admin"));
		}
	}

	function simpanan(){
		$this->load->model('Mdl_anggota');
		$d = $this->Mdl_anggota->getAnggotaA();
		$c = 0;
		foreach ($d as $k) {
			$e = $this->Mdl_simpanan->getTotalsimpanan($k['idAnggota']);
			$f = $this->Mdl_simpanan->getTotalpenarikan($k['idAnggota']);
			$total = $e[0]['simpanan'] - $f[0]['penarikan']; 
			// echo "<pre>";
			// print_r($e);
			// print_r($f);
			// echo "<pre>";
			$data[$c] = array(
				'idAnggota' => $k['idAnggota'],
				'idInstansi' => $k['idInstansi'],
				'nama' => $k['nama'],
				'total' => $total);
			$c++;

		
		}
		
		// );
		// $data = $this->Mdl_simpanan->getSimpananAktif();
		
		$this->load->view('v_simpananP',array('data'=>$data));
	}

	function detailSimpananA($id){
		$res = $this->Mdl_simpanan->getDetail($id);
		$data = array();
		$count = 0;
		$total = 0;
		foreach ($res as $k) {
			if ($k['idJenis'] > 0) {
				$total = $total + $k['jumlah'];
				$data[$count] = array(
					'tanggal' => $k['tanggal'],
					'idJenis' => $k['idJenis'],
					'jenis' => $k['jenis'],
					'jumlah' => $k['jumlah'],	
					'total' => $total
				);
				$count++;
			}
			else{
				$total = $total - $k['jumlah'];
				$data[$count] = array(
					'tanggal' => $k['tanggal'],
					'idJenis' => $k['idJenis'],
					'jenis' => $k['jenis'],
					'jumlah' => $k['jumlah'],	
					'total' => $total
				);	
				$count++;
			}
		}
		$data = array_reverse($data);
		// echo "<pre>";
		// print_r($res);
		// echo "<pre>";
		$this->load->view('v_detailSimpan',array('data' => $data));
	}
	function updateSimpananA($id){
		$data = $this->Mdl_simpanan->detailSimpanan($id);
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		$this->load->view('v_form_updateSimpanan',array('data' => $data));
	}

	function addWajib($id){
		
		date_default_timezone_set("Asia/Jakarta");
		$wajib = 150000;
		$data2 = array(
			'idSimpanan' => '',
			'idAnggota' => $id,
			'tanggal' => date("Y-m-d"),
			'idJenis' => 2,
			'jumlah' => $wajib
		);
		$res = $this->Mdl_simpanan->insertDetailsimpanan($data2);
		if ($res === true ) {
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));
		} else{
			$this->session->set_flashdata('error','Data GAGAL diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));
			
		}
	}
	function addGertab($id){
		// $res = $this->Mdl_simpanan->getIdsimpanan($id);
		date_default_timezone_set("Asia/Jakarta");
		$gertab = 30000;
		$data2 = array(
			'idSimpanan' => '',
			'idAnggota' => $id,
			'tanggal' => date("Y-m-d"),
			'idJenis' => 3,
			'jumlah' => $gertab
		);
		$res = $this->Mdl_simpanan->insertDetailsimpanan($data2);
		if ($res === true ) {
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));
		} else{
			$this->session->set_flashdata('error','Data GAGAL diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));
			
		}
		
	}
	function addThr($id){
		// $res1 = $this->Mdl_simpanan->getIdsimpanan($id);
		date_default_timezone_set("Asia/Jakarta");
		$thr = 200000;
		$data2 = array(
			'idSimpanan' => '',
			'idAnggota' => $id,
			'tanggal' => date("Y-m-d"),
			'idJenis' => 4,
			'jumlah' => $thr
		);
		$res = $this->Mdl_simpanan->insertDetailsimpanan($data2);
		if ($res === true ) {
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));
		} else{
			$this->session->set_flashdata('error','Data GAGAL diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));
			
		}
		
	}
	function addManasuka($id){
		// $res1 = $this->Mdl_simpanan->getIdsimpanan($id);
		date_default_timezone_set("Asia/Jakarta");
		$manasuka = $_POST['manasuka'];
		// var_dump($manasuka);
		$data2 = array(
			'idSimpanan' => '',
			'idAnggota' => $id,
			'tanggal' => date("Y-m-d"),
			'idJenis' => 5,
			'jumlah' => $manasuka
		);
		$res = $this->Mdl_simpanan->insertDetailsimpanan($data2);
		if ($res === true ) {
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));
		} else{
			$this->session->set_flashdata('error','Data GAGAL diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));
			
		}
		
	}
	function addSHU($id){
		// $res1 = $this->Mdl_simpanan->getIdsimpanan($id);
		date_default_timezone_set("Asia/Jakarta");
		$SHU = $_POST['jumlah'];
		// var_dump($SHU);
		$data2 = array(
			'idSimpanan' => '',
			'idAnggota' => $id,
			'tanggal' => date("Y-m-d"),
			'idJenis' => 3,
			'jumlah' => $SHU
		);
		$res = $this->Mdl_simpanan->insertDetailsimpanan($data2);
		if ($res === true ) {
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));
		} else{
			$this->session->set_flashdata('error','Data GAGAL diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));

		}
		
	}
	function addTarik($id){
		// $res1 = $this->Mdl_simpanan->getIdsimpanan($id);
		date_default_timezone_set("Asia/Jakarta");
		$tarik = $_POST['jumlah'];
		// var_dump($SHU);
		$data2 = array(
			'idSimpanan' => '',
			'idAnggota' => $id,
			'tanggal' => date("Y-m-d"),
			'idJenis' => 0,
			'jumlah' => $tarik
		);
		$res = $this->Mdl_simpanan->insertDetailsimpanan($data2);
		if ($res === true ) {
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));
		} else{
			$this->session->set_flashdata('error','Data GAGAL diupdate');
			redirect(base_url("index.php/Ctrl_simpananP/updateSimpananA/".$id));

		}
		
	}

	function InsertS($id){
		if (!empty($_POST['wajib'])) {
			echo "Wajib ada";
			echo $_POST['wajib'];
		} elseif (!empty($_POST['thr'])) {
			echo "Thr ada";
			echo $_POST['wajib'];
		}
		else{
			echo "Wajib kosong";
		}


		// $dataSimpan = $this->simpanan_mdl->getData(array('idSimpanan' => $id));
		// $wajib = $dataSimpan[0]['wajib'] + $_POST['wajib'];
		// $gertab = $dataSimpan[0]['gertab'] + $_POST['gertab'];
		// $thr = $dataSimpan[0]['thr'] + $_POST['thr'];
		// $manasuka = $dataSimpan[0]['manasuka'] + $_POST['manasuka'];
		// $total = $wajib + $gertab + $thr + $manasuka +$dataSimpan[0]['pokok']; 
		// $data1 = array(
		// 		'wajib' => $wajib,
		// 		'thr' => $thr,
		// 		'gertab' => $gertab,
		// 		'manasuka' => $manasuka,
		// 		'total' => $total
		// 		);
		// $res = $this->simpanan_mdl->updateSimpanan($id,$data1);
		// date_default_timezone_set("Asia/Jakarta");
		// $data2 = array(
		// 		'idRiwayatSimpan' => '',
		// 		'idSimpanan' => $dataSimpan[0]['idSimpanan'],
		// 		'tanggal' => date("Y-m-d"),
		// 		'pokok' => 0,
		// 		'wajib' => $_POST['wajib'],
		// 		'thr' =>  $_POST['thr'],
		// 		'gertab' =>  $_POST['gertab'],
		// 		'manasuka' =>  $_POST['manasuka']

		// 		);

		// // echo "<pre>";
		// // print_r($data2);
		// // echo "<pre>";
		// $r2 = $this->simpanan_mdl->insertRiwayatsimpanan($data2);
		// var_dump($r2);
		

	}
	function tarik($id){
		
	}
	function addSimpanan(){
		// $data = array(
		// 	'idSimpanan' => '',
		// 	'idAnggota' => $,
		// 	'pokok' => 100000,
		// 	'wajib' => 150000,
		// 	'thr' => 0,
		// 	'gertab' => 0,
		// 	'manasuka' => 0,
		// 	'total' => 0
		// 	);
		
		// $r = $this->simpanan_mdl->insertSimpanan($data);


		$dataSimpan = $this->simpanan_mdl->detailSimpanan(1);
		echo "<pre>";
		print_r($dataSimpan);
		echo "<pre>";
	}


	

}

