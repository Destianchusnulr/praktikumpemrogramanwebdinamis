<?php
    include "koneksi.php";
    $id_user = $_POST['id_user'];
    $pass = md5($_POST['paswd']);
    $sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'"; //mengecek id_user dan password pada database
    $login = mysqli_query($conn, $sql);
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);
    if ($ketemu > 0){
        session_start();
        $_SESSION['iduser'] = $r['id_user'];
        $_SESSION['passuser'] = $r['password'];
        echo"USER BERHASIL LOGIN<br>"; //tampilan saat berhasil login
        echo "id_user = ".$_SESSION['iduser']."<br>"; //session id_user
        echo "password = ".$_SESSION['passuser']."<br>"; // session password
        echo "<a href=logout.php><b>LOGOUT</b></a></center>"; // tombol logout
    }else{
        echo "<center>Login gagal! username & password tidak benar<br>";// menampilkan jika username dan password ada yang salah
        echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>";// tombol ulangi memasukan username dan password
    }
    mysqli_close($conn);
?>
