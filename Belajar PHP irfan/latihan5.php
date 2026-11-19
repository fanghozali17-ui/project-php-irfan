<?php

// Membuat variabel
$harga = 1000;

$nama_barang = "Kopi C++";
$harga = 4000;
$stok = 40;

$stok = 40;
$stok = 34;

"Nama barang: $nama_barang<br>";
"Harga: Rp $harga<br>";
"Stok: $stok<br>";

// Aturan penamaan variabel
$nama = "";
$rosi46 = "";

$nama_barang = "Buku PHP";
$namaPembeli = "Petani Kode";

$nama_barang = "";
$namaPembeli = "";
$harga = 0;

$Belajar = "";
$BELAJAR = "";
$belajar = "";

print "Variabel dibuat dengan tanda \$ dan bersifat case sensitive.";
print "<br><br>";

// Mengambil nilai dari variabel
$nama_barang = "Minyak Goreng";
$harga = 15000;

print "Ibu membeli $nama_barang seharga Rp $harga";
print "<br>";

$judul = "Belajar PHP dari nol sampai expert";

print "Judul artikel: $judul";
print "<br>";

$judul = "Tutorial PHP untuk Pemula";

print 'Judul artikel: ' . $judul;
print "<br><br>";

// Tipe data
$jenis_kelamin = 'L';
$nama_lengkap = "Petani Kode";
$umur = 20;
$berat = 48.3;
$tinggi = 182.2;
$menikah = false;

print "Nama: $nama_lengkap<br>";
print "Jenis Kelamin: $jenis_kelamin<br>";
print "Umur: $umur tahun<br>";
print "berat badan: $berat kg<br>";
print "tinggi badan: $tinggi cm<br>";
print "menikah: $menikah";
print "<br><br>";

// Char dan String
$huruf = 'E';
$alamat = "Jl. Mawar, Jakarta";

// Integer
$nilai = 98;
$poin = -31;

// Float
$panjang = 233.12;
$kapasistas = 13232.12;
$jarak = 1.2E-5;

print "Char: $huruf<br>";
print "Alamat: $alamat<br>";
print "Nilai: $nilai<br>";
print "Poin: $poin<br>";
print "Panjang: $panjang<br>";
print "Kapasitas: $kapasistas<br>";
print "Jarak: $jarak<br><br>";

// Float dengan sprintf()
$a = 1.2E-5;

print sprintf('%f', $a);
print "<br>";

print sprintf('%.3f', $a);
print "<br><br>";

// Boolean
$isActive = false;
$menikah = true;

print "isActive: $isActive<br>";
print "menikah: $menikah<br><br>";

// Array
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

print "Minuman pertama: " . $minuman[0];
print "<br>";

print "Makanan pertama: " . $makanan[0];
print "<br><br>";

// NULL
$nama = NULL;

print "Nilai nama: ";
var_dump($nama);
print "<br><br>";

// Konversi tipe data
$foo = "1";

$foo *= 2;
$foo = $foo * 1.3;

// Diperbaiki agar tidak menghasilkan warning
$foo = 5 * 10;

print "Hasil konversi/perhitungan foo: $foo";
print "<br>";

$a = "32";

$a = (int) $a;
$a = (float) $a;
$a = (string) $a;

print "Hasil akhir a: $a";
print "<br><br>";

// Menghapus variabel
$tmp = 2901;

unset($tmp);

print "Variabel \$tmp sudah dihapus dengan unset().";

?>