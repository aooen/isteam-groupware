<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {
	public function get_project($no) {
		$query = $this->db->get_where('project', [ 'no' => $no ]);
		return $query->row();
	}

	public function get_projects($page = 1) {
		$query = $this->db->from('project')
			->where('status !=', 'delete')
			->order_by('no', 'DESC')
			->limit(10, ($page - 1) * 10)
			->get();
		return $query->result();
	}

	public function get_projects_count($page = 1) {
		$this->db->from('project')
			->where('status !=', 'delete');
		return $this->db->count_all_results();
	}

	public function insert_project($title, $summary, $status = 'open') {
		$result = $this->db->insert('project', [ 'title' => $title, 'summary' => $summary, 'status' => $status, 'create_date' => date('Y-m-d H:i:s') ]);
		if (!$result) return false;
		$result = $this->db->insert_id();
		$this->insert_team($result, $this->session->userdata('id'), true);
		return $result;
	}

	public function insert_team($project_no, $user_id, $owner = false) {
		return $this->db->insert('project_team', [ 'project_no' => $project_no, 'user_id' => $user_id, 'owner' => $owner ]);
	}

	public function get_team($project_no) {
		$query = $this->db->from('project_team')
			->where('project_no', $project_no )
			->join('user', 'project_team.user_id = user.id')
			->join('memberlist', 'user.number = memberlist.number')
			->order_by('owner DESC, memberlist.name ASC')
			->get();
		return $query->result();
	}

	public function get_permission($project_no) {
		$status = $this->get_project($project_no)->status;
		if ($status === 'delete') return false;
		$query = $this->db->from('project_team')
			->where('project_no', $project_no)
			->where('user_id', $this->session->userdata('id'))
			->get();
		$row = $query->row();
		if (!$row) return false;
		else if ($status === 'open') {
			if ($row->owner) return 'editable';
			else return 'attachable';
		} else {
			if ($row->owner) return 'openable';
			else return false;
		}
	}

	public function get_attachments($project_no, $type = null) {
		if ($type) $this->db->where('type', $type);
		$query = $this->db->from('project_attachment')
			->where('project_no', $project_no)
			->order_by('no', 'ASC')
			->join('user', 'project_attachment.user_id = user.id')
			->join('memberlist', 'user.number = memberlist.number')
			->get();
		return $query->result();
	}

	public function insert_attachment($project_no, $type, $data) {
		return $this->db->insert('project_attachment', [ 'project_no' => $project_no, 'user_id' => $this->session->userdata('id'), 'type' => $type, 'data' => $data, 'create_date' => date('Y-m-d H:i:s') ]);
	}

	public function close_project($project_no) {
		$status = 'close';
		if ($this->get_project($project_no)->status === 'close') $status = 'open';
		$this->db->where('no', $project_no);
		return $this->db->update('project', [ 'status' => $status ]);
	}

	public function remove_project($project_no) {
		$this->db->where('no', $project_no);
		return $this->db->update('project', [ 'status' => 'delete' ]);
	}

	public function edit_project($project_no, $title, $summary) {
		$this->db->where('no', $project_no);
		return $this->db->update('project', [ 'title' => $title, 'summary' => $summary ]);
	}
}