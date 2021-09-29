<?php

class About extends Controller
{
    // Ini adalah CONTOH method index pada controller About
    /*
    public function index($nama = "Admin", $pekerjaan = "pengguna baru")
    {
        echo "About/index<br>";
        echo "Hello, $nama. Anda adalah seorang $pekerjaan";
    }
    */

    // function / method index pada about
    public function index($nama = "Admin", $pekerjaan = "pengguna baru", $umur = 30)
    {
        // bikin data berupa array assosiatif untuk dikirmkan ke view. Datanya berdasarkan parameter yang dikirim
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;

        // untuk data judul di title
        $data['judul'] = "About Me";

        // tampilan 
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    // Ini adalah method page pada controller About
    public function page()
    {
        // echo "About/page"; // Nonaktifkan saja

        // untuk data judul di title
        $data['judul'] = "Pages";

        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
