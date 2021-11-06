<?php
    include "koneksi.php";
    $sql="delete from users where id_user= '$_GET[id]'";// manghapus data yang sudah tersimpan
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('location:tampil_user.php');
?>
