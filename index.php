<?php

//panggil file PropertyConstant
require('./PropertyConstat.php');

use Pbo\Marketplace\produk;

//object
$produk = new Produk();

$produk ->setKode('P0001')
        ->setNama('Laptop')
        ->setHarga(10000000)
        ->setStok(5);


//$produk = new produk();
// $produk-> kode = 'P0001';
// $produk-> nama = 'Laptop';
// $produk-> harga = '10000000';
// $produk-> stok = 5;



//hasil
echo "Produk: ".$produk->getNama();
echo "<br/>";

echo "kode: ".$produk->getHarga();
echo "<br/>";

echo "harga: ".$produk->getStok();
echo "<br/>";

echo "stok: ".$produk->stok;
echo "<br/>";


echo "Pajak: ".$produk-> pajak(). "%";
echo "<br/>";
echo "Total harga setelah pajak: Rp.".$produk->total();