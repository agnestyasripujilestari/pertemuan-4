<?php
class Book {
    // Property dibuat private/protected untuk menyembunyikan penulisan
    private string $title; 
    protected string $author;

    public function __construct(string $title, string $author) {
        $this->title = $title; // Inisialisasi diizinkan
        $this->author = $author;
    }

    // Public Getter (Simulasi: public read)
    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }
    
    // Tidak ada method setTitle() publik, sehingga penulisan $title hanya bisa di dalam class.
    
    // Method internal untuk mengubah author (Simulasi: protected set)
    protected function setAuthorInternal(string $newAuthor): void {
        $this->author = $newAuthor;
    }
}

class ReferenceBook extends Book {
    // Subclass dapat menggunakan method protected dari induk
    public function changeAuthorInSubclass(string $newAuthor): void {
        echo "Mengubah author via subclass...\n";
        $this->setAuthorInternal($newAuthor); 
    }
}
?>