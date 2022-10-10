<?php

    //Relasi ke halaman functions.php
    require 'functions.php';



    //Cek apakah tombol registrasi sudah ditekan
    if( isset($_POST["register"]) ) {

        if(registrasi($_POST) > 0) {

            echo "<script>
            
                    alert('User berhasil ditambahkan');

                  </script>";

        }else{

            echo mysqli_error($conn);

        }

    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>

    <style>
    
        label{
            display: block;
        }

    </style>

</head>

<body>


    <h1>Halaman Registrasi</h1>

    
    <!-- Form Untuk Registrasi -->
    <form action="" method="post">

        <ul>

            <li>
                <label for="username"><b>Username &nbsp; : </b></label>
                <input type="text" name="username" id="username" required placeholder="Masukan Username">
            </li>

            <br>

            <li>
                <label for="password"><b>Password &nbsp; : </b></label>
                <input type="password" name="password" id="password" required placeholder="Masukan Password">
            </li>

            <br>

            <li>
                <label for="password2"><b>Konfirmasi Password : </b></label>
                <input type="password" name="password2" id="password2" required placeholder="Konfirmasi Password">
            </li>

            <br>

            <li>
                <button type="submit" name="register">Register</button>
            </li>

        </ul>

        <br><br>

        <a href="login.php" style="font-size: 20px;"><b>Sudah Memiliki Akun</b></a>

    </form>

</body>
</html>