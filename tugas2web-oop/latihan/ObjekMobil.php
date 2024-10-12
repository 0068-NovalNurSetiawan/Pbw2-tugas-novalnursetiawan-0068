<?php

//Include Class Mobil.php
require_once "Mobil.php";

//Inisialisasi variabel (objek) mobilSatu
$mobilSatu = new Mobil();

//Menampilkan Informasi Objek
// var_dump($mobilSatu);

//Menambahkan properti pada objek mobilSatu
$mobilSatu->nama = "Avanza";
$mobilSatu->merk = "Toyota";
$mobilSatu->warna = "Hitam";
$mobilSatu->tahun = 2019;
$mobilSatu->kecepatanMaksimal = 1300;

//Menampilkan informasi objek mobilSatu
echo "Nama : $mobilSatu->nama" . PHP_EOL;
echo "Merk : $mobilSatu->merk" . PHP_EOL;
echo "Warna : $mobilSatu->warna" . PHP_EOL;
echo "Tahun : $mobilSatu->tahun" . PHP_EOL;
echo "Kecepatan Maksimal : $mobilSatu->kecepatanMaksimal" . PHP_EOL;

//Membuat objek MobilDua
$mobilDua = new Mobil();

//Menambahkan properti pada objek mobilDua
$mobilDua->nama = "Brio";
$mobilDua->merk = "Honda";
$mobilDua->warna = "Merah";
$mobilDua->tahun = 2018;
$mobilDua->kecepatanMaksimal = 1000;

//Menampilkan Informasi Objek
// var_dump($mobilDua);


//Mengakses Function/Method
$mobilSatu->tambahKecepatan();

//Mengakses Function infoMobil
$mobilSatu->infoMobil("Xenia");

//Memanggil dan Menampilkan constant
echo Mobil::AUTHOR;

?>