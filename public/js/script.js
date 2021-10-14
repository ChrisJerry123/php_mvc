$(function() {

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        // UNUTK MEMBUAT TOMBOL TAMBAH DATA KOSONG KETIKA BELUM DIINPUT. JIKA TIDAK ADA DIBAWAH INI, MAKA AKAN MENAMPILKAN DATA SETELHA TOMBOL UBAH DITEKAN
        $('#nama').val('');
        $('#nip').val('');
        $('#email').val('');
        $('#jurusan').val('');
        // $('#id').val(''); // SEPERTINYA ID ITU TIDAK PERLU
    });

    $('.tampilModalUbah').on('click', function(){
        
        $('#formModalLabel').html('Ubah Data Mahasiswa'); // mengubah judul Modal yang dari tambah menjadi ubah
        $('.modal-footer button[type=submit]').html('Ubah Data');

        // AGAR DATA YANG DIINPUT BUKAN MENUJU METHOD TAMBAH, TETAPI METHOD UBAH
        $('.modal-body form').attr('action', 'http://localhost/php_mvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        // console.log(id); // hanya untuk menampilkan id saja (kadang-kadang tidak muncul, tidak tau apa masalahnya)

        $.ajax({
            url: 'http://localhost/php_mvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                // console.log(data);// HANYA UNTUK MEMASTIKAN APAKAH JSON DICONSOLE BERHASIL ATAU TIDAK
                // MENAMPILKAN DATA YANG DITANGKAP OLEH Mahasiswa_model
                $('#nama').val(data.nama);
                $('#nip').val(data.nip);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

    } );

});
