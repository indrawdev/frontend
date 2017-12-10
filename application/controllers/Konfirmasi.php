<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {

	public function index() {
		$this->template->title = 'LABFUTSAL.com';
		$this->template->javascript->add('assets/js/konfirmasi.js');
		$this->load->model('MBilling');
		$data['bank'] = $this->MBilling->getBankAll();
		$this->template->content->view('vkonfirmasi', $data);
		$this->template->publish();
	}

	public function save() {
		$order = $this->input->post('fs_order');
		$bayar = $this->input->post('fs_bayar');
		$nominal = $this->input->post('fn_nominal');
		$nama = $this->input->post('fs_nama_transfer');

		$data = array(
			'fs_order' => trim($order),
			'fs_bayar' => trim($bayar),
			'fn_nominal' => trim($nominal),
			'fs_nama_transfer' => trim($nama),
			'fd_tanggal_buat' => date('Y-m-d H:i:s')
		);

		$this->db->insert('tx_konfirmasi', $data);
		$this->session->set_flashdata('order', $order);
		redirect('konfirmasi/thankyou', 'refresh');
	}

	public function thankyou() {
		$this->template->title = 'LABFUTSAL.com';
		$this->template->javascript->add('assets/js/order.js');
		$this->template->content->view('vthankyou');
		$this->template->publish();
	}

}