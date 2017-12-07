<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index() {
		$this->template->title = 'LABFUTSAL.com';
		$news = array(); 
		$this->template->content->view('vorder', $news);
		$this->template->publish();
	}

	public function addcart() {
		$this->load->library('cart');
		
		$kode = $this->input->post('fs_kode_lapangan');
		$nama = $this->input->post('fs_nama_lapangan');
		$tarif = $this->input->post('fs_kode_tarif');
		$mulai = $this->input->post('ft_jam_mulai');
		$selesai = $this->input->post('ft_jam_selesai');
		$harga = $this->input->post('fn_harga');

		$data = array(
			'fs_kode_lapangan' => trim($kode),
			'fs_nama_lapangan' => trim($nama),
			'fs_kode_tarif' => trim($tarif),
			'ft_jam_mulai' => trim($mulai),
			'ft_jam_selesai' => trim($selesai),
			'fn_harga' => trim($harga)
		);

		$this->cart->insert($data);
	}

	public function editcart() {
		$this->load->library('cart');

		$data = array(
			'' => '',
			'' => '',
			'' => ''
		);
		$this->cart->update($data);
	}

	public function removecart() {
		$rowid = $this->input->post('');
		$data = array(
			'' => ''
		);
		$this->cart->update($data);
	}
}