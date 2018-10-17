<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_pinjaman extends CI_Model {
	function cek($table,$where){	
		// $this->db->order_by('tanggal','DESC');	
		return $this->db->get_where($table,$where);
	}
	function getPinjaman($where){
		$this->db->where('status',1);
		$query = $this->db->get_where('pinjaman',$where);
		return $query->result_array();
	}
	
	function getPinjamanaktif(){
		$this->db->join('anggota','anggota.idAnggota = pinjaman.idAnggota');
		$this->db->where('.pinjaman.status',1);
		$query = $this->db->get('pinjaman');
		return $query->result_array();	
	}
	function updateStatus($id,$where){
		$this->db->where('idAnggota',$id);
		$res = $this->db->update('pinjaman',$where);
		return $res;
	}
	
	function getAnggotaP(){
		$data = $this->db->get('anggota');
		return $data->result_array();
	}
	function cekPinjaman($id){
		$this->db->where('idAnggota',$id);
		$this->db->where('status',1);
		$res = $this->db->get('pinjaman');
		return $res;
	}
	function insertPinjaman($data){
		$res = $this->db->insert('pinjaman',$data);
		return $res;
	}
	
	function getIdpinjaman($id){
		$this->db->where('idPinjaman',$id);
		$res = $this->db->get('pinjaman');
		return $res->result_array();		
	}
	// public function getSisake($id)
	// {
	// 	$this->db->select('SUM(jumlah) as dibayar,COUNT(idDetailpinjaman) as angsuranke' );
	// 	$this->db->where('idPinjaman',$id);
	// 	$res = $this->db->get('detailpinjaman');
	// 	return $res->result_array();
	// }
	// public function getDetail($id)
	// {
	// 	$this->db->where('idPinjaman',$id);
	// 	$res = $this->db->get('detailpinjaman');
	// 	return $res->result_array();
	// }
	// function getPinjamanP($id){
	// 	$this->db->select('*,SUM(detailpinjaman.jumlah) as dibayar,COUNT(detailpinjaman.idDetailpinjaman) as angsuranke' );
	// 	$this->db->join('pinjaman','pinjaman.idPinjaman = detailpinjaman.idPinjaman');
	// 	$this->db->where('pinjaman.idPinjaman',$id);
	// 	$res = $this->db->get('detailpinjaman');
	// 	return $res->result_array();	
	// }
	// function insertDetail($data){
	// 	$res = $this->db->insert('detailpinjaman',$data);
	// 	return $res;
	// }
}
	
