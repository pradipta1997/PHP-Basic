<?php

//ARRAY :
//Penggulangan pada array

//for & foreach
$angka = [3,2,15,20,11,77,89,100,145];

?>


<!DOCTYPE html>
<html>
<head>
    <title> Penggulangan Array 2</title>

    <style>
    
        .kotak{

            width: 50px;
            height: 50px;
            background-color: green;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;

        }
    
        .clear{

            clear: both;
        }
    
    </style>


</head>

<body>

    <!-- Metode Penggulangan FOR -->
    <?php for($i = 0; $i < count($angka); $i++) { ?>

    <div class="kotak"> <?php echo $angka[$i]; ?> </div>

    <?php } ?>


    <div class="clear"></div> <!-- Untuk membuat baris baru ke bawah-->


    <!-- Metode Penggulangan FOREACH-->
    <?php foreach($angka as $a) { ?>
    <div class="kotak"> <?php echo $a; ?> </div>
    <?php } ?>


    <div class="clear"></div> <!-- Untuk membuat baris baru ke bawah-->


    <!-- Metode Penggulangan FOREACH dengan penulisan template-->
    <?php foreach($angka as $a) : ?>
    <div class="kotak"> <?= $a ?> </div>
    <?php endforeach;  ?>

</body>
</html>