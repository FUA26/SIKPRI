<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_simpanan extends CI_Model {
	public function getDetail($id)
	{
		$this->db->join('jenis','jenis.idJenis = simpanan.idJenis');
		$this->db->where('simpanan.idAnggota',$id);
		$res = $this->db->get('simpanan');
		return $res->result_array();
	}
	public function cekMin($id)
		{
			$this->db->select('count(*) as lamabergabung');
			$this->db->where('idJenis', 2);
			$this->db->where('idAnggota',$id);
			$res = $this->db->get('simpanan');
			return $res->result_array();			
		}
	function insertDetailsimpanan($data){
		$res = $this->db->insert('simpanan',$data);
		return $res;
	}	
	function detailSimpanan($id){
		$this->db->select('*'); 
		$this->db->from('simpanan');
		$this->db->join('anggota', 'simpanan.idAnggota = anggota.idAnggota');
		$this->db->where('anggota.idAnggota',$id);
		// $this->db->order_by('anggota.idAnggota','DESC');
		// $this->db->limit('5');

		$data = $this->db->get();
		// $data = $this->db->get('simpanan');
		return $data->result_array();
	}
	function getJumlah($id,$where){
		$this->db->select('*,SUM(jumlah) as total');
		$this->db->where('idAnggota',$id);
		$this->db->where('idJenis',$where);
		// $this->db->order_by('idSimpanan','DESC');
		// $this->db->limit(1);
		$res = $this->db->get('simpanan');
		return $res->result_array();			
	}

	function getTotalsimpanan($id){
		$this->db->select('SUM(simpanan.jumlah) as simpanan');
		$this->db->join('anggota','anggota.idAnggota = simpanan.idAnggota');
		$this->db->where('simpanan.idAnggota ',$id);
		$this->db->where('simpanan.idJenis <>',0);
		$res = $this->db->get('simpanan');
		return $res->result_array();	
	}
	function getTotalpenarikan($id){
		$this->db->select('SUM(simpanan.jumlah) as penarikan');
		$this->db->join('anggota','anggota.idAnggota = simpanan.idAnggota');
		$this->db->where('simpanan.idAnggota ',$id);
		$this->db->where('simpanan.idJenis ',0);
		$res = $this->db->get('simpanan');
		return $res->result_array();	
	}
	// function getLastid(){
	// 	$this->db->select('idSimpanan');
	// 	$this->db->from('simpanan');
	// 	$this->db->order_by('idSimpanan','DESC');
	// 	$this->db->limit(1);
	// 	$res = $this->db->get();
	// 	return $res->result_array();
	// }
	// function insertSimpanan($data){
	// 	$res = $this->db->insert('simpanan',$data);
	// 	return $res;
	// }
	
	
 	
	
	// function getIdsimpanan($id){
	// 	$this->db->where('idSimpanan',$id);
	// 	$res = $this->db->get('simpanan');
	// 	return $res->result_array();	
	// }
	// function updateSimpanan($id,$data){
	// 	$this->db->where('idSimpanan',$id);
	// 	$res = $this->db->update('simpanan',$data);
	// 	return $res;		
	// }
	// function getTotal($id){
	// 	$this->db->select('SUM(jumlah)');
	// 	$this->db->where('idJenis >',0);
	// 	$this->db->where('idSimpanan',$id);
	// 	$res = $this->db->get('detailsimpanan');
	// 	return $res->result_array();			
	// }

	
}
	
