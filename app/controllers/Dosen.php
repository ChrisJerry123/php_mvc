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
            if ($this->model('Dosen_model')->hapusDosen($id) > 0) {
                header('Location: ' . BASEURL . '/dosen' );
                exit;
            }
        }

        public function tambah()
        {
            $data['judul'] = "Tambah Dosen";
            // $data['dosen'] = $this->model('Dosen_model')->getDosenById();

            $this->view('templates/header', $data);
            $this->view('dosen/tambah', $data);
            $this->view('templates/footer');
            
        }

        public function tambahProcess()
        {
            if ($this->model('Dosen_model')->tambahDosen($_POST) > 0) {
    
                header('Location: ' . BASEURL . '/dosen');
                exit;
            }
        }


        public function getUbah()
        {
            echo json_encode($this->model('Mahasiswa_model')->getDosenById($_POST['id']));
        }


        public function ubah()
        {
            $data['judul'] = "Tambah Dosen";
            // $data['dosen'] = $this->model('Dosen_model')->getDosenById();

            $this->view('templates/header', $data);
            $this->view('dosen/ubah', $data);
            $this->view('templates/footer');
        }

        
    }

?>