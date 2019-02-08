<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {
		if ($this->session->userdata('id')) $this->project_main();
		else $this->main();
	}

	private function main() {
		$this->load->view('header.include.php');
		$this->load->view('welcome_message');
		$this->load->view('footer.include.php');
	}

	private function project_main() {
		redirect(base_url('project'));
	}
}
