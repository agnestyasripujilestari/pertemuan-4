<?php
class Demo {
    // Properti private untuk menyimpan data internal
    private array $data = []; 

    // __set: Dipanggil saat properti yang TIDAK ADA atau tidak dapat diakses diisi nilainya
    public function __set($name, $value) {
        echo "Mengisi property $name dengan $value\n";
        // Menyimpan data ke array internal (Encapsulation)
        $this->data[$name] = $value;
    }
    
    // __get: Dipanggil saat properti yang TIDAK ADA atau tidak dapat diakses dibaca nilainya
    public function __get($name) {
        echo "Membaca property $name\n";
        // Mengambil dari array internal, atau null jika tidak ada
        return $this->data[$name] ?? null; 
    }

    // __call: Dipanggil saat method yang TIDAK ADA atau tidak dapat diakses dipanggil
    public function __call($name, $args) {
        echo "Method $name dipanggil dengan argumen: "; 
        print_r($args);
    }
}

$obj = new Demo;

// 1. Mengisi property 'foo' (Memanggil __set)
$obj->foo = 123; 

// 2. Membaca property 'foo' (Memanggil __get)
echo "Nilai foo: " . $obj->foo . "\n";

// 3. Memanggil method 'bar' yang tidak ada (Memanggil __call)
$obj->bar("tes", 456);

// 4. Membaca properti yang belum diisi (Memanggil __get)
echo "Nilai baz (belum ada): " . $obj->baz . "\n";
?>