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
		if (date("Ymd") > "20190317") throw new Exception('모집이 종료되었습니다!');
		$this->load->view('recruit/intro');
	}

	public function resume() {
		try {
			if (date("Ymd") > "20190317") throw new Exception('모집이 종료되었습니다!');
			$this->load->view('recruit/resume');
		} catch (Exception $e) {
			echo "<meta charset='UTF-8'><script>alert('{$e->getMessage()}');history.back();</script>";
		}
	}

	private function done() {
		if (date("Ymd") > "20190317") throw new Exception('모집이 종료되었습니다!');

		$agree = $this->input->post('agree', true);
		$name = $this->input->post('name', true);
		$email = $this->input->post('email', true);
		$phone = $this->input->post('phone', true);
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
		if (!preg_match('/^[0-9]{2,3}\-[0-9]{3,4}\-[0-9]{4}$/', $phone)) throw new Exception('전화번호 형식이 올바르지 않습니다.');
		if (mb_strlen($github) > 256) throw new Exception('GitHub 아이디는 256자를 넘길 수 없습니다.');

		$this->recruit_model->insert_recruit($name, $email, $phone, $department, $grade, $github, $message1, $message2, $message3, $message4);

		$this->mail($name, $grade, $github, $message1, $message2, $message3, $message4);

		$this->load->view('recruit/done');
	}

	private function mail($name, $grade, $github, $message1, $message2, $message3, $message4) {
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'utf-8';

		$this->load->library('email');
		$this->email->initialize($config);

		$this->email->from('webmaster@isteam.dev', 'ISTeam');
		$this->email->to('isteam.ssu@gmail.com');

		$this->email->subject("{$name}($grade)님이 지원하였습니다.");
		$this->email->message("github : $github\n\n$message1\n\n$message2\n\n$message3\n\n$message4");

		$this->email->set_newline("\r\n");
		$this->email->send();
	}

	public function view($password = null) {
		if (!isset($password) || $password !== 'didzllcfixaygeijzmqietmivobavzlr') show_404();

		$data = $this->recruit_model->get_recruits();

		$this->load->view('recruit/view', [
			'data' => $data
		]);
	}
}
