<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = $koneksi->prepare("SELECT * FROM hihi WHERE username = ? AND password = ?");
$query->bind_param("ss", $username, $password);
$query->execute();

$result = $query->get_result();
if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("location:admin.php");
} else {
    header("location:index.php?message=Login Failed");
}
?>