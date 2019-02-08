<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	public function get_user($id) {
		$query = $this->db->get_where('isteam_user', [ 'id' => $id ]);
		return $query->row();
	}

	public function insert_user($id, $password, $number, $email) {
		return $this->db->insert('isteam_user', [ 'id' => $id, 'password' => password_hash($password, PASSWORD_DEFAULT), 'number' => $number, 'email' => $email ]);
	}

	public function login($id, $password) {
		$user = $this->get_user($id);
		if (is_null($user)) return false;
		if (password_verify($password, $user->password)) return $user;
	}

	public function is_member($name, $number) {
		$query = $this->db->get_where('isteam_memberlist', [ 'name' => $name, 'number' => $number ]);
		return $query->num_rows() === 1;
	}

	public function get_members() {
		$query = $this->db->query('select isteam_memberlist.*, isteam_user.email from isteam_memberlist inner join isteam_user on isteam_memberlist.number = isteam_user.number;');
		return $query->result();
	}
}