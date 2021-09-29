<?php

class Home extends Controller // inheritance dari controller
{
    // Ini adalah method index pada controller Home
    public function index()
    {
        // echo "Home/Index<br>";  // kalau tidak dinonaktifkan, maka akan muncul (mengganggu tampilan utama)

        // data yang akan dikirim (dalam hal ini adalah judul di title)
        $data['judul'] = "Home";

        // views yang akan di load
        $this->view('templates/header', $data);
        $this->view("home/index"); // artinya: file yg ada di folder views, lalu folder home, lalu di file index.php
        $this->view('templates/footer');
    }
}
