<?php

class Mahasiswa_model
{
    /* KITA GANTI MENGGUNAKAN DATA DARI DATABASE 
    private $mhs = [
        [
            "nama" => "Sandhika",
            "nip" => "3215468",
            "email" => "sandhika@gmail.com",
            "jurusan" => "informatika",
        ],
        [
            "nama" => "Ghalih",
            "nip" => "3215412",
            "email" => "ghalih@gmail.com",
            "jurusan" => "informatika",
        ],
        [
            "nama" => "pretian",
            "nip" => "3215445",
            "email" => "prestian@gmail.com",
            "jurusan" => "multimedia",
        ],
        [
            "nama" => "pristina",
            "nip" => "3215474",
            "email" => "pristina@gmail.com",
            "jurusan" => "multimedia",
        ]
    ];
    */

    private $dbh; // database handler
    private $stmt; // query

    public function __construct()
    {
        // jangan menyimpan file database dan user di file construct

        // data source name
        $dsn = "mysql:host=localhost; dbname=php_mvc";

        // jika error, tangkap pesan error nya
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        // ketika menampilkan data tanpa database, cukup gunakan:
        // return $this->mhs;

        // menggunakan data dari database menggunakan PDO:
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute(); // kalau PDO harus 2kali biar aman
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC); // agar datanya dikembalikan sebagai array assosiatif
    }
}
