<?php
    echo "Hello World";

    $nama = "Maula";
    $umur = "20";
    $tinggi = "149";
    $kelas = "TIB Semester 4";

    echo "<br>Nama : $nama, <br>umur : $umur, <br>tinggi : $tinggi, <br>kelas :$kelas";






    echo "<br><br>============================================<br><br>";

    $nilai = 11;
    $nilai2 = 12;
    $nilai3 = 13;

    $hasil = $nilai * $nilai2 - $nilai3;

    echo "<br>Hasil dari $nilai x $nilai2 - $nilai3 adalah $hasil";
  
    if ($hasil >= 100) { 
        echo "<br>Nilai anda lebih dari 100";
    } else if ($hasil = 100) {
        echo "<br>Nilai anda kuraang dari 100";
    }else {
        echo "<br>Nilai anda kosong";
    }

    echo "<br><br>============================================<br><br>";
    if($hasil %2 == 0) {
        echo "<br>Nilai anda genap";
    } else {
        echo "<br>Nilai anda ganjil";
    }
?>