<?php

    //Untuk memulai session pada suatu halaman dengan session_start();
    session_start();

//-----------------------------------------------------------------------------------------------------------------------------


    //Jika user tidak login atau langsung masuk ke halaman index, maka kembalikan user ke halaman login.php
    if( !isset($_SESSION["login"]) ) {

        header("Location: login.php");
        exit;
    }


//-----------------------------------------------------------------------------------------------------------------------------


    //Relasi ke halaman functions.php
    require 'functions.php';

    //Untuk mengambil seluruh data mahasiswa & Fungsi LIMIT Pagination
    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

    //Jika tombol cari ditekan
    if( isset($_POST["cari"])) {

        $mahasiswa = cari($_POST["keyword"]);
        
    }


//-----------------------------------------------------------------------------------------------------------------------------




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


    <!--Menghubungkan dengan CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

    
<body>

    <a href="logout.php"><b>Logout</b></a>

    <h1>Daftar Mahasiswa</h1>

    <!-- Link Untuk Tambah Data Mahasiswa -->
    <a href="tambah.php">Tambah Data Mahasiswa</a>

    <br><br>



    <!-- Pembuatan Form Untuk Search -->
    <form action="" method="post">

        <input type="text" name="keyword" size="30" autofocus 
        placeholder="masukan keyword pencarian" autocomplete="off" id="keyword">

        <button type="submit" name="cari" id="tombolCari"> Cari </button>

        <img src="img/loader.gif" class="loader" 
             style="width: 150px; position: absolute; top: 97px; left: 210px; z-index: -1; display: none;">

    </form>



    <!-- Navigasi Pagination -->
    <div class = "pagination">

    <?php if($halamanAktif > 1) : ?>
        <a href = "?halaman=<?= $halamanAktif - 1; ?>" > &laquo; </a>
    <?php endif; ?>

    
    <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
        
        <?php if($i == $halamanAktif) : ?>
        <a href = "?halaman=<?= $i ?>" class="href1">  <?= $i; ?>  </a>

        <?php else : ?>
        <a href = "?halaman=<?= $i ?>" class="href2">  <?= $i; ?>  </a>

        <?php endif; ?>

    <?php endfor; ?>


    <?php if($halamanAktif < $jumlahHalaman) : ?>
        <a href = "?halaman=<?= $halamanAktif + 1; ?>" > &raquo; </a>
    <?php endif; ?>
    
    </div>



    <br>
    <div id="container">

    <!-- Pembuatan Tabel -->
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
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda yakin ?');" >Hapus</a>
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

    </div>


    <!--Menghubungkan dengan Framework JQuery-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!--Menghubungkan dengan Javascript-->
    <script src="js/javascript.js"></script>


</body>
</htlm>