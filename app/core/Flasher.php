<?php

class Flasher
{
    // method untuk menangkap data pesan
    public static function setFlash($pesan, $aksi, $tipe) //pesan =  berhasil atau gagal && aksi = insert, update, delete && tipe = bootstrap yang ditampilkan hijau atau merah
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
        ];
    }

    // method untuk menampilkan pesan
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            // untuk echo ke html, gunakan petik satu saja agar sintaks html dapat berjalan dengan lancar, jangan gunakan petik dua
            echo '
            <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">  
                Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';

            unset($_SESSION['flash']); // Menghapus session ketika halaman di refresh (ini yang paling penting)
        }
    }
}
