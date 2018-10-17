<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_simpananA extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mdl_simpanan');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/Ctrl_login"));
		}
	}

	function simpanan(){
		$id = $this->session->userdata("idUser");


			$data0 = $this->Mdl_simpanan->getJumlah($id,0);
			$tarik = $data0[0]['total'];
			$data1 = $this->Mdl_simpanan->getJumlah($id,1);
			$pokok = $data1[0]['total'];
			$data2 = $this->Mdl_simpanan->getJumlah($id,2);
			$wajib = $data2[0]['total'];
			$data3 = $this->Mdl_simpanan->getJumlah($id,3);
			$gertab = $data3[0]['total'];
			$data4 = $this->Mdl_simpanan->getJumlah($id,4);
			$thr = $data4[0]['total'];
			$data5 = $this->Mdl_simpanan->getJumlah($id,5);
			$manasuka = $data5[0]['total'];
			$data6 = $this->Mdl_simpanan->getJumlah($id,6);
			$shu = $data6[0]['total'];
			$total = ($pokok+$wajib+$gertab+$thr+$manasuka+$shu)-$tarik;
			$data = array(
				'pokok' => $pokok,
				'wajib' => $wajib,
				'gertab' => $gertab,
				'thr' => $thr,
				'manasuka' => $manasuka,
				'total' => $total
			);
			// echo "<pre>";
			// print_r($data);
			// echo "<pre>";	
			$this->load->view('v_simpananA',$data);

	}

	function detail_simpanan(){
		$id = $this->session->userdata("idUser");
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
		$data1 = array_reverse($data);
		$this->load->view('v_detailSimpananA',array('data' => $data1));
	}

}

