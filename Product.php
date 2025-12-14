<?php
class Product {
    public string $name;         // Dapat diakses dari mana saja 
    protected float $price;      // Dapat diakses di class ini dan turunannya 
    private string $sku;         // Hanya dapat diakses di class ini 

    public function __construct(string $name, float $price, string $sku) {
        $this->name = $name;
        $this->price = $price;
        $this->sku = $sku;
    }
    
    // Method Public: Dapat diakses dari luar
    public function getInfo(): string {
        return "Nama: {$this->name}, Harga: {$this->price}, SKU: {$this->sku}";
    }

    // Method Private: Hanya dapat dipanggil di dalam class ini
    private function generateSkuCode(): string {
        return strtoupper(substr($this->sku, 0, 3));
    }
}
?>