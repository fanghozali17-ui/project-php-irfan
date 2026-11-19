<?php
// membuat fungsi
function perkenalan(){
    print("Assalamualaikum, ");
    print("Perkenalkan, nama saya Irfan<br/>");
    print("Senang berkenalan dengan anda<br/>");
}

perkenalan();

echo "<hr>";

// fungsi dengan parameter
function salam($nama, $ucapan){
    print($ucapan . ", ");
    print("Perkenalkan, nama saya " . $nama . "<br/>");
    print("Senang berkenalan dengan anda<br/>");
}

salam("Irfan", "Hi");

echo "<hr>";

$saya = "Faris";
$ucapan = "Selamat pagi";

salam($saya, $ucapan);

echo "<hr>";

// parameter dengan nilai default
function sapaan($nama, $salam = "Assalamualaikum"){
    print($salam . ", ");
    print("Perkenalkan, nama saya " . $nama . "<br/>");
    print("Senang berkenalan dengan anda<br/>");
}

sapaan("Irfan", "Hi");

echo "<hr>";

$saya = "Faris";
sapaan($saya);

echo "<hr>";

// fungsi yang mengembalikan nilai
function hitungUmur($tahun_lahir, $tahun_sekarang){
    $umur = $tahun_sekarang - $tahun_lahir;
    return $umur;
}

print("Umur saya adalah " . hitungUmur(2009, 2026) . " tahun");

echo "<hr>";

// memanggil fungsi di dalam fungsi
function perkenalanLagi($nama, $salam = "Assalamualaikum"){
    print($salam . ", ");
    print("Perkenalkan, nama saya " . $nama . "<br/>");
    print("Saya berusia " . hitungUmur(2009, 2026) . " tahun<br/>");
    print("Senang berkenalan dengan anda<br/>");
}

perkenalanLagi("Irfan");

echo "<hr>";

// fungsi rekursif
function faktorial($angka){
    if ($angka < 2) {
        return 1;
    } else {
        return $angka * faktorial($angka - 1);
    }
}

print("Faktorial 5 adalah " . faktorial(5));
?>