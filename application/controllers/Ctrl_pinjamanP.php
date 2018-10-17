		<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_pinjamanP extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mdl_pinjaman');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/Ctrl_login/admin"));
		}
	}

	function index(){
		$dataPinjaman = $this->Mdl_pinjaman->getPinjamanaktif();
		$data = array();
		$c=0;
		foreach ($dataPinjaman as $d) {
			$this->load->model('Mdl_detailpinjaman');
			$dataDetail = $this->Mdl_detailpinjaman->getSisake($d['idPinjaman']);
			$data[$c] = array(
				'idAnggota' => $d['idAnggota'],
				'idPinjaman' => $d['idPinjaman'],
				'idInstansi' => $d['idInstansi'],
				'nama' => $d['nama'],
				'pinjaman' => $d['pinjaman'] ,
				'lama' => $d['lama'] ,
				'sisa' => $d['pinjaman']-($dataDetail[0]['angsuranke']*($d['pinjaman']/$d['lama'])),
				'potongan' => $d['potongan'],
				'tanggal' => $d['tanggal'],
				'setoranke' => $dataDetail[0]['angsuranke']
			);
			$c++;

		}
		$this->load->view('v_pinjamanP',array('data'=>$data));
	}
	function detailPinjamanA($id){
		$this->load->model('Mdl_detailpinjaman');
		$data = $this->Mdl_detailpinjaman->getDetail($id);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('v_detailPinjam',array('data' => $data) );
	}
	function addPinjamanA(){
		$data = $this->Mdl_pinjaman->getAnggotaP('getAnggotaP');
		$this->load->view('v_form_addPinjaman',array('data'  => $data));
	}
	function insertPinjaman(){
		$res = $this->Mdl_pinjaman->cekPinjaman($_POST['idAnggota'])->num_rows();
		if ($res >= 1 ) {
			
			$this->session->set_flashdata('error','Data GAGAL diupdate karena masih memiliki pinjaman aktif');
			redirect(base_url("index.php/Ctrl_pinjamanP/addPinjamanA"));
		} else{
			$data = array(
				'idPinjaman' => '',
				'idAnggota' => $_POST['idAnggota'],
				'pinjaman' => $_POST['jumlah'],
				'lama' => $_POST['lama'],
				
				'tanggal' => $_POST['tgl'],
				'potongan' => $_POST['potongan'],
				'status' =>1

			);
			$this->Mdl_pinjaman->insertPinjaman($data);
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_pinjamanP/addPinjamanA"));
			
		}
	}

	function updatePinjaman($id){
		$this->load->model('Mdl_detailpinjaman');
		$data = $this->Mdl_detailpinjaman->getPinjamanP($id);
		$this->load->view('v_form_updatePinjaman', array('data'=>$data));

	}

	function setoranRutin($id){
		$data = $this->Mdl_pinjaman->getIdpinjaman($id);
		$insert = array(
			'idPinjaman' => $id,
			'tanggal' => $_POST['tgl'],
			'jumlah' => $data[0]['potongan']
		);
		$this->load->model('Mdl_detailpinjaman');
		$res = $this->Mdl_detailpinjaman->insertDetail($insert);
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		if ($res === true ) {
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_pinjamanP/updatePinjaman/".$id));
		} else{
			$this->session->set_flashdata('error','Data GAGAL diupdate');
			redirect(base_url("index.php/Ctrl_pinjamanP/updatePinjaman/".$id));	
		}
	}

	function setoranManual($id){
		$data = $this->Mdl_pinjaman->getIdpinjaman($id);
		$insert = array(
			'idPinjaman' => $id,
			'tanggal' => $_POST['tgl'],
			'jumlah' => $_POST['jumlah']
		);
		// echo "<pre>";
		// print_r($insert);
		// echo "<pre>";
		$this->load->model('Mdl_detailpinjaman');
		$res = $this->Mdl_detailpinjaman->insertDetail($insert);
		
	if ($res === true ) {
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_pinjamanP/updatePinjaman/".$id));
		} else{
			$this->session->set_flashdata('error','Data GAGAL diupdate');
			redirect(base_url("index.php/Ctrl_pinjamanP/updatePinjaman/".$id));	
		}
	}
	function nonaktif($id){
		$data = array(
			'status' => 0
		);
		$res = $this->Mdl_pinjaman->updateStatus($id,$data);
		if ($res === true) {
			$this->session->set_flashdata('sukses','Data telah diupdate');
			redirect(base_url("index.php/Ctrl_pinjamanP/"));
		} else{
			$this->session->set_flashdata('error','Data GAGAL gagal diupdate');
			redirect(base_url("index.php/Ctrl_pinjamanP/"));
		}
	}
	function delete($id){
		$res= $this->simpanan_mdl->deletePinjaman($id);
		if ($res === true) {
			$this->session->set_flashdata('sukses','Data telah dihapus');
			redirect(base_url("index.php/Ctrl_pinjamanP/"));
		} else{
			$this->session->set_flashdata('error','Data GAGAL dihapus');
			redirect(base_url("index.php/Ctrl_pinjamanP/"));
		}
	}

}

