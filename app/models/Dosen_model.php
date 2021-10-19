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

        public function hapus($id)
        {
            $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
            $this->db->bind('id', $id);

            $this->db->execute();

            return $this->db->rowCount();
        }

    }

?>