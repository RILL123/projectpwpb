<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('perhu.webp') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar .nav-links a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .navbar .nav-links a:hover {
            color: #ff6347;
        }

        h1, h2 {
            text-align: center;
            margin: 20px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .bio {
            margin: 20px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            max-width: 900px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .add-button a {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #ff6347;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .add-button a:hover {
            background-color: #ff4500;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        table th {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            text-transform: uppercase;
        }

        table tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        table tr:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: scale(1.01);
            transition: transform 0.3s ease;
        }

        table td {
            color: white;
        }

        table a {
            color: #ff6347;
            text-decoration: none;
            margin: 0 5px;
            font-weight: bold;
        }

        table a.hapus {
            color: #ff4500;
        }

        table a:hover {
            text-decoration: underline;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons a {
            display: inline-block;
            padding: 5px 10px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            text-align: center;
            color: white;
            font-size: 0.9rem;
        }

        .action-buttons a:hover {
            background-color: rgba(255, 255, 255, 0.5);
            color: #000;
            transition: background-color 0.3s;
        }
    </style>
</head>
<body>
 
    <div class="navbar">
        <div class="brand">PerpusBY</div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="#about">About Me</a>
            <a href="tambah.php">Add Books</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <h1>Welcome to PerpusBY</h1>
    <h2>Explore and Manage Your Book Collection</h2>

    <div class="bio" id="about">
        <h3>Delivery from us</h3>
        <p>Read the book calmly so that it makes you comfortable and you can feel the atmosphere of what you are reading, thank you.!</p>
        <p>we hope you are you happy</p>
    </div>

    <div class="container">
        <div class="add-button">
            <a href="tambah.php">Add Books</a>
        </div>
        
        <table>
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>ISBN</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM monyet");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['Nama_Buku']; ?></td>
                <td><?php echo $d['ISBN']; ?></td>
                <td><?php echo $d['Genre']; ?></td>
                <td>
                    <div class="action-buttons">
                        <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>" class="hapus">Hapus</a>
                    </div>
                </td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>

</body>
</html>