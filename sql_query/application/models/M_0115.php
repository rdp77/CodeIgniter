<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_0115 extends CI_Model
{
    public function select()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $query = $this->db->get();
        return $query->result();
    }
    public function selectw($nbi)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where($nbi);
        $query = $this->db->get();
        return $query->result();
    }
    public function selectj()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->join('barang', 'barang.id_barang=pelanggan.id_pelanggan');
        $query = $this->db->get();
        return $query->result();
    }
    public function selectjw($nbi)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->join('barang', 'barang.id_barang=pelanggan.id_pelanggan');
        $this->db->where($nbi);
        $query = $this->db->get();
        return $query->result();
    }
    public function selectjl()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->join('barang', 'barang.id_barang=pelanggan.id_pelanggan');
        $this->db->like('email', '@gmail.com');
        $query = $this->db->get();
        return $query->result();
    }
    public function selects()
    {
        $sql = "SELECT SUM(total_transaksi) as total FROM penjualan";
        $result = $this->db->query($sql);
        return $result->row()->total;
    }
}
