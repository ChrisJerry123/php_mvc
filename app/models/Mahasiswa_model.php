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
    /* 
    private $dbh; // database handler
    private $stmt; // query
 */
    /* CONSTRUCTORNYA DI PINDAH CLASS DATABASE AGAR LEBIH AMAN
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
    */

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        // print_r($this->db->resultSet());
    }

    public function getAllMahasiswa()
    {

        // ketika menampilkan data tanpa database, cukup gunakan:
        // return $this->mhs;

        /* 
        // menggunakan data dari database menggunakan PDO:
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute(); // kalau PDO harus 2kali biar aman
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC); // agar datanya dikembalikan sebagai array assosiatif
         */
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id'); // $id-nya (variable-nya) tidak langsung dimasukkan untuk mencegah sql injection
        $this->db->bind('id', $id);
        return $this->db->single(); // pakai single jika data yang ditampilkan hanya satu
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nip, :jurusan, :email)"; // yang pertama dikosongkan karena itu adalah 'id' yang di auto-increament

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET
        nama = :nama,
        nip = :nip,
        jurusan = :jurusan,
        email = :email
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
