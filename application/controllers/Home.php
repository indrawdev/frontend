<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->template->title = 'LABFUTSAL.com';
		$this->load->model('MHome');
		$data['lapangan'] = $this->MHome->getLapanganAll();
		$this->template->content->view('vhome', $data);
		$this->template->publish();
	}

}
