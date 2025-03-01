$(document).ready(function() {

    // ! Menghilangkan tombol Cari
    $('#searchBtn').hide();
    
    // * Event ketika functions dijalankan
    $('#keyword').on('keyup', function() {
        // Munculkan Item Loading
        $('.loading').show();

        $.get('ajax/ajax.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loading').hide();
        })
        // $('#container').load('ajax/ajax.php?keyword=' + $('#keyword').val());
    })
})
