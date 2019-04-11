<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function index() {
		if (!$this->session->userdata('id')) redirect(base_url('login'));

		$this->load->view('header.include.php');
		$this->load->view('group_header.include.php');
		$this->load->view('account');
		$this->load->view('footer.include.php');
	}
}
