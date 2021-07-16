<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("M_jenisWisata");
		$this->load->model("M_jenisKuliner");
		$this->load->model("M_Wisata");
	}
	public function index()
	{
		$data["wisatas"] = $this->M_Wisata->getAll();
		$this->load->view('index', $data);
	}

	public function detail($id)
	{
		$wisata = $this->M_Wisata;
		$data["wisata"] = $wisata->getById($id);
		if (!$data["wisata"]) show_404();
		$data["jenis_wisatas"] = $this->M_jenisWisata->getAll();
		if (!$data["jenis_wisatas"]) show_404();
		$data["jenis_kuliners"] = $this->M_jenisKuliner->getAll();
		if (!$data["jenis_kuliners"]) show_404();

		$this->load->view('detail', $data);
	}

	public function wire_tamanherbal()
	{
		$this->load->view('wire_tamanherbal');
	}

	public function wiku_saungtalaga()
	{
		$this->load->view('wiku_saungtalaga');
	}

	public function wiku_panconglava()
	{
		$this->load->view('wiku_panconglava');
	}

	public function wiku_nadya()
	{
		$this->load->view('wiku_nadya');
	}

	public function wisata_rekreasi()
	{
		$this->load->view('wisata_rekreasi');
	}

	public function wisata_kuliner()
	{
		$this->load->view('wisata_kuliner');
	}

	public function team()
	{
		$this->load->view('team');
	}
}
