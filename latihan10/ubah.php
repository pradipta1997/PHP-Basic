<?php

    //Untuk memulai session pada suatu halaman dengan session_start();
    session_start();

    //Jika user tidak login atau langsung masuk ke halaman ubah, maka kembalikan user ke halaman login.php
    if( !isset($_SESSION["login"]) ) {
    
        header("Location: login.php");
        exit;
    }




    //Untuk menghubungkan ke functions.php
    require "functions.php";


    //Ambil data di URL
    $id = $_GET["id"];

    //Query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    //Cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])) {


        //Cek apakah data berhasil ditambahkan atau tidak
        if(ubah ($_POST) > 0) {

            echo "
                <script>
                    alert('Data berhasil diubah');
                    document.location.href = 'index.php';
                </script>
            ";

        }else{

            echo "
                <script>
                    alert('Data gagal diubah');
                    document.location.href = 'index.php';
                </script> 
            ";

        }

    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Mahasiswa</title>
</head>

<body>

    <h1><b><u>Ubah Data Mahasiswa</u></b></h1>

    <form action="" method="post" enctype="multipart/form-data">

        <!-- Input Type = "hidden" berfungsi agar saat mengubah data berdasarkan id, data yang lainnya tdk ikut berubah -->
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <!-- Input Type = "hidden" berfungsi agar saat kita tidak ingin mengubah data gambar, maka akan tetap berhasil -->
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">

        <ul>

            <li>
                <label for="nama"><b>Nama  &nbsp; &nbsp; :</b></label>
                <input type="text" name="nama" id="nama" required
                value="<?= $mhs["nama"]; ?>" >
             
            </li>

            <br>

            <li>
                <label for="nim"><b>NIM &nbsp; &nbsp; &nbsp; :</b></label>
                <input type="text" name="nim" id="nim" required
                value="<?= $mhs["nim"]; ?>" >
            </li>

            <br>

            <li>
                <label for="email"><b>Email &nbsp; &nbsp; :</b></label>
                <input type="text" name="email" id="email" required
                value="<?= $mhs["email"]; ?>">
            </li>

            <br>

            <li>
                <label for="jurusan"><b>Jurusan :</b></label>
                <input type="text" name="jurusan" id="jurusan" required
                value="<?= $mhs["jurusan"]; ?>">
            </li>

            <br>

            <li>
                <label for="gambar"><b>Gambar :</b></label> <br>
                <img src="img/<?= $mhs['gambar']; ?>" width="90"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>

            <br><br>

            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>

        </ul>

        <br>
        <a href="index.php"><h3><b><--Kembali ke Halaman Utama</b></h3></a>
    
    
    
    
    </form>


</body>
</htlm>