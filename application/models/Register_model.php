<?php

class Register_model extends CI_Model
{

	function insert($table, $data)
	{
		return $this->db->insert($table, $data);
		// return $this->db->insert_id();
	}

	public function update($table, $where, $data)
	{
		return $this->db->update($table, $data, $where);
	}

	public function delete($table, $where)
	{
		return $this->db->delete($table, $where);
	}

	public function get($table, $where = null)
	{
		if ($where)
			$this->db->where($where);
		$query = $this->db->get($table);
		return $query->row();
	}
}
