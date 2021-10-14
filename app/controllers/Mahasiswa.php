<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);

        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function detail1($id)
    {
        $data['judul'] = "Detail Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);

        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // melihat apakah data yang diinput sudah masuk atau belum emnggunakan var_dump()
        // var_dump($_POST); 

        // mengecek apakah datanya ada atau tidak (berdasarkan video #9 menit 13:00)
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            // kalau berhasil menambahkan
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');

            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            // kalau gagal menambahkan
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');

            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');

            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');

            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function getubah()
    {
        // echo $_POST['id'];  // menampilkan id yang ditangkap dari ajax

        // echo $this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']); // BUNGKUS DENGAN SUATU FUNCTION DARI PHP, YAITU json_encode() agar datanya bertipe json
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id'])); // HANYA UNTUK MEMASTIKAN APAKAH JSON DICONSOLE BERHASIL ATAU TIDAK

    }

    public function ubah()
    {
        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            // kalau berhasil menambahkan
            Flasher::setFlash('berhasil', 'diubah', 'success');

            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            // kalau gagal menambahkan
            Flasher::setFlash('gagal', 'diubah', 'danger');

            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}
