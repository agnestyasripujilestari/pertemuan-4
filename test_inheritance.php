<?php
require 'UserManager.php';

$admin = new AdminUser("123ABC", "pass123");

// 1. Mengakses property protected via method turunan (Berhasil)
echo $admin->getBaseKey() . "\n"; 

// 2. Mengakses method yang di-override
$admin->showKeyStatus(); 

// 3. Mencoba mengakses property langsung (Protected/Private - Error)
// echo $admin->secretKey; 

// 4. Mencoba mengakses private property dari subclass (Error)
$admin->attemptAccessPrivate(); 
?>