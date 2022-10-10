<?php

    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
    
    //Ambil data (fetch) mahasiswa dari object result ;
    //mysqli_fetch_row()    // <-- Mengembalikan array numeric
    //mysqli_fetch_assoc()  // <-- Mengembalikan array associative
    //mysqli_fetch_array()  // <-- Mengembalikan kedua-nya (numerik & associative)
    //mysqli_fetch_object()
    
    /*while ($mhs = mysqli_fetch_assoc($result)) {
    var_dump($mhs);
    }
    */



?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>


    <table border="1" cellpadding="10" cellspacing="0">
    
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>

            <td><?= $i; ?></td>

            <td> 
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>

            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>

            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        
        </tr>
        
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>






</body>
</htlm>