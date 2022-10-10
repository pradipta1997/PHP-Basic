<?php

    //DATE :
    //untuk menampilkan tanggal denagn format tertentu
   //echo date("l, d-M-y");


   //TIME :
   //UNIX Timestamp / EPOCH time
   //detik yang sudah berlalu sejak 1 Januari 1970
   //echo time();
   //echo date("l, d-M-y", time() + 60*60*24*100); 


   //MKTIME :
   //Membuat sendiri detik
   //mktime(0,0,0,0,0,0)
   //jam, menit, detik, bulan, tanggal, tahun
   //echo date("l", mktime(0,0,0,30,1,1997));


   //SRTTOTIME
   echo date("l", strtotime("30 Jan 1997"));

?>