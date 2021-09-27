<?php

class About
{
    // Ini adalah method index pada controller About
    public function index($nama = "Admin", $pekerjaan = "pengguna baru")
    {
        echo "About/index<br>";
        echo "Hello, $nama. Anda adalah seorang $pekerjaan";
    }

    // Ini adalah method page pada controller About
    public function page()
    {
        echo "About/page";
    }
}
