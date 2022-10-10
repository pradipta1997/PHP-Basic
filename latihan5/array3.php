<?php

    $mahasiswa = [
        ["Pradipta Ramadhan","160442010031","Informatika Komputer","pradiptaramadhan1997@gmail.com"],
        ["Steven Keesie","160442010001","Teknik Industri","kessie@gmail.com"],
        ["Oloho Bama","160442010021","Psikologi","olohobama@yahoo.com"],
        ["Die Angban","160442010035","Kedokteran","angbandiehard@gmail.com"],
        ["Solomon Vandy","160442010011","Sastra Afrika","solomonvandy@rocketmail.com"]
    ];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pekerja</title>
</head>

<body>

    <h1>List of Africa Worker</h1>

    <?php foreach($mahasiswa as $m) : ?>

    <ul>

        <li> <b>Nama</b>    : <?= $m[0]; ?> </li>
        <li> <b>NIM</b>     : <?= $m[1]; ?> </li>
        <li> <b>Jurusan</b> : <?= $m[2]; ?> </li>
        <li> <b>Email</b>   : <?= $m[3]; ?> </li>
    
    </ul>

    <?php endforeach; ?>


</body>
</html>