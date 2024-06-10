<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Default_model extends CI_Model {

	// Veritabanından bütün veriyi çekmemize yarar.
	public function get_all ($tableName, $where = array(), $order) 
	{
		return $this->db->where($where)->order_by($order)->get($tableName)->result();
	}

	// Veritabanından tek veri çekmemize yarar.
	public function get ($tableName, $where = array()) 
	{
		return $this->db->where($where)->get($tableName)->row();
	}

	// Veritabanına veri eklememizi sağlar.
	public function insert ($tableName, $data = array()) 
	{
		return $this->db->insert($tableName, $data);
	}

	// Veritabanındaki verileri güncellememize yarar.
	public function update ($tableName, $where = array(), $data = array()) 
	{
		return $this->db->where($where)->update($tableName, $data);
	}

	// Veritabanındaki verileri silmemize yarar.
	public function delete ($tableName, $where = array()) 
	{
		return $this->db->where($where)->delete($tableName);
	}

    public function count($tableName, $where = array())
    {
        return $this->db->where($where)->count_all_results($tableName);
    }

}
