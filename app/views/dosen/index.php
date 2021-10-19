<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <!-- MEMANGGIL FLASHER -->
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <!-- MODAL BUTTON -->
            <!-- <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal"> --><!-- kalau error, coba data-toggle dan data-target nilainya ditambah dosen -->
            <a href="<?php echo BASEURL; ?>/dosen/tambah"><button type="button" class="btn btn-primary">Tambah Mahasiswa</button></a>
            <!-- END MODAL BUTTON -->
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <!-- FORM CARI -->
            <form method="post" action="<?= BASEURL; ?>/dosen/cari">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Dosen" name="keyword" id="keyword" autocomplete="off"> <!-- kalau error, coba name dan id nya ber-nilai: 'keywordDosen' -->
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
            <!-- END FORM CARI -->
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Dosen</h3>
            <!-- Tampil data Mahasiswa -->
            <ul class="list-group">
                <?php foreach ($data['dosen'] as $dosen) : ?>
                    <!-- Nama Mahasiswa -->
                    <li class="list-group-item "><?php echo $dosen['nama']; ?>
                        <!-- Tombol aksi crud-->
                        <a href="<?= BASEURL; ?>/dosen/hapus/<?= $dosen['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah anda yankin ingin menghapus data dosen ini?'); ">Hapus</a>
                        <a href="<?= BASEURL; ?>/dosen/ubah/<?= $dosen['id']; ?>" class="badge badge-secondary float-right ml-1 mr-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?php echo $mhs['id']; ?>">Ubah</a>
                        <a href="<?= BASEURL; ?>/dosen/detail/<?= $dosen['id']; ?>" class="badge badge-primary float-right ml-1 mr-1">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- END Tampil data Mahasiswa -->
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <!-- aria-labelledby yang di atas harus sama dengan modal-title -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" autocomplete="off"> <!-- tambahkan atribute name="nama" -->
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="number" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" autocomplete="off"> <!-- tambahkan atribute name="nip" -->
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" autocomplete="off"> <!-- tambahkan atribute name="email" -->
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <!-- hapus multiple class di bagian select menjadi class saja -->
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Pangan">Teknik Pangan</option>
                            <option value="Teknik Planologi">Teknik Planologi</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            <option value="Teknik Multimedia">Teknik Multimedia</option>
                            <option value="Teknik Animasi">Teknik Animasi</option>
                        </select>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form> <!-- TIDAK DI DALAM DIV MODAL-BODY, KARENA BUTTON INI TERMASUK KE DALAM FORM JUGA -->
            </div>
        </div>
    </div>
</div>
<!-- END Modal -->