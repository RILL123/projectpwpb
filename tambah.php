<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <link rel="stylesheet" href="tambah.css">
    
</head>
<body>
   
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="admin.php">Books</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <div>
        <h2>DATA BUKU</h2>
        <a href="admin.php">KEMBALI</a>
        <h3>TAMBAH DATA BUKU</h3>
        <form method="POST" action="tambah_aksi.php">
            <table>			
                <tr>			
                    <td>Nama Buku</td>
                    <td><input type="text" name="Nama_Buku"></td>
                </tr>
                <tr>
                    <td>ISBN</td>
                    <td><input type="number" name="ISBN"></td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td><input type="text" name="Genre"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="SIMPAN">
                    </td>
                </tr>	
            </table>
        </form>
    </div>
</body>
</html>