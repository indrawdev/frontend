<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index() {
		$this->template->title = 'LABFUTSAL.com';
		$this->template->javascript->add('assets/js/order.js');
		$this->load->model('MBilling');
		$data['bank'] = $this->MBilling->getBankAll();
		$this->template->content->view('vorder', $data);
		$this->template->publish();
	}

}