<?php

    //Untuk memulai session harus menggunakan session_start();
    session_start();

    //Koneksi ke database melalui functions.php
    require 'functions.php';

//-----------------------------------------------------------------------------------------------------------------------------


    //KONDISI INI TERJADI SAAT SUDAH PERNAH LOGIN
    //Cek COOKIE-nya,apakah sudah pernah login atau belum,
    //jika sudah maka langsung masuk tanpa login dgn batas waktu cookie (LOGIC)
    //---------------------------------------------------------------------------
    if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {

        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        //ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");

        $row = mysqli_fetch_assoc($result);


        //cek cookie dengan username
        if( $key === hash('sha256', $row['username']) ) {

            $_SESSION['login'] = true;

        }
       
    }
    


    //Cek apakah user sudah pernah login (Logic)
    if( isset($_SESSION["login"]) ) {
    
        header("Location: index.php");
        exit;
    }

//-----------------------------------------------------------------------------------------------------------------------------


    /*KONDISI INI TERJADI SAAT PENGISIAN FORM LOGIN-
    (BELUM PERNAH LOGIN SEBELUMNYA / WAKTU COKKIE TELAH HABIS)*/
    //Pengecekan sebelum tombol submit ditekan (LOGIC)
    //------------------------------------------------
    if(isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];


        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

    
        //Cek username
        if(mysqli_num_rows($result) === 1) {


            //Cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])) {

                //Set Session
                $_SESSION["login"] = true;


                //Cek remember me (checkbox)
                if( isset($_POST['remember']) ) {

                    //Buat cookie
                    setcookie('id', $row['id'], time()+60);
                    setcookie('key', hash('sha256', $row['username']), time()+60);

                }



                header("Location: index.php");
                exit;
            }

        }


        //Jika username & password salah
        $error = true;

    }

//-----------------------------------------------------------------------------------------------------------------------------

?>



<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
    
    label{
        display: block;
    }

    </style>


</head>

<body>


    <h1>Halaman Login</h1>


    <!-- Untuk menampilkan pesan error jika username & password salah -->
    <?php if(isset($error)) : ?>

        <p style="color: red; font-style: italic; font-size: 20px;">Username / Password salah</p>

    <?php endif; ?>

    

    <!-- Username : localhost -->   <!-- Username : pradipta -->  <!-- Username : ramadhan -->
    <!-- Password : 123 -->         <!-- Password : pradipta -->  <!-- Password : ramadhan -->
    <form action="" method="post">
    
        <ul>

            <li>
                <label for="username"><b>Username :</b></label>
                <input type="text" name="username" id="username" placeholder="Masukan Username" required>
            </li>

            <br>

            <li>
                <label for="password"><b>Password :</b></label>
                <input type="password" name="password" id="password" placeholder="Masukan Password" required>
            </li>

            <br>

            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember"><b>Remember me :</b></label>
            </li>

            <br>

            <li>
                <button type="submit" name="login">Login</button>
            </li>

        </ul>

        <br><br>

        <a href="registrasi.php" style="font-size: 20px;"><b>Belum Memiliki Akun</b></a>
    
    
    
    </form>


</body>
</html>