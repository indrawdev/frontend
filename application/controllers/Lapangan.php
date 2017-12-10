<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends CI_Controller {

	public function index() {
		$this->template->title = 'LABFUTSAL.com';
		$this->load->model('MHome');
		$data['lapangan'] = $this->MHome->getLapanganAll();
		$this->template->content->view('vlapangan', $data);
		$this->template->publish();
	}

	public function detail($kode) {
		$this->template->title = 'LABFUTSAL.com';
		$this->template->javascript->add('assets/js/detail.js');
		$this->load->model('MLapangan');
		$data['photo'] = $this->MLapangan->getPhoto($kode);
		$data['lapangan'] = $this->MLapangan->getLapangan($kode);
		$data['tarif'] = $this->MLapangan->getTarif();
		$this->template->content->view('vdetail', $data);
		$this->template->publish();
	}

	public function addcart() {
		$this->load->library('cart');
		$kode = $this->input->post('fs_kode_lapangan');
		$tarif = $this->input->post('fs_tarif');
		$nama = $this->input->post('fs_nama_lapangan');

		$xtarif = explode("-", $tarif);
		$kodtar = $xtarif[0];
		$harga = $xtarif[1];
		$jam = $xtarif[2];

		$data = array(
			'id' => trim($kode . '-' . $kodtar),
			'price' => trim($harga),
			'name' => trim($nama),
			'qty' => 1,
			'options' => array(
				'Jam' => trim(substr($jam, 0, 5))
			)
		);
		$this->cart->insert($data);
		redirect('checkout', 'refresh');
	}
	
}