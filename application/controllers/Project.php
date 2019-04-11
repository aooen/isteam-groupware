<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('project_model', 'project');
	}

	public function index() {
		if (!$this->session->userdata('id')) redirect(base_url('login'));

		if ($this->input->method() === 'get') $this->page(1);
		else {
			try {
				$type = $this->input->post('type', true);
				if ($type === 'remove') $this->remove_project();
				else if ($type === 'close') $this->close_project();
				else if ($type === 'edit') $this->edit_project();
				else if ($type === 'join') $this->join_project();
				else $this->write_project();
			} catch (Exception $e) {
				echo "<meta charset='UTF-8'><script>alert('{$e->getMessage()}');history.back();</script>";
			}
		}
	}

	public function view($no) {
		if (!$this->session->userdata('id')) redirect(base_url('login'));

		$data = [
			'project' => $this->project->get_project($no),
			'texts' => $this->project->get_attachments($no, 'text'),
			'images' => $this->project->get_attachments($no, 'image'),
			'urls' => $this->project->get_attachments($no, 'url'),
			'team' => $this->project->get_team($no),
			'permission' => $this->project->get_permission($no)
		];
		if (!$data['project'] || $data['project']->status === 'delete') return redirect(base_url('project'));
		$this->load->view('header.include.php');
		$this->load->view('group_header.include.php');
		$this->load->view('project', $data);
		$this->load->view('footer.include.php');
	}

	public function page($page) {
		if (!$this->session->userdata('id')) redirect(base_url('login'));

		$this->project_list($page);
	}

	public function attach($no) {
		if ($this->input->method() !== 'post') return redirect(base_url('project'));
		try {
			$this->insert_attachment($no);
		} catch (Exception $e) {
			echo "<meta charset='UTF-8'><script>alert('{$e->getMessage()}');history.back();</script>";
		}
	}

	private function project_list($page = 1) {
		$this->load->view('header.include.php');
		$this->load->view('group_header.include.php');
		$this->load->view('project_list', [
			'list' => $this->project->get_projects($page),
			'count' => $this->project->get_projects_count(),
			'page' => $page
		]);
		$this->load->view('footer.include.php');
	}

	private function write_project() {
		$title = $this->input->post('title', true);
		$summary = $this->input->post('summary', true);
		if (mb_strlen($title) < 1 || mb_strlen($title) > 100) throw new Exception('제목은 1자 ~ 100자여야 합니다.');
		if (mb_strlen($summary) > 1000) throw new Exception('요약은 1000자를 넘을 수 없습니다.');

		$this->project->insert_project($title, $summary);

		redirect(base_url('project'));
	}

	private function remove_project() {
		$project = $this->input->post('project', true);
		$permission = $this->project->get_permission($project);
		if ($permission !== 'editable' && $permission !== 'openable') throw new Exception('권한이 없습니다.');

		$this->project->remove_project($project);
		redirect(base_url("project"));
	}

	private function close_project() {
		$project = $this->input->post('project', true);
		$permission = $this->project->get_permission($project);
		if ($permission !== 'editable' && $permission !== 'openable') throw new Exception('권한이 없습니다.');

		$this->project->close_project($project);
		redirect(base_url("project/view/$project"));
	}

	private function edit_project() {
		$project = $this->input->post('project', true);
		if ($this->project->get_permission($project) !== 'editable') throw new Exception('권한이 없습니다.');

		$title = $this->input->post('title', true);
		$summary = $this->input->post('summary', true);
		if (mb_strlen($title) < 1 || mb_strlen($title) > 100) throw new Exception('제목은 1자 ~ 100자여야 합니다.');
		if (mb_strlen($summary) > 1000) throw new Exception('요약은 1000자를 넘을 수 없습니다.');

		$this->project->edit_project($project, $title, $summary);

		redirect(base_url("project/view/$project"));
	}

	private function join_project() {
		$project = $this->input->post('project', true);
		$project_info = $this->project->get_project($project);
		if ($this->project->get_permission($project) || $project_info->status !== 'open') throw new Exception('권한이 없습니다.');

		$this->project->insert_team($project, $this->session->userdata('id'));

		redirect(base_url("project/view/$project"));
	}

	private function insert_attachment($no) {
		$permission = $this->project->get_permission($no);
		if ($permission !== 'editable' && $permission !== 'attachable') throw new Exception('권한이 없습니다.');

		$type = $this->input->post('type', true);
		$data = $this->input->post('data', true);
		if ($type !== 'image' && $type !== 'text' && $type !== 'url') throw new Exception('잘못된 형식입니다.');
		if (strlen($data) < 1) throw new Exception('내용은 적어도 1자여야 합니다.');
		if (($type === 'image' || $type === 'url') && !filter_var($data, FILTER_VALIDATE_URL)) throw new Exception('URL이 아닙니다.');

		$this->project->insert_attachment($no, $type, $data);

		redirect(base_url("project/view/$no"));
	}
}
