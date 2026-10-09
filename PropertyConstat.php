<?php

class produk{

    //propertY
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    
    //constant
    public const PAJAK = 0.11;
}

//object
$produk = new produk();
$produk-> kode = 'P0001';
$produk-> nama = 'Laptop';
$produk-> harga = '10000000';
$produk-> stok = 5;

//hitung dulu
$pajak = Produk::PAJAK * 100;
$jumlahPajak = $produk->harga * Produk::PAJAK;

// total
$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "harga: ".$produk->harga;
echo "<br/>";

echo "stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: ".$pajak. "%";
echo "<br/>";
echo "Total harga setelah pajak: Rp.".$total;