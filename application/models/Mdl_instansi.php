<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_instansi extends CI_Model {
	public function getInstansi()
	{
		$res = $this->db->get('instansi');
		return $res->result_array();
	}

}
	
