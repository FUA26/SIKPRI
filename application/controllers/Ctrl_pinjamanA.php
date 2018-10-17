<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_pinjamanA extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mdl_pinjaman');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/Ctrl_login"));
		}
	}

	function pinjaman(){
		$id = $this->session->userdata("idUser");
		$cek = $this->Mdl_pinjaman->cek('pinjaman',array('idAnggota'=>$id,'status' => 1))->num_rows();
		// echo "<pre>";
		// print_r($cek);
		// echo "</pre>";
		if ($cek>0){
			$dataPinjaman = $this->Mdl_pinjaman->getPinjaman(array('idAnggota'=> $id));
			$this->load->model('Mdl_detailpinjaman');
			$dataDetail = $this->Mdl_detailpinjaman->getSisake($dataPinjaman[0]['idPinjaman']);
			$data = array(
				'idPinjaman' => $dataPinjaman[0]['idPinjaman'],
				'pinjaman' => $dataPinjaman[0]['pinjaman'] ,
				'lama' => $dataPinjaman[0]['lama'] ,
				'sisa' => $dataPinjaman[0]['pinjaman']-($dataDetail[0]['angsuranke']*($dataPinjaman[0]['pinjaman']/$dataPinjaman[0]['lama'])),
				'potongan' => $dataPinjaman[0]['potongan'],
				'tanggal' => $dataPinjaman[0]['tanggal'],
				'setoranke' => $dataDetail[0]['angsuranke']
				);
		// 	echo "<pre>";
		// print_r($test);
		// echo "</pre>";
			$this->load->view('v_pinjamanA',$data);
		}
		else{
			$data = array(
				'idPinjaman' => 0,
				'pinjaman' =>0 ,
				'lama' =>0 ,
				'sisa' => 0 ,
				'potongan' =>0,
				'tanggal' => ' ',
				'setoranke' =>0
				);
			$this->load->view('v_pinjamanA',$data);
		}
	}
	function detail_pinjaman($id){
		$this->load->model('Mdl_detailpinjaman');
		$data = $this->Mdl_detailpinjaman->getDetail($id);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('v_detailPinjamanA',array('data' => $data));
	}

}

