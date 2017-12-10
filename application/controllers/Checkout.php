<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index() {
		$this->template->title = 'LABFUTSAL.com';
		$this->template->content->view('vcheckout');
		$this->template->publish();
	}

	public function removecart($id) {
		$data = array(
			'rowid' => trim($id),
			'qty' => 0
		);
		$this->cart->update($data);
		redirect('checkout', 'refresh');
	}
}