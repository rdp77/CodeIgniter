<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_0115 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_0115');
    }
    public function index()
    {
        $a['data'] = $this->M_0115->select();
        $this->load->view('V_0115_S', $a);
    }
    public function selectw()
    {
        $nbi = array('id_pelanggan' => '1461800115');
        $w['data'] = $this->M_0115->selectw($nbi);
        $this->load->view('V_0115_SW', $w);
    }
    public function selectj()
    {
        $j['data'] = $this->M_0115->selectj();
        $this->load->view('V_0115_SJ', $j);
    }
    public function selectjw()
    {
        $nbi = array('id_barang' => '1461800115');
        $jw['data'] = $this->M_0115->selectjw($nbi);
        $this->load->view('V_0115_SJW', $jw);
    }
    public function selectjl()
    {
        $jl['data'] = $this->M_0115->selectjl();
        $this->load->view('V_0115_SJL', $jl);
    }
    public function selects()
    {
        $data['total'] = $this->M_0115->selects();
        $this->load->view('V_0115_SSUM', $data);
    }
}
