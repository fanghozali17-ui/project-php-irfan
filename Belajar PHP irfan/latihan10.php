<?php

// masalah tanpa array
$produk1 = "Modem";
$produk2 = "Hardisk";
$produk3 = "Flash disk";

print("$produk1<br>");
print("$produk2<br>");
print("$produk3<br>");

echo "<hr>";

// membuat array di PHP
$buah = array();
$hobi = [];

$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Petani Kode";

$item = ["Bunga", 123, 39.12, true];

echo "<pre>";
print_r($minuman);
print_r($makanan);
print_r($anggota);
print_r($item);
echo "</pre>";

echo "<hr>";

// menampilkan isi array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

print($barang[0] . "<br>");
print($barang[1] . "<br>");
print($barang[2] . "<br>");

echo "<hr>";

// menggunakan perulangan foreach
foreach ($barang as $b) {
    print($b . "<br>");
}

echo "<hr>";

// menghapus isi array
$hewan = ["Kucing", "Kambing", "Ayam"];

unset($hewan[1]);

echo "<pre>";
print_r($hewan);
echo "</pre>";

echo "<hr>";

// menambahkan isi array
$hobi = ["Membaca", "Menulis", "Ngeblog"];

$hobi[] = "Coding";
$hobi[] = "Olahraga";

foreach ($hobi as $hobiku) {
    print($hobiku . "<br>");
}

echo "<hr>";

// mengubah isi array
$user = ["dian", "muhar", "petanikode"];

$user[1] = "ardianta";

echo "<pre>";
print_r($user);
echo "</pre>";

echo "<hr>";

// array asosiatif
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "petanikode",
    "view" => 128
];

print($artikel["judul"] . "<br>");
print($artikel["penulis"] . "<br>");
print($artikel["view"] . "<br>");

echo "<hr>";

// array multidimensi
$matrik = [
    [2, 3, 4],
    [7, 5, 0],
    [4, 3, 8]
];

print($matrik[1][0]);

echo "<hr>";

$artikel = [
    [
        "judul" => "Belajar PHP",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Belajar MySQL",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Belajar HTML",
        "penulis" => "petanikode"
    ]
];

foreach ($artikel as $post) {
    print($post["judul"] . "<br>");
    print($post["penulis"] . "<br>");
    echo "<hr>";
}

?>