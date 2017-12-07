<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index() {
		$this->template->title = 'LABFUTSAL.com';
		$news = array(); 
		$this->template->content->view('vdetail', $news);
		$this->template->publish();
	}
}