<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari URL
$Id = $_GET['id'];

// memastikan data ID diinput dengan aman menggunakan prepared statements
$stmt = $koneksi->prepare("DELETE FROM monyet WHERE id = ?");
$stmt->bind_param("i", $Id); // "i" untuk tipe integer

// eksekusi query
if ($stmt->execute()) {
    // mengalihkan halaman kembali ke admin.php jika sukses
    header("Location: admin.php");
} else {
    // tampilkan pesan error jika gagal
    echo "Error: " . $stmt->error;
}

// tutup statement
$stmt->close();

// tutup koneksi
$koneksi->close();
?>
