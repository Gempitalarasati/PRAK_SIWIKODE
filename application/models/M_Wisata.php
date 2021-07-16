<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Wisata extends CI_Model
{
    private $_table = "wisata";

    public $id;
    public $nama;
    public $deskripsi;
    public $jenis_wisata_id;
    public $fasilitas;
    public $bintang;
    public $kontak;
    public $alamat;
    public $latlong;
    public $email;
    public $web;
    public $foto;
    public $jenis_kuliner_id;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        $select = $this->db->select('wisata.id as id, 
         wisata.nama as nama, 
         wisata.deskripsi as deskripsi,
         wisata.jenis_wisata_id as jenis_wisata_id,
         jenis_wisata.nama as jenis_wisata,
         wisata.fasilitas as fasilitas,
         wisata.bintang as bintang,
         wisata.kontak as kontak,
         wisata.alamat as alamat,
         wisata.latlong as latlong,
         wisata.email as email,
         wisata.web as web,
         wisata.foto as foto,
         wisata.jenis_kuliner_id as jenis_kuliner_id,
         jenis_kuliner.nama as jenis_kuliner')
            ->from('wisata as wisata')
            ->join('jenis_wisata as jenis_wisata', 'jenis_wisata.id = wisata.jenis_wisata_id', 'LEFT')
            ->join('jenis_kuliner as jenis_kuliner', 'jenis_kuliner.id = wisata.jenis_kuliner_id', 'LEFT')
            ->get();
        return $select->result();
    }

    public function getById($id)
    {
        $select = $this->db->select('wisata.id as id, 
        wisata.nama as nama, 
        wisata.deskripsi as deskripsi,
        wisata.jenis_wisata_id as jenis_wisata_id,
        jenis_wisata.nama as jenis_wisata,
        wisata.fasilitas as fasilitas,
        wisata.bintang as bintang,
        wisata.kontak as kontak,
        wisata.alamat as alamat,
        wisata.latlong as latlong,
        wisata.email as email,
        wisata.web as web,
        wisata.foto as foto,
        wisata.jenis_kuliner_id as jenis_kuliner_id,
        jenis_kuliner.nama as jenis_kuliner')
            ->from('wisata as wisata')
            ->join('jenis_wisata as jenis_wisata', 'jenis_wisata.id = wisata.jenis_wisata_id', 'LEFT')
            ->join('jenis_kuliner as jenis_kuliner', 'jenis_kuliner.id = wisata.jenis_kuliner_id', 'LEFT')
            ->where('wisata.id', $id)
            ->get();
        return $select->result_array();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->jenis_wisata_id = $post["jenis_wisata_id"];
        $this->fasilitas = $post["fasilitas"];
        $this->bintang = $post["bintang"];
        $this->kontak = $post["kontak"];
        $this->alamat = $post["alamat"];
        $this->latlong = $post["latlong"];
        $this->email = $post["email"];
        $this->web = $post["web"];
        $this->foto = $this->_uploadImage();
        $this->jenis_kuliner_id = $post["jenis_kuliner_id"];
        return $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->id = $id;
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->jenis_wisata_id = $post["jenis_wisata_id"];
        $this->fasilitas = $post["fasilitas"];
        $this->bintang = $post["bintang"];
        $this->kontak = $post["kontak"];
        $this->alamat = $post["alamat"];
        $this->latlong = $post["latlong"];
        $this->email = $post["email"];
        $this->web = $post["web"];
        if (!empty($_FILES['foto']['name'])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post['old_image'];
        }
        $this->jenis_kuliner_id = $post["jenis_kuliner_id"];
        return $this->db->update($this->_table, $this, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'item-' . time();
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/wisata/wisata', $error);
            return "default.jpg";
        }
    }
}
