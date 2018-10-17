<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_pengajuan extends CI_Model {
	function cek($table,$where){	
		// $this->db->order_by('tanggal','DESC');	
		return $this->db->get_where($table,$where);
	}
	function cek1($id){	
		$this->db->where('idAnggota',$id);
		$this->db->where('ket',1);
		return $this->db->get('pengajuanpinjaman');
	}
	function getPengajaun($where){
		$this->db->where('ket',1);
		$query = $this->db->get_where('pengajuanpinjaman',$where);
		return $query->result_array();
	}	
	function getPengajuanA(){
		$this->db->join('anggota','anggota.idAnggota = pengajuanpinjaman.idAnggota');
		$this->db->where('pengajuanpinjaman.ket',1);
		$this->db->where('anggota.status_anggota',1);
		$data = $this->db->get('pengajuanpinjaman');
		return $data->result_array();
	}
	function getDetailpengajuan($id){
		$this->db->join('anggota','anggota.idAnggota = pengajuanpinjaman.idAnggota');
		$this->db->join('instansi','anggota.idInstansi = instansi.idInstansi');
		$this->db->where('pengajuanpinjaman.idPengajuan',$id);
	
		$data = $this->db->get('pengajuanpinjaman');
		return $data->result_array();
	}
	function getPengajuanAll($id){
		$this->db->join('status','status.idStatus = pengajuanpinjaman.idStatus');
		$this->db->where('idAnggota',$id);
		$this->db->where('ket',0);
		$query = $this->db->get('pengajuanpinjaman');
		return $query->result_array();
	}
	function getPengajuanNa(){
		$this->db->join('status','status.idStatus = pengajuanpinjaman.idStatus');
		$this->db->join('anggota','anggota.idAnggota = pengajuanpinjaman.idAnggota');
		$this->db->where('ket',0);
		$query = $this->db->get('pengajuanpinjaman');
		return $query->result_array();
	}
	function updateStatus($id,$data){
		$this->db->where('idPengajuan',$id);
		$res= $this->db->update('pengajuanpinjaman',$data);
		return $res;
	}
	function insertData($data){
		$res = $this->db->insert('pengajuanpinjaman',$data);
		return $res;
	}
}
	
