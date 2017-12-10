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
				b.fs_nama_photo, b.fs_photo_lapangan, a.fs_keterangan_lapangan
			FROM tm_lapangan a
			LEFT JOIN tm_photo_lapangan b ON b.fs_kode_lapangan = a.fs_kode_lapangan
			WHERE a.fs_kode_lapangan = '".trim($sKode)."'
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->row();
	}

	public function getPhoto($sKode)
	{
		$xSQL = ("
			SELECT fs_photo_lapangan
			FROM tm_photo_lapangan
			WHERE fs_kode_lapangan = '".trim($sKode)."'
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL;
	}

	public function getTarif()
	{
		$xSQL = ("
			SELECT fs_kode_tarif, ft_jam_mulai, ft_jam_selesai, fn_harga
			FROM tm_tarif
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL;
	}

}