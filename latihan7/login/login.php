<?php
//Cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {

    //Cek username & password
    if($_POST["username"] == "admin" && $_POST["password"] == "123") {

    //Jika benar, redirect ke halaman admin
        header("Location: ../variabelget.php");
        exit;


    } else {

    //Jika salah, tampilkan pesan kesalahan
    $error = true;

    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>

<body>

    <h1>Login Admin</h1>


    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah, Silahkan masukan ulang.</p>
    <?php endif; ?>


    <ul>
    <form action="" method="post">
    
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>

        <br>

        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>

        <li>
            <button type="submit" name="submit">Login</button>
        </li>

    </form>
    </ul>


</body>
</html>