<?php

    //Variabel Scope atau Lingkup Variabel
    $x = 10;

    function tampilX() {

        global $x;
        echo $x;

    }

    tampilX();

?>