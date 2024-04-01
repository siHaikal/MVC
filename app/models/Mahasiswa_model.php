<?php

class Mahasiswa_model {
    private $table = 'list';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getList() 
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getDetail($id) 
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind(':id', $id);
        $data = $this->db->single();
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }

    public function tambahData ($data) 
    {
        $query = "INSERT INTO " . $this->table . " VALUES ( :id, :nama, :nip, :email)";
        $this->db->query($query);
        $this->db->bind(':nama', $data["nama"]);
        $this->db->bind(':id', NULL);
        $this->db->bind(':nip', $data["nip"]);
        $this->db->bind(':email', $data["email"]);

        $this->db->execute();
        return $this->db->rowCount();
    }

}

?>