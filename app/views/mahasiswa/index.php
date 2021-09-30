<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- INI UNTUK TAMPILAN DETAIL MAHASISWA SAJA -->
            <!-- <ul>
                <li><// ?php echo $mhs['nama']; ?></li>
                <li><// ?php echo $mhs['nip']; ?></li>
                <li><// ?php echo $mhs['jurusan']; ?></li>
                <li><// ?php echo $mhs['email']; ?></li>
            </ul> -->

        </div>
    </div>
</div>