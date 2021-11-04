<?php
    include "koneksi.php";
    $sql="delete from users where id_user= '$_GET[id]'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('location:tampil_user.php');
?>