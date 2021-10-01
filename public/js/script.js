$(function() {

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function(){
        
        $('#formModalLabel').html('Ubah Data Mahasiswa'); // mengubah judul Modal yang dari tambah menjadi ubah
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');
        // console.log(id); // hanya untuk menampilkan id saja
    } );

});
