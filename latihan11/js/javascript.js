//JQUERY ADALAH SEBUAH FRAMEWORK UNTUK JAVASCRIPT/AJAX AGAR PENGGUNAAN LEBIH MUDAH DAN RINGKAS.
//---------------------------------------------------------------------------------------------
//JIKA MENGGUNAKAN KONSEP JQUERY [$(document).ready] MAKA PENEMPATAN (src="javascript.js";) DIMANA SAJA TIDAK MASALAH, MAU DI ATAS/BAWAH.
//---------------------------------------------------------------------------------------------
//DENGAN MENGGUNAKAN JQUERY KITA TIDAK PERLU MENULISKAN BANYAK SCRIPT SEPERTI SAAT MENULISKAN TEMPLATE AJAX.
//---------------------------------------------------------------------------------------------

$(document).ready(function() {

    //Hilangkan tombol cari
    $('#tombolCari').hide();

    
    //Event ketika keyword ditulis
    $('#keyword').on('keyup', function () {

        //Untuk menampilkan " icon loader" pada saat mencari data
        $('.loader').show();


        //Untuk meng-load data pada halaman mahasiswa.php | AJAX menggunakan "Load".
        //$('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val ());


        //Untuk meng-load data pada halaman mahasiswa.php | AJAX menggunakan $.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {

            $('#container').html(data);
            $('.loader').hide(); //Untuk menyembunyikan "icon loader" pada saat data ketemu.

        });



    });



});