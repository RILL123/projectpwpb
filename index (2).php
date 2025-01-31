<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifaldi Books - Home</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="indeX.css">
</head>
<body>
 
    <div class="top-bar">
        <div class="logo">
            <img src="faldd.jpeg" alt="Rifaldi Books">
        </div>
        <div class="menu">
            <a href="#">Home</a>
            <a href="#">Books</a>
            <a href="#">About Us</a>
            <a href="#">Contact</a>
            <div class="icon" onclick="toggleMenu()">☰</div>


        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Anda wajib mengisi ID&PASS</h1>
        <p>Pastikan anda sudah memiliki ID&PASS jika belum anda bisa daftar terlebih dahulu</p>
    </div>

    <div class="login-form">
        <h2>Login</h2>
        <form action="aksi.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="#">Register</a></p>
        </div>
    </div>

    <script>
      
        function toggleMenu() {
            const menu = document.querySelector('.top-bar .menu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
