<?php

    class Dosen extends Controller{


        public function index()
        {
            // $data['judul'] = "Daftar Dosen";
            // $data['dosen'] = $this->model('Dosen_model')->getAllDosen();

            $this->view('templates/header');
            $this->view('dosen/index');
            $this->view('templates/footer');
        }
    }

?>