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

    public function index($nama = "Admin", $pekerjaan = "pengguna baru", $umur = 30)
    {
        // bikin data berupa array assosiatif untuk dikirmkan ke view. Datanya berdasarkan parameter yang dikirim
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;

        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    // Ini adalah method page pada controller About
    public function page()
    {
        // echo "About/page"; // Nonaktifkan saja

        $this->view('templates.header');
        $this->view('about/page');
        $this->view('templates.footer');
    }
}
