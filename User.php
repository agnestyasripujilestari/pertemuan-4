<?php
class User {
    private string $username;
    private string $email;

    public function __construct(string $username, string $email) {
        $this->setUsername($username);
        $this->setEmail($email);
    }

    // Setter (Method untuk MENGUBAH/MENGATUR nilai)
    public function setUsername(string $username): void {
        // Logika validasi dapat ditambahkan di sini
        if (strlen($username) < 3) {
            throw new Exception("Username terlalu pendek.");
        }
        $this->username = $username;
    }

    // Getter (Method untuk MENGAMBIL nilai)
    public function getUsername(): string {
        return $this->username;
    }

    // Setter untuk Email
    public function setEmail(string $email): void {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Format email tidak valid.");
        }
        $this->email = $email;
    }
    
    // Getter untuk Email
    public function getEmail(): string {
        return $this->email;
    }
}
?>