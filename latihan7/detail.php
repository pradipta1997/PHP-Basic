<?php

    //Cek apakah tidak ada data di $_GET
    if( !isset($_GET["name"]) || 
        !isset($_GET["type"]) ||
        !isset($_GET["color"]) ||   //(!isset) artinya, "Tidak ada data yang pernah di buat di variabel $_GET"
        !isset($_GET["weight"]) ||  //(isset) artinnya, "Ada data yang pernah dibuat divariabel $_GET"
        !isset($_GET["price"]) ||
        !isset($_GET["pict"])
    )
    
    { 
        //Redirect atau Mengarahkan ke...
        header("Location: variabelget.php");
        exit;
    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Detail $_GET</title>
</head>

<body>

    <h1><b>Details Goods</b></h1>

    <ul>
    
        <li><img src="img/<?= $_GET["pict"]; ?>"></li>
        <li><b>Name   :</b><?= $_GET["name"]; ?></li>
        <li><b>Type   :</b><?= $_GET["type"]; ?></li>
        <li><b>Color  :</b><?= $_GET["color"]; ?></li>
        <li><b>Weight :</b><?= $_GET["weight"]; ?></li>
        <li><b>Price  :</b><?= $_GET["price"]; ?></li>

    </ul>

    <a href="variabelget.php"><h3><- Previous to List</h3></a>


</body>
</html>