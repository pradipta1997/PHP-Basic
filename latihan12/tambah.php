<?php

    //Untuk memulai session pada suatu halaman dengan session_start();
    session_start();
            
    //Jika user tidak login atau langsung masuk ke halaman tambah, maka kembalikan user ke halaman login.php
    if( !isset($_SESSION["login"]) ) {
    
        header("Location: login.php");
        exit;
    }


    //Untuk menghubungkan ke functions.php
    require "functions.php";

    //Cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])) {


        //Cek apakah data berhasil ditambahkan atau tidak
        if(tambah ($_POST) > 0) {

            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";

        }else{

            echo "
                <script>
                    alert('Data gagal ditambahkan');
                    document.location.href = 'index.php';
                </script> 
            ";

        }

    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>

<body>

    <h1><b><u>Tambah Data Mahasiswa</u></b></h1>

    <form action="" method="post" enctype="multipart/form-data">

        <ul>

            <li>
                <label for="nama"><b>Nama  &nbsp; &nbsp; :</b></label>
                <input type="text" name="nama" id="nama" required
                autocomplete="off">
            </li>

            <br>

            <li>
                <label for="nim"><b>NIM &nbsp; &nbsp; &nbsp; :</b></label>
                <input type="text" name="nim" id="nim" required>
            </li>

            <br>

            <li>
                <label for="email"><b>Email &nbsp; &nbsp; :</b></label>
                <input type="text" name="email" id="email" required>
            </li>

            <br>

            <li>
                <label for="jurusan"><b>Jurusan :</b></label>
                <input type="text" name="jurusan" id="jurusan">
            </li>

            <br>

            <li>
                <label for="gambar"><b>Gambar :</b></label>
                <input type="file" name="gambar" id="gambar">
            </li>

            <br>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>

        </ul>

        <br>
        <a href="index.php"><h3><b><--Kembali ke Halaman Utama</b></h3></a>
    
    
    
    
    </form>


</body>
</htlm>