<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login" && $this->session->userdata('id_level') != 2) {
            $this->session->sess_destroy();
            redirect(base_url("Auth/login"));
        }
        $this->load->model("M_jenisWisata");
        $this->load->model("M_jenisKuliner");
        $this->load->model("M_Wisata");
        $this->load->model("M_Testimoni");
        $this->load->library('form_validation');
    }

    function index()
    {
        $data["wisatas"] = $this->M_Wisata->getAll();
        $this->load->view('user/index', $data);
    }
    function detail($id)
    {
        $wisata = $this->M_Wisata;
        $data["wisata"] = $wisata->getById($id);
        if (!$data["wisata"]) show_404();
        $data["jenis_wisatas"] = $this->M_jenisWisata->getAll();
        if (!$data["jenis_wisatas"]) show_404();
        $data["jenis_kuliners"] = $this->M_jenisKuliner->getAll();
        if (!$data["jenis_kuliners"]) show_404();
        $testimoni = $this->M_Testimoni;
        $data["testimonis"] = $testimoni->getById($id);

        $this->load->view('user/detail', $data);
    }

    function addTestimoni()
    {
        $testimoni = $this->M_Testimoni;
        $validation = $this->form_validation;
        $validation->set_rules($testimoni->rules());

        if ($validation->run()) {
            $testimoni->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect(base_url("User"));
    }

    function testimoni()
    {
        $this->load->view('user/testimoni');
    }
}
