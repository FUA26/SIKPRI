<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_detailpinjaman extends CI_Model {
	public function getDetail($id)
	{
		$this->db->where('idPinjaman',$id);
		$res = $this->db->get('detailpinjaman');
		return $res->result_array();
	}

	function getPinjamanP($id){
		$this->db->select('*,SUM(detailpinjaman.jumlah) as dibayar,COUNT(detailpinjaman.idDetailpinjaman) as angsuranke' );
		$this->db->join('pinjaman','pinjaman.idPinjaman = detailpinjaman.idPinjaman');
		$this->db->where('pinjaman.idPinjaman',$id);
		$res = $this->db->get('detailpinjaman');
		return $res->result_array();	
	}

	function insertDetail($data){
		$res = $this->db->insert('detailpinjaman',$data);
		return $res;
	}

	public function getSisake($id)
	{
		$this->db->select('SUM(jumlah) as dibayar,COUNT(idDetailpinjaman) as angsuranke' );
		$this->db->where('idPinjaman',$id);
		$res = $this->db->get('detailpinjaman');
		return $res->result_array();
	}

}
	
