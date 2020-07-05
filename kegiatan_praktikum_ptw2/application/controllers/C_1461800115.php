<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_1461800115 extends CI_Controller
{
	public function index()
	{
		$this->load->view('V_1461800115');
	}

	public function hitung()
	{
		$attr_input = array(
			'required' => 'Inputan tidak boleh kosong',
			'numeric' => 'Inputan harus angka'
		);

		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric', $attr_input);

		$validasi = $this->form_validation->run();
		$hasil = $this->input->post('jumlah');
		$data = array(
			'bintang' => $hasil
		);

		if ($validasi == FALSE) {

			$this->load->view('V_1461800115');
		} else {

			$this->load->view('V_Hasil', $data);
		}
	}
}
