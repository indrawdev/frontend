<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends CI_Controller {

	public function index() {
		$this->template->title = 'LABFUTSAL.com';
		$data = array(); 
		$this->template->content->view('vlapangan', $data);
		$this->template->publish();
	}

	public function detail($kode) {
		$this->template->title = 'LABFUTSAL.com';
		$this->load->model('MLapangan');
		$data['lapangan'] = $this->MLapangan->getLapangan($kode);
		$data['tarif'] = $this->MLapangan->getTarif();
		$this->template->content->view('vdetail', $data);
		$this->template->publish();
	}
}