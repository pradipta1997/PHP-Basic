<?php

function salam($waktu = "Datang", $nama = "Admin") {

    return "Selamat $waktu, $nama!";

}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Latihan membuat Function sendiri</title>

</head>

<body>

    <h1><?php echo salam("Sore", "Pradipta Ramadhan"); ?></h1>


</body>
</html>