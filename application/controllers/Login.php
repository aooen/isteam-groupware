<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('user');
	}

	public function index() {
		$type = $this->input->post('type', true);
		try {
			if ($this->session->userdata('id')) throw new Exception('이미 로그인되어있습니다.');
			if ($type === 'login') $this->login_post();
			else if ($type === 'register') $this->register_post();
			else $this->login_view();
		} catch (Exception $e) {
			echo "<meta charset='UTF-8'><script>alert('{$e->getMessage()}');history.back();</script>";
		}
	}

	public function out() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

	private function login_view() {
		$this->load->view('login');
	}

	private function login_post() {
		$id = $this->input->post('id', true);
		$password = $this->input->post('password', true);

		if (!preg_match('/^[0-9a-z]{4,20}$/i', $id)) throw new Exception('아이디는 4자 ~ 20자의 알파벳, 숫자여야 합니다.');
		if (strlen($password) < 6) throw new Exception('비밀번호는 6자 이상이어야 합니다.');

		$user = $this->user->login($id, $password);
		if (is_null($user)) throw new Exception('아이디나 비밀번호를 잘못 입력하신 것 같습니다.');
		
		$this->session->set_userdata([ 'id' => $id ]);

		redirect(base_url());
	}

	private function register_post() {
		$id = $this->input->post('id', true);
		$password = $this->input->post('password', true);
		$password_confirm = $this->input->post('password_confirm', true);
		$name = $this->input->post('name', true);
		$number = $this->input->post('number', true);
		$email = $this->input->post('email', true);
		$agree = $this->input->post('agree', true);

		if (!preg_match('/^[0-9a-z]{4,20}$/i', $id)) throw new Exception('아이디는 4자 ~ 20자의 알파벳, 숫자여야 합니다.');
		if (strlen($password) < 6) throw new Exception('비밀번호는 6자 이상이어야 합니다.');
		if ($password !== $password_confirm) throw new Exception('비밀번호와 비밀번호 확인이 다릅니다.');
		if (mb_strlen($name) > 10) throw new Exception('이름은 10자를 넘을 수 없습니다.');
		if (strlen($number) !== 8 || !filter_var($number, FILTER_VALIDATE_INT)) throw new Exception('학번 형식이 올바르지 않습니다.');
		if (mb_strlen($name) > 255 || !filter_var($email, FILTER_VALIDATE_EMAIL)) throw new Exception('이메일 형식이 올바르지 않습니다.');
		if (!$agree) throw new Exception('이용약관 및 개인정보 취급방침에 동의해주세요.');

		if (!$this->user->is_member($name, $number)) throw new Exception('ISTeam 소속이 아니시네요. ISTeam 부원만 사용가능한 그룹웨어 페이지입니다.');
		if ($this->user->get_user([ 'id' => $id ])) throw new Exception('이미 같은 아이디가 존재합니다.');
		if ($this->user->get_user([ 'number' => $number ])) throw new Exception('이미 같은 학번으로 가입 이력이 존재합니다.\n그룹웨어 관리자에게 문의하세요.');

		$this->user->insert_user($id, $password, $number, $email);
		
		$this->session->set_userdata([ 'id' => $id ]);

		redirect(base_url());
	}
}
