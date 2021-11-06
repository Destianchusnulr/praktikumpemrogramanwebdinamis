<?php
    include "koneksi.php";
    $id_user = $_POST['id_user'];//menginputkan id_user
    $nama = $_POST['nama']; //menginputkan nama
    $email = $_POST['email']; //menginputkan email
    $pass = md5($_POST['password']);
    $sql = "INSERT INTO users(id_user, password, nama_lengkap, email) VALUES ('$id_user', '$pass','$nama','$email')";
    $query=mysqli_query($conn, $sql);
    mysqli_close($conn);
    var_dump($id_user);
    var_dump($nama);
    var_dump($password);
    var_dump($email);
    header('location:tampil_user.php');
?>
