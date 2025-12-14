<?php
require 'User.php';

try {
    $user = new User("Rani", "rani@example.com");
    
    // 1. Mengambil data via Getter
    echo "User Awal: " . $user->getUsername() . " (" . $user->getEmail() . ")\n";

    // 2. Mengubah data via Setter (Valid)
    $user->setUsername("RaniDewi"); 
    echo "User Baru: " . $user->getUsername() . "\n";

    // 3. Mengubah data via Setter (Invalid - Akan memicu Exception)
    // $user->setEmail("rani-at-invalid"); 

} catch (Exception $e) {
    echo "Error Validasi: " . $e->getMessage() . "\n";
}
?>