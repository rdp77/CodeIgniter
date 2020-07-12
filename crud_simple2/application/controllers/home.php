<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
	}

	public function index()
	{
		$this->load->view('v_index', '');
	}

	public function daftar()
	{

		$this->load->view('v_daftar', '');	
	}

	public function cek()
	{
		$keyword = $this->input->post('nbi');
		$data['getAll'] = $this->M_home->getAll($keyword)->result();
		$this->load->view('v_views', $data);	
	}

	public function save(){
		$nbi 			= $this->input->post('nbi');
		$nama 			= $this->input->post('nama');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$alamat 		= $this->input->post('alamat');
		$jurusan		= $this->input->post('jurusan');
		$fakultas 		= $this->input->post('fakultas');
		$no_hp 			= $this->input->post('nohp');
		$penyakit 		= $this->input->post('penyakit');
		$motivasi		= $this->input->post('motivasi');

		$tanggal= $this->input->post('tanggal');
		$bulan 	= $this->input->post('bulan');
		$tahun 	= $this->input->post('tahun');
		$tanggal_lahir = $tahun."-".$bulan."-".$tanggal;

		$data = array(
			"nbi" => $nbi,
			"nama" => $nama,
			"jenis_kelamin" => $jenis_kelamin,
			"tanggal_lahir" => $tanggal_lahir,
			"alamat" => $alamat,
			"jurusan" => $jurusan,
			"fakultas" => $fakultas,
			"nohp" => $no_hp,
			"motivasi" => $motivasi
		);

		// var_dump($data);
		$insert = $this->M_home->insertData($data);

		if ($insert > 0) {
			redirect('/home/cek','refresh');
		} else {
			echo "Gagal";
		}
	}

	public function update()
	{
		$nbi 			= $this->input->post('nbi');
		$nama 			= $this->input->post('nama');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$alamat 		= $this->input->post('alamat');
		$jurusan		= $this->input->post('jurusan');
		$fakultas 		= $this->input->post('fakultas');
		$no_hp 			= $this->input->post('nohp');
		$penyakit 		= $this->input->post('penyakit');
		$motivasi		= $this->input->post('motivasi');
		$tanggal_lahir 	= $this->input->post('tanggal_lahir');

		$data = array(
			"nbi" => $nbi,
			"nama" => $nama,
			"jenis_kelamin" => $jenis_kelamin,
			"tanggal_lahir" => $tanggal_lahir,
			"alamat" => $alamat,
			"jurusan" => $jurusan,
			"fakultas" => $fakultas,
			"nohp" => $no_hp,
			"motivasi" => $motivasi
		);

		// var_dump($data);
		$update = $this->M_home->updateData($data);

		if ($update > 0) {
			redirect('/home/cek','refresh');
		} else {
			echo "Gagal";
		}
	}

	public function edit($nbi)
	{
		$data = array("nbi" => $nbi);
		$data['edit'] = $this->M_home->edit($nbi)->row();
		$this->load->view('v_edit', $data);
	}

	public function delete($nbi)
	{
		$delete = $this->M_home->delete($nbi);
		if ($delete > 0) {
			redirect('/home/cek','refresh');
		} else {
			echo "Gagal";
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */