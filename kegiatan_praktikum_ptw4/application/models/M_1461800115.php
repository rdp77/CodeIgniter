<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_1461800115 extends CI_Model
{
    public function viewdatas()
    {
        $this->db->select('*');
        $this->db->From('absen');
        $this->db->join('siswa', 'absen.nis = siswa.nis');
        $this->db->join('semester', 'absen.id_semester = semester.id_semester');
        $query = $this->db->get();
        return $query->result();
    }

    public function inputdata($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function updatedata($where,$table, $data)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}
