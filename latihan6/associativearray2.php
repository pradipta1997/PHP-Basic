<?php
    //ARRAY NUMERIK (NORMAL)
    //$mahasiswa = [
        //["Pradipta Ramadhan","160442010031","Informatika Komputer","pradiptaramadhan1997@gmail.com"],
        //["Kayamba Gum","160442010022","Manajemen Bisnis","kayambaba@gmail.com"]

//];



//ARRAY ASSOCIATIVE
//definisinya sama seperti array numerik, kecuali..
//key-nya adalah string yang kita buat sendiri.

//Array Associative ini mengikuti (key-nya), tidak seperti Array numerik yang mengikuti nomor urut index-nya.
$mahasiswa2 = [
                ["nama" => "Pradipta Ramadhan", "nim" => "160442010031", "jurusan" => "Informatika Komputer", "email" => "pradiptaramadhan1997@gmail.com", "gambar" => "foto5.jpg"], 
                ["nama" => "Wilfred Bony", "nim" => "160442010011", "jurusan" => "Teknik Pertanian", "email" => "ebony7@gmail.com", "gambar" => "foto2.jpg"], 
                ["nama" => "Victorien Angban", "nim" => "160442010003", "jurusan" => "Teknik Industri", "email" => "persian@gmail.com", "gambar" => "foto1.jpg"], 
                ["nama" => "Jackson", "nim" => "160442010022", "jurusan" => "Seni & Budaya", "email" => "jackson@gmail.com", "gambar" => "foto3.jpg"],
                ["nama" => "Odson Odoi", "nim" => "160442010010", "jurusan" => "Olahraga", "email" => "odoi@gmail.com", "gambar" => "foto4.jpg"]
            ];


?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

        <?php foreach($mahasiswa2 as $mhs) : ?>
           
            <ul>
                <li>
                    <img src="img/<?= $mhs["gambar"]; ?>">
                </li>

                <li><b>Nama    :</b> <?=$mhs["nama"]; ?> </li>
                <li><b>NIM     :</b> <?=$mhs["nim"]; ?> </li>
                <li><b>Jurusan :</b> <?=$mhs["jurusan"]; ?> </li>
                <li><b>Email   :</b> <?=$mhs["email"]; ?> </li>

            </ul>

        <?php endforeach; ?>

</body>
</html>