<?php

    class Dosen extends Controller{


        public function index()
        {
            $data['judul'] = "Daftar Dosen";
            $data['dosen'] = $this->model('Dosen_model')->getAllDosen();

            $this->view('templates/header', $data);
            $this->view('dosen/index', $data);
            $this->view('templates/footer');
        }

        public function detail($id)
        {
            $data['judul'] = "Detail Dosen";
            $data['dosen'] = $this->model('Dosen_model')->getDosenById($id);

            $this->view('templates/header', $data);
            $this->view('dosen/detail', $data);
            $this->view('templates/footer');
        }

        public function hapus($id)
        {
            $data['judul'] = "Hapus Data Dosen";
            $data['dosen'] = $this->model('Dosen_model')->hapus($id);

            $this->view('templates/header');
            $this->view('dosen/hapus');
            $this->view('templates/footer');
        }

        
    }

?>