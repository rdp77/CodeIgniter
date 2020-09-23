<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Auth_1461800115 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Check');
        $this->load->model('M_Auth_1461800115');
    }

    public function index()
    {
        $this->load->view('V_Login_1461800115');
    }

    public function login()
    {
        $this->load->view('V_Login_1461800115');
    }
    public function register()
    {
        $this->load->view('V_Register_1461800115');
    }

    public function auth()
    {
        $Username = $this->input->post('username');
        $Password = $this->input->post('password');
        $where = array(
            'username' => $Username,
            'password' => $Password
        );
        $cek = $this->M_Auth_1461800115->user('user', $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'username' => $Username,
                'password' => $Password
            );
            $this->session->set_userdata($data_session);
            $a['data'] = $this->M_Auth_1461800115->viewdatas();
            $this->load->view('V_CRUD', $a);
        } else {
            $a['data'] = array(
                'error' => 'Login Gagal Cek Username Atau Password'
            );
            $this->load->view('V_Login_1461800115', $a);
        }
    }

    public function exit()
    {
        $this->session->session_destroy;
        $this->load->view('V_Login_1461800115');
    }

    public function createuser()
    {
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $kpassword = $this->input->post('kpassword');
        $id = $this->input->post('id');
        $user = array(
            'id' => $id,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
        );
        if ($password == $kpassword) {
            $this->M_Auth_1461800115->inputdata('user', $user);
            $this->load->view('V_Login_1461800115');
        } else {
            $a['data'] = array(
                'error' => 'Password Tidak Sama'
            );
            $this->load->view('V_Register_1461800115', $a);
        }
    }
    public function createdata()
    {
        $judul = $this->input->post('judul');
        $tahun = $this->input->post('tahun');
        $id = $this->input->post('id');
        $databuku = array(
            'id' => $id,
            'judul' => $judul,
            'tahun_terbit' => $tahun,
        );
        $this->M_Auth_1461800115->inputdata('buku', $databuku);
        $a['data'] = $this->M_Auth_1461800115->viewdatas();
        $this->load->view('V_CRUD', $a);
    }

    public function update()
    {
        $judul = $this->input->post('judul');
        $tahun = $this->input->post('tahun');
        $id = $this->input->post('id');
        $where = array(
            'id' => $id,
        );
        $databuku = array(
            'judul' => $judul,
            'tahun_terbit' => $tahun,
        );
        $this->M_Auth_1461800115->updatedata($where, 'buku', $databuku);
        $a['data'] = $this->M_Auth_1461800115->viewdatas();
        $this->load->view('V_CRUD', $a);
    }
}
