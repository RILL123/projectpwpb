<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NamaBuku = $_POST['Nama_Buku'];
$ISBN = $_POST['ISBN'];
$Genre = $_POST['Genre'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into monyet values('','$NamaBuku','$ISBN','$Genre')");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>
