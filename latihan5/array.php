<?php

//ARRAY :
//Variabel yang dapat memiliki atau menampung banyak nilai.
//Elemen pada array boleh memiliki tipe data yang berbeda --> ["String",123,false];
//Pasangan antara key dan value jika menggunakan (var_dump), key-nya adalah index yang di mulai dari 0.

//MEMBUAT ARRAY :

//Cara Lama
$hari = array("Senin","Selasa","Rabu");

//Cara Baru
$bulan = ["Januari","Februari","Maret"];
$arr1 = [123,"Pradipta",false];

//Menampilkan Array
var_dump($hari);

echo "<br>";

print_r($bulan);

echo "<br>";

//Menampilkan 1 elemen pada array
echo $arr1[1];

echo "<br>";

echo $bulan[1];

echo "<br>";

//Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
$hari[] = "Sabtu";
$hari[] = "Minggu";

echo "<br>";

var_dump($hari);


?>