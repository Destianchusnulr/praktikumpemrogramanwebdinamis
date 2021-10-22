<?php
// sertakan file koneksi database
include_once("koneksi.php");
// Periksa apakah formulir dikirimkan untuk pembaruan pengguna, lalu arahkan kembali ke beranda setelah pembaruan
if(isset($_POST['update']))
{
 $nim = $_POST['nim'];
 $nama=$_POST['nama'];
 $jkel=$_POST['jkel'];
 $alamat=$_POST['alamat'];
 $tgllhr=$_POST['tgllhr'];
 // perbarui data pengguna
$result = mysqli_query($con, "UPDATE mahasiswa SET
nama='$nama',jkel='$jkel',alamat='$alamat',tgllhr='$tgllhr' WHERE nim='$nim'");
 // Arahkan ulang ke beranda untuk menampilkan pengguna yang diperbarui dalam daftar
header("Location: index.php");
}
?>
<?php
// Menampilkan data pengguna yang dipilih berdasarkan id
// Mendapatkan id dari url
$nim = $_GET['nim'];
// Ambil data pengguna berdasarkan id
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");
while($user_data = mysqli_fetch_array($result))
{
$nim = $user_data['nim'];
$nama = $user_data['nama'];
$jkel = $user_data['jkel'];
$alamat = $user_data['alamat'];
$tgllhr = $user_data['tgllhr'];
}
?>
<html>
<head> 
	<title>Edit Data Mahasiswa</title>//judu halaman web
</head>
<body>
 <a href="index.php">Home</a>
 <br/><br/>
<form name="update_mahasiswa" method="post" action="edit.php">
<table border="0">
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
</tr>//inputan nama
<tr>
<td>Gender</td>
<td><input type="text" name="jkel" value=<?php echo $jkel;?>></td>
</tr>//inputan gender
<tr>
<td>alamat</td>
<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
</tr>//inputan alamat
<tr>
<td>Tgl Lahir</td>
<td><input type="text" name="tgllhr" value=<?php echo $tgllhr;?>></td>
</tr>//inputan tgl lahir
<tr>
<td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>s
