<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	public function get_user($where) {
		$query = $this->db->get_where('user', $where);
		return $query->row();
	}

	public function insert_user($id, $password, $number, $email, $name) {
		return $this->db->insert('user', [ 'id' => $id, 'password' => password_hash($password, PASSWORD_DEFAULT), 'number' => $number, 'email' => $email, 'name' => $name ]);
	}

	public function login($id, $password) {
		$user = $this->get_user([ 'id' => $id ]);
		if (isset($user) && password_verify($password, $user->password)) return $user;
		else return false;
	}

	public function is_member($name, $number) {
		$this->db->from('memberlist')
			->where([ 'name' => $name, 'number' => $number ]);
		return $this->db->count_all_results() === 1;
	}

	public function get_members() {
		$query = $this->db->select('memberlist.*, user.email')
			->from('memberlist')
			->join('user', 'memberlist.number = user.number')
			->where('memberlist.number > 10000000')
			->order_by('memberlist.number')
			->get();
		return $query->result();
	}
}