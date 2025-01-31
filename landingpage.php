<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSBY-Boks</title>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.min.js"></script>
    <style>
    /* Reset CSS */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #333;
    color: white;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.navbar .menu a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
    transition: color 0.3s;
}

.navbar .menu a:hover {
    color: #ff6347;
}

/* Hero Section */
.hero {
    position: relative;
    background: url('keren.jpg') no-repeat center center/cover;
    color: white;
    text-align: center;
    padding: 100px 20px;
}

.hero h1 {
    font-size: 3rem;
}

.hero p {
    font-size: 1.2rem;
    margin: 20px 0;
}

/* Tombol */
.btn {
    background-color: #ff6347;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

.btn:hover {
    background-color: #ff4500;
}

/* Teks Berputar */
.rotating-text {
    font-size: 1.5rem;
    color: white;
    margin-top: 20px;
    font-weight: bold;
}

/* Bagian Fitur */
.features {
    text-align: center;
    padding: 50px 20px;
    background-color: white;
}

.features h2 {
    font-size: 2rem;
    margin-bottom: 20px;
}

/* Kartu Fitur */
.cards {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    width: 300px;
    transition: transform 0.3s;
}

.card:hover {
    transform: translateY(-10px);
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

/* Bagian Tentang Saya */
.about {
    text-align: center;
    padding: 50px 20px;
    background-color: #fff;
}

.about-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: left;
}

.about-content img {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 20px;
}

/* Menu Icon untuk Mobile */
.menu-icon {
    display: none;
    font-size: 1.5rem;
    cursor: pointer;
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .menu {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        top: 50px;
        right: 10px;
        border-radius: 5px;
        overflow: hidden;
    }

    .menu.active {
        display: flex;
    }

    .menu-icon {
        display: block;
    }
}
</style>
</head>
<body>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSBY - Boks</title>

    <!-- Link ke ikon dari Boxicons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.min.js"></script>
    
    <!-- Link ke file CSS eksternal -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">Rifaldi Books</div>
        <div class="menu">
            <a href="#home">Beranda</a>
            <a href="#features">Fitur</a>
            <a href="#about">Tentang</a>
            <a href="#contact">Kontak</a>
            <a href="index (2).php">Masuk</a>
        </div>
        <i class="bx bx-menu menu-icon" onclick="toggleMenu()"></i>
    </div>

    <!-- Bagian Hero (Halaman Depan) -->
    <section class="hero" id="home">
        <h1>Selamat Datang di PerpusBy</h1>
        <p>Temukan kebahagiaan membaca dan kelola perpustakaan Anda dengan mudah. Mulai perjalanan Anda sekarang!</p>
        <a href="index (2).php" class="btn">Mulai</a>
       
        <!-- Teks yang akan berputar secara otomatis -->
        <div class="rotating-text" id="rotating-text"></div>
    </section>

    <!-- Bagian Fitur -->
    <section class="features" id="features">
        <h2>Fitur Kami</h2>
        <div class="cards">
            <!-- Kartu Fitur 1 -->
            <div class="card">
                <img src="jelajahibuku.jpg" alt="Jelajahi Buku">
                <h3>Jelajahi Buku</h3>
                <p>Temukan buku favorit Anda dari koleksi yang luas.</p>
            </div>
            <!-- Kartu Fitur 2 -->
            <div class="card">
                <img src="kelola.jpg" alt="Manajemen Mudah">
                <h3>Manajemen Mudah</h3>
                <p>Atur dan kelola perpustakaan pribadi Anda dengan mudah.</p>
            </div>
            <!-- Kartu Fitur 3 -->
            <div class="card">
                <img src="terbaik.jpeg" alt="Pilihan Terbaik">
                <h3>Pilihan Terbaik</h3>
                <p>Dapatkan rekomendasi buku berdasarkan minat Anda.</p>
            </div>
        </div>
    </section>

    <!-- Bagian Tentang Saya -->
    <section class="about" id="about">
        <h2>Tentang Saya</h2>
        <div class="about-content">
            <img src="faldd.jpeg" alt="Foto Saya">
            <div>
                <h3>Visi Saya</h3>
                <p>Perkenalkan, saya Rifaldi. Saya memiliki passion besar dalam dunia literasi dan teknologi.</p>
                <h3>Mengapa Memilih Saya?</h3>
                <p>Dengan pengalaman dalam mengembangkan aplikasi berbasis web, saya merancang platform ini agar mudah digunakan.</p>
            </div>
        </div>
    </section>

    <!-- Script JavaScript -->
    <script>
        // Fungsi untuk menampilkan/menyembunyikan menu di perangkat mobile
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            menu.classList.toggle('active');
        }

        // Array untuk teks yang berputar otomatis
        const rotatingText = [
            "Sebuah platform untuk menjelajahi dunia buku di ujung jari Anda.",
            "Kelola perpustakaan pribadi Anda dengan sistem yang intuitif.",
            "Dapatkan rekomendasi buku yang dipersonalisasi sesuai minat Anda.",
            "Bergabunglah bersama kami dan rasakan pengalaman membaca yang baru."
        ];

        let currentIndex = 0;
        const textElement = document.getElementById('rotating-text');

        // Fungsi untuk mengganti teks setiap 3 detik
        function changeText() {
            textElement.textContent = rotatingText[currentIndex];
            currentIndex = (currentIndex + 1) % rotatingText.length;
        }

        setInterval(changeText, 3000);
        changeText();
    </script>

</body>
</html>
