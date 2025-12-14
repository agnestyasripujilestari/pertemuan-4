<?php
require 'Product.php';

$p = new Product("Laptop", 12000000.0, "LP001");

// 1. Akses Public (Berhasil)
echo "Nama Produk: " . $p->name . "\n"; 

// 2. Akses Protected & Private (Akan Error)
// echo "Harga: " . $p->price . "\n"; // Error
// echo "SKU: " . $p->sku . "\n";     // Error

// 3. Akses via Method Public (Berhasil)
echo "Info Lengkap: " . $p->getInfo() . "\n"; 

// 4. Memanggil Method Private (Akan Error)
// echo $p->generateSkuCode(); // Error
?>