<?php

class Users_model extends CI_Model
{
    public function get_all_user()
    {
        return $this->db->get('employees');
    }

    public function get_data_user($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('id', $keyword);
        }

        return $this->db->get('employees', $limit, $start);
    }

    public function count_all_user($keyword)
    {
        $this->db->like('id', $keyword);
        $this->db->from('employees');
        return $this->db->count_all_results();
    }

    public function count_data_user($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('id', $keyword);
        }

        $this->db->from('employees');
        $this->db->limit($limit, $start);
        return $this->db->count_all_results();
    }

	public function get($table, $column_where , $tvalue = null)
	{
		if ($column_where)
			$this->db->where($column_where, $tvalue);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function update($table, $where, $data)
	{
		return $this->db->update($table, $data, $where);
	}
}
