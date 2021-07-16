<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Testimoni extends CI_Model
{
    private $_table = "testimoni";

    public $id;
    public $nama;
    public $email;
    public $wisata_id;
    public $user_id;
    public $rating;
    public $komentar;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        $select = $this->db->select('testimoni.id as id, 
         testimoni.nama as nama, 
         testimoni.email as email,
         testimoni.wisata_id as wisata_id,
         wisata.nama as nama,
         testimoni.user_id as user_id,
         users.nama as nama,
         users.email as email')
            ->from('testimoni as testimoni')
            ->join('wisata as wisata', 'wisata.id = testimoni.wisata_id', 'LEFT')
            ->join('users as users', 'users.id = testimoni.user_id', 'LEFT')
            ->get();
        return $select->result();
    }

    public function getById($wisata_id)
    {
        $select = $this->db->select('testimoni.id as id, 
         testimoni.nama as nama, 
         testimoni.email as email,
         testimoni.wisata_id as wisata_id,
         wisata.nama as nama,
         testimoni.user_id as user_id,
         users.nama as nama,
         users.email as email,
         testimoni.rating as rating,
         testimoni.komentar as komentar')
            ->from('testimoni as testimoni')
            ->join('wisata as wisata', 'wisata.id = testimoni.wisata_id', 'LEFT')
            ->join('users as users', 'users.id_users = testimoni.user_id')
            ->where('testimoni.wisata_id', $wisata_id)
            ->get();
        return $select->result_array();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->wisata_id = $post["wisata_id"];
        $this->user_id = $post["user_id"];
        $this->rating = $post["rating"];
        $this->komentar = $post["komentar"];
        return $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->id = $id;
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->wisata_id = $post["wisata_id"];
        $this->user_id = $post["user_id"];
        $this->rating = $post["rating"];
        $this->komentar = $post["komentar"];
        return $this->db->update($this->_table, $this, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
