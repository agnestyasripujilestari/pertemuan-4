<?php
// Class Induk
class BaseUser {
    protected string $secretKey; // Dapat diakses oleh Subclass
    private string $passwordHash; // TIDAK dapat diakses oleh Subclass

    public function __construct(string $key, string $pass) {
        $this->secretKey = $key;
        $this->passwordHash = hash('sha256', $pass);
    }

    public function showKeyStatus(): void {
        echo "BaseUser Status: Kunci rahasia sudah diset.\n";
    }
}

// Class Turunan (Inheritance)
class AdminUser extends BaseUser {
    public function getBaseKey(): string {
        // Akses Protected Property (BERHASIL)
        return "Key dari Induk: " . $this->secretKey;
    }

    public function attemptAccessPrivate(): void {
        // Akses Private Property (AKAN ERROR JIKA DI-UNCOMMENT)
        // echo $this->passwordHash; 
        echo "AdminUser: Mencoba akses private property (akan gagal).\n";
    }

    // Overriding method (Protected/Public methods bisa di-override)
    public function showKeyStatus(): void {
        echo "AdminUser Status: Key berhas
        il diwarisi dan diakses.\n";
    }
}
?>