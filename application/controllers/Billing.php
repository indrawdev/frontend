<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function index() {
		$this->template->title = 'LABFUTSAL.com';
		$this->template->javascript->add('assets/js/billing.js');
		$this->load->model('MBilling');
		$data['bank'] = $this->MBilling->getBankAll();
		$this->template->content->view('vbilling', $data);
		$this->template->publish();
	}

	public function order() {
		$this->load->database();

		$kode = 'B' . time() . 'LFST';
		$depan = $this->input->post('fs_nama_depan');
		$belakang = $this->input->post('fs_nama_belakang');
		$handphone = $this->input->post('fs_no_handphone');
		$email = $this->input->post('fs_email');
		$total = $this->input->post('fn_total');

		foreach ($this->input->post('fs_order') as $val) {
			$key = explode("-", $val);
			$dt = array(
				'fs_kode_booking' => trim($kode),
				'fs_kode_lapangan' => $key[0],
				'fs_kode_tarif' => $key[1],
				'fn_subtotal' => $key[2],
				'fd_tanggal_buat' => date('Y-m-d H:i:s')
			);
			$this->db->insert('tx_booking_detail', $dt);
		}

		$data = array(
			'fs_kode_booking' => trim($kode),
			'fs_nama_depan' => trim($depan),
			'fs_nama_belakang' => trim($belakang),
			'fs_no_handphone' => trim($handphone),
			'fn_total' => trim($total),
			'fd_tanggal_buat' => date('Y-m-d H:i:s')
		);
		$this->db->insert('tx_booking', $data);

		$pelanggan = array(
			'fs_nama_pelanggan' => trim($depan . ' ' . $belakang),
			'fn_no_handphone' => trim($handphone),
			'fs_email_pelanggan' => trim($email),
			'fs_user_buat' => trim($depan),
			'fd_tanggal_buat' =>  date('Y-m-d H:i:s')
		);
		$this->db->insert('tm_pelanggan', $pelanggan);
		$this->session->set_flashdata('order', $kode);
		redirect('order', 'refresh');
	}

}