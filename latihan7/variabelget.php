<?php

    //VARIABEL SUPERGLOBALS :
    //Variabel global milik PHP, merupakan Array Associative

    //$_SERVER : Untuk meilhat isi dari SERVER_NAME
    //echo $_SERVER["SERVER_NAME"];


    //$_GET

    $helm = [
        ["name" => "AGV", "type" => "Race", "color" => "Blue & Yellow", "weight" => "5kg", "pict" => "agv.jpg", "price" => "RP 3.000.000-,"], 
        ["name" => "Arai HRC", "type" => "Evo Helmet", "color" => "Black & White", "weight" => "6kg", "pict" => "araihrc.jpg", "price" => "Rp 4.500.000-,"], 
        ["name" => "Fox", "type" => "Thrill", "color" => "Yellow", "weight" => "4kg", "pict" => "fox.jpg", "price" => "Rp 5.000.000-,"], 
        ["name" => "Zeus", "type" => "Race", "color" => "Black & Orange", "weight" => "6kg", "pict" => "zeus.jpg", "price" => "Rp 1.600.000-,"],
        ["name" => "Suomy", "type" => "Speed Star Rap", "color" => "Yellow & Black", "weight" => "4kg", "pict" => "suomy.jpg", "price" => "Rp 2.500.000-,"],
        ["name" => "Shoei", "type" => "GT-Air Wanderer", "color" => "Orange & Black", "weight" => "4kg", "pict" => "shoei.jpg", "price" => "Rp 1.000.000-,"],
        ["name" => "Red Bull", "type" => "Race", "color" => "White, Blue & Red", "weight" => "4kg", "pict" => "redbull.jpg", "price" => "Rp 2.000 000-,"],
        ["name" => "Shark", "type" => "Race Zarco World Champion", "color" => "Black, Green & Yellow", "weight" => "5kg", "pict" => "shark.jpg", "price" => "Rp 1.400.000-,"],
        ["name" => "Kyt", "type" => "CL-Max", "color" => "Red, Black & White", "weight" => "4kg", "pict" => "kyt.jpg", "price" => "Rp 1.100.000-,"],
        ["name" => "NHK", "type" => "GP 1000 Solid", "color" => "Black & White", "weight" => "5kg", "pict" => "nhk.jpg", "price" => "Rp 1.000.000-,"],
        ["name" => "INK", "type" => "CL1 Hazard", "color" => "Black", "weight" => "4kg", "pict" => "ink.jpg", "price" => "Rp 750.000-,"],
        ["name" => "King Gojek", "type" => "Adventure", "color" => "Green & White", "weight" => "2kg", "pict" => "gojek.jpg", "price" => "Rp 100.000-,"]
    ];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Variabel $_GET</title>
</head>

<body>

    <h1><b>List of Helmet</b></h1>

    <ul>
    <?php foreach($helm as $h) : ?>

        <li>
            <a href="detail.php?name=<?= $h["name"]; ?>&type=<?= $h["type"]; ?>&color=<?= $h["color"]; ?>&weight=<?= $h["weight"]; ?>&pict=<?= $h["pict"]; ?>&price=<?= $h["price"]; ?>">
            <?= $h["name"]; ?></a>
        </li>
    
    
    <?php endforeach; ?>
    </ul>

    <a href="login/login.php">Logout</a>


</body>
</html>