<?php
class PengumumanModel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->table = "pengumuman";
    }

    public function getAll()
    {
        return $this->db->get($this->table);
    }

    public function getOne($id)
    {
        $this->db->where("id", $id);
        return $this->db->get($this->table);
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete($this->table);
    }
}

?>