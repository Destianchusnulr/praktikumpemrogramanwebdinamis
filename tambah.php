<html>
<head>
 <title>Tambah data mahasiswa</title> //judul halamam
</head>
<body>
 <a href="index.php">Go to Home</a>
 <br/><br/>
 <form action="tambah.php" method="post" name="form1">
 <table width="25%" border="0">
 <tr>
 <td>Nim</td>//membuat inputan nim
 <td><input type="text" name="nim"></td>
 </tr>
 <tr>
 <td>Nama</td>//membuat inputan nama
 <td><input type="text" name="nama"></td>
 </tr>
 <tr>
 <td>Gender (L/P)</td>//membuat inputan gender
 <td><input type="text" name="jkel"></td>
 </tr>
 <tr>
 <td>Alamat</td>//membuat inputan alamat
 <td><input type="text" name="alamat"></td>
 </tr>
 <tr>
 <td>Tgl Lahir</td>//membuat inputan tgl lahir
 <td><input type="text" name="tgllhr"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="Submit" value="Tambah"></td>// tombol submit untuk memasukan inputa pada tabel index.php
 </tr>
 </table>
 </form>
<?php
 // Periksa Jika formulir dikirimkan, masukkan data formulir ke dalam tabel pengguna.
 if(isset($_POST['Submit'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $jkel = $_POST['jkel'];
 $alamat = $_POST['alamat'];
 $tgllhr = $_POST['tgllhr'];
 // sertakan file koneksi database
 include_once("koneksi.php");
// Masukkan data pengguna ke dalam tabel
 $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr)
VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");
// Tampilkan pesan saat pengguna menambahkan
 echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
}
?>
</body>
</html>
