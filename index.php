<?php

//panggil file PropertyConstant
require('./PropertyConstan.php');

use Pbo\Marketplace\produk;

//object
$produk = new Produk('P0001','Laptop',10000000,5);


//$produk = new produk();
// $produk-> kode = 'P0001';
// $produk-> nama = 'Laptop';
// $produk-> harga = '10000000';
// $produk-> stok = 5;



//hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "kode: ".$produk->kode;
echo "<br/>";

echo "harga: ".$produk->harga;
echo "<br/>";

echo "stok: ".$produk->stok;
echo "<br/>";


echo "Pajak: ".$produk-> pajak(). "%";
echo "<br/>";
echo "Total harga setelah pajak: Rp.".$produk->total();