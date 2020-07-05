<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_1461800115 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_1461800115');
    }

    public function index()
    {
        $a['data'] = $this->M_1461800115->viewdatas();
        $this->load->view('V_1461800115', $a);
    }

    public function createdata()
    {
        $nbi = $this->input->post('nbi');
        $semester = $this->input->post('semester');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $data = array(
            'nama_mhs' => $nama,
            'nbi_mhs' => $nbi,
            'semester_mhs' => $semester,
            'jurusan_mhs' => $jurusan
        );
        $this->M_1461800115->inputdata('mahasiswa', $data);
        redirect(base_url());
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nbi = $this->input->post('nbi');
        $semester = $this->input->post('semester');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $where = array(
            'id' => $id,
        );
        $data = array(
            'nama_mhs' => $nama,
            'nbi_mhs' => $nbi,
            'semester_mhs' => $semester,
            'jurusan_mhs' => $jurusan
        );
        $this->M_1461800115->updatedata($where, 'mahasiswa', $data);
        redirect(base_url());
    }
    public function delete()
    {
        $id = $this->input->post('id');
        $where = array(
            'id' => $id,
        );
        $this->M_1461800115->deletedata($where, 'mahasiswa');
        redirect(base_url());
    }
}
