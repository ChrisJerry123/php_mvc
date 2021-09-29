<?php

class Home extends Controller // inheritance dari controller
{
    // Ini adalah method index pada controller Home
    public function index()
    {
        // echo "Home/Index<br>";  // kalau tidak dinonaktifkan, maka akan muncul (mengganggu tampilan utama)

        $this->view('templates/header');
        $this->view("home/index"); // artinya: file yg ada di folder views, lalu folder home, lalu di file index.php
        $this->view('templates/footer');
    }
}
