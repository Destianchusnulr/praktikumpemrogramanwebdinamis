<?php
include_once("koneksi.php");// sertakan file koneksi database
$nim = $_GET['nim'];// Dapatkan id dari URL untuk menghapus pengguna itu
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim=’$nim’");// Hapus baris pengguna dari tabel berdasarkan id yang diberikan
header("Location:index.php");// Setelah delete redirect ke Home, maka akan muncul daftar user terbaru.
?>
