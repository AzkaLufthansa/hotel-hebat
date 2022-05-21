$(function() {
    // Modal Edit Kamar
    $('.edit-kamar').on('click', function() {
        const id = $(this).data('id');  
        $('.modal-content form').attr('action', '/kelola_kamar/'+id);
        
        $.ajax({
            url: '/kelola_kamar/'+id+'/edit',
            data: {id : id},
            method: 'GET',
            // dataType: 'json',
            success: function(data) {
                // console.log(data);
                $('#tipe_kamar').val(data.tipe_kamar);
                $('#jumlah_kamar').val(data.jumlah_kamar);
            }
        });
    });


    // Modal Fasilitas Kamar
    $('.edit-fasilitas-kamar').on('click', function() {
        const id = $(this).data('id');  
        $('.modal-content form').attr('action', '/kelola_fasilitas_kamar/'+id);
        
        $.ajax({
            url: '/kelola_fasilitas_kamar/'+id+'/edit',
            data: {id : id},
            method: 'GET',
            // dataType: 'json',
            success: function(data) {
                // console.log(data);
                $('#kamar_id').val(data.kamar_id);
                $('#nama_fasilitas').val(data.nama_fasilitas);
            }
        });
    });


    // Modal Fasilitas Hotel
    $('.edit-fasilitas-hotel').on('click', function() {
        const id = $(this).data('id');  
        $('.modal-content form').attr('action', '/kelola_fasilitas_hotel/'+id);
        
        $.ajax({
            url: '/kelola_fasilitas_hotel/'+id+'/edit',
            data: {id : id},
            method: 'GET',
            // dataType: 'json',
            success: function(data) {
                // console.log(data);
                $('#nama_fasilitas').val(data.nama_fasilitas);
                $('#keterangan').val(data.keterangan);
            }
        });
    });
});