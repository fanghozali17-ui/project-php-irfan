<?php

print "<h2>Belajar PHP itu mudah!</h2>";
print "Hello world!<br>";
print "Aku sedang belajar PHP!<br>";
print "Ini teks yang dibuat terpisah.";
print "<br><br>";

print "<h2>Belajar PHP dari Nol!</h2>";
print "Hello world!<br>";
print "Belajar mencetak teks di PHP!";
print "<br><br>";

$txt1 = "Tutorial PHP";
$txt2 = "petanikode.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Aku belajar pemrograman PHP di " . $txt2 . "<br>";
print $x + $y;
print "<br><br>";

$txt = "petanikode.com";

printf(
    "Aku belajar pemrograman PHP di %s<br>",
    $txt
);

$harga = 100000;

print "Harganya adalah Rp $harga";
print "<br>";

printf(
    "Harganya adalah Rp %.2f",
    $harga
);

print "<br><br>";

print 'hari ini hari jum\'at';
?>