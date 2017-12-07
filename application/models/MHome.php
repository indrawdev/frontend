<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MHome extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getLapanganAll()
	{
		$xSQL = ("
			SELECT DISTINCT a.fs_kode_lapangan, a.fs_nama_lapangan, b.fs_nama_photo, b.fs_photo_lapangan
			FROM tm_lapangan a
			LEFT JOIN tm_photo_lapangan b ON b.fs_kode_lapangan = a.fs_kode_lapangan
		");

		$xSQL = $xSQL.("
			GROUP BY a.fs_kode_lapangan
			ORDER BY a.fs_kode_lapangan ASC
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL;
	}

	public function getTarifAll()
	{
		$xSQL = ("
			SELECT fs_kode_tarif, ft_jam_mulai, ft_jam_selesai, fn_harga
			FROM tm_tarif
		");

		$xSQL = $xSQL.("
			ORDER BY fs_kode_tarif ASC
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL;
	}
}