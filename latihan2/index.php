<?php
// LATIHAN 2
//---------------
//Syntax PHP

//STANDAR OUTPUT
//----------------
//echo, print (Untuk mencetak tulisan dan isi variable,dll)
//print_r (Untuk mencetak isi array)
//var_dump () (Untuk melihat isi dari variable)

//CONTOH
//echo ("Pradipta Ramadhan learn Hypertext Preprocessor");


//PENULISAN SYNTAX PHP
//1.PHP didalam HTML
//2.HTML didalam PHP


//VARIABEL & TIPE DATA
//1.VARIABEL ($)
//2.Variabel tidak boleh diawali dengan angka,tapi boleh mengandung angka
$nama = "Ramadhan";

//OPERATOR (ARITMATIKA)
// + - * / %
//$x = 10;
//$y = 20;
//echo $x+$y;

//OPERATOR (PENGGABUNGAN STRING / CONCATINATION)
//(.) Penyambung
//$nama_depan = "Pradipta";
//$nama_belakang ="Ramadhan";
//echo $nama_depan . " " . $nama_belakang;

//OPERATOR (ASSIGNMENT)
// =, +=, -=, *=, /=, %=, .=
//$x = 1;
//$x += 5;
//echo $x;

//$nama = "Pradipta";
//$nama .=" ";
//$nama .= "Ramadhan";
//echo $nama;

//OPERATOR (PERBANDINGAN)
//<, >, <=, >=, ==
//var_dump(1 < 5);

//OPERATOR (INDENTITAS)
// ===, !==
//var_dump(1 === "1")

//OPERATOR (LOGIKA)
//&&, ||
$x = 10;
var_dump($x < 20 || $x % 2 == 0);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>

<body>

    
    <h1>Halo,Selamat datang <?php echo $nama; ?></h1>
    <p> <?php echo "Ini adalah paragraf"; ?> </p>
    

</body>
</html>