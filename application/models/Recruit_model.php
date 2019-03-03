<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruit_model extends CI_Model {
	public function get_recruits() {
		$query = $this->db->from('recruit')
			->order_by('no', 'DESC')
			->get();
		return $query->result();
	}

	public function insert_recruit($name, $email, $department, $grade, $github, $message1, $message2, $message3, $message4) {
		$result = $this->db->insert('recruit', [ 'name' => $name, 'email' => $email, 'department' => $department, 'grade' => $grade, 'github' => $github, 'message1' => $message1, 'message2' => $message2, 'message3' => $message3, 'message4' => $message4, 'date' => date('Y-m-d H:i:s') ]);
		return $result;
	}
}