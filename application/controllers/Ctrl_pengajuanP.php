<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_pengajuanP extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mdl_pengajuan');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/Ctrl_login/admin"));
		}
	}

	function index(){
		$data = $this->Mdl_pengajuan->getPengajuanA();
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		$this->load->view('v_pengajuanP',array('data'=>$data));
	}
	function pengajuanNa(){
	$data = $this->Mdl_pengajuan->getPengajuanNa();
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		$this->load->view('v_pengajuanNonaktif',array('data'=>$data));	
	}
	function detail($id){
		$data = $this->Mdl_pengajuan->getDetailpengajuan($id);
		$this->load->model('Mdl_simpanan');
		$this->load->model('Mdl_pinjaman');
		// echo "<pre>";
		// 	print_r($data);
		// 	echo "<pre>";
			$e = $this->Mdl_simpanan->getTotalsimpanan($data[0]['idAnggota']);
			$f = $this->Mdl_simpanan->getTotalpenarikan($data[0]['idAnggota']);
			$data1 = array(
				'total' => $e[0]['simpanan'] - $f[0]['penarikan']
			); 
		
		$data2 = $this->Mdl_pengajuan->getPengajuanAll($data[0]['idAnggota']);
		$data3=array();
		$dataPinjaman = $this->Mdl_pinjaman->getPinjaman(array('idAnggota'=> $data[0]['idAnggota']));
		if (count($dataPinjaman)>0) {
			$this->load->model('mdl_detailpinjaman');
		$dataDetail = $this->mdl_detailpinjaman->getSisake($dataPinjaman[0]['idPinjaman']);
		$data3 = array(
				'idPinjaman' => $dataPinjaman[0]['idPinjaman'],
				'pinjaman' => $dataPinjaman[0]['pinjaman'] ,
				'lama' => $dataPinjaman[0]['lama'] ,
				'sisa' => $dataPinjaman[0]['pinjaman'] - $dataDetail[0]['dibayar'],
				'potongan' => $dataPinjaman[0]['potongan'],
				'tanggal' => $dataPinjaman[0]['tanggal'],
				'setoranke' => $dataDetail[0]['angsuranke']
				);

		}
		
		// echo "<pre>";
		// print_r($data1);
		// echo "<pre>";
		$this->load->view('v_detailPengajuanA',array('data'=>$data,'simpanan'=>$data1,'pengajuan'=>$data2,'pinjaman'=>$data3));
	}
	
	function terima($id){
		$status = array(
			'idStatus' => 2
			);
		$this->Mdl_pengajuan->updateStatus($id,$status);
		redirect(base_url("index.php/Ctrl_pengajuanP/"));
	}
	function tolak($id){
		$status = array(
			'idStatus' => 3
			);
		$this->Mdl_pengajuan->updateStatus($id,$status);
		redirect(base_url("index.php/Ctrl_pengajuanP/"));
	}
	function nonaktif($id){
		$status = array(
			'ket' => 0
			);
		$this->Mdl_pengajuan->updateStatus($id,$status);
		redirect(base_url("index.php/Ctrl_pengajuanP/"));	
	}

}

