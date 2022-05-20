$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    })

    $('.edit-kamar').on('click', function() {
        $('#formModalLabel').html('Ubah Data');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');  
        
        $.ajax({
            url: '/kelola_kamar/'+id+'/edit',
            data: {id : id},
            method: 'GET',
            // dataType: 'json',
            success: function(data) {
                // console.log(data);
                $('.modal-content form').attr('action', '/kelola_kamar/'+data.id);
                $('#tipe_kamar').val(data.tipe_kamar);
                $('#jumlah_kamar').val(data.jumlah_kamar);
            }
        });
    });

    $('.edit-fasilitas-kamar').on('click', function() {
        $('#formModalLabel').html('Ubah Data');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');  
        
        $.ajax({
            url: '/kelola_kamar/'+id+'/edit',
            data: {id : id},
            method: 'GET',
            // dataType: 'json',
            success: function(data) {
                // console.log(data);
                $('.modal-content form').attr('action', '/kelola_kamar/'+data.id);
                $('#tipe_kamar').val(data.tipe_kamar);
                $('#jumlah_kamar').val(data.jumlah_kamar);
            }
        });
    });

    $('.edit-fasilitas-hotel').on('click', function() {
        $('#formModalLabel').html('Ubah Data');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');  
        
        $.ajax({
            url: '/kelola_kamar/'+id+'/edit',
            data: {id : id},
            method: 'GET',
            // dataType: 'json',
            success: function(data) {
                // console.log(data);
                $('.modal-content form').attr('action', '/kelola_kamar/'+data.id);
                $('#tipe_kamar').val(data.tipe_kamar);
                $('#jumlah_kamar').val(data.jumlah_kamar);
            }
        });
    });
});