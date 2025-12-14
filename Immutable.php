<?php
class ImmutableProduct {
    public readonly string $uuid;     // Harus diinisialisasi di constructor 
    public readonly string $sku;
    public string $name;              // Properti biasa (dapat diubah)

    public function __construct(string $name, string $sku) {
        $this->uuid = uniqid('prod_'); // Inisialisasi properti readonly (diizinkan)
        $this->sku = $sku;
        $this->name = $name;
    }

    public function setName(string $name): void {
        $this->name = $name; // Mengubah properti non-readonly (diizinkan)
    }
    
    // public function setSku(string $sku): void {
    //     $this->sku = $sku; // Akan Error: Tidak dapat memodifikasi properti readonly
    // }
}

$p = new ImmutableProduct("Kopi", "KOP001");

echo "Awal: " . $p->name . ", UUID: " . $p->uuid . "\n";

// 1. Ubah properti non-readonly (Berhasil)
$p->setName("Kopi Premium");
echo "Setelah diubah: " . $p->name . "\n";

// 2. Mencoba mengubah properti readonly langsung (Akan Error)
// $p->uuid = uniqid('new_'); 

// 3. Mencoba mengubah properti readonly via method (Akan Error jika method setSku ada)
// $p->setSku("KOP999"); 

?>