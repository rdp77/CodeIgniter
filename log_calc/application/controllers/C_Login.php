<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Check');
    }

    public function auth()
    {
        $Check = new Check();
        $Username = $this->input->post('username');
        $Password = $this->input->post('password');

        if ($Check->Admin($Username, $Password) == TRUE) {
            $data = array(
                'username' => $Username,
                'login' => TRUE
            );
            $this->session->set_userdata($data);
            $this->load->view('V_Sukses');
        } else {
            $this->load->view('V_Login');
        }
    }

    public function exit()
    {
        $this->session->session_destroy;
        $this->load->view('V_Login');
    }
}
