<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['dosen']['nama'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['dosen']['nip'] ?></h6>
            <p class="card-text"><?= $data['dosen']['email'] ?></p>
            <p class="card-text"><?= $data['dosen']['jurusan'] ?></p>
            <a href="<?php echo BASEURL; ?>/dosen" class="card-link">Kembali</a>
        </div>
    </div>
</div>