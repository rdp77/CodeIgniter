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
		$data['home'] = $this->M_1461800115->home();
		$this->load->view('V_Home', $data);
	}

	public function artikel()
	{
		$data['artikel'] = $this->M_1461800115->artikel();
		$this->load->view('V_Artikel', $data);
	}

	public function contact()
	{
		$this->load->view('V_Contact');
	}
}
