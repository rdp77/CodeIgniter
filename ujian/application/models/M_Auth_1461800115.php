<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Auth_1461800115 extends CI_Model
{
    public function viewdatas()
    {
        $this->db->select('*');
        $this->db->From('buku');
        $query = $this->db->get();
        return $query->result();
    }

    public function user($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function inputdata($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function updatedata($where, $table, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
