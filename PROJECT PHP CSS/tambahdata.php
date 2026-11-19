<!DOCTYPE html>
<html>
<head>
    <title>Formulir Data Siswa</title>
    <link rel="stylesheet" href="tambahdata.css">
</head>
<body>
    <h1>Formulir Data Siswa</h1>
    <form action="tambahdata.php" method="post">
        <ul>
            <li>NIS : <input type="text" name="nis"></li>
            <li>Nama : <input type="text" name="nama"></li>
            <li>Email : <input type="email" name="email"></li>
            <li>Jurusan : <input type="text" name="jurusan"></li>
            <li>Gambar : <input type="text" name="gambar"></li>
            <li><button type="submit" name="tambah">Tambah Data</button></li>
        </ul>
    </form>
</body>
</html>
