<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_pengajuanA extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mdl_pengajuan');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/Ctrl_login"));
		}
	}

	function pengajuan(){
		$this->load->model('Mdl_simpanan');
		$id = $this->session->userdata("idUser");
		$cek = $this->Mdl_pengajuan->cek('simpanan',array('idAnggota'=>$id,'idJenis'=> 2))->num_rows();
		// var_dump($cek);
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
		if ($cek >0) {
			$max = $total*10;
			$test = $this->Mdl_simpanan->cekMin($id);
			// var_dump($max);
			if ($test[0]['lamabergabung'] >= 3) {
				$min = 1;

			} else{
				$min =0;
			}
		}else{
			$max = 0;
			$min =0;
		}
		// echo "min ".$min;
		$cek1 = $this->Mdl_pengajuan->cek1($id)->num_rows();
		// var_dump($cek1);
		if ($cek1 >0) {
			$d = $this->Mdl_pengajuan->getPengajaun(array('idAnggota'=> $id));
			// echo "<pre>";
			// print_r($d);
			// echo "</pre>";
			$status = $d[0]['idStatus'];
			$d1 = array(
				'max' => $max,
				'min' => $min,
				'status' => $status,
				'idPengajuan' => $d[0]['idPengajuan']

			);
		} else{
			$status = 0;
			$d1 = array(
				'max' => $max,
				'min' => $min,
				'status' => $status


			);
		}
		

		
		// echo "<pre>";
		// print_r($cek);
		// echo "</pre>";

		$this->load->view('v_pengajuanA',$d1);
	}
	function detailPengajuan($id){
		$data2 = $this->Mdl_pengajuan->getDetailpengajuan($id);
		$this->load->view('v_detailPengajuanP',array('data'=>$data2));
	}
	function form($max){
		$id = $this->session->userdata("idUser");
		$this->load->model('Mdl_anggota');
		$data = $this->Mdl_anggota->getAnggota($id);
		$maksimal = (int)$max;
		// var_dump($maksimal);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('v_form_pengajuan',array('data'=>$data,'max'=>$maksimal));
	}
	function insertPengajuan(){
		$id = $this->session->userdata("idUser");
		$dataInsert = array(
			'idPengajuan' => '',
			'idAnggota' => $id,
			'gaji' => $_POST['gaji'],
			'besar_pinjaman' => $_POST['pinjam'],
			'lama'=> $_POST['lama'],
			'alasan'=> $_POST['alasan'],
			'idStatus'=> 1,
			'ket' =>1
		);
		$this->Mdl_pengajuan->insertData($dataInsert);
		
		$this->session->set_flashdata('sukses','Form Pengajuan Telah di Kirim');
			redirect(base_url("index.php/Ctrl_pengajuanA/pengajuan"));
	}

	function download(){
		$pth    =   file_get_contents(base_url()."assets/data/FORM.docx");
		$nme    =   "FORM.docx";
		force_download($nme, $pth);
	}

}

