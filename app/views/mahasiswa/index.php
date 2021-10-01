<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <!-- MODAL BUTTON -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Mahasiswa
            </button>
            <br><br>
            <!-- END MODAL BUTTON -->


            <h3>Daftar Mahasiswa</h3>
            <!-- Tampil data Mahasiswa -->
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">Detail</a>
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
                <h5 class="modal-title" id="judulModal">Tambah Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" autocomplete="off"> <!-- tambahkan atribute name="nama" -->
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="number" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" autocomplete="off"> <!-- tambahkan atribute name="nama" -->
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" autocomplete="off"> <!-- tambahkan atribute name="nama" -->
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <!-- hapus multiple class di bagian select menjadi class saja -->
                            <option value="Teknik Informatika">Jurusan Informatika</option>
                            <option value="Teknik Mesin">Jurusan Mesin</option>
                            <option value="Teknik Industri">Jurusan Industri</option>
                            <option value="Teknik Pangan">Jurusan Pangan</option>
                            <option value="Teknik Planologi">Jurusan Planologi</option>
                            <option value="Teknik Lingkungan">Jurusan Lingkungan</option>
                        </select>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Modal -->