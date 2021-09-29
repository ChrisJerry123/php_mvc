<?php

class User_model
{
    // simple aja dulu
    private $nama = "Jerry";

    public function getUser()
    {
        return $this->nama; // Mengambil data private
    }
}
