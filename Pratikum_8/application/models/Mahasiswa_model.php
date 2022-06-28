<?php

class Mahasiswa_model extends CI_Model
{
    public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;

    private $table = "mahasiswa";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function predikat()
    {
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM mahasiswa WHERE id=?";
        $this->db->query($sql, $id);
    }

    public function save_mahasiswa($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getDataMahasiwa($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function edit_mahasiswa($id, $data)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }
}
