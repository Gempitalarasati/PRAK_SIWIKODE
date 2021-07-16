<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login" && $this->session->userdata('id_level') != 1) {
            $this->session->sess_destroy();
            redirect(base_url("auth/login"));
        }
        $this->load->model("M_jenisWisata");
        $this->load->model("M_jenisKuliner");
        $this->load->model("M_Wisata");
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('admin/index');
    }


    // Jenis Wisata

    function inputJenisWisata()
    {
        $this->load->view('admin/jenisWisata/inputJenisWisata');
    }

    public function addJenisWisata()
    {
        $jenisWisata = $this->M_jenisWisata;
        $validation = $this->form_validation;
        $validation->set_rules($jenisWisata->rules());

        if ($validation->run()) {
            $jenisWisata->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect(base_url("Admin/jenisWisata"));
    }

    function jenisWisata()
    {
        $data["jenis_wisata"] = $this->M_jenisWisata->getAll();
        $this->load->view('Admin/jenisWisata/jenisWisata', $data);
    }

    function updateJenisWisata($id)
    {
        if (!isset($id)) redirect(base_url('Admin/editJenisWisata'));

        $jenisWisata = $this->M_jenisWisata;
        $validation = $this->form_validation;
        $validation->set_rules($jenisWisata->rules());

        if ($validation->run()) {
            $jenisWisata->update($id);
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            redirect(site_url('Admin/jenisWisata'));
        }
    }

    function deleteJenisWisata($id)
    {
        if (!isset($id)) show_404();

        if ($this->M_jenisWisata->delete($id)) {
            $this->session->set_flashdata('danger', 'Berhasil dihapus');
            redirect(site_url('Admin/jenisWisata'));
        }
    }

    function editJenisWisata($id)
    {
        $jenisWisata = $this->M_jenisWisata;
        $data["jenis_wisata"] = $jenisWisata->getById($id);
        if (!$data["jenis_wisata"]) show_404();

        $this->load->view("Admin/jenisWisata/editJenisWisata", $data);
    }

    // Jenis Kuliner

    function inputJenisKuliner()
    {
        $this->load->view('admin/jenisKuliner/inputJenisKuliner');
    }
    public function addJenisKuliner()
    {
        $jenisKuliner = $this->M_jenisKuliner;
        $validation = $this->form_validation;
        $validation->set_rules($jenisKuliner->rules());

        if ($validation->run()) {
            $jenisKuliner->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect(base_url("Admin/jenisKuliner"));
    }

    function jenisKuliner()
    {
        $data["jenis_kuliner"] = $this->M_jenisKuliner->getAll();
        $this->load->view('Admin/jenisKuliner/jenisKuliner', $data);
    }

    function updateJenisKuliner($id)
    {
        if (!isset($id)) redirect(base_url('Admin/editJenisKuliner'));

        $jenisKuliner = $this->M_jenisKuliner;
        $validation = $this->form_validation;
        $validation->set_rules($jenisKuliner->rules());

        if ($validation->run()) {
            $jenisKuliner->update($id);
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            redirect(site_url('Admin/jenisKuliner'));
        }
    }

    function deleteJenisKuliner($id)
    {
        if (!isset($id)) show_404();

        if ($this->M_jenisKuliner->delete($id)) {
            $this->session->set_flashdata('danger', 'Berhasil dihapus');
            redirect(site_url('Admin/jenisKuliner'));
        }
    }

    function editJenisKuliner($id)
    {
        $jenisKuliner = $this->M_jenisKuliner;
        $data["jenis_kuliner"] = $jenisKuliner->getById($id);
        if (!$data["jenis_kuliner"]) show_404();

        $this->load->view("Admin/jenisKuliner/editJenisKuliner", $data);
    }

    // Wisata

    function inputWisata()
    {
        $data["jenis_wisatas"] = $this->M_jenisWisata->getAll();
        $data["jenis_kuliners"] = $this->M_jenisKuliner->getAll();
        $this->load->view('admin/wisata/inputWisata', $data);
    }

    function addWisata()
    {
        $wisata = $this->M_Wisata;
        $validation = $this->form_validation;
        $validation->set_rules($wisata->rules());

        if ($validation->run()) {
            $wisata->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url("Admin/wisata"));
        } else {
            $this->session->set_flashdata('danger', 'Tidak Berhasil');
            redirect(base_url("Admin/inputWisata"));
        }
    }

    function wisata()
    {
        // var_dump($this->M_content->getAll());
        // die();
        $data["wisatas"] = $this->M_Wisata->getAll();
        $this->load->view('admin/wisata/wisata', $data);
    }

    function updateWisata($id)
    {
        if (!isset($id)) redirect(base_url('Admin/editWisata'));

        $wisata = $this->M_Wisata;
        $validation = $this->form_validation;
        $validation->set_rules($wisata->rules());

        if ($validation->run()) {
            $wisata->update($id);
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            redirect(site_url('Admin/wisata'));
        }
    }

    function editWisata($id)
    {
        $wisata = $this->M_Wisata;
        $data["wisata"] = $wisata->getById($id);
        if (!$data["wisata"]) show_404();
        $data["jenis_wisatas"] = $this->M_jenisWisata->getAll();
        if (!$data["jenis_wisatas"]) show_404();
        $data["jenis_kuliners"] = $this->M_jenisKuliner->getAll();
        if (!$data["jenis_kuliners"]) show_404();

        $this->load->view("admin/wisata/editWisata", $data);
    }

    function deleteWisata($id)
    {
        if (!isset($id)) show_404();

        if ($this->M_Wisata->delete($id)) {
            $this->session->set_flashdata('danger', 'Berhasil dihapus');
            redirect(site_url('Admin/wisata'));
        }
    }


    function testimoni()
    {
        $this->load->view('admin/testimoni');
    }
}
