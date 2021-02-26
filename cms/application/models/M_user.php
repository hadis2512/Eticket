<?php
class M_user extends CI_Model
{

	function get_all_user()
	{
		// $sql = "SELECT * FROM user";
		// $hsl = $this->db->query($sql);
		// return $hsl;

		$res = $this->db->get('user');
		$data = array();
		// foreach ($res->result() as $row) {
		// 	$data['id'][] = $row->id;
		// 	$data['name'][] = $row->name;
		// 	$data['password'][] = $row->password;
		// 	$data['access'][] = $row->access;
		// }
		return $res;
	}
	function get($id)
	{
		// $sql = "SELECT * FROM user WHERE id=?";
		// $hsl = $this->db->query($sql, array($id));
		// return $hsl;

		$this->db->where('id', $id);
		$res = $this->db->get('user');
		$data = array();
		foreach ($res->result() as $row) {
			$data['id'][] = $row->id;
			$data['name'][] = $row->name;
			$data['password'][] = $row->password;
			$data['access'][] = $row->access;
		}
		return $data;
	}

	function save_user($id, $password, $name, $access)
	{
		// $sql = "INSERT INTO user (id,password,name,access) VALUES (?,?,?,?)";
		// $hsl = $this->db->query($sql, array($id, md5($password), $name, $access));
		// return $hsl;
		$data = array(
			'id' => $id,
			'name' => $name,
			'password' => md5($password),
			'access' => $access
		);
		$this->db->insert('user', $data);
	}

	function update_user_no_pass($id, $password, $name, $access)
	{
		// $sql = "UPDATE user set name=? ,access=? WHERE id=?";
		// $hsl = $this->db->query($sql, array($name, $access, $id));
		// return $hsl;
		$data = array(
			'name' => $name,
			'access' => $access
		);

		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}
	function update_user($id, $password, $name, $access)
	{
		// $sql = "UPDATE user set password=?, name=? ,access=? WHERE id=?";
		// $hsl = $this->db->query($sql, array(md5($password), $name, $access, $id));
		// return $hsl;
		$data = array(
			'name' => $name,
			'password' => md5($password),
			'access' => $access
		);

		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	function delete_user($id)
	{
		$sql = "DELETE FROM user where id=?";
		$hsl = $this->db->query($sql, array($id));
		return $hsl;
	}
	function getusername($id)
	{
		$sql = "SELECT * FROM user WHERE id=?";
		$hsl = $this->db->query($sql, array($id));
		return $hsl;
	}

	function get_user_login($kode)
	{
		$sql = "SELECT * FROM user WHERE id=?";
		$hsl = $this->db->query($sql, array($kode));
		return $hsl;
	}
}
