<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP</title>
</head>
<body>

<?php

// Statement
print "Hello World!";
print "<br>";

print "Irfan sedang belajar PHP";
print "<br>";

$angka = 10 + 5;
print $angka;
print "<br>";

// Case Sensitive
$nama = "Petani Kode";
$NAMA = "Belajar PHP";

print $nama;
print "<br>";

print $NAMA;
print "<br>";

// Komentar satu baris
// Ini adalah komentar

/*
   Ini adalah komentar
   lebih dari satu baris
*/

print "Komentar tidak ditampilkan";
print "<br>";

// Blok program
$umur = 19;

if ($umur > 18) {
    print "Kamu sudah dewasa";
}
?>
</body>
</html>