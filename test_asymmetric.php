<?php
require 'Book.php';

$bk = new Book("OOP with PHP", "Rani");
$refBk = new ReferenceBook("Refactoring", "Martin");

// 1. Baca property via Public Getter (Berhasil)
echo "Judul: " . $bk->getTitle() . "\n"; 
echo "Penulis: " . $bk->getAuthor() . "\n";

// 2. Mencoba mengubah property dari luar (Akan Error jika property public)
// $bk->title = "New Title"; // ERROR (karena private)

// 3. Mengubah properti protected via method subclass (Berhasil)
$refBk->changeAuthorInSubclass("Robert C. Martin");
echo "Penulis Refactoring Baru: " . $refBk->getAuthor() . "\n";
?>