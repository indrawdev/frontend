<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MBilling extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getBankAll()
	{
		$xSQL = ("
			SELECT fs_kode_pembayaran, fs_kode_bank, 
				fs_nama_bank, fs_no_rekening, fs_atas_nama
			FROM tm_pembayaran
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL;
	}
}