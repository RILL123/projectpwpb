<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="edit.css">
  
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

    <h2>Edit File</h2>

    <div class="welcome-text" id="welcome-text">
        <span>Selamat Datang di Edit File</span>
    </div>

    <script>
       
        const messages = [
            "Selamat Datang di Edit File",
            "Selamat Mengedit Data Buku",
            "Semoga Proses Editing Berjalan Lancar"
        ];

        let currentMessageIndex = 0;
        const welcomeTextElement = document.getElementById('welcome-text');

        setInterval(() => {
            currentMessageIndex = (currentMessageIndex + 1) % messages.length;
            welcomeTextElement.innerHTML = `<span>${messages[currentMessageIndex]}</span>`;
        }, 3000); 
    </script>

    <?php
        include 'koneksi.php';

        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if ($id === null) {
            echo "<p>Error: No ID specified. <a href='index.php'>Go Back</a></p>";
            exit;
        }

        $data = mysqli_query($koneksi, "SELECT * FROM monyet WHERE id = '$id'");

        if (mysqli_num_rows($data) == 0) {
            echo "<p>Error: No record found for ID: $id. <a href='index.php'>Go Back</a></p>";
            exit;
        }

        $d = mysqli_fetch_array($data);
    ?>

    <form method="post" action="updatehehe.php">
        <table>
            <tr>
                <td><label for="id">ID:</label></td>
                <td><input type="number" id="id" name="id" value="<?php echo $d['id']; ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="Nama_Buku">Nama Buku:</label></td>
                <td><input type="text" id="Nama_Buku" name="Nama_Buku" value="<?php echo $d['Nama_Buku']; ?>"></td>
            </tr>
            <tr>
                <td><label for="ISBN">ISBN:</label></td>
                <td><input type="text" id="ISBN" name="ISBN" value="<?php echo $d['ISBN']; ?>"></td>
            </tr>
            <tr>
                <td><label for="Genre">Genre:</label></td>
                <td><input type="text" id="Genre" name="Genre" value="<?php echo $d['Genre']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Simpan">
                    <a href="index.php"><button type="button">Batal</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
