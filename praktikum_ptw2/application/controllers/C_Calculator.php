<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Calculator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Calc');
    }

    public function hitung()
    {
        $Calc = new Calc();
        $angka1 = $this->input->post('angka1');
        $angka2 = $this->input->post('angka2');
        $operator = $this->input->post('operator');

        if ($operator == 'tambah') {
            $temp = $Calc->Tambah($angka1, $angka2);
            $hasil = array(
                'hasil' => $temp
            );
            $this->load->view('V_Calculator', $hasil);
        } else if ($operator == 'kurang') {
            $temp = $Calc->Kurang($angka1, $angka2);
            $hasil = array(
                'hasil' => $temp
            );
            $this->load->view('V_Calculator', $hasil);
        } else if ($operator == 'kali') {
            $temp = $Calc->Kali($angka1, $angka2);
            $hasil = array(
                'hasil' => $temp
            );
            $this->load->view('V_Calculator', $hasil);
        } else if ($operator == 'bagi') {
            $temp = $Calc->Bagi($angka1, $angka2);
            $hasil = array(
                'hasil' => $temp
            );
            $this->load->view('V_Calculator', $hasil);
        } else {
            $this->load->view('V_Calculator');
        }
    }
}
