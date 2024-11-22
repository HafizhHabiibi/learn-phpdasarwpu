<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d - M - Y");

// Time
// UNIX timestamp / EPOCH time
// detik yang sudah berlalu dari 1 januari 1970
// echo time();

// Menghitung Hari 
// echo date("l", time()+60*60*24*2)

// mktime
// membuat sendiri detik dari 1 januari 1970 ke tanggal yang diinginkan
// mktime(0.0.0.0.0.0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,5,22,2004));

// strtotime
// memasukan format tanggal yang keluar detik
echo date("l", strtotime("22 May 2004"))

?>