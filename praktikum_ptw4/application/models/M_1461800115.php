<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_1461800115 extends CI_Model
{
    public function viewdatas()
    {
        $this->db->select('*');
        $this->db->From('mahasiswa');
        $query = $this->db->get();
        return $query->result();
    }

    public function inputdata($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function deletedata($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function updatedata($where, $table, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
