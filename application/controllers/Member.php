<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('user');
	}

	public function index() {
		if (!$this->session->userdata('id')) show_404();

		$this->load->view('header.include.php');
		$this->load->view('group_header.include.php');
		$this->load->view('member', [
			'list' => $this->user->get_members()
		]);
		$this->load->view('footer.include.php');
	}
}
