<?php

class Login_model extends CI_Model
{
	public function get($table, $column_where , $tvalue = null)
	{
		if ($column_where)
			$this->db->where($column_where, $tvalue);
		$query = $this->db->get($table);
		return $query->row();
	}
}
