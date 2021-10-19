<?php

    class Dosen_model{

        private $table = 'dosen';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        
        public function getAllDosen()
        {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }


        public function getDosenById($id)
        {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
            $this->db->bind('id', $id);

            return $this->db->single();
        }


        public function hapusDosen($id)
        {
            // $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
            $this->db->query("DELETE FROM $this->table WHERE id = :id");
            $this->db->bind('id', $id);

            $this->db->execute();

            return $this->db->rowCount();
        }


        public function tambahDosen($data)
        {
            // $query = "INSERT INTO $this->table VALUES ('', :nama, :nip, :jurusan, :email) ";
            $query = "INSERT INTO $this->table (id, nama, nip, jurusan, email) VALUES ('', :nama, :nip, :jurusan, :email) ";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nip', $data['nip']);
            $this->db->bind('jurusan', $data['jurusan']);
            $this->db->bind('email', $data['email']);

            $this->db->execute();
            return $this->db->rowCount();

        }

    }

?>