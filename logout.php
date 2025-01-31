<?php
session_start(); // Memulai sesi

// Hapus semua sesi
session_unset();
session_destroy();

// Arahkan pengguna kembali ke halaman login atau halaman lain
header("Location: index (2).php");
exit;
?>
