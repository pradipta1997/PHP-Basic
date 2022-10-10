<?php
    //Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    //Ambil data dari tabel mahasiswa / query data mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    
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


        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>

            <td><?= $row["id"]; ?></td>

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

        <?php endwhile; ?>

    </table>






</body>
</htlm>