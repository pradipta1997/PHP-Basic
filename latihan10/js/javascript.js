//LIVE SEARCH METODE AJAX
//BERDASARKAN HALAMAN INDEX.PHP
//AMBIL ELEMEN-ELEMEN YANG DIBUTUHKAN
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombolCari');
var container = document.getElementById('container');


//TAMBAHKAN EVENT KETIKA KEYBOARD DITULIS
keyword.addEventListener('keyup', function() {

    //buat object ajax (object khusus AJAX = XMLHttpRequest)
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax (sudah ready atau belum)
    xhr.onreadystatechange = function() {

        if(xhr.readyState == 4 && xhr.status == 200) {

            container.innerHTML = xhr.responseText;
        }

    }


    //eksekusi ajax (dijalankan dihubungkan dengan file mahasiswa.php )
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();


});


//-----------------------------------------------------------