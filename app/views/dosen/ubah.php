<div class="container">

    <h5 class="mt-5">Ubah Data Dosen</h5>
    <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/dosen/editProcess" method="post">
            <input type="hidden" name="id" id="id">
            <!-- INPUT NAMA -->
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" autocomplete="off" value="indo"> <!-- tambahkan atribute name="nama" -->
            </div>
            <!-- INPUT NIP -->
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" autocomplete="off"> <!-- tambahkan atribute name="nip" -->
            </div>
            <!-- INPUT EMAIL -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" autocomplete="off"> <!-- tambahkan atribute name="email" -->
            </div>
            <!-- INPUT JURUSAN-->
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

        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-secondary">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form> <!-- TIDAK DI DALAM DIV MODAL-BODY, KARENA BUTTON INI TERMASUK KE DALAM FORM JUGA -->
    </div>

</div>