<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruit extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('recruit_model');
	}

	public function index() {
		try {
			if ($this->input->method() === 'post') $this->done();
			else $this->intro();
		} catch (Exception $e) {
			echo "<meta charset='UTF-8'><script>alert('{$e->getMessage()}');history.back();</script>";
		}
	}
	
	private function intro() {
		$this->load->view('recruit/intro');
	}

	public function resume() {
		$this->load->view('recruit/resume');
	}

	private function done() {
		$agree = $this->input->post('agree', true);
		$name = $this->input->post('name', true);
		$email = $this->input->post('email', true);
		$department = $this->input->post('department', true);
		$grade = $this->input->post('grade', true);
		$github = $this->input->post('github', true);
		$message1 = $this->input->post('message1', true);
		$message2 = $this->input->post('message2', true);
		$message3 = $this->input->post('message3', true);
		$message4 = $this->input->post('message4', true);

		if (!$agree) throw new Exception('개인정보 취급방침에 동의하지 않았습니다!');
		if (!($name && $email && $department && $grade && $message1 && $message2 && $message3 && $message4)) throw new Exception('입력이 없습니다.');
		if (mb_strlen($name) > 32) throw new Exception('이름은 32자를 넘길 수 없습니다.');
		if (mb_strlen($email) > 256) throw new Exception('이메일은 256자를 넘길 수 없습니다.');
		if (mb_strlen($github) > 256) throw new Exception('GitHub 아이디는 256자를 넘길 수 없습니다.');

		$this->recruit_model->insert_recruit($name, $email, $department, $grade, $github, $message1, $message2, $message3, $message4);

		$this->load->view('recruit/done');
	}

	public function view($password) {
		if (!isset($password) || $password !== 'didzllcfixaygeijzmqietmivobavzlr') show_404();

		$data = $this->recruit_model->get_recruits();

		$this->load->view('recruit/view', [
			'data' => $data
		]);
	}
}
