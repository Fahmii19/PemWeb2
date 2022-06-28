<?php

class Dosen_model extends CI_Model
{
    public $id;
    public $nama;
    public $nidn;
    public $pendidikan;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;

    private $table = "dosen";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM dosen WHERE id=?";
        $this->db->query($sql, $id);
    }

    public function save_dosen($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getDataDosen($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function edit_dosen($id, $data)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }
}
