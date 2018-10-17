<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_anggota extends CI_Model {
	function getData($table,$where){
		$query = $this->db->get_where($table,$where);
		return $query->result_array();
	}
	function cek_anggota($username){		
		$this->db->where('username',$username);
		$this->db->where('status_anggota',1);
		return $this->db->get('anggota');
	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function getAnggota($id)
	{
		$this->db->join('instansi','anggota.idInstansi = instansi.idInstansi');
		$this->db->where('idAnggota',$id);
		$res = $this->db->get('anggota');
		return $res->result_array();
	}
	public function getAnggotaNa()
	{
		$this->db->join('instansi','anggota.idInstansi = instansi.idInstansi');
		$this->db->where('status_anggota',0);
		$res = $this->db->get('anggota');
		return $res->result_array();
	}
	public function getAnggotaA()
	{
		$this->db->join('instansi','anggota.idInstansi = instansi.idInstansi');
		$this->db->where('status_anggota',1);
		$res = $this->db->get('anggota');
		return $res->result_array();
	}
	function updateData($id,$data){
		$this->db->where('idAnggota', $id);
		$res = $this->db->update('anggota',$data);
		return $res;
	}
	public function cekNonaktif($where)
	{
		$res = $this->db->get_where('anggota',$where);
		return $res;
	}

	function getLastid(){
		$this->db->select('idAnggota');
		$this->db->from('anggota');
		$this->db->order_by('idAnggota','DESC');
		$this->db->limit(1);
		$res = $this->db->get();
		return $res->result_array();
	}
	public function updateStatus($id,$data)
	{
		$this->db->where('idAnggota',$id);
		$res = $this->db->update('anggota',$data);
		return $res;	
	}
	function insertData($table,$data){
		$res = $this->db->insert($table,$data);
		return $res;
	}
 		// public function cekaktif($where)
	// {
	// 	$res = $this->db->get_where('anggota',$where);
	// 	return $res;
	// }


}

