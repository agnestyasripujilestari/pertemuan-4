<?php
class AppConfig {
    // 1. Class Constant (Nilai tetap, selalu Public)
    public const VERSION = "1.0.0"; 
    public const MAX_USERS = 100;

    // 2. Static Property (Dibagi oleh semua instance)
    private static int $connectionCount = 0; 
    
    // 3. Static Method (Dapat dipanggil tanpa object)
    public static function getConnectionCount(): int {
        return self::$connectionCount;
    }

    public static function newConnection(): void {
        self::$connectionCount++;
    }
    
    public function __construct() {
        self::newConnection();
    }
}

// 1. Akses Constant (Tanpa object)
echo "Versi Aplikasi: " . AppConfig::VERSION . "\n"; 
echo "Max User: " . AppConfig::MAX_USERS . "\n";

// 2. Buat object untuk menaikkan static property
$conn1 = new AppConfig();
$conn2 = new AppConfig();

// 3. Akses Static Method (Tanpa object)
echo "Total Koneksi: " . AppConfig::getConnectionCount() . "\n"; 

// 4. Akses Static Property Private (Akan Error)
// echo AppConfig::$connectionCount; 
?>