<?php
$host="localhost";//server web
$username="root";//user name untuk membuka database
$password="";//password
$databasename="akademik";//nama database yang digunakan
//membuat koneksi
$con=@mysqli_connect($host,$username,$password,$databasename);
//mengecek koneksi
if(!$con){
    echo"Error:".mysqli_connnect_error();
    exit();
}
?>
