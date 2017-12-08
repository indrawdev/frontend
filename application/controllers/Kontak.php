<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index() {
		$this->template->title = 'LABFUTSAL.com';
		$data = array(); 
		$this->template->content->view('vkontak', $data);
		$this->template->publish();
	}

}