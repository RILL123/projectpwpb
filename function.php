<?php
// Membuat Function yang tidak mengembalikan nilai
function menampilkan(): void {
    echo "Hello php, \n";
}

function pergi(): void {
    echo "Saya pamit \n";
}

// Menampilkan/Memanggil Function
menampilkan();
pergi();

// Function yang mengembalikan nilai
function menjumlahkan($angka1, $angka2): mixed {
    $hasil = $angka1 + $angka2;
    return $hasil;
}

// Menampilkan/Memanggil
echo "1 + 2 = ";
echo menjumlahkan(angka1: 1, angka2: 2);
