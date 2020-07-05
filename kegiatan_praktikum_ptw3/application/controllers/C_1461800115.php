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
		$data = json_encode(
			$this->M_1461800115->getdata(
				'*',
				'barang_digudang',
				'barang',
				'barang.kd_brg = barang_digudang.kd_brg',
				'gudang',
				'gudang.kd_gd = barang_digudang.kd_gd',
				'kategori',
				'JOIN kategori ON kategori.kd_kat = barang.kd_kat',
				'barang.kd_kat = "003" AND kategori.nm_kat = "Elektrik"'
			)->result()
		);
		$hasil['hasil'] = json_decode($data);
		$this->load->view('V_1461800115', $hasil);
	}
}
