<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLapangan extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getLapangan($sKode)
	{
		$xSQL = ("
			SELECT DISTINCT a.fs_kode_lapangan, a.fs_nama_lapangan, 
				b.fs_nama_photo, b.fs_photo_lapangan
			FROM tm_lapangan a
			LEFT JOIN tm_photo_lapangan b ON b.fs_kode_lapangan = a.fs_kode_lapangan
			WHERE a.fs_kode_lapangan = '".trim($sKode)."'
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->row();
	}

	public function getTarif()
	{
		$xSQL = ("
			SELECT DISTINCT a.fs_kode_lapangan, a.fs_nama_lapangan
			FROM tm_lapangan a
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL;
	}

}