<?php

    //Untuk memulai session pada suatu halaman dengan session_start();
    session_start();

    //Untuk menimpa array lama dengan array kosong, agar session nya hilang
    $_SESSION = [];

    //Untuk menghilangkan session nya
    session_unset();

    //Untuk menghilangkan session nya
    session_destroy();

//-----------------------------------------------------------------------------------------------------------------------------


    //Untuk menghapus cookie saat tombol logout ditekan
    setcookie('id', '', time() -3600);
    setcookie('key', '', time() -3600);



    header("Location: login.php");
    exit;
    
?>