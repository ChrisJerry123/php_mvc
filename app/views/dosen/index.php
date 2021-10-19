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
            <a href="<?php echo BASEURL; ?>/dosen/tambah" class="btn btn-primary" role="button">Tambah Dosen</a>
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