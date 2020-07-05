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
        $nis = $this->input->post('nis');
        $semester = $this->input->post('semester');
        $tanggal = $this->input->post('tanggal');
        $absen = $this->input->post('absen');
        $absendata = array(
            'nis' => $nis,
            'absen' => $absen,
            'tanggal' => $tanggal,
            'id_semester' => $semester
        );
        $this->M_1461800115->inputdata('absen', $absendata);
        redirect(base_url());
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nis = $this->input->post('nis');
        $semester = $this->input->post('semester');
        $tanggal = $this->input->post('tanggal');
        $absen = $this->input->post('absen');
        $where = array(
            'id_absen' => $id,
        );
        $absendata = array(
            'nis' => $nis,
            'absen' => $absen,
            'tanggal' => $tanggal,
            'id_semester' => $semester
        );
        $this->M_1461800115->updatedata($where, 'absen', $absendata);
        redirect(base_url());
    }
}
