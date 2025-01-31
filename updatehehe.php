
<?php 

include 'koneksi.php';
 

$id = $_POST['id'];   
$Nama_Buku = $_POST['Nama_Buku'];
$ISBN = $_POST['ISBN'];
$Genre = $_POST['Genre'];


$stmt = $koneksi->prepare("UPDATE monyet SET Nama_Buku = ?, ISBN = ?, Genre = ? WHERE id = ?");
$stmt->bind_param("sssi", $Nama_Buku, $ISBN, $Genre, $id);


if ($stmt->execute()) {

    header("Location: admin.php");
} else {
   
    echo "Error: " . $stmt->error;
}

$stmt->close();

$koneksi->close();
?>
