<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
	public function index() {
		$this->load->view('header.include.php');
		$this->load->view('group_header.include.php');
		$this->load->view('project');
		$this->load->view('footer.include.php');
	}
}
