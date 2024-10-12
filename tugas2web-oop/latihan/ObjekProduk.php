<?php 
require_once "Produk.php";
require_once "ProdukTurunan.php";
// Membuat objek
$produk = new Produk ("Apple", 20000);

//echo $produk->name() .PHP_EOL;
//echo $produk->price() .PHP_EOL;

// Menampilkan info nama dan price
echo $produk->getName().PHP_EOL;
echo $produk->getPrice().PHP_EOL;

$produk2 = new ProdukTurunan("Nanas", 30000);
echo $produk2->info();
