<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('V_Home');
	}

	public function login()
	{
		$this->load->view('V_Login');
	}
	public function calculator()
	{
		$this->load->view('V_Calculator');
	}
}
