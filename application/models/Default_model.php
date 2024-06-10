<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Default_model extends CI_Model
{

    // Veritabanından bütün veriyi çekmemize yarar.
    public function get_all($tableName, $where = array(), $order)
    {
        return $this->db->where($where)->order_by($order)->get($tableName)->result();
    }

    // Veritabanından tek veri çekmemize yarar.
    public function get($tableName, $where = array())
    {
        return $this->db->where($where)->get($tableName)->row();
    }

    // Veritabanına veri eklememizi sağlar.
    public function insert($tableName, $data = array())
    {
        return $this->db->insert($tableName, $data);
    }

    // Veritabanındaki verileri güncellememize yarar.
    public function update($tableName, $where = array(), $data = array())
    {
        return $this->db->where($where)->update($tableName, $data);
    }

    // Veritabanındaki verileri silmemize yarar.
    public function delete($tableName, $where = array())
    {
        return $this->db->where($where)->delete($tableName);
    }

    public function count($tableName, $where = array())
    {
        return $this->db->where($where)->count_all_results($tableName);
    }

    // Veritabanındaki verileri limit verir.
    public function limit($tableName, $limit, $where = array(), $order)
    {
        return $this->db->where($where)->order_by($order)->limit($limit)->get($tableName)->result();
    }

    // Pagination
    public function get_records($where = array(), $limit, $count, $tableName)
    {
        return $this->db->where($where)->limit($limit, $count)->get($tableName)->result();
    }

}
